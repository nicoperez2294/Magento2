<?php
/**
 * Created by PhpStorm
 * @Author hernan
 * Date: 25/4/21
 * Time: 23:14
 */

namespace Test\Practice\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{

    /**
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '1.0.2', '<')) {
            $setup->getConnection()->addColumn(
                $setup->getTable(InstallSchema::TABLE_NAME),
                'description',
                [
                    'type' => Table::TYPE_TEXT,
                    'nullable' => true,
                    'comment' => 'Item Description'
                ]
            );
            $setup->getConnection()->addColumn(
                $setup->getTable(InstallSchema::TABLE_NAME),
                'img_url',
                [
                    'type' => Table::TYPE_TEXT,
                    'nullable' => true,
                    'comment' => 'Image Url'
                ]
            );
            $setup->getConnection()->addColumn(
                $setup->getTable(InstallSchema::TABLE_NAME),
                'quantity',
                [
                    'type' => Table::TYPE_INTEGER,
                    'nullable' => true,
                    'comment' => 'Items Quantity'
                ]
            );
        }
        $setup->endSetup();
    }
}
