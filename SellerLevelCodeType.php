<?php
// autogenerated file 22.07.2011 10:23
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * SellerLevelCodeType - Type declaration to be used by other schema.Indicates the 
 * user's eBay PowerSeller tier. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellerLevelCodeType.html
 *
 * @property string Bronze
 * @property string Silver
 * @property string Gold
 * @property string Platinum
 * @property string Titanium
 * @property string Diamond
 * @property string None
 * @property string CustomCode
 */
class SellerLevelCodeType extends EbatNs_FacetType
{
	const CodeType_Bronze = 'Bronze';
	const CodeType_Silver = 'Silver';
	const CodeType_Gold = 'Gold';
	const CodeType_Platinum = 'Platinum';
	const CodeType_Titanium = 'Titanium';
	const CodeType_Diamond = 'Diamond';
	const CodeType_None = 'None';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellerLevelCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SellerLevelCodeType = new SellerLevelCodeType();

?>
