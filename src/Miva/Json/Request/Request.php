<?php
namespace Miva\Json\Request;

use Symfony\Component\HttpFoundation\ParameterBag;

/**
 * Class Request
 *
 * This class acts as an abstract request you can build.
 * Other specific request types may extend this class.
 */
class Request implements RequestInterface
{
    protected $parameters = null;

    /**
     * @param ParameterBag $parameters
     */
    public function __construct(ParameterBag $parameters = null)
    {
        $this->parameters = is_null($parameters) ? new ParameterBag() : $parameters;
    }

    /**
     * {@inheritDoc}
     */
    public function validate()
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * {@inheritDoc}
     */
    public function setParameters(ParameterBag $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getFunction()
    {
        return static::JSON_FUNCTION;
    }

}