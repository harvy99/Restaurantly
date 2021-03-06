<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>29:11 Diners Admin - Corners</title>

    <link href="../../assets/img/favicon.ico" rel="icon">
    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">
     
    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="../vendor/datatables/buttons.dataTables.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include('../includes/navbar.php')?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include('../includes/topbar.php')?>
                
               <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Menu Corners</h1>
                    <p class="mb-4">Menu corners like Food and Drinks</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Corners DataTables</h6>
                        </div>
                        
                        <div class="mx-2 ml-3 pt-2"> 
                            <a  type="button" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#addModal">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span> 
                                <span class="text">Add</span>
                            </a>  
                            <button id="edit-btn"  type="button" class="btn btn-primary btn-icon-split" onClick='editAll()' disabled>
                                <span class="icon text-white-50">
                                    <i class="fas fa-edit"></i>
                                </span> 
                                <span class="text">Edit</span>
                            </button>
                            <button id="delete-btn" type="button" class="btn btn-danger btn-icon-split" data-toggle="modal" data-target="#deleteModalAll" disabled>
                                <span class="icon text-white-50">
                                    <i class="fas fa-trash"></i>
                                </span> 
                                <span class="text">Delete</span>
                            </button>
                            <a  id="check-btn" type="button" class="btn btn-secondary btn-icon-split" >
                                <span class="icon text-white-50">
                                    <i class="fas fa-check"></i>
                                </span> 
                                <span class="text">Check All</span>
                            </a>
                            <a  id="export-btn" type="button" class="btn btn-dark btn-icon-split" >
                                <span class="icon text-white-50">
                                    <i class="fas fa-file-export"></i>
                                </span> 
                                <span class="text">Export</span>
                            </a>
                            <a   type="button" class="btn btn-light btn-icon-split" data-toggle="modal" data-target="#importModal">
                                <span class="icon text-white-50">
                                    <i class="fas fa-file-import"></i>
                                </span> 
                                <span class="text">Import</span>
                            </a>
                            <a  id="print-btn" type="button" class="btn btn-info btn-icon-split" >
                                <span class="icon text-white-50">
                                    <i class="fas fa-print"></i>
                                </span> 
                                <span class="text">Print</span>
                            </a>
                        </div> 
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- ADD Modal-->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Corner</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <form   method="POST" id="addRecordForm">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Corner Type:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div> 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" data-dismiss="modal" onClick="addNew()">Add</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    <!-- EDIT MODAL -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <form   method="POST" id="editRecordForm" >
        <div class="modal-body">
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Corner Type:</label>
                <input type="text" class="form-control" id="edit-name" name="name" required>
            </div> 
        </div>
        
        <input type="hidden" id="edit-corner-id" name="id">

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" data-dismiss="modal" onClick="editRecord()" >Apply Changes</button>
        </div>
        
        </form>
        </div>
    </div>
    </div>
    
    
    <!-- DELETE MODAL -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Are sure?</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <form   method="POST" id="deleteRecordForm" >
        <div class="modal-body">
            Once the selected items are deleted, it cant be recover.
        </div> 
        <input type="hidden" id="delete-corner-id" name="id">

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" data-dismiss="modal" onClick="deleteRecord()" >Delete</button>
        </div>
        
        </form>
        </div>
    </div>
    </div>

    <!-- Import MODAL -->
    <div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Are sure?</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <form   method="POST" id="importRecordForm" enctype="multipart/form-data">
        <div class="modal-body">
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Upload Excel file here(.csv only)</label>
                <input type="file" name="file"/>
                <p>Follow the column arrangement from the table<p> 
            </div> 
        </div> 
        <input type="hidden" id="delete-corner-id" name="id">

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" data-dismiss="modal" onClick="importRecord()" >Import</button>
        </div>
        
        </form>
        </div>
    </div>
    </div>

    <!-- Delete Modal Confirmation-->
    <div class="modal fade" id="deleteModalAll" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are sure?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">Once the selected items are deleted, it cant be recover.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" type="button" onClick="deleteAll()" data-dismiss="modal">Delete</a>
                </div>
            </div>
        </div>
    </div>

    <form id="formEditAll" method="POST" action ="edit_page_corner.php" enctype="multipart/form-data"> 
        
    </form>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>
  
    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script> 
    
    <script src="../vendor/datatables/dataTables.buttons.min.js"></script>
    <script src="../vendor/datatables/jszip.min.js"></script> 
    <script src="../vendor/datatables/buttons.html5.min.js"></script>
    <script src="../vendor/datatables/buttons.print.min.js"></script>
    
    <script>
        $( document ).ready(function() {  
            
            $load_page = "actions/corners/get_corner.php" ;
            $add_data = "actions/corners/add_corner.php" ;
            $delete_data = "actions/corners/delete_corner.php" ;
            $import_data = "actions/corners/import_corner.php" ; 
            $update_data = "actions/corners/update_corner.php" ;

            $( "#dataTable" ).load( $load_page);
 
        });  
        $( "#export-btn" ).on( "click", function() { 
            $( ".datatable1-excel" ).trigger( "click" );
        });
        $( "#print-btn" ).on( "click", function() { 
            $( ".datatable1-print" ).trigger( "click" );
        });
        $( "#check-btn" ).on( "click", function() { 
            $( ".selector-checkbox" ).trigger( "click" );
        });
         

        $('#editModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal 
                var name = button.data('name') 
                var id = button.data('id') 
                
                
                var modal = $(this)
                modal.find('.modal-title').text('Edit ' + name)
                modal.find('#edit-corner-id').val(id)
                modal.find('#edit-name').val(name)
                })
        
        $('#deleteModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal 
                var name = button.data('name') 
                var id = button.data('id') 
                
                
                var modal = $(this)
                modal.find('.modal-title').text('Delete ' + name)
                modal.find('#delete-corner-id').val(id) 
                })
        
