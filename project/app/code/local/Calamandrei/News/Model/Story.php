<?php
/**
 * Calamandrei News
 */

/**
 * Calamandrei News Model story
 *
 * story Model
 *
 * @method Calamandrei_News_Model_Story getTitle()
 * @method setTitle(string $title)
 * @method Calamandrei_News_Model_Story getContent()
 * @method setContent(string $content)
 * @method Calamandrei_News_Model_Story getStatus()
 * @method setStatus(bool $status)
 * @method int getCategoryId()
 * @method setCategoryId(int $id)
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
     * $_eventPrefix
     * @var string $_eventPrefix Prefix of the event (override of Mage_Core_Model_Abstract var $_eventPrefix)
     */
    protected $_eventPrefix = 'calamandrei_news_story';

    /**
     * $_eventObject
     * @var string $_eventObject Prefix of the object (only in the observer)
     */
    protected $_eventObject = 'story';

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
        $this->setUpdatedAt(Mage::getSingleton('core/date')->gmtDate());
        return $this;
    }

    /**
     * getCategory
     *
     * Get Category object.
     * @return bool|Calamandrei_News_Model_Category|Mage_Core_Model_Abstract
     */
    public function getCategory()
    {
        $category = Mage::getModel('calamandrei_news/category')->load($this->getCategoryId());
        if($category && $category->getId()) {
            return $category;
        }
        return false;
    }

    /**
     * setCategory
     *
     * Set Category Id from Category object.
     * @param Calamandrei_News_Model_Category $category
     */
    public function setCategory(Calamandrei_News_Model_Category $category)
    {
        $this->setCategoryId($category->getId());
    }

}

