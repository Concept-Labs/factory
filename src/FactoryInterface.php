<?php
namespace Concept\Factory;

use Psr\Container\ContainerInterface;

/**
 * Interface FactoryInterface
 * @package Concept\Factory
 */
interface FactoryInterface
{
    /**
     * Create an object
     */
    public function create(): object;

    /**
     * Set the service id
     * @param string $serviceId
     */
    public function withServiceId(string $serviceId): self;

    /**
     * Set the parameters
     * @param mixed ...$parameters
     */
    public function withParameters(...$parameters): self;

    /**
     * Set the container
     * @param ContainerInterface $container
     */
    public function withContainer(ContainerInterface $container): self;
}