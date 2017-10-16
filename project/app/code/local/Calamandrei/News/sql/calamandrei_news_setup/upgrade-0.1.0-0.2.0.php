<?php
/**
 * Calamandrei_News
 */

/**
 * Calamandrei News Installer
 *
 * MySql installer
 *
 * @author Lorenzo Calamandrei <lorenzo.calamandrei@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */

/** @var Mage_Core_Model_Resource_Setup $installer */
$installer = $this;
$installer->startSetup();

$tableStory = $installer->getConnection()->newTable($installer->getTable('calamandrei_news/story'));
$tableStory->addColumn(
    'story_id',
    Varien_Db_Ddl_Table::TYPE_INTEGER,
    null,
    array(
        'primary' => true,
        'identity' => true,
        'nullable' => false
    ),
    'Story ID'
)->addColumn(
    'title',
    Varien_Db_Ddl_Table::TYPE_TEXT,
    256,
    array('nullable' => false),
    'Story Title'
)->addColumn(
    'content',
    Varien_Db_Ddl_Table::TYPE_TEXT,
    null,
    array('nullable' => false),
    'Story Content'
)->addColumn(
    'status',
    Varien_Db_Ddl_Table::TYPE_BOOLEAN,
    null,
    array('nullable' => false),
    'Story Status'
)->addColumn(
    'category_id',
    Varien_Db_Ddl_Table::TYPE_INTEGER,
    null,
    array('nullable' => true),
    'category_id'
)->addColumn(
    'created_at',
    Varien_Db_Ddl_Table::TYPE_TIMESTAMP,
    null,
    array('default' => Varien_Db_Ddl_Table::TIMESTAMP_INIT),
    'Story Created at'
)->addColumn(
    'updated_at',
    Varien_Db_Ddl_Table::TYPE_TIMESTAMP,
    null,
    array('default' => Varien_Db_Ddl_Table::TIMESTAMP_INIT_UPDATE),
    'Story Updated at'
);

//create table
$installer->getConnection()->createTable($tableStory);

$installer->endSetup();
