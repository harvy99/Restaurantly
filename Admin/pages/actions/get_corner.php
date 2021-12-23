                                    <?php                    
                                        include('../../includes/dbcon.php');
                                    ?>
                                    <thead>
                                        <tr>
                                            <th>Actions</th> 
                                            <th>#</th>
                                            <th>Corner Type</th> 
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>actions</th> 
                                            <th>#</th>
                                            <th>Corner Type</th> 
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                
                                    <?php 
                                    $count =1;
                                        $sql="SELECT * FROM `corners`   ";
                                        $query=mysqli_query($con,$sql)or 
                                        die(print("SQL Error"));
                                        while($row=mysqli_fetch_array($query)){
 
                                            $name = $row['name'];
                                            $id = $row['id'];

                                        ?> 

                                        <tr>
                                            <td>
                                                <span class="text-primary"> <i type="button" class="fa fa-edit" data-toggle="modal" data-target="#editModal" data-id="<?php echo $id?>" data-name="<?php echo $name?>"></i> </span>
                                                <span class="text-danger"> <i type="button" class="fa fa-trash" data-toggle="modal" data-target="#exampleModal" data-id="<?php echo $id?>" data-name="<?php echo $name?>"></i> </span>
                                                <input type="checkbox" id="selector-<?php echo $id?>" class="selector-checkbox selector-uncheck">
                                            </td>
                                            <td><?php echo $count?></td>
                                            <td><?php echo $name?></td>  
                                        </tr> 
                                        <?php $count++;}?>
                                    </tbody>
                                                                
                                <!-- Page level custom scripts -->
                                <script src="../js/demo/datatables.js"></script>