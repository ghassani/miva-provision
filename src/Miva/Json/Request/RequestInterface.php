<?php
namespace Miva\Json\Request;

use Symfony\Component\HttpFoundation\ParameterBag;

/**
 * Interface RequestInterface
 */
interface RequestInterface
{

    const SESSION_TYPE_ADMIN = 'admin';

    const SESSION_TYPE_RUNTIME = 'runtime';

    /**
     * validate
     *
     * Validates the current request object
     *
     * @return bool
     * @throws InvalidRequestException
     */
    public function validate();

    /**
     * getParameters
     *
     * Returns the ParameterBag instance associated with the request
     *
     * @return Symfony\Component\HttpFoundation\ParameterBag
     */
    public function getParameters();

    /**
     * setParameters
     *
     * Sets the current request objects ParameterBag instance
     *
     * @param Symfony\Component\HttpFoundation\ParameterBag $parameters
     * @return self
     */
    public function setParameters(ParameterBag $parameters);

    /**
     * getFunction
     *
     * Gets the request objects function name to be passed to the JSON API to execute
     *
     * @return string
     */
    public function getFunction();

}