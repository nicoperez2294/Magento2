<?php
/**
 * Created by PhpStorm
 * @Author hernan
 * Date: 25/4/21
 * Time: 22:52
 */

namespace Test\Practice\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{

    /**
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $setup->getConnection()->insert(
            $setup->getTable(InstallSchema::TABLE_NAME),
            [
                'name' => 'Blue shirt'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable(InstallSchema::TABLE_NAME),
            [
                'name' => 'Red shirt'
            ]
        );

        $setup->endSetup();
    }
}
