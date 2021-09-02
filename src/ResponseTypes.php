<?php

namespace Ebay\Buy\Marketing;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public static $types = [
        'getAlsoBoughtByProduct' => [
            '200.' => 'Ebay\\Buy\\Marketing\\Model\\BestSellingProductResponse',
        ],
        'getAlsoViewedByProduct' => [
            '200.' => 'Ebay\\Buy\\Marketing\\Model\\BestSellingProductResponse',
        ],
        'getMerchandisedProducts' => [
            '200.' => 'Ebay\\Buy\\Marketing\\Model\\BestSellingProductResponse',
        ],
    ];
}
