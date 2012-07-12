<?php
/**
 * @version     1.0.0
 * @package     com_courses
 * @copyright   Copyright (C) 2012. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      iMaQma <support@imaqma.com> - http://www.imaqma.com
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controllerform');

/**
 * Course controller class.
 */
class CoursesControllerCourse extends JControllerForm
{

    function __construct() {
        $this->view_list = 'courses';
        parent::__construct();
    }

}