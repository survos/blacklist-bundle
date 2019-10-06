<?php declare(strict_types=1);

namespace LSBProject\BlacklistBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class RegisterTypesPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $types = $container->findTaggedServiceIds('lsbproject.blacklist.type');
        $extractor = $container->getDefinition('lsbproject.type_extractor');
        $extractor->setArgument('$types', $types);
    }
}
