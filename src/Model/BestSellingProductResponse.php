<?php

namespace Ebay\Buy\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that defines the fields for the best selling product information.
 */
class BestSellingProductResponse extends AbstractModel
{
    /**
     * An array of containers for the products.
     *
     * @var \Ebay\Buy\Marketing\Model\MerchandisedProduct[]
     */
    public $merchandisedProducts = null;

    /**
     * The container with all the warnings for the input request.
     *
     * @var \Ebay\Buy\Marketing\Model\Error[]
     */
    public $warnings = null;
}
