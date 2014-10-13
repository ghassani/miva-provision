<?php
namespace Miva\Json\Request;

/**
 * Class Request
 *
 * This class acts as an abstract request you can build.
 * Other specific request types may extend this class.
 */
class Request implements RequestInterface
{
    protected $parameters = array(
        'session_type' => self::SESSION_TYPE_RUNTIME
    );

    public function validate()
    {
        return true;
    }

    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @param $key
     * @return null
     */
    public function getParameter($key)
    {
        $key = strtolower($key);
        return isset($this->parameters[$key]) ? $this->parameters[$key] : null;
    }

    /**
     * @param $key
     * @param $value
     * @return $this
     */
    public function setParameter($key, $value)
    {
        $this->parameters[strtolower($key)] = $value;
        return $this;
    }


} 