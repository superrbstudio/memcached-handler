<?php

namespace Superrb\MemcachedHandlerBundle;

use Superrb\MemcachedHandlerBundle\DependencyInjection\SuperrbMemcachedHandlerExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class MemcachedHandlerBundle
 * @package Superrb\MemcachedHandlerBundle
 */
class SuperrbMemcachedHandlerBundle extends Bundle
{
    /**
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->registerExtension(new SuperrbMemcachedHandlerExtension());
    }
}