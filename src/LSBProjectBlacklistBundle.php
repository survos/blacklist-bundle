<?php declare(strict_types = 1);

namespace LSBProject\BlacklistBundle;

use LSBProject\BlacklistBundle\src\DependencyInjection\RegisterTypesPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class LSBProjectBlacklistBundle extends Bundle
{
    public function build(ContainerBuilder $container): void
    {
        parent::build($container);

        $container->addCompilerPass(new RegisterTypesPass());
    }
}
