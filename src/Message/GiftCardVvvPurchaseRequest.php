<?php

namespace Omnipay\Buckaroo\Message;

/**
 * Buckaroo Gift Card VVV Purchase Request
 */
class GiftCardVvvPurchaseRequest extends AbstractRequest
{
    public function getData()
    {
        $data = parent::getData();
        $data['Brq_payment_method'] = 'vvvgiftcard';

        return $data;
    }
}
