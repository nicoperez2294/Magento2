<?php
/**
 * Created by PhpStorm
 * @Author hernan
 * Date: 26/4/21
 * Time: 00:27
 */

namespace Test\Practice\Model;

use Magento\Framework\Model\AbstractModel;
use Test\Practice\Model\ResourceModel\Item as ResourceItem;

class Item extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceItem::class);
    }
}
