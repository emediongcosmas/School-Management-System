<?php 

session_start();

if(isset($_SESSION['email'])) {

    $page = "Teacher";
    include 'sub-views/header.php'; 
?>

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>New Teacher</h4>
                        </div>
                        <div class="card-body">
                            <!-- NEW TEACHER FORM -->
                            <form action="../controller/teacher.controller.php" method="POST">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="surname">Surname</label>
                                        <input type="text" class="form-control" name="surname" id="surname" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="firstname">First Name</label>
                                        <input type="text" class="form-control" name="firstname" id="firstname" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="middlename">Middle Name</label>
                                        <input type="text" class="form-control" name="middlename" id="middlename" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="">Email Address</label>
                                        <input type="email" class="form-control" name="email" id="email" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">Gender</label>
                                        <select name="gender" id="gender" class="form-control" required>
                                            <option value=""></option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="phone">Phone Number</label>
                                        <input type="tel" class="form-control" name="phone" id="phone" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" name="address" id="address" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" name="city" id="city" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="State">State</label>
                                        <input type="text" class="form-control" name="state" id="state" required>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary text-right">Submit</button>
                                </div>
                            </form>
                            <!-- END OF NEW TEACHER FORM -->
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<?php include 'sub-views/footer.php'; } ?>