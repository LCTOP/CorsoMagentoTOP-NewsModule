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
     * newAction
     */
    public function newAction()
    {
       $this->_forward('edit');
    }

    /**
     * editAction
     */
    public function editAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    /**
     * saveAction
     * @return $this|Mage_Core_Controller_Varien_Action
     */
    public function saveAction()
    {
        if ($this->getRequest()->getParam('category_id')) {
            $model =  Mage::getModel('calamandrei_news/category')->load($this->getRequest()->getParam('category_id'));
            if (!$model instanceof Calamandrei_News_Model_Category) {
                Mage::getSingleton('adminhtml/session')->addError($this->__('There was an error when loading the category model'));
                return $this->_redirect('*/*/');
            }
        }
        else {
            $model =  Mage::getModel('calamandrei_news/category');
        }


        if (!$this->getRequest()->getParam('code') || !$this->getRequest()->getParam('name')) {
            Mage::getSingleton('adminhtml/session')->addError($this->__('Some required fields are missing'));
            return $this->_redirect('*/*/edit', array(
                'category_id' => $this->getRequest()->getParam('category_id')
            ));
        }

        try {
            $model->setCode($this->getRequest()->getParam('code'));
            $model->setName($this->getRequest()->getParam('name'));
            $model->setStatus($this->getRequest()->getParam('status') == 1 ? 1 : 0);
            $model->save();
        } catch (Exception $e) {
            Mage::logException($e);
            Mage::getSingleton('adminhtml/session')->addError($this->__('There was an error when deleting the category'));
            return $this->_redirect('*/*/');
        }

        Mage::getSingleton('adminhtml/session')->addSuccess($this->__('The category was successfully saved'));
        return $this->_redirect('*/*/');
    }

    /**
     * deleteAction
     * @return $this|Mage_Core_Controller_Varien_Action
     */
    public function deleteAction() {
       $category = Mage::getModel('calamandrei_news/category')->load($this->getRequest()->getParam('category_id'));
       if (!$category || !$category->getId()) {
           Mage::getSingleton('adminhtml/session')->addError($this->__('There was an error when loading the category'));
           return $this->_redirect('*/*/');
       }
       try {
           $category->delete();
       } catch (Exception $e) {
           Mage::logException($e);
           Mage::getSingleton('adminhtml/session')->addError($this->__('There was an error when deleting the category'));
           return $this->_redirect('*/*/');
       }
       Mage::getSingleton('adminhtml/session')->addSuccess($this->__('The category was successfully deleted'));
        return $this->_redirect('*/*/');
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
