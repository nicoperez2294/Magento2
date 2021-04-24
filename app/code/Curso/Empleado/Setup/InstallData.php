<?php

namespace Curso\Empleado\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Db\Ddl\Table;

class InstallData implements InstallDataInterface
{

	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		$setup->startSetup();

		$setup->getConnection()->insert(
			$setup->getTable('empleados'),
			[
				'nombre' => 'Nicolas',
				'apellido' => 'Perez',
				'documento' => 1234,
				'profesion' => 'x'
			]
		);

		$setup->getConnection()->insert(
			$setup->getTable('empleados'),
			[
				'nombre' => 'Guillermo',
				'apellido' => 'Ramirez',
				'documento' => 1235,
				'profesion' => 'x'
			]
		);

		$setup->getConnection()->insert(
			$setup->getTable('empleados'),
			[
				'nombre' => 'Kevin',
				'apellido' => 'Kujawski',
				'documento' => 1236,
				'profesion' => 'x'
			]
		);

		$setup->endSetup();
	}

}
