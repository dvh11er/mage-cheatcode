<?php

/**
 * To use this model, call:
 *  - Mage::getModel('basics_models/example')
 *
 * Above call will create a new instance of this class.
 *
 * The string 'basics_models' must match the name of the node in config.xml
 * with the path: config/global/models/basics_models.
 *
 * The string 'example' is the name of this file with the first letter in lower case.
 */
class Basics_Models_Model_Example
    extends Mage_Core_Model_Abstract
{
    public function myAction()
    {
        echo 'In ' . __METHOD__;
    }
}