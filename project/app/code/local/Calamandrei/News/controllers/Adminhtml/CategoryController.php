<?php

/**
 * Calamandrei News
 */

/**
 * Calamandrei News Adminhtml Data
 *
 * Beckend Category Controller
 *
 * @author Lorenzo Calamandrei <lorenzo.calamandrei@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */

class Calamandrei_News_Adminhtml_CategoryController extends Mage_Adminhtml_Controller_Action
{

    /**
     * indexAction
     */
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    /**
     * _isAllowed
     * @return mixed
     */
    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('calamandrei_news');
    }

}

