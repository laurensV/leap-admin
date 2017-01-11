<?php
//
namespace Leap\Plugins\Admin\Controllers;

use Leap\Core\Controller;

class AdminController extends Controller
{
    public function hasAccess(): bool
    {
        return false;
    }

    public function init()
    {
        $links          = array();
        $links['admin'] = array("link" => "admin/dashboard", "name" => "Dashboard", "description" => "Here comes the description");
        $links['test1'] = array("link" => "#", "name" => "Test", "description" => "Here comes the description");
        $links['test2'] = array("link" => "#", "name" => "Test", "description" => "Here comes the description");
        $links['test3'] = array("link" => "#", "name" => "Test", "description" => "Here comes the description");
        $links['test4'] = array("link" => "#", "name" => "Test", "description" => "Here comes the description");
        $links['test5'] = array("link" => "#", "name" => "Test", "description" => "Here comes the description");

        $this->hooks->fire("hook_adminLinks", array(&$links));
        ksort($links);
        $this->set('links', $links);
    }
}
