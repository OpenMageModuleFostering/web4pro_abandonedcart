<?php
$installer = $this;
$installer->startSetup();

$model = Mage::getModel('admin/block');
if(is_object($model)) {
    $model->setData(array(
        'block_name' => 'web4pro_abandonedcart/email_order_items',
        'is_allowed' => '1'
    ));
    $model->save();
}

$installer->endSetup();
