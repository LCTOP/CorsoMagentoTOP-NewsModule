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

class Calamandrei_News_Block_Adminhtml_Category_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
    /**
     * __construct
     * Calamandrei_News_Block_Adminhtml_Category_Edit_Tabs constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setId('category_edit_tabs');
        $this->setDestElementId('category_edit_from');
    }

    /**
     * _beforeToHtml
     */
    protected function _beforeToHtml()
    {
        $this->addTab('Category Details', array(
            'label' => $this->__('Details'),
            'title' => $this->__('Details')
        ));
        parent::_beforeToHtml();
    }

}
