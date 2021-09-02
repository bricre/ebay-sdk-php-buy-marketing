<?php

namespace Ebay\Buy\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that defines the field for the aspect rating details, such as the
 * aspect rating value, usually TRUE or FALSE and the user count and percentage.
 */
class RatingAspectDistribution extends AbstractModel
{
    /**
     * The number of eBay users that choose this rating aspect value.
     *
     * @var int
     */
    public $count = null;

    /**
     * The percentage of the aspect rating value. ratingAspectDistributions.percentage
     * = ratingAspectDistributions.count / ratingAspects.count.
     *
     * @var string
     */
    public $percentage = null;

    /**
     * The rating aspect. For example: TRUE or FALSE.
     *
     * @var string
     */
    public $value = null;
}
