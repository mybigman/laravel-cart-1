<?php

declare(strict_types=1);

namespace Rariteth\LaravelCart\Entities;

use Assert\Assertion;
use Assert\AssertionFailedException;
use Rariteth\LaravelCart\Contracts\CartInstanceInterface;

class CartInstance implements CartInstanceInterface
{
    /**
     * Holds the current cart instance
     *
     * @var string
     */
    private $instance;
    
    /**
     * @var null|string
     */
    private $guard;
    
    /**
     * Cart constructor
     *
     * @param string $instance
     * @param string $guard
     *
     * @throws AssertionFailedException
     */
    public function __construct(string $instance, string $guard)
    {
        Assertion::notBlank($instance);
        Assertion::notBlank($guard);
        
        $this->instance = $instance;
        $this->guard    = $guard;
    }
    
    /**
     * Get the cart instance
     *
     * @return string
     */
    public function getInstance(): string
    {
        return $this->instance;
    }
    
    /**
     * Get cart guard name
     *
     * @return string
     */
    public function getGuard(): string
    {
        return $this->guard;
    }
}
