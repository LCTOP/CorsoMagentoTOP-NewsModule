<?php

/**
 * Calamandrei News
 */

/**
 * Calamandrei News Adminhtml Edit Block
 *
 * Category Edit Block
 *
 * @author Lorenzo Calamandrei <lorenzo.calamandrei@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */

class Calamandrei_News_Block_Adminhtml_Category_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    /**
     * __construct
     * Calamandrei_News_Block_Adminhtml_Category_Edit constructor.
     */
    public function __construct()
    {
        $this->_objectId = 'category_id';
        $this->_blockGroup = 'calamandrei_news';
        $this->_controller = 'adminhtml_category';
        parent::__construct();
    }

    /**
     * getHeaderText
     * @return string
     */
    public function getHeaderText()
    {
        return $this->__('Category Details');
    }
}

