<?php
/*
*
*
*/
namespace Miva\Provisioning\Builder\Fragment;

/**
* Category
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class Category implements FragmentInterface
{

	protected $name;

	protected $code;

	protected $active;


	public function __construct($name = null, $code = null, $active = 'Yes')
	{
		$this->name = $name;
		$this->code = $code;
		$this->active = $active;
	}

	/**
	* setName
	*
	* @param string $name
	*
	* @return self
	*/
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	/**
	* getName
	*
	* @return string
	*/
	public function getName()
	{
		return $this->name;
	}

	/**
	* setCode
	*
	* @param string $code
	*
	* @return self
	*/
	public function setCode($code)
	{
		$this->code = $code;
		return $this;
	}

	/**
	* getCode
	*
	* @return string
	*/
	public function getCode()
	{
		return $this->code;
	}

	/**
	* setActive
	*
	* @param string $active
	*
	* @return self
	*/
	public function setActive($active)
	{
		$this->active = $active;
		return $this;
	}

	/**
	* getActive
	*
	* @return string
	*/
	public function getActive()
	{
		return $this->active;
	}

	/**
	* {@inheritDoc}
	*/
	public function toXml()
	{

		$xml = null;
		$xmlObject = new \SimpleXmlElement('<Fragment></Fragment>');
		$xmlObject->addChild('Name', $this->getName());
		$xmlObject->addChild('Code', $this->getCode());
		$xmlObject->addChild('Active', $this->getActive() ? $this->getActive() : 'Yes');

		
		foreach ($xmlObject->children() as $child) {
			$xml .= $child->saveXml();
		}
		
		return $xml;
	}

}