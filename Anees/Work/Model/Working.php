<?php

/**
 * @Author: Ngo Quang Cuong
 * @Date:   2017-10-05 04:57:01
 * @Last Modified by:   https://www.facebook.com/giaphugroupcom
 * @Last Modified time: 2017-10-05 05:04:23
 */

namespace Anees\Work\Model;

class Working extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Cache tag
     *
     * @var string
     */


    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Anees\Work\Model\ResourceModel\Works');
    }
}
