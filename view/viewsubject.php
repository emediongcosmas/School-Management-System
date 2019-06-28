<?php 

    include '../model/subject.model.php';
    
    $subjects = new Subject;
    $subjects = $subjects->ViewSubject();
    
    $page = "Subject";
    include 'sub-views/header.php'; 
?>

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- DATA TABLE -->
                    <h3 class="title-5 m-b-35">Subject</h3>
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            <div class="rs-select2--light rs-select2--md">
                                <select class="js-select2" name="property">
                                    <option selected="selected">All Subjects</option>
                                    <option value="">JSS</option>
                                    <option value="">SSS</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                            <button class="au-btn-filter">
                                <i class="zmdi zmdi-filter-list"></i>filter</button>
                        </div>
                        <div class="table-data__tool-right">
                            <button class="au-btn au-btn-icon au-btn--green au-btn--small" onclick="window.location.href='addsubject.php'">
                                <i class="zmdi zmdi-plus"></i>add subject</button>
                        </div>
                    </div>
                    <div class="table-responsive table-responsive-data2 col-md-12">
                        <table class="table table-data2">
                            <thead>
                                <tr>
                                    <th>Subject</th>
                                    <th>jss</th>
                                    <th>css</th>
                                </tr>
                            </thead>
                            
                            <?php foreach($subjects as $subject) { ?>
                            
                            <tbody>
                                <tr class="tr-shadow">
                                    <td width="50%"><?= $subject['subject']; ?></td>
                                    <td width="20%">
                                        
                                        <?php if($subject['jss'] == 1) { ?>
                                                
                                            <i class="fas fa-check-circle green"></i> 
                                                
                                        <?php } else { ?>
                                                
                                            <i class="fas fa-times-circle red"></i> 
                                                
                                        <?php }?>
                                    </td>
                                    <td width="20%">
                                        <?php if($subject['sss'] == 1) { ?>
                                                
                                            <i class="fas fa-check-circle green"></i> 
                                                
                                        <?php } else { ?>
                                                
                                            <i class="fas fa-times-circle red"></i> 
                                                
                                        <?php }?>
                                    </td>
                                    <td width="5%">
                                        <form action="../controller/subject.controller.php" method="POST">
                                            <input type="hidden" name="id" value="<?= $subject['id']; ?>"> 
                                            <button type="submit" class="btn btn-link">Edit</button>
                                        </form>
                                    </td>
                                    <td width="5%">
                                        <form action="../controller/subject.controller.php" method="POST">
                                            <input type="hidden" name="id" value="<?= $subject['id']; ?>"> 
                                            <button type="submit" class="btn btn-link">Delete</button>
                                        </form>
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
            
            
        </div>
    </div>
</div>

<?php include 'sub-views/footer.php'; ?>