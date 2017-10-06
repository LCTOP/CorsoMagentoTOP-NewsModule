<?php
/**
 * Calamandrei News
 */

/**
 * Calamandrei News Model story
 *
 * story Model
 *
 * @method Calamandrei_News_Model_story getCode()
 * @method setCode(string $code)
 * @method Calamandrei_News_Model_story getName()
 * @method setName(string $name)
 * @method Calamandrei_News_Model_story getStatus()
 * @method setStatus(bool $status)
 * @method Calamandrei_News_Model_story getCreatedAt()
 * @method Calamandrei_News_Model_story getUpdatedAt()
 * @method setUpdatedAt(string $updatedAt)
 *
 * @author Lorenzo Calamandrei <lorenzo.calamandrei@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */

class Calamandrei_News_Model_story extends Mage_Core_Model_Abstract
{

    /**
     * _construct
     */
    protected function _construct()
    {
        $this->_init('calamandrei_news/story');
    }

    /**
     * _beforeSave
     *
     * @return Mage_Core_Model_Abstract
     */
    protected function _beforeSave()
    {
        return parent::_beforeSave();
        $this->setUpdatedAt(Mage::getSingleton('core/date')->getGmt());
        return $this;
    }

}

