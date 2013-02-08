<?php
// autogenerated file 10.09.2012 13:03
// $Id: $
// $Log: $
//
//
require_once 'FeedbackPeriodType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'AverageRatingDetailsType.php';

/**
 * Specifies all feedback summary information (except Score). Containsobjects that 
 * each convey feedback counts forpositive, negative, neutral, and total feedback 
 * counts - for varioustime periods each. Also conveys counts of bid retractions 
 * for thepredefined time periods. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FeedbackHistoryType.html
 *
 */
class FeedbackHistoryType extends EbatNs_ComplexType
{
	/**
	 * @var FeedbackPeriodType
	 */
	protected $BidRetractionFeedbackPeriods;
	/**
	 * @var FeedbackPeriodType
	 */
	protected $NegativeFeedbackPeriods;
	/**
	 * @var FeedbackPeriodType
	 */
	protected $NeutralFeedbackPeriods;
	/**
	 * @var FeedbackPeriodType
	 */
	protected $PositiveFeedbackPeriods;
	/**
	 * @var FeedbackPeriodType
	 */
	protected $TotalFeedbackPeriods;
	/**
	 * @var long
	 */
	protected $UniqueNegativeFeedbackCount;
	/**
	 * @var long
	 */
	protected $UniquePositiveFeedbackCount;
	/**
	 * @var AverageRatingDetailsType
	 */
	protected $AverageRatingDetails;
	/**
	 * @var long
	 */
	protected $NeutralCommentCountFromSuspendedUsers;
	/**
	 * @var long
	 */
	protected $UniqueNeutralFeedbackCount;

