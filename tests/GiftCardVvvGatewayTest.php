<?php

namespace Omnipay\Buckaroo;

use Omnipay\Common\GatewayInterface;
use Omnipay\Tests\GatewayTestCase;

class GiftCardVvvGatewayTest extends GatewayTestCase
{
    /**
     * @var GatewayInterface
     */
    protected $gateway;

    public function setUp()
    {
        parent::setUp();

        $this->gateway = new GiftCardVvvGateway($this->getHttpClient(), $this->getHttpRequest());
    }

    public function testPurchase()
    {
        $request = $this->gateway->purchase(array('amount' => '10.00'));

        $this->assertInstanceOf('Omnipay\Buckaroo\Message\GiftCardVvvPurchaseRequest', $request);
        $this->assertSame('10.00', $request->getAmount());
    }
}
