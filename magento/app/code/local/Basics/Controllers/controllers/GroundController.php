<?php
/**
 * To send a request to this controller, call:
 *  - http://your.domain/basics_controllers_frontname/ground/index or simply
 *  - http://your.domain/basics_controllers_frontname
 *
 * When only supplying the frontName in the request URL, Magento will imply you
 * called the 'Index' controller and the 'index' action.
 */
class Basics_Controllers_IndexController
    extends Mage_Core_Controller_Front_Action
{
    /*
     * Every controller method must have an 'Action' suffix.
     */
    public function indexAction()
    {
        echo 'In ' . __METHOD__;
    }
}