// ADD RECORD -------------------------------------
        function addNew(){

            var myForm = document.getElementById('addRecordForm');
            var formData = new FormData(myForm);
            $.ajax({
                url: $add_data,
                method: "POST",
                enctype: "multipart/form-data",
                data: formData, 
                processData: false,
                contentType: false, 
                 success: function(data) {
                    $( "#dataTable" ).empty() 
                    $datatable.destroy();
                    $( "#dataTable" ).load( $load_page );
                 },
                 error: function(request, error) {
                     
                    console.log(request)
                    console.log(error)
                    alert("Something went wrong");
                 }
            });
        }

    // EDIT RECORD----------------------     
        function editRecord(){

            var myForm = document.getElementById('editRecordForm');
            var formData = new FormData(myForm);
            $.ajax({
                url: $update_data,
                method: "POST",
                enctype: "multipart/form-data",
                data: formData, 
                processData: false,
                contentType: false, 
                 success: function(data) {
                    $( "#dataTable" ).empty() 
                    $datatable.destroy();
                    $( "#dataTable" ).load( $load_page );
                 },
                 error: function(request, error) {
                     
                    console.log(request)
                    console.log(error)
                    alert("Something went wrong");
                 }
            });
        }
         // EDIT ALL RECORD------------------------------------------
         function editAll(){
            var arrSelected = [] 
            var all = $(".selector-checked").map(function() {
               
                var id = $(this).attr('id'); 
                id = id.replace(/\D/g,'');
                return id;
            }).get();
            
            arrSelected = all.join();

            var data = {
                selected: arrSelected 
            }; 
 
            $("<input />").attr("type", "hidden")
                                  .attr("name", "ids")
                                  .attr("value", JSON.stringify(data) )
                                  .appendTo("#formEditAll"); 
                        document.getElementById("formEditAll").submit();
        }
        
        
        // DELETE RECORD ------------------------------------------
        function deleteRecord(){

            var myForm = document.getElementById('deleteRecordForm');
            var formData = new FormData(myForm);
            $.ajax({
                url: $delete_data,
                method: "POST",
                enctype: "multipart/form-data",
                data: formData, 
                processData: false,
                contentType: false, 
                 success: function(data) {
                    $( "#dataTable" ).empty() 
                    $datatable.destroy();
                    $( "#dataTable" ).load($load_page );
                 },
                 error: function(request, error) {
                     
                    console.log(request)
                    console.log(error)
                    alert("Something went wrong");
                 }
            });
        }
        // DELETE ALL RECORD------------------------------------------
        function deleteAll(){
            var arrSelected = [] 
            var all = $(".selector-checked").map(function() {
               
                var id = $(this).attr('id'); 
                id = id.replace(/\D/g,'');
                return id;
            }).get();
            
            arrSelected = all.join();

            var data = {
                selected: arrSelected 
            }; 
 
            $.ajax({
                    url: $delete_data,
                    method:"POST",
                    data:JSON.stringify(data) ,
                    success: function(data) {
                        // alert("Deleted");
                        // console.log(data)
                        $( "#dataTable" ).empty() 
                        $datatable.destroy();
                        $( "#dataTable" ).load( $load_page );
                    },
                    error: function(err) { 
                        alert("Something went wrong");
                        console.log(err)
                    }
          		 }); 
        }
        
// IMPORT RECORD --------------------------------------
        function importRecord(){

            var myForm = document.getElementById('importRecordForm');
            var formData = new FormData(myForm);
            $.ajax({
                url: $import_data,
                method: "POST",
                enctype: "multipart/form-data",
                data: formData, 
                processData: false,
                contentType: false, 
                 success: function(data) {
                    $( "#dataTable" ).empty() 
                    $datatable.destroy();
                    $( "#dataTable" ).load( $load_page );
                    console.log(data)
                 },
                 error: function(request, error) {
                     
                    console.log(request)
                    console.log(error)
                    alert("Something went wrong");
                 }
            });
        }
         
         


    </script>
    

</body>

</html>