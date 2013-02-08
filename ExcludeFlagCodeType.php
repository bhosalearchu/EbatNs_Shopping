<?php
// autogenerated file 18.03.2011 12:12
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * ExcludeFlagCodeType contains exclude flags for FindItemsAdvanced. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ExcludeFlagCodeType.html
 *
 * @property string AutoPay
 */
class ExcludeFlagCodeType extends EbatNs_FacetType
{
	const CodeType_AutoPay = 'AutoPay';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ExcludeFlagCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ExcludeFlagCodeType = new ExcludeFlagCodeType();

?>
