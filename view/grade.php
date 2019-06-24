<?php 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        if(!empty($_POST['id'])) {
              
            $id = $_POST['id'];
            
        }
    
    }



    $page = "Grade";
    include 'sub-views/header.php'; 
?>
            
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title-5 m-b-35">Grade</h3>
                    
                    <!-- GRADE FORM -->
                    <form action="../controller/grade.controller.php" method="POST">
                        
                        <div class="form-row">
                            <div class="form-group col-md-12 form-search">
                                <label for="">Name:</label>
                                <input type="text" class="form-control" id="nameSearch" name="name" value="<?= $id; ?>">
                                <small id="nameHelp" class="form-text text-muted">Please enter surname</small>
                                <div id="suggestion-box"></div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="class">Class:</label>
                                <select class="form-control" name="class" id="class">
                                    <option value=""></option>
                                    <option value="JSS 1">JSS 1</option>
                                    <option value="JSS 2">JSS 2</option>
                                    <option value="JSS 3">JSS 3</option>
                                    <option value="SSS 1">SSS 1</option>
                                    <option value="SSS 2">SSS 2</option>
                                    <option value="SSS 3">SSS 3</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="arm">Arm:</label>
                                <select class="form-control" name="arm" id="arm">
                                    <option value=""></option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                </select>
                            </div>
                        </div>
                        
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col" width="20%">SUBJECT</th>
                                    <th scope="col">C.A 1 (40%)</th>
                                    <th scope="col">EXAM 1 (60%)</th>
                                    <th scope="col">C.A 2 (40%)</th>
                                    <th scope="col">EXAM 2 (60%)</th>
                                    <th scope="col">TOTAL (100%)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1.</td>
                                    <td scope="row">Mathematics</td>
                                    <td scope="row"><input type="number" name="ca1" class="form-control"></td>
                                    <td scope="row"><input type="number" name="exam1" class="form-control"></td>
                                    <td scope="row"><input type="number" name="ca2" class="form-control"></td>
                                    <td scope="row"><input type="number" name="exam2" class="form-control"></td>
                                    <td scope="row"><input type="number" name="total" class="form-control"></td>
                                </tr>
                                
                            </tbody>
                           
                        </table>
                        <br>
                        
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button class="btn btn-danger" onclick="window.location.href='viewstudent.php'">Cancel</button>
                        </div>
                    </form>
                    <!-- END OF GRADE FORM -->
                    
                </div>
            </div>
        </div>
    </div>
</div>
      
<?php include 'sub-views/footer.php'; ?>  