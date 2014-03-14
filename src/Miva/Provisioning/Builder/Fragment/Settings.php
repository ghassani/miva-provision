<?php
/*
*
*
*/
namespace Miva\Provisioning\Builder\Fragment;

/**
* Settings
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class Settings implements FragmentInterface
{

	protected $forcePasswordAfterDays;

	protected $passwordReuse;

	protected $minimumPasswordLength;

	protected $passwordComplexity;

	protected $imageJPEGQuality;

	/**
	* setForcePasswordAfterDays
	*
	* @param int $forcePasswordAfterDays
	*
	* @return self
	*/
	public function setForcePasswordAfterDays($forcePasswordAfterDays)
	{
		$this->forcePasswordAfterDays = $forcePasswordAfterDays;
		return $this;
	}

	/**
	* getForcePasswordAfterDays
	*
	* @return int
	*/
	public function getForcePasswordAfterDays()
	{
		return $this->forcePasswordAfterDays;
	}

	/**
	* setPasswordReuse
	*
	* @param int $passwordReuse
	*
	* @return self
	*/
	public function setPasswordReuse($passwordReuse)
	{
		$this->passwordReuse = $passwordReuse;
		return $this;
	}

	/**
	* getPasswordReuse
	*
	* @return int
	*/
	public function getPasswordReuse()
	{
		return $this->passwordReuse;
	}

	/**
	* setMinimumPasswordLength
	*
	* @param int $minimumPasswordLength
	*
	* @return self
	*/
	public function setMinimumPasswordLength($minimumPasswordLength)
	{
		$this->minimumPasswordLength = $minimumPasswordLength;
		return $this;
	}

	/**
	* getMinimumPasswordLength
	*
	* @return int
	*/
	public function getMinimumPasswordLength()
	{
		return $this->minimumPasswordLength;
	}

	/**
	* setPasswordComplexity
	*
	* @param string $passwordComplexity
	*
	* @return self
	*/
	public function setPasswordComplexity($passwordComplexity)
	{
		$this->passwordComplexity = $passwordComplexity;
		return $this;
	}

	/**
	* getPasswordComplexity
	*
	* @return string
	*/
	public function getPasswordComplexity()
	{
		return $this->passwordComplexity;
	}

	/**
	* setImageJPEGQuality
	*
	* @param string $imageJPEGQuality
	*
	* @return self
	*/
	public function setImageJPEGQuality($imageJPEGQuality)
	{
		$this->imageJPEGQuality = $imageJPEGQuality;
		return $this;
	}

	/**
	* getImageJPEGQuality
	*
	* @return string
	*/
	public function getImageJPEGQuality()
	{
		return $this->imageJPEGQuality;
	}

	/**
	* {@inheritDoc}
	*/
	public function toXml()
	{

		$xml = null;
		$xmlObject = new \SimpleXmlElement('<Fragment></Fragment>');
		
		if ($this->getForcePasswordAfterDays()) {
			$xmlObject->addChild('ForcePasswordAfterDays', $this->getForcePasswordAfterDays());
		}


		if ($this->getPasswordReuse()) {
			$xmlObject->addChild('PasswordReuse', $this->getPasswordReuse());
		}


		if ($this->getMinimumPasswordLength()) {
			$xmlObject->addChild('MinimumPasswordLength', $this->getMinimumPasswordLength());
		}

		if ($this->getPasswordComplexity()) {
			$xmlObject->addChild('PasswordComplexity', $this->getPasswordComplexity());
		}

		if ($this->getImageJPEGQuality()) {
			$xmlObject->addChild('ImageJPEGQuality', $this->getImageJPEGQuality());
		}
		
		foreach ($xmlObject->children() as $child) {
			$xml .= $child->saveXml();
		}
		
		return $xml;
	}

}