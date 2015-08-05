<?php

/**
 * To create a new instance of this model class, call:
 *  - Mage::getModel('basics_modelResources/postageStamp')
 *
 * The string 'basics_modelResources' must match the name of the node in config.xml
 * with the path: config/global/models/basics_modelResources.
 *
 * The string 'postageStamp' must match the name of this file.
 * The first letter will automatically be converted to upper case.
 */
class Basics_ModelResources_Model_PostageStamp
    extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        $this->_init('basics_modelResources/postageStamp');
    }
}