<?php

namespace Omnipay\GlobalAlipay;

class AppGateway extends BaseGateway
{

    /**
     * Get gateway display name
     *
     * This can be used by carts to get the display name for each gateway.
     */
    public function getName()
    {
        return 'Global Alipay APP gateway';
    }


    public function getSellerId()
    {
        return $this->getParameter('seller_id');
    }


    public function setSellerId($value)
    {
        return $this->setParameter('seller_id', $value);
    }


    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\GlobalAlipay\Message\AppPurchaseRequest', $parameters);
    }

}
