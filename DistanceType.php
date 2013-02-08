<?php
// autogenerated file 15.11.2010 08:53
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Distance, used for a proximity search. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DistanceType.html
 *
 */
class DistanceType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DistanceType', 'http://www.w3.org/2001/XMLSchema');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}	$this->_attributes = array_merge($this->_attributes,
		array(
			'unit' =>
			array(
				'name' => 'unit',
				'type' => 'string',
				'use' => 'required'
			)
		));

	}
}
?>
