<?php
// autogenerated file 15.11.2010 08:52
// $Id: $
// $Log: $
//
//
require_once 'QuantityOperatorCodeType.php';
require_once 'SortOrderCodeType.php';
require_once 'StoreSearchCodeType.php';
require_once 'ItemLocationRegionCodeType.php';
require_once 'ExcludeFlagCodeType.php';
require_once 'SearchFlagCodeType.php';
require_once 'ProductIDType.php';
require_once 'ItemTypeCodeType.php';
require_once 'AbstractRequestType.php';
require_once 'CountryCodeType.php';
require_once 'SellerBusinessCodeType.php';
require_once 'ItemConditionCodeType.php';
require_once 'CurrencyCodeType.php';
require_once 'AmountType.php';
require_once 'PreferredLocationCodeType.php';
require_once 'PaymentMethodSearchCodeType.php';
require_once 'SimpleItemSortCodeType.php';

/**
 * Searches for items based on a variety of input fields.Enables you to specify 
 * what item data is returned.Returns detailed information about items.<br><br>If 
 * you are not using the BestMatch search option, the API search results may not 
 * match the search results returned by the eBay website. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FindItemsAdvancedRequestType.html
 *
 */
class FindItemsAdvancedRequestType extends AbstractRequestType
{
	/**
	 * @var string
	 */
	protected $IncludeSelector;
	/**
	 * @var int
	 */
	protected $BidCountMax;
	/**
	 * @var int
	 */
	protected $BidCountMin;
	/**
	 * @var int
	 */
	protected $CategoryHistogramMaxParents;
	/**
	 * @var int
	 */
	protected $CategoryHistogramMaxChildren;
	/**
	 * @var string
	 */
	protected $QueryKeywords;
	/**
	 * @var string
	 */
	protected $CategoryID;
	/**
	 * @var SimpleItemSortCodeType
	 */
	protected $ItemSort;
	/**
	 * @var SortOrderCodeType
	 */
	protected $SortOrder;
	/**
	 * @var int
	 */
	protected $GroupMaxEntries;
	/**
	 * @var int
	 */
	protected $GroupsMax;
	/**
	 * @var dateTime
	 */
	protected $EndTimeFrom;
	/**
	 * @var dateTime
	 */
	protected $EndTimeTo;
	/**
	 * @var dateTime
	 */
	protected $ModTimeFrom;
	/**
	 * @var string
	 */
	protected $SellerID;
	/**
	 * @var string
	 */
	protected $SellerIDExclude;
	/**
	 * @var ItemTypeCodeType
	 */
	protected $ItemType;
	/**
	 * @var int
	 */
	protected $MaxDistance;
	/**
	 * @var string
	 */
	protected $PostalCode;
	/**
	 * @var ProductIDType
	 */
	protected $ProductID;
	/**
	 * @var int
	 */
	protected $MaxEntries;
	/**
	 * @var int
	 */
	protected $PageNumber;
	/**
	 * @var AmountType
	 */
	protected $PriceMax;
	/**
	 * @var AmountType
	 */
	protected $PriceMin;
	/**
	 * @var ItemConditionCodeType
	 */
	protected $Condition;
	/**
	 * @var int
	 */
	protected $CharityID;
	/**
	 * @var SearchFlagCodeType
	 */
	protected $SearchFlag;
	/**
	 * @var PaymentMethodSearchCodeType
	 */
	protected $PaymentMethod;
	/**
	 * @var string
	 */
	protected $StoreName;
	/**
	 * @var StoreSearchCodeType
	 */
	protected $StoreSearch;
	/**
	 * @var SellerBusinessCodeType
	 */
	protected $SellerBusinessType;
	/**
	 * @var int
	 */
	protected $Quantity;
	/**
	 * @var QuantityOperatorCodeType
	 */
	protected $QuantityOperator;
	/**
	 * @var CurrencyCodeType
	 */
	protected $Currency;
	/**
	 * @var CountryCodeType
	 */
	protected $ItemsAvailableTo;
	/**
	 * @var CountryCodeType
	 */
	protected $ItemsLocatedIn;
	/**
	 * @var PreferredLocationCodeType
	 */
	protected $PreferredLocation;
	/**
	 * @var int
	 */
	protected $FeedbackScoreMax;
	/**
	 * @var int
	 */
	protected $FeedbackScoreMin;
	/**
	 * @var ExcludeFlagCodeType
	 */
	protected $ExcludeFlag;
	/**
	 * @var boolean
	 */
	protected $DescriptionSearch;
	/**
	 * @var boolean
	 */
	protected $HideDuplicateItems;
	/**
	 * @var CountryCodeType
	 */
	protected $ShippingLocation;
	/**
	 * @var string
	 */
	protected $ShippingPostalCode;
	/**
	 * @var ItemLocationRegionCodeType
	 */
	protected $ItemLocationRegion;
	/**
	 * @var string
	 */
	protected $CategoryIDExclude;

