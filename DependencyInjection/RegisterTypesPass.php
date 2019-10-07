<?php declare(strict_types = 1);

namespace LSBProject\BlacklistBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class RegisterTypesPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container): void
    {
        $types = $container->findTaggedServiceIds('lsbproject.blacklist.type');
        $extractor = $container->getDefinition('lsbproject.type_extractor');
        $extractor->setArgument('$types', array_map(function (string $service) {
            return new Reference($service);
        }, array_keys($types)));
    }
}
