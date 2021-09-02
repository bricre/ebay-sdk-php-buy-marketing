<?php

namespace Ebay\Buy\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that defines the fields for product information, including price,
 * condition, ratings, etc.
 */
class MerchandisedProduct extends AbstractModel
{
    /**
     * The average rating for the product based on eBay user ratings.
     *
     * @var string
     */
    public $averageRating = null;

    /**
     * The eBay product identifier of a product from the eBay product catalog. You can
     * use this value in the Browse API search method to retrieve items for this
     * product.
     *
     * @var string
     */
    public $epid = null;

    /**
     * The container for the product image.
     *
     * @var \Ebay\Buy\Marketing\Model\Image
     */
    public $image = null;

    /**
     * An array of containers for the product market price details, such as condition
     * and market price.
     *
     * @var \Ebay\Buy\Marketing\Model\MarketPriceDetail[]
     */
    public $marketPriceDetails = null;

    /**
     * An array of containers for ratings of the product aspects, such as &quot;Is it a
     * good value&quot;.
     *
     * @var \Ebay\Buy\Marketing\Model\RatingAspect[]
     */
    public $ratingAspects = null;

    /**
     * The total number of eBay users that rated the product.
     *
     * @var int
     */
    public $ratingCount = null;

    /**
     * The total number of eBay users that wrote a review for the product.
     *
     * @var int
     */
    public $reviewCount = null;
}
