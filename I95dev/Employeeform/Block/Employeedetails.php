<?php

namespace I95dev\Employeeform\Block;

use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;

class Employeedetails extends Template
{
    public function __construct(Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }

    public function getFormAction()
    {
        return $this->getUrl('employee/index/save', ['_secure' => true]);
    }
}
