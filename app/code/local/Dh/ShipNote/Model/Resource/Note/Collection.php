<?php

/**
 * @category   Dh
 * @package    Dh_ShipNote
 * @copyright  Copyright (c) 2013 Drew Hunter (http://drewhunter.net)
 */
class Dh_ShipNote_Model_Resource_Note_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    protected function _construct()
    {
        $this->_init('shipnote/note');
    }
}
