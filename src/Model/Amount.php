<?php

namespace Ebay\Buy\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the monetary value of an amount and the currency used.
 */
class Amount extends AbstractModel
{
    /**
     * The three-letter ISO 4217 code representing the currency of the amount in the
     * value field. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/marketing/types/bas:CurrencyCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $currency = null;

    /**
     * The monetary amount, in the currency specified by the currency field.
     *
     * @var string
     */
    public $value = null;
}
