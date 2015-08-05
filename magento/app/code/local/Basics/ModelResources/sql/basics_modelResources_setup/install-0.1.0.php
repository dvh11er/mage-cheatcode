<?php

$installer = $this;
$installer->startSetup();

$dbConnection           = $installer->getConnection();
$postageStampTableName         = $installer->getTable('basics_modelResources/postageStamp');

if ( $dbConnection->isTableExists($postageStampTableName) ) {
    // Table already exists
    $installer->endSetup();
    return;
}


/*
 * Define table basics_modelresources_postagestamp
 */
$postageStampTable = $dbConnection->newTable($postageStampTableName)
    ->addColumn('postagestamp_id', Varien_Db_Ddl_Table::TYPE_INTEGER, 10,
        array(
            'primary'  => true,
            'identity' => true,
            'nullable' => false,
            'unsigned' => true
        ),
        'ID of postage stamp'
    )
    ->addColumn('image', Varien_Db_Ddl_Table::TYPE_TEXT, 255,
        array(
            'nullable' => false,
            'default'  => '',
        ),
        'Path to postage stamp image file'
    )
    ->addColumn('denomination', Varien_Db_Ddl_Table::TYPE_FLOAT, null,
        array(
            'nullable' => false,
            'default' => 0,
        ),
        'Value of postage stamp'
    )
    ->addColumn('date', Varien_Db_Ddl_Table::TYPE_DATE, null,
        array(
            'nullable' => true,
        ),
        'Date of postage stamp'
    )
    ->addColumn('country', Varien_Db_Ddl_Table::TYPE_TEXT, 255,
        array(
            'nullable' => false,
            'default' => '',
        ),
        'Country of postage stamp'
    )
    ->addColumn('type', Varien_Db_Ddl_Table::TYPE_TEXT, 255,
        array(
            'nullable' => true,
        ),
        'Type of postage stamp'
    )
;


/*
 * Create tables
 */
$dbConnection->createTable($postageStampTable);


/*
 * Installation complete
 */
$installer->endSetup();