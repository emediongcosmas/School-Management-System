<?php

    include '../model/teacher.model.php';
    
    $teacher = new Teacher;
    $teachers = $teacher->DisplayTeachers();
    
    // Set page variable
    $page = "Teacher";
    include 'sub-views/header.php'; 

?>

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
           <div class="row">
                <div class="col-md-12">
                    <!-- TEACHER TABLE -->
                    <h3 class="title-5 m-b-35">Teacher</h3>
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
                            <!-- <div class="rs-select2--light rs-select2--sm">
                                <select class="js-select2" name="time">
                                    <option selected="selected">Today</option>
                                    <option value="">3 Days</option>
                                    <option value="">1 Week</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div> -->
                            <button class="au-btn-filter">
                                <i class="zmdi zmdi-filter-list"></i>
                                    filters
                            </button>
                        </div>
                        <div class="table-data__tool-right">
                            <button class="au-btn au-btn-icon au-btn--green au-btn--small" onclick="window.location.href='addteacher.php'">
                                <i class="zmdi zmdi-plus"></i>add teacher</button>
                            
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
                                    <th>phone</th>
                                    <th></th>
                                </tr>
                            </thead>
                            
                            <?php foreach($teachers as $teacher) { ?>
                            
                            <tbody>
                                <tr class="tr-shadow">
                                    <td>
                                        <label class="au-checkbox">
                                            <input type="checkbox">
                                            <span class="au-checkmark"></span>
                                        </label>
                                    </td>
                                    <td><?= $teacher['surname'].", ".$teacher['firstname']." ".$teacher['middlename']; ?></td>
                                    <td>
                                        <span class="block-email"><?= $teacher['email']; ?></span>
                                    </td>
                                    <td>
                                        <span class="status--process"><?= $teacher['gender']; ?></span>
                                    </td>
                                    <td><?= $teacher['phone']; ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <form action="../controller/teacher.controller.php" method="post">
                                                    <input type="hidden" value="<?= $teacher['id']; ?>"> 
                                                    <input type="hidden" name="action" value="editteacher">
                                                    <button type="submit" class="dropdown-item">Edit</button>
                                                </form>
                                                <form action="" method="post">
                                                    <input type="hidden" value="<?= $teacher['id']; ?>"> 
                                                    <button type="submit" class="dropdown-item">View Profile</button>
                                                </form>
                                                <form action="" method="POST">
                                                    <input type="hidden" value="<?= $teacher['id']; ?>"> 
                                                    <button type="submit" class="dropdown-item">Assign Class</button>
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
                    <!-- END TEACHER TABLE -->
                </div>
            </div>
        </div>
    </div>
</div>
  
<?php include 'sub-views/footer.php'; ?>    