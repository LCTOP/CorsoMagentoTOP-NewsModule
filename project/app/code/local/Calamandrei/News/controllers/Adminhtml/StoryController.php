<?php

/**
 * Calamandrei News
 */

/**
 * Calamandrei News Adminhtml Data
 *
 * Beckend Story Controller
 *
 * @author Lorenzo Calamandrei <lorenzo.calamandrei@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */

class Calamandrei_News_Adminhtml_StoryController extends Mage_Adminhtml_Controller_Action
{

    /**
     * indexAction
     */
    public function indexAction()
    {
        echo 'eccomi story'; die;
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
