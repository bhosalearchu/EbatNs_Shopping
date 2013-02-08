<?php
// autogenerated file 10.09.2012 13:13
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Type for the return policy details of an item. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ReturnPolicyType.html
 *
 */
class ReturnPolicyType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $Refund;
	/**
	 * @var string
	 */
	protected $ReturnsWithin;
	/**
	 * @var string
	 */
	protected $ReturnsAccepted;
	/**
	 * @var string
	 */
	protected $Description;
	/**
	 * @var string
	 */
	protected $WarrantyOffered;
	/**
	 * @var string
	 */
	protected $WarrantyType;
	/**
	 * @var string
	 */
	protected $WarrantyDuration;
	/**
	 * @var string
	 */
	protected $EAN;
	/**
	 * @var string
	 */
	protected $ShippingCostPaidBy;

	/**
	 * @return string
	 */
	function getRefund()
	{
		return $this->Refund;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setRefund($value)
	{
		$this->Refund = $value;
	}
	/**
	 * @return string
	 */
	function getReturnsWithin()
	{
		return $this->ReturnsWithin;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setReturnsWithin($value)
	{
		$this->ReturnsWithin = $value;
	}
	/**
	 * @return string
	 */
	function getReturnsAccepted()
	{
		return $this->ReturnsAccepted;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setReturnsAccepted($value)
	{
		$this->ReturnsAccepted = $value;
	}
	/**
	 * @return string
	 */
	function getDescription()
	{
		return $this->Description;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDescription($value)
	{
		$this->Description = $value;
	}
	/**
	 * @return string
	 */
	function getWarrantyOffered()
	{
		return $this->WarrantyOffered;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setWarrantyOffered($value)
	{
		$this->WarrantyOffered = $value;
	}
	/**
	 * @return string
	 */
	function getWarrantyType()
	{
		return $this->WarrantyType;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setWarrantyType($value)
	{
		$this->WarrantyType = $value;
	}
	/**
	 * @return string
	 */
	function getWarrantyDuration()
	{
		return $this->WarrantyDuration;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setWarrantyDuration($value)
	{
		$this->WarrantyDuration = $value;
	}
	/**
	 * @return string
	 */
	function getEAN()
	{
		return $this->EAN;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setEAN($value)
	{
		$this->EAN = $value;
	}
	/**
	 * @return string
	 */
	function getShippingCostPaidBy()
	{
		return $this->ShippingCostPaidBy;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setShippingCostPaidBy($value)
	{
		$this->ShippingCostPaidBy = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ReturnPolicyType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Refund' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ReturnsWithin' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ReturnsAccepted' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Description' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'WarrantyOffered' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'WarrantyType' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'WarrantyDuration' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'EAN' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingCostPaidBy' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
