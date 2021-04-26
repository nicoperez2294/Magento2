<?php
/**
 * Created by PhpStorm
 * @Author hernan
 * Date: 26/4/21
 * Time: 00:59
 */

namespace Test\Practice\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;
use Magento\Framework\Controller\Result\Raw;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{
    /**
     * @return Raw
     */
    public function execute(): Raw
    {
        /** @var Raw $result */
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setContents('Hello admins!');
        return $result;
    }
}
