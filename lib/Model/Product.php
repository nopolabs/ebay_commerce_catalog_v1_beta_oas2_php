<?php
/**
 * Product
 *
 * PHP version 5
 *
 * @category Class
 * @package  Nopolabs\EBay\Commerce\Catalog
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Catalog API
 *
 * Use the Catalog API to search the eBay catalog for products on which to base a seller's item listing; to retrieve a product record by its eBay product identifier (ePID); to submit a catalog change request to modify an existing product or create a new product; and to manage catalog change requests.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Nopolabs\EBay\Commerce\Catalog\Model;

use \ArrayAccess;
use \Nopolabs\EBay\Commerce\Catalog\ObjectSerializer;

/**
 * Product Class Doc Comment
 *
 * @category Class
 * @description This type contains the full details of a specified product, including information about the product&#39;s identifiers, product images, aspects, and categories.
 * @package  Nopolabs\EBay\Commerce\Catalog
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Product implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Product';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'additional_images' => '\Nopolabs\EBay\Commerce\Catalog\Model\Image[]',
        'aspects' => '\Nopolabs\EBay\Commerce\Catalog\Model\Aspect[]',
        'brand' => 'string',
        'description' => 'string',
        'ean' => 'string[]',
        'epid' => 'string',
        'gtin' => 'string[]',
        'image' => '\Nopolabs\EBay\Commerce\Catalog\Model\Image',
        'isbn' => 'string[]',
        'mpn' => 'string[]',
        'other_applicable_category_ids' => 'string[]',
        'primary_category_id' => 'string',
        'product_web_url' => 'string',
        'title' => 'string',
        'upc' => 'string[]',
        'version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'additional_images' => null,
        'aspects' => null,
        'brand' => null,
        'description' => null,
        'ean' => null,
        'epid' => null,
        'gtin' => null,
        'image' => null,
        'isbn' => null,
        'mpn' => null,
        'other_applicable_category_ids' => null,
        'primary_category_id' => null,
        'product_web_url' => null,
        'title' => null,
        'upc' => null,
        'version' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'additional_images' => 'additionalImages',
        'aspects' => 'aspects',
        'brand' => 'brand',
        'description' => 'description',
        'ean' => 'ean',
        'epid' => 'epid',
        'gtin' => 'gtin',
        'image' => 'image',
        'isbn' => 'isbn',
        'mpn' => 'mpn',
        'other_applicable_category_ids' => 'otherApplicableCategoryIds',
        'primary_category_id' => 'primaryCategoryId',
        'product_web_url' => 'productWebUrl',
        'title' => 'title',
        'upc' => 'upc',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_images' => 'setAdditionalImages',
        'aspects' => 'setAspects',
        'brand' => 'setBrand',
        'description' => 'setDescription',
        'ean' => 'setEan',
        'epid' => 'setEpid',
        'gtin' => 'setGtin',
        'image' => 'setImage',
        'isbn' => 'setIsbn',
        'mpn' => 'setMpn',
        'other_applicable_category_ids' => 'setOtherApplicableCategoryIds',
        'primary_category_id' => 'setPrimaryCategoryId',
        'product_web_url' => 'setProductWebUrl',
        'title' => 'setTitle',
        'upc' => 'setUpc',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_images' => 'getAdditionalImages',
        'aspects' => 'getAspects',
        'brand' => 'getBrand',
        'description' => 'getDescription',
        'ean' => 'getEan',
        'epid' => 'getEpid',
        'gtin' => 'getGtin',
        'image' => 'getImage',
        'isbn' => 'getIsbn',
        'mpn' => 'getMpn',
        'other_applicable_category_ids' => 'getOtherApplicableCategoryIds',
        'primary_category_id' => 'getPrimaryCategoryId',
        'product_web_url' => 'getProductWebUrl',
        'title' => 'getTitle',
        'upc' => 'getUpc',
        'version' => 'getVersion'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['additional_images'] = isset($data['additional_images']) ? $data['additional_images'] : null;
        $this->container['aspects'] = isset($data['aspects']) ? $data['aspects'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['ean'] = isset($data['ean']) ? $data['ean'] : null;
        $this->container['epid'] = isset($data['epid']) ? $data['epid'] : null;
        $this->container['gtin'] = isset($data['gtin']) ? $data['gtin'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['isbn'] = isset($data['isbn']) ? $data['isbn'] : null;
        $this->container['mpn'] = isset($data['mpn']) ? $data['mpn'] : null;
        $this->container['other_applicable_category_ids'] = isset($data['other_applicable_category_ids']) ? $data['other_applicable_category_ids'] : null;
        $this->container['primary_category_id'] = isset($data['primary_category_id']) ? $data['primary_category_id'] : null;
        $this->container['product_web_url'] = isset($data['product_web_url']) ? $data['product_web_url'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['upc'] = isset($data['upc']) ? $data['upc'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets additional_images
     *
     * @return \Nopolabs\EBay\Commerce\Catalog\Model\Image[]
     */
    public function getAdditionalImages()
    {
        return $this->container['additional_images'];
    }

    /**
     * Sets additional_images
     *
     * @param \Nopolabs\EBay\Commerce\Catalog\Model\Image[] $additional_images Contains information about additional images associated with this product. For the primary image, see the image container.
     *
     * @return $this
     */
    public function setAdditionalImages($additional_images)
    {
        $this->container['additional_images'] = $additional_images;

        return $this;
    }

    /**
     * Gets aspects
     *
     * @return \Nopolabs\EBay\Commerce\Catalog\Model\Aspect[]
     */
    public function getAspects()
    {
        return $this->container['aspects'];
    }

    /**
     * Sets aspects
     *
     * @param \Nopolabs\EBay\Commerce\Catalog\Model\Aspect[] $aspects Contains an array of the category aspects and their values that are associated with this product.
     *
     * @return $this
     */
    public function setAspects($aspects)
    {
        $this->container['aspects'] = $aspects;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string $brand The manufacturer's brand name for this product.
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description The rich description of this product, which might contain HTML.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets ean
     *
     * @return string[]
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     *
     * @param string[] $ean A list of all European Article Numbers (EANs) that identify this product.
     *
     * @return $this
     */
    public function setEan($ean)
    {
        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets epid
     *
     * @return string
     */
    public function getEpid()
    {
        return $this->container['epid'];
    }

    /**
     * Sets epid
     *
     * @param string $epid The eBay product ID of this product.
     *
     * @return $this
     */
    public function setEpid($epid)
    {
        $this->container['epid'] = $epid;

        return $this;
    }

    /**
     * Gets gtin
     *
     * @return string[]
     */
    public function getGtin()
    {
        return $this->container['gtin'];
    }

    /**
     * Sets gtin
     *
     * @param string[] $gtin A list of all GTINs that identify this product. Currently this can include EAN, ISBN, and UPC identifier types.
     *
     * @return $this
     */
    public function setGtin($gtin)
    {
        $this->container['gtin'] = $gtin;

        return $this;
    }

    /**
     * Gets image
     *
     * @return \Nopolabs\EBay\Commerce\Catalog\Model\Image
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \Nopolabs\EBay\Commerce\Catalog\Model\Image $image image
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets isbn
     *
     * @return string[]
     */
    public function getIsbn()
    {
        return $this->container['isbn'];
    }

    /**
     * Sets isbn
     *
     * @param string[] $isbn A list of all International Standard Book Numbers (ISBNs) that identify this product.
     *
     * @return $this
     */
    public function setIsbn($isbn)
    {
        $this->container['isbn'] = $isbn;

        return $this;
    }

    /**
     * Gets mpn
     *
     * @return string[]
     */
    public function getMpn()
    {
        return $this->container['mpn'];
    }

    /**
     * Sets mpn
     *
     * @param string[] $mpn A list of all MPN values that the manufacturer uses to identify this product.
     *
     * @return $this
     */
    public function setMpn($mpn)
    {
        $this->container['mpn'] = $mpn;

        return $this;
    }

    /**
     * Gets other_applicable_category_ids
     *
     * @return string[]
     */
    public function getOtherApplicableCategoryIds()
    {
        return $this->container['other_applicable_category_ids'];
    }

    /**
     * Sets other_applicable_category_ids
     *
     * @param string[] $other_applicable_category_ids A list of category IDs (other than the value of primaryCategoryId) for all the leaf categories to which this product might belong.
     *
     * @return $this
     */
    public function setOtherApplicableCategoryIds($other_applicable_category_ids)
    {
        $this->container['other_applicable_category_ids'] = $other_applicable_category_ids;

        return $this;
    }

    /**
     * Gets primary_category_id
     *
     * @return string
     */
    public function getPrimaryCategoryId()
    {
        return $this->container['primary_category_id'];
    }

    /**
     * Sets primary_category_id
     *
     * @param string $primary_category_id The identifier of the leaf category that eBay recommends using to list this product, based on previous listings of similar products. Products in the eBay catalog are not automatically associated with any particular category, but using an inappropriate category can make it difficult for prospective buyers to find the product. For other possible categories that might be used, see otherApplicableCategoryIds.
     *
     * @return $this
     */
    public function setPrimaryCategoryId($primary_category_id)
    {
        $this->container['primary_category_id'] = $primary_category_id;

        return $this;
    }

    /**
     * Gets product_web_url
     *
     * @return string
     */
    public function getProductWebUrl()
    {
        return $this->container['product_web_url'];
    }

    /**
     * Sets product_web_url
     *
     * @param string $product_web_url The URL for this product's eBay product page.
     *
     * @return $this
     */
    public function setProductWebUrl($product_web_url)
    {
        $this->container['product_web_url'] = $product_web_url;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title The title of this product on eBay.
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets upc
     *
     * @return string[]
     */
    public function getUpc()
    {
        return $this->container['upc'];
    }

    /**
     * Sets upc
     *
     * @param string[] $upc A list of Universal Product Codes (UPCs) that identify this product.
     *
     * @return $this
     */
    public function setUpc($upc)
    {
        $this->container['upc'] = $upc;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version The current version number of this product record in the catalog.
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


