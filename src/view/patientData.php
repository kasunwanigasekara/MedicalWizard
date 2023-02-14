<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="utf-8">
    <title>Medical Wizard </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

</head>

<body>
<?php  require_once __DIR__.'/../../public/header.php'; ?>
<div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Select Patient</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="row">
                         <form action="action.php" method="post" name="frm1" id="frm1" >
                        <div class="col-md-12 form-group">
                            <select required class="custom-select" name="patient" id="patient">
                                <?php echo $appendOptions ?>
                            </select>
                        </div>
                        
                        <div class="col-md-12 form-group">
                            <button type="submit" class="btn btn-sm "><img src="img/icons/view.png" width="120" height="40"></button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php if(isset($_POST['patient'])) { 
           foreach($this->allPatientData as $data)
           { ?>
<div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Patient Details</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="row">

                        <div class="col-md-6 form-group">
                            <label>First Name</label>
                            <input readonly  class="form-control" value="<?php echo $data['firstName'] ?>" type="text" placeholder="John" name="fname" id="fname">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Last Name</label>
                            <input readonly class="form-control" value="<?php echo $data['lastName']  ?>" type="text" placeholder="Doe" name="lname" id="lname">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input readonly class="form-control" type="text"  placeholder="example@email.com" value="<?php echo $data['email'] ?>" name="email" id="email">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input readonly class="form-control"  type="text" placeholder="94712124683" value="<?php echo $data['mobile'] ?>" name="tp" id="tp">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address Line 1</label>
                            <input readonly class="form-control" value="<?php echo $data['addressLine_01']  ?>" type="text" placeholder="123 Street" name="adr1" id="adr1">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address Line 2</label>
                            <input readonly class="form-control" type="text" value="<?php echo $data['addressLine_02']  ?>" placeholder="123 Street" name="adr2" id="adr2">
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Description</label>
                            <textarea readonly class="form-control" name="state" id="state" rows="4" cols="5"><?php echo $data['DESCRIPTION']  ?> </textarea> 
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row px-xl-5">

            <div class="col-lg-12 col-md-12">
                <div class="row pb-3">
                 <?php   echo $appendImages; ?>
                </div>
            </div>
        </div>
    </div>

<?php }}?>   
</body>

</html>

