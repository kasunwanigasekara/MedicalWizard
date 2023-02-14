<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Medical Wizard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

</head>

<body>

    <?php  require_once __DIR__.'/../../public/header.php'; ?>

<?php foreach($this->fetchpatient as $data) {?>
    <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <div class="col-lg-4 mb-30">

                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner bg-light">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src="img/temp.jpg" >
                        </div>
                    </div>
                </div>

                <div>
                    
                    <form action="action.php" method="post" enctype="multipart/form-data">
                    Select / Take a image to upload:
                    <input type="file" accept="image/*" name="fileToUpload" id="fileToUpload" capture="camera"/>
                    <input type="hidden" name="patient_id" id="patient_id" value="<?php echo $data['patientNumber'] ?>" />
                    <button class="btn btn-primary py-2 px-5" type="submit" name="tmpImgSubmit" id="tmpImgSubmit">Upload Image</button>
                    </form>
                
                </div> 
            </div>

            <div class="col-lg-7 h-auto mb-30">
                <div class="contact-form bg-light p-30">
                    <div id="success"></div>
                    <form name="updateFrm" id="updateFrm" method="post" action="action.php">

                        Patient code
                        <div class="control-group">
                            <input readonly type="text" class="form-control" name="patient_id" id="patient_id" value="<?php echo $data['patientNumber'] ?>" readonly/>
                        </div>
                        First Name
                        <div class="control-group">
                            <input readonly type="text" class="form-control" name="patient_fName"  id="patient_fName" value="<?php echo $data['firstName']  ?>"/>
                        </div>
                        Last Name
                        <div class="control-group">
                            <input readonly type="text" class="form-control float"  name="patient_lName"  id="patient_lName" value="<?php echo $data['lastName']  ?>"/>
                        </div>
                        Mobile
                        <div class="control-group">
                            <input readonly type="text" class="form-control number" name="mobile"  id="mobile" value="<?php echo $data['mobile']  ?>" />
                            <input type="hidden" value="0" name="edited" id="edited"/>
                        </div>
                        
                        <br>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Finish Update</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>

    </div>
    <?php } ?>

</body>

</html>


