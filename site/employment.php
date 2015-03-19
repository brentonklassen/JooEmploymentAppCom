<?php
/**
* @package Joomla.Administrator
* @subpackage com_employment
*/
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.controller');

// Get an instance of the controller prefixed by Employment
$controller = JControllerLegacy::getInstance('Employment');
 
// Perform the Request task
$controller->execute(JFactory::getApplication()->input->getCmd('task'));
 
// Redirect if set by the controller
$controller->redirect();
