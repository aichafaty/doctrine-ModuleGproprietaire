<?php
namespace libs\system;
class Model
{
    protected $entityManager;
    public function __construct()
    {
        require_once dirname(__DIR__)."\..\bootstrap.php";
        $this->entityManager=$entityManager;
    }
    
}

?>