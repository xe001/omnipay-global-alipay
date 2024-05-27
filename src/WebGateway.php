<?php

namespace Omnipay\GlobalAlipay;

class WebGateway extends BaseGateway
{

    /**
     * Get gateway display name
     *
     * This can be used by carts to get the display name for each gateway.
     */
    public function getName()
    {
        return 'Global Alipay web gateway';
    }

    public function getDefaultParameters()
    {
        return array(
            'partner' => '',
            'key' => '',
            'environment' => '',
        );
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


    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\GlobalAlipay\Message\WebPurchaseRequest', $parameters);
    }
}
