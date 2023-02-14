<?php

namespace medicalwizard\model;
use PDO;

Class manageUsers
{
    private string $uname;
    private string $pass;
    private $pdo;
    private array $data;
    private int $rowCount;

     function __construct()
     { 
         $this->pdo=new PDO('mysql:host=localhost;dbname=db_medical_wizard', 'root', '');
     }


    public function fetchUserData($user): array
    {
        try {

            $stm = $this->pdo->prepare("SELECT password FROM db_medical_wizard.tbl_users WHERE userName='$user'");
            $stm->execute();
            $this->data=$stm->fetchAll();
            $this->rowCount=$stm->fetchColumn();
            return $this->data;
            
        }
        catch (\PDOException $exception)
        {
            error_log($exception->getMessage());
            die('Something went wrong. Please, try again later.');
        }
   

    }

    

}



?>