	/**
	 * @return string
	 */
	function getIncludeSelector()
	{
		return $this->IncludeSelector;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setIncludeSelector($value)
	{
		$this->IncludeSelector = $value;
	}
	/**
	 * @return int
	 */
	function getBidCountMax()
	{
		return $this->BidCountMax;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setBidCountMax($value)
	{
		$this->BidCountMax = $value;
	}
	/**
	 * @return int
	 */
	function getBidCountMin()
	{
		return $this->BidCountMin;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setBidCountMin($value)
	{
		$this->BidCountMin = $value;
	}
	/**
	 * @return int
	 */
	function getCategoryHistogramMaxParents()
	{
		return $this->CategoryHistogramMaxParents;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setCategoryHistogramMaxParents($value)
	{
		$this->CategoryHistogramMaxParents = $value;
	}
	/**
	 * @return int
	 */
	function getCategoryHistogramMaxChildren()
	{
		return $this->CategoryHistogramMaxChildren;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setCategoryHistogramMaxChildren($value)
	{
		$this->CategoryHistogramMaxChildren = $value;
	}
	/**
	 * @return string
	 */
	function getQueryKeywords()
	{
		return $this->QueryKeywords;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setQueryKeywords($value)
	{
		$this->QueryKeywords = $value;
	}
	/**
	 * @return string
	 */
	function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCategoryID($value)
	{
		$this->CategoryID = $value;
	}
	/**
	 * @return SimpleItemSortCodeType
	 */
	function getItemSort()
	{
		return $this->ItemSort;
	}
	/**
	 * @return void
	 * @param SimpleItemSortCodeType $value 
	 */
	function setItemSort($value)
	{
		$this->ItemSort = $value;
	}
	/**
	 * @return SortOrderCodeType
	 */
	function getSortOrder()
	{
		return $this->SortOrder;
	}
	/**
	 * @return void
	 * @param SortOrderCodeType $value 
	 */
	function setSortOrder($value)
	{
		$this->SortOrder = $value;
	}
	/**
	 * @return int
	 */
	function getGroupMaxEntries()
	{
		return $this->GroupMaxEntries;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setGroupMaxEntries($value)
	{
		$this->GroupMaxEntries = $value;
	}
	/**
	 * @return int
	 */
	function getGroupsMax()
	{
		return $this->GroupsMax;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setGroupsMax($value)
	{
		$this->GroupsMax = $value;
	}
	/**
	 * @return dateTime
	 */
	function getEndTimeFrom()
	{
		return $this->EndTimeFrom;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setEndTimeFrom($value)
	{
		$this->EndTimeFrom = $value;
	}
	/**
	 * @return dateTime
	 */
	function getEndTimeTo()
	{
		return $this->EndTimeTo;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setEndTimeTo($value)
	{
		$this->EndTimeTo = $value;
	}
	/**
	 * @return dateTime
	 */
	function getModTimeFrom()
	{
		return $this->ModTimeFrom;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setModTimeFrom($value)
	{
		$this->ModTimeFrom = $value;
	}
	/**
	 * @return string
	 * @param integer $index 
	 */
	function getSellerID($index = null)
	{
		if ($index !== null) {
			return $this->SellerID[$index];
		} else {
			return $this->SellerID;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setSellerID($value, $index = null)
	{
		if ($index !== null) {
			$this->SellerID[$index] = $value;
		} else {
			$this->SellerID = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addSellerID($value)
	{
		$this->SellerID[] = $value;
	}
	/**
	 * @return string
	 * @param integer $index 
	 */
	function getSellerIDExclude($index = null)
	{
		if ($index !== null) {
			return $this->SellerIDExclude[$index];
		} else {
			return $this->SellerIDExclude;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setSellerIDExclude($value, $index = null)
	{
		if ($index !== null) {
			$this->SellerIDExclude[$index] = $value;
		} else {
			$this->SellerIDExclude = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addSellerIDExclude($value)
	{
		$this->SellerIDExclude[] = $value;
	}
	/**
	 * @return ItemTypeCodeType
	 */
	function getItemType()
	{
		return $this->ItemType;
	}
	/**
	 * @return void
	 * @param ItemTypeCodeType $value 
	 */
	function setItemType($value)
	{
		$this->ItemType = $value;
	}
	/**
	 * @return int
	 */
	function getMaxDistance()
	{
		return $this->MaxDistance;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMaxDistance($value)
	{
		$this->MaxDistance = $value;
	}
	/**
	 * @return string
	 */
	function getPostalCode()
	{
		return $this->PostalCode;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setPostalCode($value)
	{
		$this->PostalCode = $value;
	}
	/**
	 * @return ProductIDType
	 */
	function getProductID()
	{
		return $this->ProductID;
	}
	/**
	 * @return void
	 * @param ProductIDType $value 
	 */
	function setProductID($value)
	{
		$this->ProductID = $value;
	}
	/**
	 * @return int
	 */
	function getMaxEntries()
	{
		return $this->MaxEntries;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMaxEntries($value)
	{
		$this->MaxEntries = $value;
	}
	/**
	 * @return int
	 */
	function getPageNumber()
	{
		return $this->PageNumber;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setPageNumber($value)
	{
		$this->PageNumber = $value;
	}
	/**
	 * @return AmountType
	 */
	function getPriceMax()
	{
		return $this->PriceMax;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setPriceMax($value)
	{
		$this->PriceMax = $value;
	}
	/**
	 * @return AmountType
	 */
	function getPriceMin()
	{
		return $this->PriceMin;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setPriceMin($value)
	{
		$this->PriceMin = $value;
	}
	/**
	 * @return ItemConditionCodeType
	 */
	function getCondition()
	{
		return $this->Condition;
	}
	/**
	 * @return void
	 * @param ItemConditionCodeType $value 
	 */
	function setCondition($value)
	{
		$this->Condition = $value;
	}
	/**
	 * @return int
	 */
	function getCharityID()
	{
		return $this->CharityID;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setCharityID($value)
	{
		$this->CharityID = $value;
	}
	/**
	 * @return SearchFlagCodeType
	 * @param integer $index 
	 */
	function getSearchFlag($index = null)
	{
		if ($index !== null) {
			return $this->SearchFlag[$index];
		} else {
			return $this->SearchFlag;
		}
	}
	/**
	 * @return void
	 * @param SearchFlagCodeType $value 
	 * @param  $index 
	 */
	function setSearchFlag($value, $index = null)
	{
		if ($index !== null) {
			$this->SearchFlag[$index] = $value;
		} else {
			$this->SearchFlag = $value;
		}
	}
	/**
	 * @return void
	 * @param SearchFlagCodeType $value 
	 */
	function addSearchFlag($value)
	{
		$this->SearchFlag[] = $value;
	}
	/**
	 * @return PaymentMethodSearchCodeType
	 */
	function getPaymentMethod()
	{
		return $this->PaymentMethod;
	}
	/**
	 * @return void
	 * @param PaymentMethodSearchCodeType $value 
	 */
	function setPaymentMethod($value)
	{
		$this->PaymentMethod = $value;
	}
	/**
	 * @return string
	 */
	function getStoreName()
	{
		return $this->StoreName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setStoreName($value)
	{
		$this->StoreName = $value;
	}
	/**
	 * @return StoreSearchCodeType
	 */
	function getStoreSearch()
	{
		return $this->StoreSearch;
	}
	/**
	 * @return void
	 * @param StoreSearchCodeType $value 
	 */
	function setStoreSearch($value)
	{
		$this->StoreSearch = $value;
	}
	/**
	 * @return SellerBusinessCodeType
	 */
	function getSellerBusinessType()
	{
		return $this->SellerBusinessType;
	}
	/**
	 * @return void
	 * @param SellerBusinessCodeType $value 
	 */
	function setSellerBusinessType($value)
	{
		$this->SellerBusinessType = $value;
	}
	/**
	 * @return int
	 */
	function getQuantity()
	{
		return $this->Quantity;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setQuantity($value)
	{
		$this->Quantity = $value;
	}
	/**
	 * @return QuantityOperatorCodeType
	 */
	function getQuantityOperator()
	{
		return $this->QuantityOperator;
	}
	/**
	 * @return void
	 * @param QuantityOperatorCodeType $value 
	 */
	function setQuantityOperator($value)
	{
		$this->QuantityOperator = $value;
	}
	/**
	 * @return CurrencyCodeType
	 */
	function getCurrency()
	{
		return $this->Currency;
	}
	/**
	 * @return void
	 * @param CurrencyCodeType $value 
	 */
	function setCurrency($value)
	{
		$this->Currency = $value;
	}
	/**
	 * @return CountryCodeType
	 */
	function getItemsAvailableTo()
	{
		return $this->ItemsAvailableTo;
	}
	/**
	 * @return void
	 * @param CountryCodeType $value 
	 */
	function setItemsAvailableTo($value)
	{
		$this->ItemsAvailableTo = $value;
	}
	/**
	 * @return CountryCodeType
	 */
	function getItemsLocatedIn()
	{
		return $this->ItemsLocatedIn;
	}
	/**
	 * @return void
	 * @param CountryCodeType $value 
	 */
	function setItemsLocatedIn($value)
	{
		$this->ItemsLocatedIn = $value;
	}
	/**
	 * @return PreferredLocationCodeType
	 */
	function getPreferredLocation()
	{
		return $this->PreferredLocation;
	}
	/**
	 * @return void
	 * @param PreferredLocationCodeType $value 
	 */
	function setPreferredLocation($value)
	{
		$this->PreferredLocation = $value;
	}
	/**
	 * @return int
	 */
	function getFeedbackScoreMax()
	{
		return $this->FeedbackScoreMax;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setFeedbackScoreMax($value)
	{
		$this->FeedbackScoreMax = $value;
	}
	/**
	 * @return int
	 */
	function getFeedbackScoreMin()
	{
		return $this->FeedbackScoreMin;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setFeedbackScoreMin($value)
	{
		$this->FeedbackScoreMin = $value;
	}
	/**
	 * @return ExcludeFlagCodeType
	 * @param integer $index 
	 */
	function getExcludeFlag($index = null)
	{
		if ($index !== null) {
			return $this->ExcludeFlag[$index];
		} else {
			return $this->ExcludeFlag;
		}
	}
	/**
	 * @return void
	 * @param ExcludeFlagCodeType $value 
	 * @param  $index 
	 */
	function setExcludeFlag($value, $index = null)
	{
		if ($index !== null) {
			$this->ExcludeFlag[$index] = $value;
		} else {
			$this->ExcludeFlag = $value;
		}
	}
	/**
	 * @return void
	 * @param ExcludeFlagCodeType $value 
	 */
	function addExcludeFlag($value)
	{
		$this->ExcludeFlag[] = $value;
	}
	/**
	 * @return boolean
	 */
	function getDescriptionSearch()
	{
		return $this->DescriptionSearch;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setDescriptionSearch($value)
	{
		$this->DescriptionSearch = $value;
	}
	/**
	 * @return boolean
	 */
	function getHideDuplicateItems()
	{
		return $this->HideDuplicateItems;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setHideDuplicateItems($value)
	{
		$this->HideDuplicateItems = $value;
	}
	/**
	 * @return CountryCodeType
	 */
	function getShippingLocation()
	{
		return $this->ShippingLocation;
	}
	/**
	 * @return void
	 * @param CountryCodeType $value 
	 */
	function setShippingLocation($value)
	{
		$this->ShippingLocation = $value;
	}
	/**
	 * @return string
	 */
	function getShippingPostalCode()
	{
		return $this->ShippingPostalCode;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setShippingPostalCode($value)
	{
		$this->ShippingPostalCode = $value;
	}
	/**
	 * @return ItemLocationRegionCodeType
	 */
	function getItemLocationRegion()
	{
		return $this->ItemLocationRegion;
	}
	/**
	 * @return void
	 * @param ItemLocationRegionCodeType $value 
	 */
	function setItemLocationRegion($value)
	{
		$this->ItemLocationRegion = $value;
	}
	/**
	 * @return string
	 * @param integer $index 
	 */
	function getCategoryIDExclude($index = null)
	{
		if ($index !== null) {
			return $this->CategoryIDExclude[$index];
		} else {
			return $this->CategoryIDExclude;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setCategoryIDExclude($value, $index = null)
	{
		if ($index !== null) {
			$this->CategoryIDExclude[$index] = $value;
		} else {
			$this->CategoryIDExclude = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addCategoryIDExclude($value)
	{
		$this->CategoryIDExclude[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FindItemsAdvancedRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'IncludeSelector' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BidCountMax' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BidCountMin' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CategoryHistogramMaxParents' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CategoryHistogramMaxChildren' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'QueryKeywords' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CategoryID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemSort' =>
					array(
						'required' => false,
						'type' => 'SimpleItemSortCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SortOrder' =>
					array(
						'required' => false,
						'type' => 'SortOrderCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'GroupMaxEntries' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'GroupsMax' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'EndTimeFrom' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'EndTimeTo' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ModTimeFrom' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellerID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					),
					'SellerIDExclude' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					),
					'ItemType' =>
					array(
						'required' => false,
						'type' => 'ItemTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MaxDistance' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PostalCode' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ProductID' =>
					array(
						'required' => false,
						'type' => 'ProductIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MaxEntries' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PageNumber' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PriceMax' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PriceMin' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Condition' =>
					array(
						'required' => false,
						'type' => 'ItemConditionCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CharityID' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SearchFlag' =>
					array(
						'required' => false,
						'type' => 'SearchFlagCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'PaymentMethod' =>
					array(
						'required' => false,
						'type' => 'PaymentMethodSearchCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'StoreName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'StoreSearch' =>
					array(
						'required' => false,
						'type' => 'StoreSearchCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellerBusinessType' =>
					array(
						'required' => false,
						'type' => 'SellerBusinessCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Quantity' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'QuantityOperator' =>
					array(
						'required' => false,
						'type' => 'QuantityOperatorCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Currency' =>
					array(
						'required' => false,
						'type' => 'CurrencyCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemsAvailableTo' =>
					array(
						'required' => false,
						'type' => 'CountryCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemsLocatedIn' =>
					array(
						'required' => false,
						'type' => 'CountryCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PreferredLocation' =>
					array(
						'required' => false,
						'type' => 'PreferredLocationCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FeedbackScoreMax' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FeedbackScoreMin' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ExcludeFlag' =>
					array(
						'required' => false,
						'type' => 'ExcludeFlagCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'DescriptionSearch' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'HideDuplicateItems' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingLocation' =>
					array(
						'required' => false,
						'type' => 'CountryCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingPostalCode' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemLocationRegion' =>
					array(
						'required' => false,
						'type' => 'ItemLocationRegionCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CategoryIDExclude' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
