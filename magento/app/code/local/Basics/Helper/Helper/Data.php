<?php

/**
 * To use this helper class, call:
 *  - Mage::helper('basics_helper/data') or simply
 *  - Mage::helper('basics_helper')
 *
 * 'basics_helper' must match the name of the node in config.xml
 * with the path: config/global/helpers/basics_helper
 *
 * Since this helper class is called "Data", Magento will treat it as the default helper
 * within this module. Meaning, when calling this helper we can drop the class specific portion,
 * the part that follows after 'basics_helper/'. So, whenever the class specific portion is
 * left out, Magento will imply 'data'.
 */
class Basics_Helper_Helper_Data
    extends Mage_Core_Helper_Abstract
{
    public function myHelper()
    {
        echo 'In ' . __METHOD__;
    }
}