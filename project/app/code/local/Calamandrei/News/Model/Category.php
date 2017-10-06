<?php
/**
 * Calamandrei News
 */

/**
 * Calamandrei News Model Category
 *
 * Category Model
 *
 * @method Calamandrei_News_Model_Category getCode()
 * @method setCode(string $code)
 * @method Calamandrei_News_Model_Category getName()
 * @method setName(string $name)
 * @method Calamandrei_News_Model_Category getStatus()
 * @method setStatus(bool $status)
 * @method Calamandrei_News_Model_Category getCreatedAt()
 * @method Calamandrei_News_Model_Category getUpdatedAt()
 * @method setUpdatedAt(string $updatedAt)
 *
 * @author Lorenzo Calamandrei <lorenzo.calamandrei@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */

class Calamandrei_News_Model_Category extends Mage_Core_Model_Abstract
{

    /**
     * _construct
     */
    protected function _construct()
    {
        $this->_init('calamandrei_news/category');
    }

    /**
     * _beforeSave
     *
     * @return Mage_Core_Model_Abstract
     */
    protected function _beforeSave()
    {
        parent::_beforeSave();
        $this->setUpdatedAt(Mage::getSingleton('core/date')->gmtDate());
        return $this;
    }

}

