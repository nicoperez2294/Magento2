<?php

namespace Curso\Empleado\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Empleado extends AbstractDb
{

	protected function _construct()
	{
		$this->_init('empleados', 'documento');
	}

}
