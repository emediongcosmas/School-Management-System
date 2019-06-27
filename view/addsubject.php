<?php 
    $page = "Subject";
    include 'sub-views/header.php'; 
?>

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid h-100">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>New Subject</h4>
                        </div>
                        <div class="card-body">
                            <!-- NEW TEACHER FORM -->
                            <form action="../controller/subject.controller.php" method="POST">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="subject">Subject:</label>
                                        <input type="text" class="form-control" name="subject" id="subject" required>
                                    </div>
                                </div>
                                <div class="form-row text-center">
                                    <div class="form-group col-md-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="jss" id="jss" value="1">
                                            <label class="form-check-label" for="inlineCheckbox1">JSS</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="sss" id="sss" value="1">
                                            <label class="form-check-label" for="inlineCheckbox1">SSS</label>
                                        </div>
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

<?php include 'sub-views/footer.php'; ?>