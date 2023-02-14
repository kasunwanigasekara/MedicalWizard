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

    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Mobile</th>
                            <th>Add Images</th>
                        </tr>
                    </thead>

                    <tbody class="align-middle">
                        <tr>
                            <?php
                           echo $appendPatients
                            ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>

