<?php
/**
 * Calamandrei News
 */

/**
 * Calamandrei News Model Resource Category
 *
 * Category Resource Model
 *
 * @author Lorenzo Calamandrei <lorenzo.calamandrei@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */

class Calamandrei_News_Model_Resource_Category extends Mage_Core_Model_Resource_Db_Abstract
{

    /**
     * _construct
     */
    protected function _construct()
    {
        $this->_init('calamandrei_news/category', 'category_id');
    }

}

