<?php
/**
* @package Joomla.Administrator
* @subpackage com_employment
*/
 
// No direct access to this file
defined('_JEXEC') or die;

jimport('joomla.application.component.view');

/**
* HTML View class for the Employment Component
*
* @since 0.0.1
*/
class EmploymentViewApplication extends JViewLegacy
{
        public function display($tpl = null) 
        {
                // Assign data to the view
                $this->msg = 'Hello World';
 
                // Display the view
                parent::display($tpl);
        }
}
