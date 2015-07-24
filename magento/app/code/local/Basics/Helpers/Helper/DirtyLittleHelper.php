<?php
/**
 * To use this helper class, call:
 *  - Mage::helper('basics_helpers/dirtyLittleHelper')
 *
 * The string 'basics_helpers' must match the name of the node in config.xml
 * with the path: config/global/helpers/basics_helpers. The string 'dirtyLittleHelper' is
 * the name of this file with the first letter in lower case.
 */
class Basics_Helpers_Helper_DirtyLittleHelper
    extends Mage_Core_Helper_Abstract
{
    public function fulfillTask()
    {
        echo 'In ' . __METHOD__;
    }
}