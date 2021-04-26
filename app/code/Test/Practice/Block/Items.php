<?php
/**
 * Created by PhpStorm
 * @Author hernan
 * Date: 26/4/21
 * Time: 02:05
 */

namespace Test\Practice\Block;

use Magento\Email\Model\Template;
use Magento\Framework\View\Element\Template\Context;
use Test\Practice\Model\Item;
use Test\Practice\Model\ResourceModel\Item\Collection;
use Test\Practice\Model\ResourceModel\Item\CollectionFactory;

class Hello extends Template
{
    /** @var Collection */
    private $collectionFactory;

    /**
     * Hello constructor.
     * @param Context $context
     * @param CollectionFactory $collectionFactory
     * @param array $data
     */
    public function __construct(
        Context $context,
        CollectionFactory $collectionFactory,
        array $data = []
    ) {
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
    }

    /**
     * @return Item
     */
    public function getItems(): Item
    {
        return $this->collectionFactory->create()->getItems();
    }
}
