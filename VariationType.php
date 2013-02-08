<?php
// autogenerated file 15.11.2010 08:53
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'NameValueListArrayType.php';
require_once 'SellingStatusType.php';
require_once 'AmountType.php';

/**
 * This element hold the values that define the SKU, StartPrice, Quantity, 
 * VariationDetails, and VariationSpecifics. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/VariationType.html
 *
 */
class VariationType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $SKU;
	/**
	 * @var AmountType
	 */
	protected $StartPrice;
	/**
	 * @var int
	 */
	protected $Quantity;
	/**
	 * @var NameValueListArrayType
	 */
	protected $VariationSpecifics;
	/**
	 * @var int
	 */
	protected $QuantitySold;
	/**
	 * @var SellingStatusType
	 */
	protected $SellingStatus;

	/**
	 * @return string
	 */
	function getSKU()
	{
		return $this->SKU;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setSKU($value)
	{
		$this->SKU = $value;
	}
	/**
	 * @return AmountType
	 */
	function getStartPrice()
	{
		return $this->StartPrice;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setStartPrice($value)
	{
		$this->StartPrice = $value;
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
	 * @return NameValueListArrayType
	 */
	function getVariationSpecifics()
	{
		return $this->VariationSpecifics;
	}
	/**
	 * @return void
	 * @param NameValueListArrayType $value 
	 */
	function setVariationSpecifics($value)
	{
		$this->VariationSpecifics = $value;
	}
	/**
	 * @return int
	 */
	function getQuantitySold()
	{
		return $this->QuantitySold;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setQuantitySold($value)
	{
		$this->QuantitySold = $value;
	}
	/**
	 * @return SellingStatusType
	 */
	function getSellingStatus()
	{
		return $this->SellingStatus;
	}
	/**
	 * @return void
	 * @param SellingStatusType $value 
	 */
	function setSellingStatus($value)
	{
		$this->SellingStatus = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('VariationType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'SKU' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'StartPrice' =>
					array(
						'required' => false,
						'type' => 'AmountType',
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
					'VariationSpecifics' =>
					array(
						'required' => false,
						'type' => 'NameValueListArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'QuantitySold' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellingStatus' =>
					array(
						'required' => false,
						'type' => 'SellingStatusType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
