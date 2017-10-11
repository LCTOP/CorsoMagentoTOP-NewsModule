<?php
/**
 * Calamandrei News
 */

/**
 * Calamandrei News Model Surce Status
 *
 * @author Lorenzo Calamandrei <lorenzo.calamandrei@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */

class Calamandrei_News_Model_Source_Status
{

    /**
     * toOptionArray
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array(
                'value' => 0,
                'label' => Mage::helper('calamandrei_news')->__('Disabled')
            ),
            array(
                'value' => 1,
                'label' => Mage::helper('calamandrei_news')->__('Enabled')
            )
        );
    }

}

