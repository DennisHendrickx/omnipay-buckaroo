<?php

namespace Omnipay\Buckaroo;

/**
 * Buckaroo Gift Card VVV Gateway
 */
class GiftCardVvvGateway extends BuckarooGateway
{
    public function getName()
    {
        return 'Buckaroo Giftcard VVV';
    }

    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Buckaroo\Message\GiftCardVvvPurchaseRequest', $parameters);
    }
}
