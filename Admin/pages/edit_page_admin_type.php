<?php

// header('Content-Type: application/json'); 

include('../includes/dbcon.php');

if(isset($_POST['ids'])){
 
  $arr=  json_decode($_POST['ids']);

  $arr = explode(",",$arr -> selected) ; 

} else{
    echo'<script>document.location="home.php"</script>';
}
  
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>29:11 Diners Admin - Corners Edit</title>

    <link href="../../assets/img/favicon.ico" rel="icon">
    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Corners Edit</h1> 
                    </div>
 
                    <!-- Content Row -->

                    <form   enctype="multipart/form-data">  
                        <div class="row">

                            <?php 
                            foreach ($arr as $value) {
                                $sql="SELECT username, password, first_name, last_name, email, admin_type, active, a.id as id, a.admin_type_id 
                                         FROM `admin_accounts` a INNER JOIN admin_type t on a.admin_type_id = t.id
                                         where a.id = $value
                                        ";
                                $query=mysqli_query($con,$sql)or 
                                die(print("SQL Error"));
                                $row=mysqli_fetch_array($query); 
                                $admin_type_id = $row['admin_type_id']; 
                                $username = $row['username'];
                                $password = $row['password'];
                                $first_name = $row['first_name'];
                                $last_name = $row['last_name'];
                                $email = $row['email'];
                                $admin_type = $row['admin_type'];
                                $active_number = $row['active'];
                                $active = $row['active']== 1? 'Active' :'Inactive';
                                $id = $row['id'];

                            ?>
                            <!-- Records -->
                            <div class="records record_<?php echo $id?> col-lg-6">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Id: <?php echo $id?></h6>
                                        <div class="dropdown no-arrow">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                aria-labelledby="dropdownMenuLink">
                                                <div class="dropdown-header">Action:</div>
                                                <a class="dropdown-item remove-btn"  id="remove_btn_<?php echo $id?>" href="#">Remove from edit</a> 
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        
                                        <input type="hidden" class="form-control record-fields-id" id="<?php echo $id?>" required> 

                                        <div class="mb-3">
                                            <label for="edit_admin_type" class="col-form-label">Admin Type:</label>
                                            <select class="custom-select"  id="admin_type_<?php echo $id?>" >
                                                    <?php  
                                                        $sql="SELECT * FROM `admin_type`   ";
                                                        $query=mysqli_query($con,$sql)or 
                                                        die(print("SQL Error"));
                                                        while($row=mysqli_fetch_array($query)){
                                                            $id_admin_type= $row['id'];
                                                            $name_admin_type = $row['admin_type']; 
                                                            if($id_admin_type == $admin_type_id){ 
                                                                echo "<option value='$id_admin_type' selected>$name_admin_type</option> "; 
                                                            }else{ 
                                                                echo "<option value='$id_admin_type'>$name_admin_type</option> "; 
                                                            }
                                                        } 
                                                        ?>  
                                            </select>
                                        </div> 
                                        <div class="mb-3">
                                            <label for="firstname" class="col-form-label">First name:</label>
                                            <input type="text" class="form-control"  id="firstname_<?php echo $id?>" value="<?php echo $first_name?>" required>
                                        </div> 
                                        <div class="mb-3">
                                            <label for="lastname" class="col-form-label">Last name:</label>
                                            <input type="text" class="form-control" id="lastname_<?php echo $id?>" value="<?php echo $last_name?>" required>
                                        </div> 
                                        <div class="mb-3">
                                            <label for="username" class="col-form-label">Username:</label>
                                            <input type="text" class="form-control" id="username_<?php echo $id?>" value="<?php echo $username?>" required>
                                        </div> 
                                        <div class="mb-3">
                                            <label for="password" class="col-form-label">Password:</label>
                                            <input type="password" class="form-control"  id="password_<?php echo $id?>" value="<?php echo $password?>" required>
                                        </div> 
                                        <div class="mb-3">
                                            <label for="email" class="col-form-label">Email:</label>
                                            <input type="email" class="form-control"  id="email_<?php echo $id?>" value="<?php echo $email?>" required>
                                        </div> 
                                        
                                        <div class="mb-3">
                                            <label for="active" class="col-form-label">Active:</label>
                                            <select class="custom-select"   id="active_<?php echo $id?>" >
                                            <?php
                                            if($active_number ==1){
                                                echo " <option value='1' selected>Active</option>  
                                                        <option value='0'>Inactive</option>  ";
                                            }else{ 
                                                echo " <option value='1' >Active</option>  
                                                        <option value='0' selected>Inactive</option>  ";
                                            }
                                            ?> 
                                            </select>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            
                            <div class="submit-panel col-lg-12 px-5">
                                <a  id="submit-btn" class="btn btn-facebook btn-block"><i  class="fa fa-edit "></i>SUBMIT</a>

                            </div> 
    
                        </div> 
                    </form>
  

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
 
    <form id="formEditAll" method="POST" action ="actions/admin_account/edit_all.php" enctype="multipart/form-data"> 
        
    </form>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>
 
    <script>
        $( ".remove-btn" ).on( "click", function() { 

            var id = $(this).attr('id'); 
            id = id.replace(/\D/g,'');
 
            $( ".record_"+id ).empty();
            
        })
          // EDIT ALL RECORD------------------------------------------
          $( "#submit-btn" ).on( "click", function() { 
            var arrSelected = [] 
            var arrNames = []

            var all = $(".record-fields-id").map(function() {
               
                var id = $(this).attr('id'); 
                id = id.replace(/\D/g,'');
                return id;
            }).get();
            
            
            // INITIALIZE JSON object
            var jsonObj = {
                    fields: 
                        {  
                        }
                }

            //get all IDS
            arrSelected = all.join().split(",");
            arrSelected.forEach(myFunction)
  
            //insert all fields to JSON
            function myFunction(item, index) { 
                jsonObj.fields[index] = {} ;
                jsonObj.fields[index].id = item ;
                jsonObj.fields[index].adminType =  $("#admin_type_"+item).val() ;
                jsonObj.fields[index].firstname =  $("#firstname_"+item).val() ;
                jsonObj.fields[index].lastname =  $("#lastname_"+item).val() ;
                jsonObj.fields[index].username =  $("#username_"+item).val() ;
                jsonObj.fields[index].password =  $("#password_"+item).val() ;
                jsonObj.fields[index].email =  $("#email_"+item).val() ;
                jsonObj.fields[index].active =  $("#active_"+item).val() ;
            }
 
            console.log((jsonObj))

            $("<input />").attr("type", "hidden")
                                  .attr("name", "ids")
                                  .attr("value", JSON.stringify(jsonObj) )
                                  .appendTo("#formEditAll"); 
                        document.getElementById("formEditAll").submit();
        })
        
        </script>


</body>

</html>