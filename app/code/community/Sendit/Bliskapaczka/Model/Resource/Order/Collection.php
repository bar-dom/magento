<?php

class Sendit_Bliskapaczka_Model_Resource_Order_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    public function _construct()
    {
        $this->_init('sendit_bliskapaczka/order');
    }
}