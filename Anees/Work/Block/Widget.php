<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Anees\Work\Block;

/**
 * Logo page header block
 *
 * @api
 * @since 100.0.2
 */
class Widget extends \Magento\Framework\View\Element\Template
{
    /**
     * Current template name
     *
     * @var string
     */
/*    protected $_template = 'html/header/logo.phtml';*/

    /**
     * @var \Magento\MediaStorage\Helper\File\Storage\Database
     */
    protected $_fileStorageHelper;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\MediaStorage\Helper\File\Storage\Database $fileStorageHelper
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\MediaStorage\Helper\File\Storage\Database $fileStorageHelper,
        array $data = []
    ) {
        $this->_fileStorageHelper = $fileStorageHelper;
        parent::__construct($context, $data);
    }

    /**
     * Check if current url is url for home page
     *
     * @return bool
     */
    public function showwidget()
    {
     return 'wid';
    }


}
