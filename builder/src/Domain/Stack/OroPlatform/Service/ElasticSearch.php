<?php declare(strict_types=1);

namespace Builder\Domain\Stack\OroPlatform\Service;

use Builder\Domain\Stack\Compose\EnvironmentVariable;
use Builder\Domain\Stack\Compose\PortMapping;
use Builder\Domain\Stack\Compose\Service;
use Builder\Domain\Stack\Compose\Variable;
use Builder\Domain\Stack\Compose\Volume;
use Builder\Domain\Stack\Compose\VolumeMapping;
use Builder\Domain\Stack\DTO;
use Builder\Domain\Stack\OroPlatform\FilesAwareTrait;
use Builder\Domain\Stack\ServiceBuilderInterface;
use Composer\Semver\Semver;

final class ElasticSearch implements ServiceBuilderInterface
{
    use FilesAwareTrait;

    public function __construct(string $stacksPath)
    {
        $this->stacksPath = $stacksPath;
    }

    public function matches(DTO\Context $context): bool
    {
        return $context->isEnterpriseEdition === true;
    }

    private function buildImageTag(DTO\Context $context)
    {
        if (Semver::satisfies($context->applicationVersion, '^3.0')) {
            return 'docker.elastic.co/elasticsearch/elasticsearch-oss:6.8.7';
        }

        if (Semver::satisfies($context->applicationVersion, '^4.0')) {
            return 'docker.elastic.co/elasticsearch/elasticsearch-oss:7.6.1';
        }

        throw new \RuntimeException('No image satisfies the application version constraint.');
    }

    public function build(DTO\Stack $stack, DTO\Context $context): DTO\Stack
    {
        $stack->addServices(
            (new Service('elasticsearch', $this->buildImageTag($context)))
                ->addEnvironmentVariables(
                    new EnvironmentVariable(new Variable('cluster.name'), 'docker-cluster'),
                    new EnvironmentVariable(new Variable('bootstrap.memory_lock'), 'true'),
                    new EnvironmentVariable(new Variable('ES_JAVA_OPTS'), '-Xms512m -Xmx512m'),
                    new EnvironmentVariable(new Variable('discovery.type'), 'single-node'),
                    new EnvironmentVariable(new Variable('http.port'), '9200'),
                    new EnvironmentVariable(new Variable('http.cors.allow-origin'), 'http://localhost:${DEJAVU_PORT},http://127.0.0.1:${DEJAVU_PORT},http://192.168.64.4:${DEJAVU_PORT},http://dejavu:${DEJAVU_PORT},http://host.docker.internal:${DEJAVU_PORT}'),
                    new EnvironmentVariable(new Variable('http.cors.enabled'), 'true'),
                    new EnvironmentVariable(new Variable('http.cors.allow-headers'), 'X-Requested-With,X-Auth-Token,Content-Type,Content-Length,Authorization'),
                    new EnvironmentVariable(new Variable('http.cors.allow-credentials'), 'true'),
                )
                ->addPorts(
                    new PortMapping(new Variable('ELASTICSEARCH_PORT'), 9200)
                )
                ->addVolumeMappings(
                    new VolumeMapping('elasticsearch', '/usr/share/elasticsearch/data'),
                    new VolumeMapping('./.docker/elasticsearch/elasticsearch.yml', '/usr/share/elasticsearch/config/elasticsearch.yml'),
                )
                ->setRestartOnFailure(),
            (new Service('dejavu', 'appbaseio/dejavu'))
                ->addPorts(
                    new PortMapping(new Variable('DEJAVU_PORT'), 1358)
                )
            )
            ->addVolumes(
                new Volume('elasticsearch', ['driver' => 'local'])
            )
        ;

        $stack->addFiles(
            $this->findFilesToCopy($context, '.docker/elasticsearch/elasticsearch.yml'),
        );

        $stack->addEnvironmentVariables(
            new EnvironmentVariable(new Variable('ELASTICSEARCH_PORT')),
            new EnvironmentVariable(new Variable('DEJAVU_PORT')),
        );

        return $stack;
    }
}