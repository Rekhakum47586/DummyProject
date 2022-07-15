<?php

namespace I95dev\Employeeform\Api\Data;

interface EmployeedetailsInterface
{
   
    const ENTITY_ID = 'id';
    const FIRST_NAME = 'first_name ';
    const LAST_NAME = 'last_name';
    const EMAIL = 'email';
    const PHONE = 'phone';


  
    public function getId();

  
    public function setId($Id);

   
    public function getFirst_name();

    public function setFirst_name($first_name);

  
    public function getLast_name();

    public function setLast_name($last_name);

   
    public function getEmail();

    public function setEmail($email);

  
    public function getPhone();

   
    public function setPhone($phone);

    
}

