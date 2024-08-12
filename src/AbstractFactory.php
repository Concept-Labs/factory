<?php
namespace Concept\Factory;

use Psr\Container\ContainerInterface;

/**
 * Class AbstractFactory
 * @package Concept\Factory
 */
abstract class AbstractFactory implements FactoryInterface
{
    /**
     * @var string|null
     */
    protected ?string $serviceId = null;

    /**
     * @var array
     */
    protected array $parameters = [];

    /**
     * @var ContainerInterface|null
     */
    protected ?ContainerInterface $container = null;

    /**
     * {@inheritDoc}
     */
    abstract public function create(): object;

    /**
     * {@inheritDoc}
     */
    public function withServiceId(string $serviceId): self
    {
        $clone = clone $this;
        $clone->serviceId = $serviceId;

        return $clone;
    }

    /**
     * {@inheritDoc}
     */
    public function withParameters(...$parameters): self
    {
        $clone = clone $this;
        $clone->parameters = $parameters;

        return $clone;
    }

    /**
     * {@inheritDoc}
     */
    public function withContainer(ContainerInterface $container): self
    {
        $clone = clone $this;
        $clone->container = $container;

        return $clone;
    }
}