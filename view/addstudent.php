<?php 
    $page = "Student";
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
                            <h4>New Student</h4>
                        </div>
                        <div class="card-body">
                            <!-- NEW STUDENT FORM -->
                            <form action="../controller/student.controller.php" method="POST">
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
                                <div class="form-group">
                                    <label for="dob">Date of Birth</label>
                                    <input type="date" class="form-control" name="dob" id="dob" required>
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
                                        <label for="studentid">Student ID</label>
                                        <input type="number" class="form-control" name="studentid" id="studentid" required>
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
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="address">Guardian Name</label>
                                        <input type="text" class="form-control" name="guardian_name" id="guardian_name" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="guardian_no">Phone Number</label>
                                        <input type="number" class="form-control" name="guardian_no" id="guardian_no" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="relationship">Relationship</label>
                                        <select name="relationship" id="relationship" class="form-control">
                                            <option value=""></option>
                                            <option value="Father">Father</option>
                                            <option value="Mother">Mother</option>
                                            <option value="Sibling">Sibling</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary text-right">Submit</button>
                                </div>
                            </form>
                            <!-- END OF NEW STUDENT FORM -->
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<?php include 'sub-views/footer.php'; ?>