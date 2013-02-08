<?php
// autogenerated file 15.11.2010 08:52
// $Id: $
// $Log: $
//
//
require_once 'SearchResultType.php';
require_once 'AbstractResponseType.php';
require_once 'CategoryArrayType.php';

/**
 * Contains the item listings matching your search criteria. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FindItemsAdvancedResponseType.html
 *
 */
class FindItemsAdvancedResponseType extends AbstractResponseType
{
	/**
	 * @var SearchResultType
	 */
	protected $SearchResult;
	/**
	 * @var int
	 */
	protected $PageNumber;
	/**
	 * @var int
	 */
	protected $TotalPages;
	/**
	 * @var int
	 */
	protected $TotalItems;
	/**
	 * @var CategoryArrayType
	 */
	protected $CategoryHistogram;
	/**
	 * @var int
	 */
	protected $TotalStoresExpansionItems;
	/**
	 * @var int
	 */
	protected $TotalInternationalExpansionItems;
	/**
	 * @var anyURI
	 */
	protected $ItemSearchURL;
	/**
	 * @var boolean
	 */
	protected $DuplicateItems;

	/**
	 * @return SearchResultType
	 * @param integer $index 
	 */
	function getSearchResult($index = null)
	{
		if ($index !== null) {
			return $this->SearchResult[$index];
		} else {
			return $this->SearchResult;
		}
	}
	/**
	 * @return void
	 * @param SearchResultType $value 
	 * @param  $index 
	 */
	function setSearchResult($value, $index = null)
	{
		if ($index !== null) {
			$this->SearchResult[$index] = $value;
		} else {
			$this->SearchResult = $value;
		}
	}
	/**
	 * @return void
	 * @param SearchResultType $value 
	 */
	function addSearchResult($value)
	{
		$this->SearchResult[] = $value;
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
	 * @return int
	 */
	function getTotalPages()
	{
		return $this->TotalPages;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setTotalPages($value)
	{
		$this->TotalPages = $value;
	}
	/**
	 * @return int
	 */
	function getTotalItems()
	{
		return $this->TotalItems;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setTotalItems($value)
	{
		$this->TotalItems = $value;
	}
	/**
	 * @return CategoryArrayType
	 */
	function getCategoryHistogram()
	{
		return $this->CategoryHistogram;
	}
	/**
	 * @return void
	 * @param CategoryArrayType $value 
	 */
	function setCategoryHistogram($value)
	{
		$this->CategoryHistogram = $value;
	}
	/**
	 * @return int
	 */
	function getTotalStoresExpansionItems()
	{
		return $this->TotalStoresExpansionItems;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setTotalStoresExpansionItems($value)
	{
		$this->TotalStoresExpansionItems = $value;
	}
	/**
	 * @return int
	 */
	function getTotalInternationalExpansionItems()
	{
		return $this->TotalInternationalExpansionItems;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setTotalInternationalExpansionItems($value)
	{
		$this->TotalInternationalExpansionItems = $value;
	}
	/**
	 * @return anyURI
	 */
	function getItemSearchURL()
	{
		return $this->ItemSearchURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setItemSearchURL($value)
	{
		$this->ItemSearchURL = $value;
	}
	/**
	 * @return boolean
	 */
	function getDuplicateItems()
	{
		return $this->DuplicateItems;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setDuplicateItems($value)
	{
		$this->DuplicateItems = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FindItemsAdvancedResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'SearchResult' =>
					array(
						'required' => false,
						'type' => 'SearchResultType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'PageNumber' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TotalPages' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TotalItems' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CategoryHistogram' =>
					array(
						'required' => false,
						'type' => 'CategoryArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TotalStoresExpansionItems' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TotalInternationalExpansionItems' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemSearchURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DuplicateItems' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
