<?php
/**
 * Copyright © Anees (support@aneesahmadweb.com). All rights reserved.
 * Please visit aneesahmadweb.com for license details.
 *
 * Happy Coding !
 */
namespace Anees\Work\Controller\Index;

/**
 * home page view
 */
class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * View blog homepage action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {



        $this->_view->loadLayout();
        $this->_view->renderLayout();


    }
}
