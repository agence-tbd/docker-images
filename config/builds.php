<?php

use Kiboko\Cloud\Domain\Packaging;

$repository = new Packaging\Repository('kiboko/php');

return [
    new Packaging\Native\Package(
        $repository,
        '5.6',
        new Packaging\Placeholder('native/php@%php.version%/%php.flavor%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository()
    ),

    new Packaging\Native\Package(
        $repository,
        '7.1',
        new Packaging\Placeholder('native/php@%php.version%/%php.flavor%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository()
    ),

    new Packaging\Native\Package(
        $repository,
        '7.2',
        new Packaging\Placeholder('native/php@%php.version%/%php.flavor%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository()
    ),

    new Packaging\Native\Package(
        $repository,
        '7.3',
        new Packaging\Placeholder('native/php@%php.version%/%php.flavor%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository()
    ),

    new Packaging\Native\Package(
        $repository,
        '7.4',
        new Packaging\Placeholder('native/php@%php.version%/%php.flavor%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository()
    ),

    new Packaging\Native\Package(
        $repository,
        '8.0',
        new Packaging\Placeholder('native/php@%php.version%/%php.flavor%/'),
        new Packaging\Native\Flavor\ExperimentalFlavorRepository()
    ),

    new Packaging\Native\PackageVariation(
        $repository,
        '5.6',
        new Packaging\Placeholder('%package.variation%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository()
    ),

    new Packaging\Native\PackageVariation(
        $repository,
        '7.1',
        new Packaging\Placeholder('%package.variation%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository()
    ),

    new Packaging\Native\PackageVariation(
        $repository,
        '7.2',
        new Packaging\Placeholder('%package.variation%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository()
    ),

    new Packaging\Native\PackageVariation(
        $repository,
        '7.3',
        new Packaging\Placeholder('%package.variation%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository()
    ),

    new Packaging\Native\PackageVariation(
        $repository,
        '7.4',
        new Packaging\Placeholder('%package.variation%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository()
    ),

    new Packaging\Native\PackageVariation(
        $repository,
        '8.0',
        new Packaging\Placeholder('%package.variation%/'),
        new Packaging\Native\Flavor\ExperimentalFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository()
    ),

    new Packaging\Platform\Package(
        $repository,
        '5.6',
        new Packaging\Placeholder('oroplatform/%package.edition%/%package.version%/php@%php.version%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository(),
        new Packaging\Platform\Edition\OroPlatformCommunityEditionRepository()
    ),

    new Packaging\Platform\Package(
        $repository,
        '7.1',
        new Packaging\Placeholder('oroplatform/%package.edition%/%package.version%/php@%php.version%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository(),
        new Packaging\Platform\Edition\OroPlatformCommunityEditionRepository()
    ),

    new Packaging\Platform\Package(
        $repository,
        '7.2',
        new Packaging\Placeholder('oroplatform/%package.edition%/%package.version%/php@%php.version%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository(),
        new Packaging\Platform\Edition\OroPlatformCommunityEditionRepository()
    ),

    new Packaging\Platform\Package(
        $repository,
        '7.3',
        new Packaging\Placeholder('oroplatform/%package.edition%/%package.version%/php@%php.version%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository(),
        new Packaging\Platform\Edition\OroPlatformCommunityEditionRepository()
    ),

    new Packaging\Platform\Package(
        $repository,
        '7.4',
        new Packaging\Placeholder('oroplatform/%package.edition%/%package.version%/php@%php.version%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository(),
        new Packaging\Platform\Edition\OroPlatformCommunityEditionRepository()
    ),

    new Packaging\Platform\Package(
        $repository,
        '5.6',
        new Packaging\Placeholder('oroplatform/%package.edition%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository(),
        new Packaging\Platform\Edition\OroPlatformEnterpriseEditionRepository()
    ),

    new Packaging\Platform\Package(
        $repository,
        '7.1',
        new Packaging\Placeholder('oroplatform/%package.edition%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository(),
        new Packaging\Platform\Edition\OroPlatformEnterpriseEditionRepository()
    ),

    new Packaging\Platform\Package(
        $repository,
        '7.2',
        new Packaging\Placeholder('oroplatform/%package.edition%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository(),
        new Packaging\Platform\Edition\OroPlatformEnterpriseEditionRepository()
    ),

    new Packaging\Platform\Package(
        $repository,
        '7.3',
        new Packaging\Placeholder('oroplatform/%package.edition%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository(),
        new Packaging\Platform\Edition\OroPlatformEnterpriseEditionRepository()
    ),

    new Packaging\Platform\Package(
        $repository,
        '7.4',
        new Packaging\Placeholder('oroplatform/%package.edition%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository(),
        new Packaging\Platform\Edition\OroPlatformEnterpriseEditionRepository()
    ),

    new Packaging\Platform\Package(
        $repository,
        '7.1',
        new Packaging\Placeholder('orocommerce/%package.edition%/%package.version%/php@%php.version%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository(),
        new Packaging\Platform\Edition\OroCommerceCommunityEditionRepository()
    ),

    new Packaging\Platform\Package(
        $repository,
        '7.2',
        new Packaging\Placeholder('orocommerce/%package.edition%/%package.version%/php@%php.version%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository(),
        new Packaging\Platform\Edition\OroCommerceCommunityEditionRepository()
    ),

    new Packaging\Platform\Package(
        $repository,
        '7.3',
        new Packaging\Placeholder('orocommerce/%package.edition%/%package.version%/php@%php.version%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository(),
        new Packaging\Platform\Edition\OroCommerceCommunityEditionRepository()
    ),

    new Packaging\Platform\Package(
        $repository,
        '7.4',
        new Packaging\Placeholder('orocommerce/%package.edition%/%package.version%/php@%php.version%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository(),
        new Packaging\Platform\Edition\OroCommerceCommunityEditionRepository()
    ),

    new Packaging\Platform\Package(
        $repository,
        '7.1',
        new Packaging\Placeholder('orocommerce/%package.edition%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository(),
        new Packaging\Platform\Edition\OroCommerceEnterpriseEditionRepository()
    ),

    new Packaging\Platform\Package(
        $repository,
        '7.2',
        new Packaging\Placeholder('orocommerce/%package.edition%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository(),
        new Packaging\Platform\Edition\OroCommerceEnterpriseEditionRepository()
    ),

    new Packaging\Platform\Package(
        $repository,
        '7.3',
        new Packaging\Placeholder('orocommerce/%package.edition%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository(),
        new Packaging\Platform\Edition\OroCommerceEnterpriseEditionRepository()
    ),

    new Packaging\Platform\Package(
        $repository,
        '7.4',
        new Packaging\Placeholder('orocommerce/%package.edition%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository(),
        new Packaging\Platform\Edition\OroCommerceEnterpriseEditionRepository()
    ),

    new Packaging\Platform\Package(
        $repository,
        '7.1',
        new Packaging\Placeholder('orocrm/%package.edition%/%package.version%/php@%php.version%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository(),
        new Packaging\Platform\Edition\OroCRMCommunityEditionRepository()
    ),

    new Packaging\Platform\Package(
        $repository,
        '7.2',
        new Packaging\Placeholder('orocrm/%package.edition%/%package.version%/php@%php.version%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository(),
        new Packaging\Platform\Edition\OroCRMCommunityEditionRepository()
    ),

    new Packaging\Platform\Package(
        $repository,
        '7.3',
        new Packaging\Placeholder('orocrm/%package.edition%/%package.version%/php@%php.version%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository(),
        new Packaging\Platform\Edition\OroCRMCommunityEditionRepository()
    ),

    new Packaging\Platform\Package(
        $repository,
        '7.4',
        new Packaging\Placeholder('orocrm/%package.edition%/%package.version%/php@%php.version%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository(),
        new Packaging\Platform\Edition\OroCRMCommunityEditionRepository()
    ),

    new Packaging\Platform\Package(
        $repository,
        '7.1',
        new Packaging\Placeholder('orocrm/%package.edition%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository(),
        new Packaging\Platform\Edition\OroCRMEnterpriseEditionRepository()
    ),

    new Packaging\Platform\Package(
        $repository,
        '7.2',
        new Packaging\Placeholder('orocrm/%package.edition%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository(),
        new Packaging\Platform\Edition\OroCRMEnterpriseEditionRepository()
    ),

    new Packaging\Platform\Package(
        $repository,
        '7.3',
        new Packaging\Placeholder('orocrm/%package.edition%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository(),
        new Packaging\Platform\Edition\OroCRMEnterpriseEditionRepository()
    ),

    new Packaging\Platform\Package(
        $repository,
        '7.4',
        new Packaging\Placeholder('orocrm/%package.edition%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository(),
        new Packaging\Platform\Edition\OroCRMEnterpriseEditionRepository()
    ),

    new Packaging\Platform\Package(
        $repository,
        '7.1',
        new Packaging\Placeholder('marello/%package.edition%/%package.version%/php@%php.version%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository(),
        new Packaging\Platform\Edition\MarelloCommunityEditionRepository()
    ),

    new Packaging\Platform\Package(
        $repository,
        '7.2',
        new Packaging\Placeholder('marello/%package.edition%/%package.version%/php@%php.version%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository(),
        new Packaging\Platform\Edition\MarelloCommunityEditionRepository()
    ),

    new Packaging\Platform\Package(
        $repository,
        '7.3',
        new Packaging\Placeholder('marello/%package.edition%/%package.version%/php@%php.version%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository(),
        new Packaging\Platform\Edition\MarelloCommunityEditionRepository()
    ),

    new Packaging\Platform\Package(
        $repository,
        '7.4',
        new Packaging\Placeholder('marello/%package.edition%/%package.version%/php@%php.version%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository(),
        new Packaging\Platform\Edition\MarelloCommunityEditionRepository()
    ),

    new Packaging\Platform\Package(
        $repository,
        '7.1',
        new Packaging\Placeholder('marello/%package.edition%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository(),
        new Packaging\Platform\Edition\MarelloEnterpriseEditionRepository()
    ),

    new Packaging\Platform\Package(
        $repository,
        '7.2',
        new Packaging\Placeholder('marello/%package.edition%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository(),
        new Packaging\Platform\Edition\MarelloEnterpriseEditionRepository()
    ),

    new Packaging\Platform\Package(
        $repository,
        '7.3',
        new Packaging\Placeholder('marello/%package.edition%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository(),
        new Packaging\Platform\Edition\MarelloEnterpriseEditionRepository()
    ),

    new Packaging\Platform\Package(
        $repository,
        '7.4',
        new Packaging\Placeholder('marello/%package.edition%/'),
        new Packaging\Native\Flavor\StandardFlavorRepository(),
        new Packaging\Native\Variation\StandardVariationRepository(),
        new Packaging\Platform\Edition\MarelloEnterpriseEditionRepository()
    ),
];