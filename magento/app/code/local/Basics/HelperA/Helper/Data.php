<?php

class Basics_HelperA_Helper_Data
    extends Mage_Core_Helper_Abstract
{
    /**
     * To use this function outside, call:
     * Mage::helper('basics_helperA')->myHelper()
     *
     * 'basics_helperA' must match the name of the helper node in config.xml
     */
    public function myHelper()
    {
        echo 'In ' . __METHOD__;
    }
}