<?php

declare(strict_types=1);

namespace Kiboko\Cloud\Domain\Assert;

use Kiboko\Cloud\Domain\Packaging;
use Composer\Semver\Semver;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

final class PHPExtensionVersionConstraint implements AssertionInterface
{
    private Packaging\RepositoryInterface $repository;
    private Packaging\Tag\TagInterface $tag;
    private string $extension;
    private string $constraint;

    public function __construct(
        Packaging\RepositoryInterface $repository,
        Packaging\Tag\TagInterface $tag,
        string $extension,
        string $constraint
    ) {
        $this->repository = $repository;
        $this->tag = $tag;
        $this->extension = $extension;
        $this->constraint = $constraint;
    }

    public function __invoke(): Result\AssertionResultInterface
    {
        $php =<<<SOURCE
        echo (new ReflectionExtension("%s"))
            ->getVersion();
        SOURCE;

        $process = new Process([
            'docker', 'run', '--rm', '-i', sprintf('%s:%s', (string) $this->repository, (string) $this->tag),
            'php', '-r', sprintf('echo (new ReflectionExtension("%s"))->getVersion();', $this->extension),
        ]);

        $version = null;
        try {
            $process->run(function ($type, $buffer) use ($process, &$version) {
                if (Process::ERR === $type) {
                    throw new ProcessFailedException($process);
                }
            });

            if (preg_match('/^(\d+\.\d+(?:\.\d+)?(?:[\.-](?:alpha|beta|rc)\d*)?)/i', $buffer = $process->getOutput(), $matches)) {
                $version = $matches[1];
            } else {
                var_dump($buffer);
            }

            if (!$process->isSuccessful()) {
                return new Result\PHPExtensionMissingOrBroken($this->tag, $this->extension);
            }
        } catch (ProcessFailedException $exception) {
            return new Result\PHPExtensionMissingOrBroken($this->tag, $this->extension);
        }

        if (!is_string($version)) {
            return new Result\PHPExtensionVersionNotFound($this->tag, $this->extension);
        }

        if (Semver::satisfies($version, $this->constraint)) {
            return new Result\PHPExtensionVersionMatches($this->tag, $this->extension, $version, $this->constraint);
        }

        return new Result\PHPExtensionVersionInvalid($this->tag, $this->extension, $version, $this->constraint);
    }
}
