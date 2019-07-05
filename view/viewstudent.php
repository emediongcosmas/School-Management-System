<?php 

// This will begin the session
session_start();

if(isset($_SESSION['email'])) {

    // Instantiation of the student class to display students
    include '../model/student.model.php';
    
        $student = new Student;
        $students = $student->DisplayStudents();

    // Set page variable
    $page = "Student";
    include 'sub-views/header.php'; 
?>

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- DATA TABLE -->
                    <h3 class="title-5 m-b-35">Student</h3>
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            <div class="rs-select2--light rs-select2--md">
                                <select class="js-select2" name="property">
                                    <option selected="selected">All Properties</option>
                                    <option value="">Option 1</option>
                                    <option value="">Option 2</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                            <div class="rs-select2--light rs-select2--sm">
                                <select class="js-select2" name="time">
                                    <option selected="selected">Today</option>
                                    <option value="">3 Days</option>
                                    <option value="">1 Week</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                            <button class="au-btn-filter">
                                <i class="zmdi zmdi-filter-list"></i>filters</button>
                        </div>
                        <div class="table-data__tool-right">
                            <button class="au-btn au-btn-icon au-btn--green au-btn--small" onclick="window.location.href='addstudent.php'">
                                <i class="zmdi zmdi-plus"></i>add student</button>
                            <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                <select class="js-select2" name="type">
                                    <option selected="selected">Export</option>
                                    <option value="">PDF</option>
                                    <option value="">CSV</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                                <tr>
                                    <th>
                                        <label class="au-checkbox">
                                            <input type="checkbox">
                                            <span class="au-checkmark"></span>
                                        </label>
                                    </th>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>gender</th>
                                    <th>student id</th>
                                    <th></th>
                                </tr>
                            </thead>
                            
                            <?php foreach($students as $student) { ?>
                            
                            <tbody>
                                <tr class="tr-shadow">
                                    <td>
                                        <label class="au-checkbox">
                                            <input type="checkbox">
                                            <span class="au-checkmark"></span>
                                        </label>
                                    </td>
                                    <td><?= $student['surname'].", ".$student['firstname']." ".$student['middlename']; ?></td>
                                    <td>
                                        <span class="block-email"><?= $student['email']; ?></span>
                                    </td>
                                    <td>
                                        <span class="status--process"><?= $student['gender']; ?></span>
                                    </td>
                                    <td><?= $student['studentid']; ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <form action="" method="post">
                                                    <input type="hidden" name="id" value="<?= $student['id']; ?>"> 
                                                    <button type="submit" class="dropdown-item">Edit</button>
                                                </form>
                                                <form action="" method="post">
                                                    <input type="hidden" name="id" value="<?= $student['id']; ?>"> 
                                                    <button type="submit" class="dropdown-item">View Profile</button>
                                                </form>
                                                <form action="grade.php" method="POST">
                                                    <input type="hidden" name="id" value="<?= $student['id']; ?>"> 
                                                    <button type="submit" class="dropdown-item">Add Grade</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="spacer"></tr>
                            </tbody>
                            
                            <?php } ?>
                            
                        </table>
                    </div>
                    <!-- END DATA TABLE -->
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'sub-views/footer.php'; } ?>