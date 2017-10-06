<?php
/**
 * Calamandrei News
 */

/**
 * Calamandrei News Model Resource Category Collection
 *
 * Category Resource Category Collection
 *
 * @author Lorenzo Calamandrei <lorenzo.calamandrei@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */

class Calamandrei_News_Model_Resource_Category_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{

    /**
     * _construct
     */
    protected function _construct()
    {
        $this->_init('calamandrei_news/category');
    }

}

