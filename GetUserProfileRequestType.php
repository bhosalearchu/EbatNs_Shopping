<?php
// autogenerated file 22.07.2011 10:24
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Retrieves user information based on the user ID you specify. The response 
 * contains detailed information about a user. You can specify the types of user 
 * information you want in the response. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetUserProfileRequestType.html
 *
 */
class GetUserProfileRequestType extends AbstractRequestType
{
	/**
	 * @var string
	 */
	protected $UserID;
	/**
	 * @var string
	 */
	protected $IncludeSelector;

	/**
	 * @return string
	 */
	function getUserID()
	{
		return $this->UserID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setUserID($value)
	{
		$this->UserID = $value;
	}
	/**
	 * @return string
	 */
	function getIncludeSelector()
	{
		return $this->IncludeSelector;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setIncludeSelector($value)
	{
		$this->IncludeSelector = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetUserProfileRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'UserID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'IncludeSelector' =>
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
