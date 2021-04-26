<?php
/**
 * Created by PhpStorm
 * @Author hernan
 * Date: 25/4/21
 * Time: 22:38
 */

namespace Test\Practice\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{

    const TABLE_NAME = 'test_practice_item';

    /**
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @throws \Zend_Db_Exception
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $table = $setup->getConnection()->newTable(
            $setup->getTable(self::TABLE_NAME)
        )->addColumn(
            'id',
            Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'nullable' => false, 'primary' => true],
            'Item ID'
        )->addColumn(
            'name',
            Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'Item Name'
        )->addIndex(
            $setup->getIdxName(self::TABLE_NAME, ['name']),
            ['name']
        )->setComment(
            'Practice Items'
        );

        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}
