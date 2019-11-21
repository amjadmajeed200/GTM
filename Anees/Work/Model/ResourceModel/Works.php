<?php

/**
 * @Author: Ngo Quang Cuong
 * @Date:   2017-10-05 04:57:55
 * @Last Modified by:   https://www.facebook.com/giaphugroupcom
 * @Last Modified time: 2017-10-23 13:00:46
 */

namespace Anees\Work\Model\ResourceModel;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Exception\LocalizedException;

class Works extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * ValidationRules
     *
     * @var \PHPCuong\ProductQuestionAndAnswer\Model\ValidationRules
     */
    protected $validationRules;

    /**
     * @var \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory
     */
    protected $productCollectionFactory;

    /**
     * Escaper
     *
     * @var \Magento\Framework\Escaper
     */
    protected $escaper;

    /**
     * @var \Magento\Catalog\Model\Product\Attribute\Source\Status
     */
    protected $productStatus;

    /**
     * @var \Magento\Catalog\Model\Product\Visibility
     */
    protected $productVisibility;

    /**
     * @param \Magento\Framework\Model\ResourceModel\Db\Context $context
     * @param \PHPCuong\ProductQuestionAndAnswer\Model\ValidationRules $validationRules
     * @param \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory
     * @param \Magento\Catalog\Model\Product\Attribute\Source\Status $productStatus
     * @param \Magento\Catalog\Model\Product\Visibility $productVisibility
     * @param \Magento\Framework\Escaper $escaper
     */
    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context,
        \PHPCuong\ProductQuestionAndAnswer\Model\ValidationRules $validationRules,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
        \Magento\Catalog\Model\Product\Attribute\Source\Status $productStatus,
        \Magento\Catalog\Model\Product\Visibility $productVisibility,
        \Magento\Framework\Escaper $escaper
    ) {
        $this->validationRules = $validationRules;
        $this->productCollectionFactory = $productCollectionFactory;
        $this->productStatus = $productStatus;
        $this->productVisibility = $productVisibility;
        $this->escaper = $escaper;
        parent::__construct($context);
    }

    /**
     * construct
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Anees_blog', 'blog_title');
    }


   
}
