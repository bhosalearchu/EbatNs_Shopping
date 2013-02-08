<?php
// autogenerated file 10.09.2012 13:04
// $Id: $
// $Log: $
//
//
require_once 'ReviewSortCodeType.php';
require_once 'SortOrderCodeType.php';
require_once 'AbstractRequestType.php';
require_once 'ProductIDType.php';

/**
 * Splitting include reviews and guides from GetProducts. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FindReviewsAndGuidesRequestType.html
 *
 */
class FindReviewsAndGuidesRequestType extends AbstractRequestType
{
	/**
	 * @var ProductIDType
	 */
	protected $ProductID;
	/**
	 * @var string
	 */
	protected $UserID;
	/**
	 * @var string
	 */
	protected $CategoryID;
	/**
	 * @var int
	 */
	protected $MaxResultsPerPage;
	/**
	 * @var int
	 */
	protected $PageNumber;
	/**
	 * @var ReviewSortCodeType
	 */
	protected $ReviewSort;
	/**
	 * @var SortOrderCodeType
	 */
	protected $SortOrder;

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
	 * @return string
	 */
	function getUserID()
	{
		return $this->UserID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setUserID($value)
	{
		$this->UserID = $value;
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
	 * @return int
	 */
	function getMaxResultsPerPage()
	{
		return $this->MaxResultsPerPage;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMaxResultsPerPage($value)
	{
		$this->MaxResultsPerPage = $value;
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
	 * @return ReviewSortCodeType
	 */
	function getReviewSort()
	{
		return $this->ReviewSort;
	}
	/**
	 * @return void
	 * @param ReviewSortCodeType $value 
	 */
	function setReviewSort($value)
	{
		$this->ReviewSort = $value;
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
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FindReviewsAndGuidesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ProductID' =>
					array(
						'required' => false,
						'type' => 'ProductIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'UserID' =>
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
					'MaxResultsPerPage' =>
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
					'ReviewSort' =>
					array(
						'required' => false,
						'type' => 'ReviewSortCodeType',
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
					)
				));
	}
}
?>
