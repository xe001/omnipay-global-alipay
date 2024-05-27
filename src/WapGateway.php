<?php

namespace Omnipay\GlobalAlipay;

class WapGateway extends BaseGateway
{

    /**
     * Get gateway display name
     *
     * This can be used by carts to get the display name for each gateway.
     */
    public function getName()
    {
        return 'Global Alipay wap gateway';
    }


    public function setKey($value)
    {
        return $this->setParameter('key', $value);
    }


    public function getKey()
    {
        return $this->getParameter('key');
    }


    public function getSignType()
    {
        return $this->getParameter('sign_type');
    }


    public function setSignType($value)
    {
        return $this->setParameter('sign_type', $value);
    }


    public function purchase(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\GlobalAlipay\Message\WapPurchaseRequest', $parameters);
    }

}
