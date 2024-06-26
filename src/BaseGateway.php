<?php

namespace Omnipay\GlobalAlipay;

use Omnipay\Common\AbstractGateway;

class BaseGateway extends AbstractGateway
{

    public function getName()
    {
        return 'Global Alipay base gateway';
    }


    public function setPrivateKey($value)
    {
        return $this->setParameter('private_key', $value);
    }


    public function getPrivateKey()
    {
        return $this->getParameter('private_key');
    }

    /**
     * @return mixed
     */
    public function getAlipayPublicKey()
    {
        return $this->getParameter('alipay_public_key');
    }


    /**
     * @param $value
     *
     * @return $this
     */
    public function setAlipayPublicKey($value)
    {
        return $this->setParameter('alipay_public_key', $value);
    }


    public function getPartner()
    {
        return $this->getParameter('partner');
    }


    public function setPartner($value)
    {
        return $this->setParameter('partner', $value);
    }


    public function getNotifyUrl()
    {
        return $this->getParameter('notify_url');
    }


    public function setNotifyUrl($value)
    {
        return $this->setParameter('notify_url', $value);
    }


    public function getReturnUrl()
    {
        return $this->getParameter('return_url');
    }


    public function setReturnUrl($value)
    {
        return $this->setParameter('return_url', $value);
    }

    public function completePurchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\GlobalAlipay\Message\CompletePurchaseRequest', $parameters);
    }

    public function query(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\GlobalAlipay\Message\TradeQueryRequest', $parameters);
    }

    public function refund(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\GlobalAlipay\Message\TradeRefundRequest', $parameters);
    }

    public function getCaCertPath()
    {
        return $this->getParameter('ca_cert_path');
    }

    public function setCaCertPath($value)
    {
        return $this->setParameter('ca_cert_path', $value);
    }

}
