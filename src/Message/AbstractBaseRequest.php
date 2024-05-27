<?php

namespace Omnipay\GlobalAlipay\Message;

use Omnipay\Common\Message\AbstractRequest;

abstract class AbstractBaseRequest extends AbstractRequest
{
    protected $proEndpoint = 'https://intlmapi.alipay.com/gateway.do';
    protected $testEndpoint = 'https://mapi-sandbox.dl.alipaydev.com/gateway.do';

    protected function getEndpoint()
    {
        return $this->getTestMode()? $this->testEndpoint : $this->proEndpoint;
    }
}
