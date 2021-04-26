<?php
/**
 * Created by PhpStorm
 * @Author hernan
 * Date: 26/4/21
 * Time: 00:32
 */

namespace Test\Practice\Model\ResourceModel\Item;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Test\Practice\Model\Item;
use Test\Practice\Model\ResourceModel\Item as ResourceItem;

class Collection extends AbstractCollection
{
    /** @var string $_idFieldName */
    protected $_idFieldName = 'id';
    protected function _construct()
    {
        $this->_init(
            Item::class,
            ResourceItem::class
        );
    }
}
