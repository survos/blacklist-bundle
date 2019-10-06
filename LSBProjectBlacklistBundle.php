<?php

namespace LSBProject\BlacklistBundle;

use LSBProject\BlacklistBundle\DependencyInjection\RegisterTypesPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class LSBProjectBlacklistBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new RegisterTypesPass());
    }
}
