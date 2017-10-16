<?php

/**
 * Calamandrei News
 */

/**
 * Calamandrei News Story Block
 *
 * Story Block
 *
 * @author Lorenzo Calamandrei <lorenzo.calamandrei@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */

class Calamandrei_News_Block_Story extends Mage_Core_Block_Template
{
    /**
     * getStories
     * @return mixed
     */
    public function getStories()
    {
        if (!$this->getRequest()->getParam('category')) {
          return Mage::getModel('calamandrei_news/story')->getCollection()
              ->addFieldToFilter('status', array('eq', 1));
        }
        return Mage::getModel('calamandrei_news/story')->getCollection()
            ->addFieldToFilter('status', array('eq' => 1))
            ->addFieldToFilter('category_id', $this->getRequest()->getParam('category'));
    }
}
