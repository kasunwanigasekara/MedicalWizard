<?php

namespace medicalwizard\model;
use medicalwizard\controller\FileUpload;
use PDO;

Class managePatient
{
    private array $data;
    private $pdo;

     function __construct()
     { 
         $this->pdo=new PDO('mysql:host=localhost;dbname=db_medical_wizard', 'root', '');
     }


    public function fetchPatientData($code): array
    {
        try {
            $stm = $this->pdo->prepare("SELECT patientNumber,firstName,lastName,email,mobile,addressLine_01,addressLine_02,DESCRIPTION 
            FROM db_medical_wizard.tbl_patient_details WHERE patientNumber=$code
            ORDER BY firstname");
            $stm->execute();
            $this->data=$stm->fetchAll();

            return $this->data;
        }
        catch (\PDOException $exception)
        {
            error_log($exception->getMessage());
            die('Something went wrong. Please, try again later.');
        }
   

    }

    public function fetchAllPatientsData(): array
    {
        try {
            $stm = $this->pdo->prepare("SELECT patientNumber,firstName,lastName,email,mobile,addressLine_01,addressLine_02,DESCRIPTION 
            FROM db_medical_wizard.tbl_patient_details
            ORDER BY firstname");
            $stm->execute();
            $this->data=$stm->fetchAll();
            return $this->data;
        }
        catch (\PDOException $exception)
        {
            error_log($exception->getMessage());
            die('Something went wrong. Please, try again later.');
        }
   

    }

    public function fetchImages($code): array
    {
        try {
            $stm = $this->pdo->prepare("SELECT b.patientNumber,b.imagePath 
            FROM db_medical_wizard.tbl_patient_details a 
            LEFT JOIN db_medical_wizard.tbl_patient_images b ON a.patientNumber=b.patientNumber
            WHERE a.patientNumber=$code");
            $stm->execute();
            $this->data=$stm->fetchAll();
            return $this->data;
        }
        catch (\PDOException $exception)
        {
            error_log($exception->getMessage());
            die('Something went wrong. Please, try again later.');
        }
   

    }


   public function fetchNameandCode(): array
   {
       try {
           $stm = $this->pdo->prepare("SELECT patientNumber,concat(firstname,' ',lastname)name FROM db_medical_wizard.tbl_patient_details
           ORDER BY firstname ");
           $stm->execute();
           $this->data=$stm->fetchAll();
           return $this->data;
       }
       catch (\PDOException $exception)
       {
           error_log($exception->getMessage());
           die('Something went wrong. Please, try again later.');
       }
   }

   public function addImages($code,$imageId)
   {

    try{
            $this->pdo->beginTransaction();

            $tempimageId='img/'.$imageId.'.jpg';
            
            $stmt = $this->pdo->prepare("insert into db_medical_wizard.tbl_patient_images(patientNumber,imagePath) 
            VALUES (:code, :imageId)");
            $stmt->bindParam(':code', $code);
            $stmt->bindParam(':imageId',$tempimageId);
          
            $stmt->execute();

            $this->pdo->commit();

            

        }
        catch(\PDOException $exception)
        {
            $this->pdo->rollback();
            error_log($exception->getMessage());
            die('Something went wrong. Please, try again later.');
        }














   }
     


}



?>