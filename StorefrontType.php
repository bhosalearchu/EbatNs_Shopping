<?php
// autogenerated file 15.11.2010 08:53
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Contains information related to the item in the context ofa seller's eBay Store. 
 * Applicable for auction format, Basic Fixed Price,and Store Inventory format 
 * items listed by eBay Stores sellers. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/StorefrontType.html
 *
 */
class StorefrontType extends EbatNs_ComplexType
{
	/**
	 * @var anyURI
	 */
	protected $StoreURL;
	/**
	 * @var string
	 */
	protected $StoreName;

	/**
	 * @return anyURI
	 */
	function getStoreURL()
	{
		return $this->StoreURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setStoreURL($value)
	{
		$this->StoreURL = $value;
	}
	/**
	 * @return string
	 */
	function getStoreName()
	{
		return $this->StoreName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setStoreName($value)
	{
		$this->StoreName = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('StorefrontType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'StoreURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'StoreName' =>
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
