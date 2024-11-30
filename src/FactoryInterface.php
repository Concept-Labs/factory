<?php
namespace Concept\Factory;

use Psr\Container\ContainerInterface;

/**
 * Interface FactoryInterface
 * @package Concept\Factory
 */
interface FactoryInterface //extends ConfigurableInterface
{
    /**
     * Create an object
     */
    //public function create(?string $serviceId = null, ...$parameters): object;
    public function create();//: object;

    /**
     * Set the container
     * 
     * @param ContainerInterface $container
     */
    public function withContainer(ContainerInterface $container): self;
}