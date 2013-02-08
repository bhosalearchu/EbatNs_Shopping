<?php
// autogenerated file 22.07.2011 10:23
// $Id: $
// $Log: $
//
//
require_once 'SalesTaxType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'InsuranceOptionCodeType.php';
require_once 'ShippingServiceOptionType.php';
require_once 'AmountType.php';
require_once 'TaxTableType.php';
require_once 'InternationalShippingServiceOptionType.php';

/**
 * Type for the shipping-related details for an item or transaction. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ShippingDetailsType.html
 *
 */
class ShippingDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var boolean
	 */
	protected $GetItFast;
	/**
	 * @var AmountType
	 */
	protected $InsuranceCost;
	/**
	 * @var InsuranceOptionCodeType
	 */
	protected $InsuranceOption;
	/**
	 * @var InternationalShippingServiceOptionType
	 */
	protected $InternationalShippingServiceOption;
	/**
	 * @var SalesTaxType
	 */
	protected $SalesTax;
	/**
	 * @var string
	 */
	protected $ShippingRateErrorMessage;
	/**
	 * @var ShippingServiceOptionType
	 */
	protected $ShippingServiceOption;
	/**
	 * @var TaxTableType
	 */
	protected $TaxTable;
	/**
	 * @var AmountType
	 */
	protected $InternationalInsuranceCost;
	/**
	 * @var InsuranceOptionCodeType
	 */
	protected $InternationalInsuranceOption;
	/**
	 * @var AmountType
	 */
	protected $CODCost;
	/**
	 * @var string
	 */
	protected $ExcludeShipToLocation;

	/**
	 * @return boolean
	 */
	function getGetItFast()
	{
		return $this->GetItFast;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setGetItFast($value)
	{
		$this->GetItFast = $value;
	}
	/**
	 * @return AmountType
	 */
	function getInsuranceCost()
	{
		return $this->InsuranceCost;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setInsuranceCost($value)
	{
		$this->InsuranceCost = $value;
	}
	/**
	 * @return InsuranceOptionCodeType
	 */
	function getInsuranceOption()
	{
		return $this->InsuranceOption;
	}
	/**
	 * @return void
	 * @param InsuranceOptionCodeType $value 
	 */
	function setInsuranceOption($value)
	{
		$this->InsuranceOption = $value;
	}
	/**
	 * @return InternationalShippingServiceOptionType
	 * @param integer $index 
	 */
	function getInternationalShippingServiceOption($index = null)
	{
		if ($index !== null) {
			return $this->InternationalShippingServiceOption[$index];
		} else {
			return $this->InternationalShippingServiceOption;
		}
	}
	/**
	 * @return void
	 * @param InternationalShippingServiceOptionType $value 
	 * @param  $index 
	 */
	function setInternationalShippingServiceOption($value, $index = null)
	{
		if ($index !== null) {
			$this->InternationalShippingServiceOption[$index] = $value;
		} else {
			$this->InternationalShippingServiceOption = $value;
		}
	}
	/**
	 * @return void
	 * @param InternationalShippingServiceOptionType $value 
	 */
	function addInternationalShippingServiceOption($value)
	{
		$this->InternationalShippingServiceOption[] = $value;
	}
	/**
	 * @return SalesTaxType
	 */
	function getSalesTax()
	{
		return $this->SalesTax;
	}
	/**
	 * @return void
	 * @param SalesTaxType $value 
	 */
	function setSalesTax($value)
	{
		$this->SalesTax = $value;
	}
	/**
	 * @return string
	 */
	function getShippingRateErrorMessage()
	{
		return $this->ShippingRateErrorMessage;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setShippingRateErrorMessage($value)
	{
		$this->ShippingRateErrorMessage = $value;
	}
	/**
	 * @return ShippingServiceOptionType
	 * @param integer $index 
	 */
	function getShippingServiceOption($index = null)
	{
		if ($index !== null) {
			return $this->ShippingServiceOption[$index];
		} else {
			return $this->ShippingServiceOption;
		}
	}
	/**
	 * @return void
	 * @param ShippingServiceOptionType $value 
	 * @param  $index 
	 */
	function setShippingServiceOption($value, $index = null)
	{
		if ($index !== null) {
			$this->ShippingServiceOption[$index] = $value;
		} else {
			$this->ShippingServiceOption = $value;
		}
	}
	/**
	 * @return void
	 * @param ShippingServiceOptionType $value 
	 */
	function addShippingServiceOption($value)
	{
		$this->ShippingServiceOption[] = $value;
	}
	/**
	 * @return TaxTableType
	 */
	function getTaxTable()
	{
		return $this->TaxTable;
	}
	/**
	 * @return void
	 * @param TaxTableType $value 
	 */
	function setTaxTable($value)
	{
		$this->TaxTable = $value;
	}
	/**
	 * @return AmountType
	 */
	function getInternationalInsuranceCost()
	{
		return $this->InternationalInsuranceCost;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setInternationalInsuranceCost($value)
	{
		$this->InternationalInsuranceCost = $value;
	}
	/**
	 * @return InsuranceOptionCodeType
	 */
	function getInternationalInsuranceOption()
	{
		return $this->InternationalInsuranceOption;
	}
	/**
	 * @return void
	 * @param InsuranceOptionCodeType $value 
	 */
	function setInternationalInsuranceOption($value)
	{
		$this->InternationalInsuranceOption = $value;
	}
	/**
	 * @return AmountType
	 */
	function getCODCost()
	{
		return $this->CODCost;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setCODCost($value)
	{
		$this->CODCost = $value;
	}
	/**
	 * @return string
	 * @param integer $index 
	 */
	function getExcludeShipToLocation($index = null)
	{
		if ($index !== null) {
			return $this->ExcludeShipToLocation[$index];
		} else {
			return $this->ExcludeShipToLocation;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setExcludeShipToLocation($value, $index = null)
	{
		if ($index !== null) {
			$this->ExcludeShipToLocation[$index] = $value;
		} else {
			$this->ExcludeShipToLocation = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addExcludeShipToLocation($value)
	{
		$this->ExcludeShipToLocation[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ShippingDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'GetItFast' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'InsuranceCost' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'InsuranceOption' =>
					array(
						'required' => false,
						'type' => 'InsuranceOptionCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'InternationalShippingServiceOption' =>
					array(
						'required' => false,
						'type' => 'InternationalShippingServiceOptionType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'SalesTax' =>
					array(
						'required' => false,
						'type' => 'SalesTaxType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingRateErrorMessage' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingServiceOption' =>
					array(
						'required' => false,
						'type' => 'ShippingServiceOptionType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'TaxTable' =>
					array(
						'required' => false,
						'type' => 'TaxTableType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'InternationalInsuranceCost' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'InternationalInsuranceOption' =>
					array(
						'required' => false,
						'type' => 'InsuranceOptionCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CODCost' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ExcludeShipToLocation' =>
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
