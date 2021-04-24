<?php

namespace Curso\Empleado\Model;

use Magento\Framework\Model\AbstractModel;

class Empleado extends AbstractModel
{

	protected function _construct()
	{
		$this->_init(\Curso\Empleado\Model\ResourceModel\Empleado::class);
	}

}
