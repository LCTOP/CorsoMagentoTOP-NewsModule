<?php
/**
 * Calamandrei News
 */

/**
 * Calamandrei News Block Adminhtml Category Grid Renderer
 *
 * Category Grid Status renderer
 *
 * @author Lorenzo Calamandrei <lorenzo.calamandrei@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */

class Calamandrei_News_Block_Adminhtml_Category_Grid_Renderer_Status extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{

    /**
     * render
     * @param Varien_Object $row
     * @return string
     */
    public function render(Varien_Object $row)
    {
        if ($row->getData('status') == 0) {
            return '<span class="grid-severity-minor"><span>' . $this->__('Disabled') . '</span></span>';
        }
        elseif ($row->getData('status') == 1) {
            return '<span class="grid-severity-notice"><span>' . $this->__('Enabled') . '</span></span>';
        }
        return '<span class="grid-severity-major"><span>' . $this->__('Error') . '</span></span>';
        //return parent::render($row);
    }

}
