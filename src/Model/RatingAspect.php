<?php

namespace Ebay\Buy\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that defines the fields for the product aspect ratings.
 */
class RatingAspect extends AbstractModel
{
    /**
     * The number of eBay users that rated the product on this aspect.
     *
     * @var int
     */
    public $count = null;

    /**
     * The answer or value of the rating aspect. Camping tent examples: Lightweight or
     * Easy to set up.
     *
     * @var string
     */
    public $name = null;

    /**
     * The container for the details of the aspect rating. The details show the aspect
     * rating value, usually TRUE or FALSE and the user count and percentage.
     *
     * @var \Ebay\Buy\Marketing\Model\RatingAspectDistribution[]
     */
    public $ratingAspectDistributions = null;
}
