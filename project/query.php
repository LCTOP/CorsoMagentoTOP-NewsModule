<?php

require_once 'app/Mage.php';

Varien_Profiler::enable();
Mage::setIsDeveloperMode(true);
ini_set('display_errors', 1);
umask(0);
Mage::app();

//create a category

/*
$category = Mage::getModel('calamandrei_news/category');
$category->setCode('top');
$category->setName('Think Open');
$category->setStatus(true);

$category->save();
*/

//load the category
//$category = Mage::getModel('calamandrei_news/category')->load(1);
//echo 'Category <hr />';
//Zend_Debug::dump($category);

/*
$story = Mage::getModel('calamandrei_news/story');
$story->setTitle('La mia storia 2');
$story->setContent('Lorem Ipsum 2');
$story->setStatus(true);
$story->setCategory($category);
$story->save();
*/

$story = Mage::getModel('calamandrei_news/story')->load(1);

echo '<hr />Story<hr />';

Zend_Debug::dump($story);

echo '<hr />Category<hr />';

/*
$story = Mage::getModel('calamandrei_news/story')->load(1);

echo '<hr />Story<hr />';

Zend_Debug::dump($story);

*/

Zend_Debug::dump($story->getCategory());

//$read = Mage::getSingleton('core/resource')->getConnection('core/read');

//$category_name = Mage::getSingleton('core/resource')->getTableName('calamandrei_news/category');

//$query = "SELECT * FROM {$category_name}";

//$res = $read->fetchOne($query);

//Zend_Debug::dump($res);

/*

foreach ($res as $r) {
    Zend_Debug::dump($r);
}

*/
