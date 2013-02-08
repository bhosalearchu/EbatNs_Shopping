<?php
// autogenerated file 22.07.2011 10:24
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';
require_once 'SimpleItemType.php';

/**
 * Returns status information for all items in a list. Some of the Item information 
 * is returned in an SimpleItemArrayType object, that can include zero, one, or 
 * multiple ItemType objects. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetItemStatusResponseType.html
 *
 */
class GetItemStatusResponseType extends AbstractResponseType
{
	/**
	 * @var SimpleItemType
	 */
	protected $Item;

	/**
	 * @return SimpleItemType
	 * @param integer $index 
	 */
	function getItem($index = null)
	{
		if ($index !== null) {
			return $this->Item[$index];
		} else {
			return $this->Item;
		}
	}
	/**
	 * @return void
	 * @param SimpleItemType $value 
	 * @param  $index 
	 */
	function setItem($value, $index = null)
	{
		if ($index !== null) {
			$this->Item[$index] = $value;
		} else {
			$this->Item = $value;
		}
	}
	/**
	 * @return void
	 * @param SimpleItemType $value 
	 */
	function addItem($value)
	{
		$this->Item[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetItemStatusResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Item' =>
					array(
						'required' => false,
						'type' => 'SimpleItemType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
