<?php
/**
 * Created by PhpStorm
 * @Author hernan
 * Date: 26/4/21
 * Time: 00:25
 */

namespace Test\Practice\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Item extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('test_practice_item', 'id');
    }
}