	/**
	 * @return FeedbackPeriodType
	 * @param integer $index 
	 */
	function getBidRetractionFeedbackPeriods($index = null)
	{
		if ($index !== null) {
			return $this->BidRetractionFeedbackPeriods[$index];
		} else {
			return $this->BidRetractionFeedbackPeriods;
		}
	}
	/**
	 * @return void
	 * @param FeedbackPeriodType $value 
	 * @param  $index 
	 */
	function setBidRetractionFeedbackPeriods($value, $index = null)
	{
		if ($index !== null) {
			$this->BidRetractionFeedbackPeriods[$index] = $value;
		} else {
			$this->BidRetractionFeedbackPeriods = $value;
		}
	}
	/**
	 * @return void
	 * @param FeedbackPeriodType $value 
	 */
	function addBidRetractionFeedbackPeriods($value)
	{
		$this->BidRetractionFeedbackPeriods[] = $value;
	}
	/**
	 * @return FeedbackPeriodType
	 * @param integer $index 
	 */
	function getNegativeFeedbackPeriods($index = null)
	{
		if ($index !== null) {
			return $this->NegativeFeedbackPeriods[$index];
		} else {
			return $this->NegativeFeedbackPeriods;
		}
	}
	/**
	 * @return void
	 * @param FeedbackPeriodType $value 
	 * @param  $index 
	 */
	function setNegativeFeedbackPeriods($value, $index = null)
	{
		if ($index !== null) {
			$this->NegativeFeedbackPeriods[$index] = $value;
		} else {
			$this->NegativeFeedbackPeriods = $value;
		}
	}
	/**
	 * @return void
	 * @param FeedbackPeriodType $value 
	 */
	function addNegativeFeedbackPeriods($value)
	{
		$this->NegativeFeedbackPeriods[] = $value;
	}
	/**
	 * @return FeedbackPeriodType
	 * @param integer $index 
	 */
	function getNeutralFeedbackPeriods($index = null)
	{
		if ($index !== null) {
			return $this->NeutralFeedbackPeriods[$index];
		} else {
			return $this->NeutralFeedbackPeriods;
		}
	}
	/**
	 * @return void
	 * @param FeedbackPeriodType $value 
	 * @param  $index 
	 */
	function setNeutralFeedbackPeriods($value, $index = null)
	{
		if ($index !== null) {
			$this->NeutralFeedbackPeriods[$index] = $value;
		} else {
			$this->NeutralFeedbackPeriods = $value;
		}
	}
	/**
	 * @return void
	 * @param FeedbackPeriodType $value 
	 */
	function addNeutralFeedbackPeriods($value)
	{
		$this->NeutralFeedbackPeriods[] = $value;
	}
	/**
	 * @return FeedbackPeriodType
	 * @param integer $index 
	 */
	function getPositiveFeedbackPeriods($index = null)
	{
		if ($index !== null) {
			return $this->PositiveFeedbackPeriods[$index];
		} else {
			return $this->PositiveFeedbackPeriods;
		}
	}
	/**
	 * @return void
	 * @param FeedbackPeriodType $value 
	 * @param  $index 
	 */
	function setPositiveFeedbackPeriods($value, $index = null)
	{
		if ($index !== null) {
			$this->PositiveFeedbackPeriods[$index] = $value;
		} else {
			$this->PositiveFeedbackPeriods = $value;
		}
	}
	/**
	 * @return void
	 * @param FeedbackPeriodType $value 
	 */
	function addPositiveFeedbackPeriods($value)
	{
		$this->PositiveFeedbackPeriods[] = $value;
	}
	/**
	 * @return FeedbackPeriodType
	 * @param integer $index 
	 */
	function getTotalFeedbackPeriods($index = null)
	{
		if ($index !== null) {
			return $this->TotalFeedbackPeriods[$index];
		} else {
			return $this->TotalFeedbackPeriods;
		}
	}
	/**
	 * @return void
	 * @param FeedbackPeriodType $value 
	 * @param  $index 
	 */
	function setTotalFeedbackPeriods($value, $index = null)
	{
		if ($index !== null) {
			$this->TotalFeedbackPeriods[$index] = $value;
		} else {
			$this->TotalFeedbackPeriods = $value;
		}
	}
	/**
	 * @return void
	 * @param FeedbackPeriodType $value 
	 */
	function addTotalFeedbackPeriods($value)
	{
		$this->TotalFeedbackPeriods[] = $value;
	}
	/**
	 * @return long
	 */
	function getUniqueNegativeFeedbackCount()
	{
		return $this->UniqueNegativeFeedbackCount;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setUniqueNegativeFeedbackCount($value)
	{
		$this->UniqueNegativeFeedbackCount = $value;
	}
	/**
	 * @return long
	 */
	function getUniquePositiveFeedbackCount()
	{
		return $this->UniquePositiveFeedbackCount;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setUniquePositiveFeedbackCount($value)
	{
		$this->UniquePositiveFeedbackCount = $value;
	}
	/**
	 * @return AverageRatingDetailsType
	 * @param integer $index 
	 */
	function getAverageRatingDetails($index = null)
	{
		if ($index !== null) {
			return $this->AverageRatingDetails[$index];
		} else {
			return $this->AverageRatingDetails;
		}
	}
	/**
	 * @return void
	 * @param AverageRatingDetailsType $value 
	 * @param  $index 
	 */
	function setAverageRatingDetails($value, $index = null)
	{
		if ($index !== null) {
			$this->AverageRatingDetails[$index] = $value;
		} else {
			$this->AverageRatingDetails = $value;
		}
	}
	/**
	 * @return void
	 * @param AverageRatingDetailsType $value 
	 */
	function addAverageRatingDetails($value)
	{
		$this->AverageRatingDetails[] = $value;
	}
	/**
	 * @return long
	 */
	function getNeutralCommentCountFromSuspendedUsers()
	{
		return $this->NeutralCommentCountFromSuspendedUsers;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setNeutralCommentCountFromSuspendedUsers($value)
	{
		$this->NeutralCommentCountFromSuspendedUsers = $value;
	}
	/**
	 * @return long
	 */
	function getUniqueNeutralFeedbackCount()
	{
		return $this->UniqueNeutralFeedbackCount;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setUniqueNeutralFeedbackCount($value)
	{
		$this->UniqueNeutralFeedbackCount = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FeedbackHistoryType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'BidRetractionFeedbackPeriods' =>
					array(
						'required' => false,
						'type' => 'FeedbackPeriodType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'NegativeFeedbackPeriods' =>
					array(
						'required' => false,
						'type' => 'FeedbackPeriodType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'NeutralFeedbackPeriods' =>
					array(
						'required' => false,
						'type' => 'FeedbackPeriodType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'PositiveFeedbackPeriods' =>
					array(
						'required' => false,
						'type' => 'FeedbackPeriodType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'TotalFeedbackPeriods' =>
					array(
						'required' => false,
						'type' => 'FeedbackPeriodType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'UniqueNegativeFeedbackCount' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'UniquePositiveFeedbackCount' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AverageRatingDetails' =>
					array(
						'required' => false,
						'type' => 'AverageRatingDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'NeutralCommentCountFromSuspendedUsers' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'UniqueNeutralFeedbackCount' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
