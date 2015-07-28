<?php


class Basics_Controllers_IndexController
    extends Mage_Core_Controller_Front_Action
{
    /*
     * To send a request to this controller method, call:
     *  1) http://your.domain/basicsControllersFrontName/index/index or
     *  2) http://your.domain/basicsControllersFrontName/index/ or
     *  3) http://your.domain/basicsControllersFrontName
     *
     * When not explicitly specifying a controller or action name after the frontName,
     * (see example 3), Magento will default to 'Index' controller and 'index' action.
     */
    public function indexAction()
    {
        echo 'In ' . __METHOD__;
    }


    /*
     * To send a request to this controller method, call:
     *  - http://your.domain/basicsControllersFrontName/index/reindex
     */
    public function reindexAction()
    {
        echo 'In ' . __METHOD__;
    }
}