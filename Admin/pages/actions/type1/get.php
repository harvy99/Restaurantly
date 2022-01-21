                                    <?php                    
                                        include('../../../../includes/dbcon.php');
                                        $json = file_get_contents("../../json/admin_account.json");
                                        $json = json_decode($json,true);
                                    ?>
                                    <thead>
                                        <tr>
                                            <th>Actions</th> 
                                            <th>#</th>
                                            <!-- THE HEaders of field -->
                                            <?php
                                            foreach($json['fields'] as $key ) { 
                                                if($key['property']['visible'] == 1)
                                                    echo '<th>'.$key['label'].'</th>';  
                                            } 
                                            ?>
                                        </tr>
                                    </thead> 
                                    <tfoot>
                                        <tr>
                                            <th>Actions</th> 
                                            <th>#</th>
                                            <!-- THE HEaders of field -->
                                            <?php
                                            foreach($json['fields'] as $key ) { 
                                                if($key['property']['visible'] == 1)
                                                    echo '<th>'.$key['label'].'</th>';  
                                            } 
                                            ?>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                
                                    <?php 
                                    $count =1;
                                        $sql="SELECT username, password, first_name, last_name, email, admin_type, active, a.id as id, a.admin_type_id 
                                         FROM `admin_accounts` a INNER JOIN admin_type t on a.admin_type_id = t.id
                                        ";
                                        $query=mysqli_query($con,$sql)or 
                                        die(print("SQL Error"));
                                        while($row=mysqli_fetch_array($query)){
                                            // Set array of fields to display data
                                            $field_arrays = array();

                                            foreach($json['fields'] as $key ) { 
                                                $text = '';
                                                if($key['property']['visible'] == 1){ 
                                                    if($key['property']['dataType'] =='foreign') 
                                                        $text =$row[$key['property']['foreignQuery']['field']];
                                                    else if($key['property']['dataType'] =='boolean'){ 
                                                        if($row[$key['name']] == 1) 
                                                            $text = $key['property']['booleanValues']['true'];
                                                        else 
                                                            $text = $key['property']['booleanValues']['false']; 
                                                    }
                                                    else
                                                        $text =  $row[$key['name']];

                                                    array_push($field_arrays,$text);
                                                }
                                            }   

                                            // the very first field in the JSON must be the id 
                                            $id = $row[$json['fields'][0]['name']];  

                                            $displayLabel =  $row[$json['displayFieldForDelete']];

                                        ?> 

                                        <tr>
                                            <td>
                                                <span class="text-primary"> <i type="button" class="fa fa-edit" data-toggle="modal" data-target="#editModal" data-id="<?php echo $id?>" data-label="<?php echo $displayLabel?>"></i> </span>
                                                <span class="text-danger"> <i type="button" class="fa fa-trash" data-toggle="modal" data-target="#deleteModal" data-id="<?php echo $id?>"  data-label="<?php echo $displayLabel?>" ></i> </span>
                                                <input type="checkbox" id="selector-<?php echo $id?>" class="selector-checkbox selector-uncheck">
                                            </td>
                                            
                                            <td><?php echo $count?></td>
                                            <!-- Display data -->
                                            <?php   
                                                $index = 0; 
                                              foreach($field_arrays as $val ) {  
                                                while($json['fields'][$index]['property']['visible'] != 1) { 
                                                     //if the current field is should not be visible, 
                                                    $index ++;// Maybe the next field is visible 
                                                } //check the next field
 
                                                echo '<td id="row_'.$json['fields'][$index]['name'].'_'.$id.'">'.$val.'</td>'; 
                                                $index ++;
                                            } 
                                            ?>
                                        </tr> 
                                        <?php $count++;}?>
                                    </tbody>
                                                                
                                <!-- Page level custom scripts -->
                                <script src="../js/demo/datatables.js"></script>