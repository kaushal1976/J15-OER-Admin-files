<?php 
// no direct access
defined('_JEXEC') or die('Restricted access');

/**
* ConfMgt abstracts Table class
*
* @package		Joomla
* @subpackage	OER
* @since 1.5
*/
class Tableoer extends JTable
{
	/**
	 * Primary Key
	 *
	 * @var int
	 */
	var $id = null;

	/**
	 * @var int
	 */
	var $userid = null;

	/**
	 * @var Varchar
	 */
	var $title = null;

	/**
	 * @var bool
	 */
	var $description = null;

	/**
	 * @var sText
	 */
	var $oertype = null;

	/**
	 * @var Varchar
	 */
	var $keywords = null;

	/**
	 * @var Varchar
	 */
	var $date = null;
	
	/**
	 * @var Varchar
	 */	
	var $filedata=null;
	/**
	 * @var Varchar
	 */	
	var $programtag=null;
	/**
	 * @var Varchar
	 */	
	var $projecttag=null;
	/**
	 * @var Varchar
	 */	
	var $authors=null;
	/**
	 * @var Varchar
	 */	
	var $licence=null;
	/**
	 * @var Boolean
	 */	
	var $agree=null;
	/**
	 * @var Varchar
	 */	
	var $group=null;
	
	/**
	 * @var Varchar
	 */	
	var $language=null;
	
	/**
	 * @var Bool
	 */	
	var $publish=null;

	/**
	 * Constructor
	 *
	 * @param object Database connector object
	 * @since 1.0
	 */
	function __construct(& $db) {
		parent::__construct('#__oer_oers', 'id', $db);
	}
	
	function check() {
		
    if($this->title == ''){
		
        $this->setError(JText::_('This record requires a title')); 
    }
	
	if($this->authors == ''){
		
        $this->setError(JText::_('Please enter your author details'));
    }
	
	if (!$this->getError() ==null )
	{
		return false;
	}
	
    return true;
	}
	
}