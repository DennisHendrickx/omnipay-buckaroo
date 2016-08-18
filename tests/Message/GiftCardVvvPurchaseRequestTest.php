<?php

namespace Omnipay\Buckaroo\Message;

use Omnipay\Common\Message\RequestInterface;
use Omnipay\Tests\TestCase;

class GiftCardVvvPurchaseRequestTest extends TestCase
{
    /**
     * @var RequestInterface
     */
    protected $request;

    public function setUp()
    {
        $this->request = new GiftCardVvvPurchaseRequest($this->getHttpClient(), $this->getHttpRequest());
        $this->request->initialize(
            array(
                'websiteKey' => 'web',
                'secretKey' => 'secret',
                'amount' => '12.00',
                'returnUrl' => 'https://www.example.com/return',
            )
        );
    }

    public function testGetData()
    {
        $data = $this->request->getData();

        $this->assertSame('vvvgiftcard', $data['Brq_payment_method']);
    }
}
