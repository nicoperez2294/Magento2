<?php
/**
 * Created by PhpStorm
 * @Author hernan
 * Date: 25/4/21
 * Time: 23:27
 */

namespace Test\Practice\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;

class UpgradeData implements UpgradeDataInterface
{
    /**
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '1.0.2', '<')) {
            $setup->getConnection()->update(
                $setup->getTable(InstallSchema::TABLE_NAME),
                [
                    'description' => 'Default description 1',
                    'img_url' => 'https://i.redd.it/2brmthty3w151.jpg',
                    'quantity' => 17
                ],
                $setup->getConnection()->quoteInto('id = ?', 1)
            );
        }

        $setup->endSetup();
    }
}
