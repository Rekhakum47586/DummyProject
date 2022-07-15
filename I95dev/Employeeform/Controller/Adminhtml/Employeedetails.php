<?php
declare(strict_types=1);

namespace I95dev\Employeeform\Controller\Adminhtml;

abstract class Employeedetails extends \Magento\Backend\App\Action
{

const ADMIN_RESOURCE = 'I95dev_Employeeform::parent';
protected $_coreRegistry;

/**
* @param \Magento\Backend\App\Action\Context $context
* @param \Magento\Framework\Registry $coreRegistry
*/
public function __construct(
\Magento\Backend\App\Action\Context $context,
\Magento\Framework\Registry $coreRegistry
) {
$this->_coreRegistry = $coreRegistry;
parent::__construct($context);
}

/**
* Init page
*
* @param \Magento\Backend\Model\View\Result\Page $resultPage
* @return \Magento\Backend\Model\View\Result\Page
*/
public function initPage($resultPage)
{
$resultPage->setActiveMenu(self::ADMIN_RESOURCE)
->addBreadcrumb(__('I95dev'), __('I95dev'))
->addBreadcrumb(__('Customform'), __('Customform'));
return $resultPage;
}
}

