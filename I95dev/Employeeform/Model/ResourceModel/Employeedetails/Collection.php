<?php


namespace I95dev\Employeeform\Model\ResourceModel\employeedetails;
use I95dev\Employeeform\Model\Employeedetails;
use I95dev\Employeeform\Model\ResourceModel\Employeedetails as Employeedetailsresource;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
   
    protected $_idFieldName = 'id';
    protected $_previewFlag;
    
    protected function __construct()
    {
    parent::_construct();
    
    $this->_init(Employeedetails::class, Employeedetailsresource::class);
    $this->_map['fields']['id'] = 'main_table.id';
       
    }
}


