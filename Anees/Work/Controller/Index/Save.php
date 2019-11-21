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
use Magento\Contact\Model\ConfigInterface;
use Magento\Contact\Model\MailInterface;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Framework\Controller\Result\Redirect;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\HTTP\PhpEnvironment\Request;
use Psr\Log\LoggerInterface;


class Save extends \Magento\Framework\App\Action\Action
{
    /**
     * View blog homepage action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */

    /**
     * @var DataPersistorInterface
     */
    private $dataPersistor;

    /**
     * @var Context
     */
    private $context;

    /**
     * @var MailInterface
     */
    private $mail;

    /**
     * @var LoggerInterface
     */
    private $logger;


    public function __construct(
        Context $context,
        LoggerInterface $logger = null
    ) {
        parent::__construct($context);
        $this->context = $context;
        $this->logger = $logger ?: \Magento\Framework\App\ObjectManager::getInstance()->get(LoggerInterface::class);

    }


    public function execute()
    {
        $this->messageManager->addSuccess(
            __('Thanks for contacting us with your comments and questions. We\'ll respond to you very soon.')
        );


        $contact = $this->_objectManager->create('Anees\Work\Model\Working');

        $request = $this->getRequest();
        $blogtitle = $this->getRequest()->getParam('blogtitle');
        $blogdescription = $this->getRequest()->getParam('blogdescription');
      echo  $blogtitle;
        if (trim($request->getParam('blogtitle')) === '') {
           // throw new LocalizedException(__('Title is missing'));
        }

        $contact->setblogtitle($blogtitle);
        $contact->setblogdescription($blogdescription);
        $contact->save();



    }
}


