<?php
/**
 * To use this helper class, call:
 *  - Mage::helper('basics_helpers/minion')
 *
 * The string 'basics_helpers' must match the name of the node in config.xml
 * with the path: config/global/helpers/basics_helpers. The string 'minion' is
 * the name of this file with the first letter in lower case.
 */
class Basics_Helpers_Helper_Minion
    extends Mage_Core_Helper_Abstract
{
    public function carryOutTask()
    {
        echo 'In ' . __METHOD__;
    }
}