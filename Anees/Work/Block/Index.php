<?php
/**
 * Magiccart
 * @category  Magiccart
 * @copyright   Copyright (c) 2014 Magiccart (http://www.magiccart.net/)
 * @license   http://www.magiccart.net/license-agreement.css
 * @Author: Magiccart<team.magiccart@gmail.com>
 * @@Create Date: 2016-02-28 10:10:00
 * @@Modify Date: 2018-07-06 18:21:47
 * @@Function:
 */
namespace Anees\Work\Block;
use Magento\Framework\App\Filesystem\DirectoryList;
class Index extends \Magento\Framework\View\Element\Template
{
    public function getFormAction()
    {
        return $this->getUrl('work/index/save');
    }
   
}
