<?php
/**
 *
 */
class Basics_Controllers_IndexController
    extends Mage_Core_Controller_Front_Action
{
    /*
     * To send a request to this controller method, call:
     *  - http://your.domain/basics_controllers_frontname/index/index or
     *  - http://your.domain/basics_controllers_frontname/index/ or
     *  - http://your.domain/basics_controllers_frontname
     *
     * When not explicitly supplying a controller name or action name in the request URL,
     * Magento will imply you meant the 'Index' controller and the 'index' action respectively.
     */
    public function indexAction()
    {
        echo 'In ' . __METHOD__;
    }


    /*
     * To send a request to this controller method, call:
     *  - http://your.domain/basics_controllers_frontname/index/reindex
     */
    public function reindexAction()
    {
        echo 'In ' . __METHOD__;
    }
}