<?php
/**
 * CommerceLab Co.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the CommerceLab License Agreement
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://commerce-lab.com/LICENSE.txt
 *
 * @category   CommerceLab
 * @package    CommerceLab_Mcenter
 * @copyright  Copyright (c) 2012 CommerceLab Co. (http://commerce-lab.com)
 * @license    http://commerce-lab.com/LICENSE.txt
 */

class CommerceLab_Mcenter_Block_Adminhtml_Category_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        $this->_objectId = 'id';
        $this->_blockGroup = 'clmcenter';
        $this->_controller = 'adminhtml_category';

        parent::__construct();

        $this->_updateButton('save', 'label', Mage::helper('clmcenter')->__('Сохранить категорию'));
        $this->_updateButton('delete', 'label', Mage::helper('clmcenter')->__('Удалить категорию'));
        if ($this->checkLimit() < 5) {
            if ($this->getRequest()->getParam('parent_id') == null && $this->getRequest()->getParam('id') != null) {
                $this->_addButton('addsubcategory', array(
                    'label'     => Mage::helper('adminhtml')->__('Добавить подкатегорию'),
                    'onclick'   => 'addSubCategory()',
                    'class'     => 'save',
                ), -100);
            }
        }

        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Сохранить и продолжить редактирование'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -200);
        $catId = $this->getUrl('*/*/new', array('parent_id' => $this->getRequest()->getParam('id')));
        $this->_formScripts[] = "
            var parent = '" . $catId . "';
            function saveAndContinueEdit() {
                editForm.submit($('edit_form').action+'back/edit/');
            }

            function addSubCategory() {
                editForm.submit(parent);
            }
        ";
    }

    public function getHeaderText()
    {
        if ( Mage::registry('clmcenter_data') && Mage::registry('clmcenter_data')->getId() ) {
            return Mage::helper('clmcenter')->__("Edit Category  '%s'",
                $this->htmlEscape(Mage::registry('clmcenter_data')->getTitle()));
        } else if ($this->getRequest()->getParam('parent_id')) {
            return Mage::helper('clmcenter')->__('Add Sub Category');
        } else {
            return Mage::helper('clmcenter')->__('Add Category');
        }
    }

    protected function checkLimit()
    {
        if ($id = $this->getRequest()->getParam('id')) {
            $collection = Mage::getModel('clmcenter/category')->getCollection();
            $collection->getSelect()->order('main_table.level DESC');
            $collection->getSelect()->where('main_table.category_id =?', $id);
            $collection->getSelect()->limit(1);
            if (count($collection) > 0) {
                $level = $collection->getData('level');
                $level = $level[0]['level'];
                return $level;
            }
        }
    }
}
