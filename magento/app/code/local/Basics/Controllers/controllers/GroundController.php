<?php

class Basics_Controllers_GroundController
    extends Mage_Core_Controller_Front_Action
{
    /*
     * To send a request to this controller, call:
     *  1) http://your.domain/basics_controllers_frontname/ground/index or simply
     *  2) http://your.domain/basics_controllers_frontname/ground
     */
    public function indexAction()
    {
        echo 'In ' . __METHOD__;
    }
}