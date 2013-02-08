<?php
// autogenerated file 29.12.2011 13:33
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * A name and corresponding value (a name/value pair). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/NameValueListType.html
 *
 */
class NameValueListType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $Name;
	/**
	 * @var string
	 */
	protected $Value;

	/**
	 * @return string
	 */
	function getName()
	{
		return $this->Name;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setName($value)
	{
		$this->Name = $value;
	}
	/**
	 * @return string
	 * @param integer $index 
	 */
	function getValue($index = null)
	{
		if ($index !== null) {
			return $this->Value[$index];
		} else {
			return $this->Value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setValue($value, $index = null)
	{
		if ($index !== null) {
			$this->Value[$index] = $value;
		} else {
			$this->Value = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addValue($value)
	{
		$this->Value[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('NameValueListType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Name' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Value' =>
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
