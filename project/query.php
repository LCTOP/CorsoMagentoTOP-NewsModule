<?php

require_once 'app/Mage.php';

Varien_Profiler::enable();
Mage::setIsDeveloperMode(true);
ini_set('dsiplay_errors', 1);
umask(0);
Mage::app();

//create a category

$category = Mage::getModel('calamandrei_news/category');
$category->setCode('top');
$category->setName('Think Open');
$category->setStatus(true);

$category->save();

echo '<hr />eccomi<hr /><pre>';

Zend_Debug::dump($category);

