<?php
/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * Please visit Magefan.com for license details (https://magefan.com/end-user-license-agreement).
 *
 * Glory to Ukraine! Glory to the heroes!
 */

namespace Anees\Work\Block\Adminhtml;

/**
 * Admin blog post
 */
class Interfaces extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {


        $this->_headerText = __('Post');
        $this->_addButtonLabel = __('Add New Post');

        parent::_construct();

    }

    protected function showinterfaces(){


       echo 'sdf';

    }
    /**
     * @return $this
     */

}
