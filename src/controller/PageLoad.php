<?php

namespace medicalwizard\controller;
use medicalwizard\model\managePatient;
use medicalwizard\controller\FileUpload;
use medicalwizard\controller\patient;
use medicalwizard\controller\validate;

class PageLoad
{

    private array   $fetchpatient;
    private string  $image_id;
    private array   $allPatientData;
    private array   $fetchImages;
  



    public function viewManage()
    {

        $appendPatients="";
        $data=new managePatient();
        $this->allPatientData=$data->fetchAllPatientsData();

        foreach($this->allPatientData as $Patients)
        {

        $appendPatients.='<tr>
        <td class="align-middle">'.$Patients['firstName'].'</td>
        <td class="align-middle">'.$Patients['lastName'].'</td>
        <td class="align-middle">'.$Patients['mobile'].'</td>
        <td class="align-middle"><button type="button" value="'.$Patients['patientNumber'].'" onclick="getIdDetails(this.value)" class="btn btn-sm "><img src="img/icons/edit.png" width="40" height="40"></button></td>
        </tr>';
        };

         $manage = require_once __DIR__ . '/../View/managePatient.php';

         return $manage;
    }


    public function viewDetails()
    {
        $Patient4=new patient();
        $this->fetchpatient=$Patient4->displayDetails($_GET['patient_id']);
        
         $details = require_once __DIR__ . '/../View/detail.php';
         return $details;
    }

    
    public function viewShop()
    {
        $appendOptions="";
        $Patient1=new patient();
        $this->fetchpatient=$Patient1->displayNameandCode();


        foreach($this->fetchpatient as $options) 
        {
            $appendOptions.='<option value="'.$options['patientNumber'].'">'.$options['name'].'</option>';
        }  

        if(isset($_POST['patient']))
        {
            $Patient2=new patient();
            $this->allPatientData=$Patient2->displayDetails($_POST['patient']);
            


            $appendImages="";
            $Patient3=new Patient();
            $this->fetchImages=$Patient3->displayImages($_POST['patient']);

            foreach($this->fetchImages as $Patient)
            {
            $appendImages.='<div class="col-lg-4 col-md-6 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="'.$Patient['imagePath'].'" alt="">
                </div>
            </div>
            </div>';
            };

        }

         $details = require_once __DIR__ . '/../View/patientData.php';
         return $details;
    }


    public function viewAddNew()
    {
        $Patient5=new patient();
        
        if(isset($_POST['tmpImgSubmit']))
        {
            $temp_upload=new FileUpload('img/','temp.jpg'); 
            $temp_upload->tmpImgUpload(); 
        }

        if(file_exists("img/temp.jpg") and isset($_POST['edited']) )
        {

            $this->image_id=uniqid();
            $move_img=new FileUpload('img/','temp.jpg');
            $move_img->ImgUpload($this->image_id);
            
            $Patient5->addImages($_POST['patient_id'],$this->image_id);

        }
        
        $this->fetchpatient=$Patient5->displayDetails($_POST['patient_id']);
        
        $details = require_once __DIR__ . '/../View/detail.php';
        return $details;
    }




}

?>








