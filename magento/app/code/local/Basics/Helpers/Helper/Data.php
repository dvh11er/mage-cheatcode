<?php

/**
 * To use this helper class, call:
 *  - Mage::helper('basics_helpers/data') or simply
 *  - Mage::helper('basics_helpers')
 *
 * The string 'basics_helpers' must match the name of the node in config.xml
 * with the path: config/global/helpers/basics_helpers. The string 'data' is
 * the name of this file with the first letter in lower case.
 *
 * Since this helper class is called 'Data', Magento will treat it as the default helper
 * within this module. Meaning, when calling this helper, we don't need to provide the class
 * specific portion (whatever follows after 'basics_helpers/'), as Magento will automatically
 * imply 'data'. This only works for helpers.
 */
class Basics_Helpers_Helper_Data
    extends Mage_Core_Helper_Abstract
{
    public function help()
    {
        echo 'In ' . __METHOD__;
    }
}