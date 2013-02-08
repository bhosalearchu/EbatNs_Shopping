<?php
// autogenerated file 22.07.2011 10:24
// $Id: $
// $Log: $
//
//
require_once 'ReviewDetailsType.php';
require_once 'BuyingGuideDetailsType.php';
require_once 'AbstractResponseType.php';
require_once 'ProductIDType.php';

/**
 * Find reviews and guides response type. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FindReviewsAndGuidesResponseType.html
 *
 */
class FindReviewsAndGuidesResponseType extends AbstractResponseType
{
	/**
	 * @var int
	 */
	protected $ReviewCount;
	/**
	 * @var int
	 */
	protected $BuyingGuideCount;
	/**
	 * @var int
	 */
	protected $ReviewerRank;
	/**
	 * @var int
	 */
	protected $TotalHelpfulnessVotes;
	/**
	 * @var ProductIDType
	 */
	protected $ProductID;
	/**
	 * @var anyURI
	 */
	protected $ReviewsAndGuidesURL;
	/**
	 * @var int
	 */
	protected $PageNumber;
	/**
	 * @var int
	 */
	protected $TotalPages;
	/**
	 * @var BuyingGuideDetailsType
	 */
	protected $BuyingGuideDetails;
	/**
	 * @var ReviewDetailsType
	 */
	protected $ReviewDetails;
	/**
	 * @var int
	 */
	protected $PositiveHelpfulnessVotes;

	/**
	 * @return int
	 */
	function getReviewCount()
	{
		return $this->ReviewCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setReviewCount($value)
	{
		$this->ReviewCount = $value;
	}
	/**
	 * @return int
	 */
	function getBuyingGuideCount()
	{
		return $this->BuyingGuideCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setBuyingGuideCount($value)
	{
		$this->BuyingGuideCount = $value;
	}
	/**
	 * @return int
	 */
	function getReviewerRank()
	{
		return $this->ReviewerRank;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setReviewerRank($value)
	{
		$this->ReviewerRank = $value;
	}
	/**
	 * @return int
	 */
	function getTotalHelpfulnessVotes()
	{
		return $this->TotalHelpfulnessVotes;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setTotalHelpfulnessVotes($value)
	{
		$this->TotalHelpfulnessVotes = $value;
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
	 * @return anyURI
	 */
	function getReviewsAndGuidesURL()
	{
		return $this->ReviewsAndGuidesURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setReviewsAndGuidesURL($value)
	{
		$this->ReviewsAndGuidesURL = $value;
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
	 * @return BuyingGuideDetailsType
	 */
	function getBuyingGuideDetails()
	{
		return $this->BuyingGuideDetails;
	}
	/**
	 * @return void
	 * @param BuyingGuideDetailsType $value 
	 */
	function setBuyingGuideDetails($value)
	{
		$this->BuyingGuideDetails = $value;
	}
	/**
	 * @return ReviewDetailsType
	 */
	function getReviewDetails()
	{
		return $this->ReviewDetails;
	}
	/**
	 * @return void
	 * @param ReviewDetailsType $value 
	 */
	function setReviewDetails($value)
	{
		$this->ReviewDetails = $value;
	}
	/**
	 * @return int
	 */
	function getPositiveHelpfulnessVotes()
	{
		return $this->PositiveHelpfulnessVotes;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setPositiveHelpfulnessVotes($value)
	{
		$this->PositiveHelpfulnessVotes = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FindReviewsAndGuidesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ReviewCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BuyingGuideCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ReviewerRank' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TotalHelpfulnessVotes' =>
					array(
						'required' => false,
						'type' => 'int',
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
					'ReviewsAndGuidesURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
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
					'TotalPages' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BuyingGuideDetails' =>
					array(
						'required' => false,
						'type' => 'BuyingGuideDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ReviewDetails' =>
					array(
						'required' => false,
						'type' => 'ReviewDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PositiveHelpfulnessVotes' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
