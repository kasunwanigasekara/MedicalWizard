<?php

namespace medicalwizard\controller;
use medicalwizard\model\managePatient;


class patient{

    private int     $code;
    private string  $fname;
    private string  $lname;
    private string  $email;
    private int     $mobile;
    private string  $add1;
    private string  $add2;
    private string  $description;
    private array   $nameAndCode;
    private array   $AllDetails;
    private array   $imageData;


    public function displayNameandCode():array
    {
        $patientdata=new managePatient();
        $this->nameAndCode=$patientdata->fetchNameandCode();
        return $this->nameAndCode;
    }

    public function displayDetails($code):array
    {
        $allPatientDate=new managePatient();
        $this->AllDetails=$allPatientDate->fetchPatientData($code);
        return $this->AllDetails;
    }

    public function displayImages($code):array
    {
        $PatientImages=new managePatient();
        $this->imageData=$PatientImages->fetchImages($code);
        return $this->imageData;
    }

    public function addImages($code,$imageId)
    {
        $PatientImages=new managePatient();
        $PatientImages->addImages($code,$imageId);
    }






}

?>