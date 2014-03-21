<?php
/*
* This file is part of the Miva PHP Provision package.
*
* (c) Gassan Idriss <gidriss@mivamerchant.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace Miva\Provisioning\Builder\Fragment;

/**
* AffiliateOptions
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class AffiliateOptions implements FragmentInterface
{

    /** @var string */
    protected $active;
    
    /** @var string */
    protected $applicationStatus;
    
    /** @var float */
    protected $defaultCommissionHit;
    
    /** @var float */
    protected $defaultCommissionPercentOfOrder;
    
    /** @var float */
    protected $defaultCommissionOrderFlatFee;
    
    /** @var float */
    protected $payoutThreshold;
    
    /** @var string */
    protected $linkImage;
    
    /** @var string */
    protected $linkText;
    
    /** @var string */
    protected $terms;

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
    * setActive
    *
    * @param string active
    *
    * @return self
    */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
    * getApplicationStatus
    *
    * @return string
    */
    public function getApplicationStatus()
    {
        return $this->applicationStatus;
    }

    /**
    * setApplicationStatus
    *
    * @param string applicationStatus
    *
    * @return self
    */
    public function setApplicationStatus($applicationStatus)
    {
        $this->applicationStatus = $applicationStatus;
        return $this;
    }
    
    /**
    * getDefaultCommissionHit
    *
    * @return float
    */
    public function getDefaultCommissionHit()
    {
        return $this->defaultCommissionHit;
    }

    /**
    * setDefaultCommissionHit
    *
    * @param float defaultCommissionHit
    *
    * @return self
    */
    public function setDefaultCommissionHit($defaultCommissionHit)
    {
        $this->defaultCommissionHit = $defaultCommissionHit;
        return $this;
    }
    
    /**
    * getDefaultCommissionPercentOfOrder
    *
    * @return float
    */
    public function getDefaultCommissionPercentOfOrder()
    {
        return $this->defaultCommissionPercentOfOrder;
    }

    /**
    * setDefaultCommissionPercentOfOrder
    *
    * @param float defaultCommissionPercentOfOrder
    *
    * @return self
    */
    public function setDefaultCommissionPercentOfOrder($defaultCommissionPercentOfOrder)
    {
        $this->defaultCommissionPercentOfOrder = $defaultCommissionPercentOfOrder;
        return $this;
    }
          
    /**
    * getDefaultCommissionOrderFlatFee 
    *
    * @return float
    */
    public function getDefaultCommissionOrderFlatFee ()
    {
        return $this->defaultCommissionOrderFlatFee ;
    }

    /**
    * setDefaultCommissionOrderFlatFee 
    *
    * @param float defaultCommissionOrderFlatFee 
    *
    * @return self
    */
    public function setDefaultCommissionOrderFlatFee ($defaultCommissionOrderFlatFee )
    {
        $this->defaultCommissionOrderFlatFee  = $defaultCommissionOrderFlatFee ;
        return $this;
    }
    
    /**
    * getPayoutThreshold
    *
    * @return float
    */
    public function getPayoutThreshold()
    {
        return $this->payoutThreshold;
    }

    /**
    * setPayoutThreshold
    *
    * @param float payoutThreshold
    *
    * @return self
    */
    public function setPayoutThreshold($payoutThreshold)
    {
        $this->payoutThreshold = $payoutThreshold;
        return $this;
    }
        
    /**
    * getLinkImage
    *
    * @return string
    */
    public function getLinkImage()
    {
        return $this->linkImage;
    }

    /**
    * setLinkImage
    *
    * @param string linkImage
    *
    * @return self
    */
    public function setLinkImage($linkImage)
    {
        $this->linkImage = $linkImage;
        return $this;
    }
    
    /**
    * getLinkText
    *
    * @return string
    */
    public function getLinkText()
    {
        return $this->linkText;
    }

    /**
    * setLinkText
    *
    * @param string linkText
    *
    * @return self
    */
    public function setLinkText($linkText)
    {
        $this->linkText = $linkText;
        return $this;
    }
        
    /**
    * getTerms
    *
    * @return string
    */
    public function getTerms()
    {
        return $this->terms;
    }

    /**
    * setTerms
    *
    * @param string terms
    *
    * @return self
    */
    public function setTerms($terms)
    {
        $this->terms = $terms;
        return $this;
    }
            
        
    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     *  <AffiliateOptions_Update>
     *        <Active>Active</Active>
     *        <ApplicationStatus>ApplicationStatus</ApplicationStatus>
     *        <DefaultCommissionHit>1.0000</DefaultCommissionHit>
     *        <DefaultCommissionPercentOfOrder>1.0000</DefaultCommissionPercentOfOrder>
     *        <DefaultCommissionOrderFlatFee>1.0000</DefaultCommissionOrderFlatFee>
     *        <PayoutThreshold>1.0000</PayoutThreshold>
     *        <LinkImage>LinkImage</LinkImage>
     *        <LinkText>LinkText</LinkText>
     *        <Terms>Terms</Terms>
     *    </AffiliateOptions_Update>
    */
    public function toXml()
    {

        $xml = null;
        $xmlObject = new \SimpleXmlElement('<Fragment></Fragment>');
        
        $xmlObject->addChild('Active', $this->getActive());
        $xmlObject->addChild('ApplicationStatus', $this->getApplicationStatus());
        $xmlObject->addChild('DefaultCommissionHit', $this->getDefaultCommissionHit());
        $xmlObject->addChild('DefaultCommissionPercentOfOrder', $this->getDefaultCommissionPercentOfOrder());
        $xmlObject->addChild('DefaultCommissionOrderFlatFee', $this->getDefaultCommissionOrderFlatFee());
        $xmlObject->addChild('PayoutThreshold', $this->getPayoutThreshold());
        $xmlObject->addChild('LinkImage', $this->getLinkImage());
        $xmlObject->addChild('LinkText', $this->getLinkText());
        $xmlObject->addChild('Terms', $this->getTerms());

        
        foreach ($xmlObject->children() as $child) {
            $xml .= $child->saveXml();
        }
        
        return $xml;
    }
}