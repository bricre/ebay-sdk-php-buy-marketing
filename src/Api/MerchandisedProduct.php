<?php

namespace Ebay\Buy\Marketing\Api;

use Ebay\Buy\Marketing\Model\BestSellingProductResponse as BestSellingProductResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class MerchandisedProduct extends AbstractAPI
{
    /**
     * This method returns products that were also bought when shoppers bought the
     * product specified in the request. Showing 'also bought' products inspires
     * up-selling and cross-selling. You specify the product by one of the following:
     * epid - eBay Product ID gtin - Global Trade Item Number (UPC, ISBN, EAN) brand -
     * (brand name, such as Nike) plus mpn (Manufacturer's Part Number) Restrictions
     * For a list of supported sites and other restrictions, see API Restrictions.
     * Note: A maximum of 12 products are returned. The method will return up to 12
     * products, but it can be less than 12. If the number of products found is less
     * than 12, the method will return all of the products matching the criteria.
     *
     * @param array $queries options:
     *                       'brand'	string	The brand of the product. Restriction: This must be used along
     *                       with mpn. Required: You must specify one epid, or one gtin, or one brand plus
     *                       mpn pair.
     *                       'epid'	string	The eBay product identifier of a product. Required: You must
     *                       specify one epid, or one gtin, or one brand plus mpn pair.
     *                       'gtin'	string	The unique Global Trade Item Number of the item as defined by
     *                       https://www.gtin.info. This can be a UPC (Universal Product Code), EAN (European
     *                       Article Number), or an ISBN (International Standard Book Number value. Required:
     *                       You must specify one epid, or one gtin, or one brand plus mpn pair.
     *                       'mpn'	string	The manufacturer part number of the product. Restriction: This must
     *                       be used along with brand. Required: You must specify one epid, or one gtin, or
     *                       one brand plus mpn pair.
     *
     * @return BestSellingProductResponse
     */
    public function getAlsoBoughtByProduct(array $queries = []): BestSellingProductResponse
    {
        return $this->client->request('getAlsoBoughtByProduct', 'GET', 'merchandised_product/get_also_bought_products',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * This method returns products that were also viewed when shoppers viewed the
     * product specified in the request. Showing 'also viewed' products encourages
     * up-selling and cross-selling. You specify the product by one of the following:
     * epid - eBay Product ID gtin - Global Trade Item Number (UPC, ISBN, EAN) brand
     * (brand name, such as Nike) plus mpn (Manufacturer's Part Number) Restrictions
     * For a list of supported sites and other restrictions, see API Restrictions.
     * Note: A maximum of 12 products are returned. The method will return up to 12
     * products, but it can be less than 12. If the number of products found is less
     * than 12, the method will return all of the products matching the criteria.
     *
     * @param array $queries options:
     *                       'brand'	string	The brand of the product. Restriction: This must be used along
     *                       with mpn. Required: You must specify one epid, or one gtin, or one brand plus
     *                       mpn pair.
     *                       'epid'	string	The eBay product identifier of a product. Required: You must
     *                       specify one epid, or one gtin, or one brand plus mpn pair.
     *                       'gtin'	string	The unique Global Trade Item Number of the item as defined by
     *                       https://www.gtin.info. This can be a UPC (Universal Product Code), EAN (European
     *                       Article Number), or an ISBN (International Standard Book Number value. Required:
     *                       You must specify one epid, or one gtin, or one brand plus mpn pair.
     *                       'mpn'	string	The manufacturer part number of the product. Restriction: This must
     *                       be used along with brand.
     *
     * @return BestSellingProductResponse
     */
    public function getAlsoViewedByProduct(array $queries = []): BestSellingProductResponse
    {
        return $this->client->request('getAlsoViewedByProduct', 'GET', 'merchandised_product/get_also_viewed_products',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * This method returns an array of products based on the category and metric
     * specified. This includes details of the product, such as the eBay product ID
     * (EPID), title, and user reviews and ratings for the product. You can use the
     * epid returned by this method in the Browse API search method to retrieve items
     * for this product. Restrictions To test getMerchandisedProducts in Sandbox, you
     * must use category ID 9355 and the response will be mock data. For a list of
     * supported sites and other restrictions, see API Restrictions.
     *
     * @param array $queries options:
     *                       'aspect_filter'	string	The aspect name/value pairs used to further refine
     *                       product results. For example:
     *                       &nbsp;&nbsp;&nbsp;/buy/marketing/v1_beta/merchandised_product?category_id=31388&amp;metric_name=BEST_SELLING&amp;aspect_filter=Brand:Canon
     *                       You can use the Browse API search method with the fieldgroups=ASPECT_REFINEMENTS
     *                       field to return the aspects of a product. For implementation help, refer to eBay
     *                       API documentation at
     *                       https://developer.ebay.com/api-docs/buy/marketing/types/gct:MarketingAspectFilter
     *                       'category_id'	string	This query parameter limits the products returned to a
     *                       specific eBay category. The list of eBay category IDs is not published and
     *                       category IDs are not all the same across all the eBay maketplace. You can use
     *                       the following techniques to find a category by site: Use the Category Changes
     *                       page. Use the Taxonomy API. For details see Get Categories for Buy APIs. Use the
     *                       Browse API and submit the following method to get the dominantCategoryId for an
     *                       item.
     *                       /buy/browse/v1/item_summary/search?q=keyword&amp;fieldgroups=ASPECT_REFINEMENTS
     *                       Maximum: 1 Required: 1
     *                       'limit'	string	This value specifies the maximum number of products to return in
     *                       a result set. Note: Maximum value means the method will return up to that many
     *                       products per set, but it can be less than this value. If the number of products
     *                       found is less than this value, the method will return all of the products
     *                       matching the criteria. Default: 8 Maximum: 100
     *                       'metric_name'	string	This value filters the result set by the specified metric.
     *                       Only products in this metric are returned. Currently, the only metric supported
     *                       is BEST_SELLING. Default: BEST_SELLING Maximum: 1 Required: 1
     *
     * @return BestSellingProductResponse
     */
    public function gets(array $queries = []): BestSellingProductResponse
    {
        return $this->client->request('getMerchandisedProducts', 'GET', 'merchandised_product',
            [
                'query' => $queries,
            ]
        );
    }
}
