<?php
/**
 * Calamandrei News
 */

/**
 * Calamandrei News Block Adminhtml Category
 *
 * Category Grid
 *
 * @author Lorenzo Calamandrei <lorenzo.calamandrei@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */

class Calamandrei_News_Block_Adminhtml_Category extends Mage_Adminhtml_Block_Widget_Grid_Container
{

    /**
     * Calamandrei_News_Block_Adminhtml_CategoryController constructor.
     */
    public function __construct()
    {
        $this->_blockGroup = 'calamandrei_news';
        $this->_controller = 'adminhtml_category';
        $this->_headerText = $this->__('News Categories');
        parent::__construct();
    }

}

