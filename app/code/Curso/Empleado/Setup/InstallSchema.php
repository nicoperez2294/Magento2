<?php

namespace Curso\Empleado\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Db\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{

	public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
	{
		$setup->startSetup();

		$table = $setup->getConnection()->newTable(
			$setup->getTable('empleados')
		)->addColumn(
			'nombre',
			Table::TYPE_TEXT,
			255,
			['nullable' => false]
		)->addColumn(
			'apellido',
			Table::TYPE_TEXT,
			255,
			['nullable' => false]
		)->addColumn(
			'documento',
			Table::TYPE_INTEGER,
			null,
			[ 'identity' => true, 'primary' => true, 'nullable' => false]
		)->addColumn(
			'profesion',
			Table::TYPE_TEXT,
			255,
			['nullable' => false]
		)->addIndex(
			$setup->getIdxName('empleados', ['documento']),
			['documento']
		)->setComment('Tabla de empleados');

		$setup->getConnection()->createTable($table);

		$setup->endSetup();
	}

}
