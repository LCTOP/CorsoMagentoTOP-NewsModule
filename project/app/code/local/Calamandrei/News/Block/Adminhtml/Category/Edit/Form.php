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

class Calamandrei_News_Block_Adminhtml_Category_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{

    /**
     * Calamandrei_News_Block_Adminhtml_Category_Edit_Form constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setId('category_edit_form');
    }

    /**
     * _prepareForm
     */
    protected function _prepareForm()
    {
        $form = new Varien_Data_Form(array(
            'id' => 'edit_form',
            'method' => 'post',
            'action' => $this->getUrl('*/*/save', array(
                'category_id' => $this->getRequest()->getParam('category_id')
            )),
            'enctype' => 'multipart/form-data'
        ));

        $form->setHtmlIdPrefix('category_');

        $fieldset = $form->addFieldset(
            'general',
            array(
                'legend' => $this->__('General Information'),
                'class' => 'fieldset-wide'
            )
        );

        $fieldset->addField(
            'code',
            'text',
            array(
                'name' => 'code',
                'label' => $this->__('Code'),
                'title' => $this->__('Code'),
                'required' => true
            )
        );

        $fieldset->addField(
            'name',
            'text',
            array(
                'name' => 'name',
                'label' => $this->__('Name'),
                'title' => $this->__('Name'),
                'required' => true
            )
        );

        $fieldset->addField(
            'status',
            'select',
            array(
                'name' => 'status',
                'values' => Mage::getModel('calamandrei_news/source_status')->toOptionArray(),
                'label' => $this->__('Status'),
                'title' => $this->__('Status'),
                'required' => true
            )
        );

        if ($this->getRequest()->getParam('category_id')) {
            $model = Mage::getModel('calamandrei_news/category')->load($this->getRequest()->getParam('category_id'));
            $form->setValues($model);
        }

        $form->setUseContainer(true);
        $this->setForm($form);
        parent::_prepareForm();

    }

}

