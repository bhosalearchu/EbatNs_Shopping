<?php
// autogenerated file 10.09.2012 13:13
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * This type provides information about the weight, volume or other quantity 
 * measurement of a listed item so buyers can compare per-unit prices. The European 
 * Union requires listings for certain types of products to include the price per 
 * unit. eBay uses this information and the item's listed price to calculate and 
 * display the unit price on eBay EU sites. Sellers are responsible for providing 
 * this information per EU regulations when listing covered items. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/UnitInfoType.html
 *
 */
class UnitInfoType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $UnitType;
	/**
	 * @var int
	 */
	protected $UnitQuantity;

	/**
	 * @return string
	 */
	function getUnitType()
	{
		return $this->UnitType;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setUnitType($value)
	{
		$this->UnitType = $value;
	}
	/**
	 * @return int
	 */
	function getUnitQuantity()
	{
		return $this->UnitQuantity;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setUnitQuantity($value)
	{
		$this->UnitQuantity = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('UnitInfoType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'UnitType' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'UnitQuantity' =>
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
