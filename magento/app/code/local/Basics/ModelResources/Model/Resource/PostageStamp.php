<?php

class Basics_ModelResources_Model_Resource_PostageStamp
    extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('basics_modelResources/postageStamp', 'postagestamp_id');
    }
}