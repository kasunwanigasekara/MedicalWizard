<?php

namespace medicalwizard;

use medicalwizard\controller\FileUpload;
use medicalwizard\controller\PageLoad;
use medicalwizard\model\managePatient;


require_once __DIR__.'/../vendor/autoload.php';

$home=new PageLoad();

if(isset($_GET['manage']))
{
    $home->viewManage();
}

elseif(isset($_GET['Details']))
{
    $home->viewDetails();
}

elseif(isset($_GET['patient']))
{
    $home->viewShop();
}

elseif(isset($_POST['tmpImgSubmit']) or isset($_POST['edited']) )
{
    $home->viewAddNew();
}

else
{
    $home->viewShop();
}
?>