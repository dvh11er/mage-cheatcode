<?php

class Basics_ModelA_Model_MyModel
    extends Mage_Core_Model_Abstract
{
    /**
     * To use this function outside, call:
     * Mage::getModel('basics_modelA/myModel')->myAction()
     *
     * 'basics_modelA' must match the name of the model node in config.xml:
     * config/global/models/basics_modelA
     */
    public function myAction()
    {
        echo 'In ' . __METHOD__;
    }
}