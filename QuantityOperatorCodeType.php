<?php
// autogenerated file 18.03.2011 12:12
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/QuantityOperatorCodeType.html
 *
 * @property string LessThan
 * @property string LessThanOrEqual
 * @property string Equal
 * @property string GreaterThan
 * @property string GreaterThanOrEqual
 * @property string CustomCode
 */
class QuantityOperatorCodeType extends EbatNs_FacetType
{
	const CodeType_LessThan = 'LessThan';
	const CodeType_LessThanOrEqual = 'LessThanOrEqual';
	const CodeType_Equal = 'Equal';
	const CodeType_GreaterThan = 'GreaterThan';
	const CodeType_GreaterThanOrEqual = 'GreaterThanOrEqual';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('QuantityOperatorCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_QuantityOperatorCodeType = new QuantityOperatorCodeType();

?>
