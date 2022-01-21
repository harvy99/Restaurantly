
<?php 

include('../../../includes/dbcon.php');

$json = file_get_contents("../../json/".$_POST['json_file']);
$json = json_decode($json,true);


$table = $json['tableName'];
$row = 0;
$arr_fields = array();

$str= '';
 $file = $_FILES["file"]["tmp_name"];
 $file_open = fopen($file,"r");
 while(($csv = fgetcsv($file_open, 1000, ",")) !== false)
 { 
    //  var_dump($csv);
    //  Get the allowed header row (first row of the excel is the headers)
     if($row == 0){
        for($i = 0; $i < count($csv); $i++){ 
            foreach($json['fields'] as $key ) {
                if($key['property']['addable'] == 1){ 
                    if($key['name'] == $csv[$i]){ 
                        // Find the match header for field

                        if($key['property']['dataType'] =='foreign'){ 
                            // if it is  foreign key
                
                            // [arrayindex][explode symbol][field name][explode symbol][data type][explode symbol][SQL query for foreign][explode symbol][foreign display field]
                            array_push($arr_fields,$i."///".$key['name']."///".$key['property']['dataType']."///".$key['property']['foreignQuery']['importQuery']."///".$key['property']['foreignQuery']['field']); 
                        }
                        else if($key['property']['dataType']  =='boolean'){ 
                            // A boolean with display value
                
                            // [arrayindex][explode symbol][field name][explode symbol][data type][explode symbol][boolean 1 display][explode symbol][boolean 0 display]
                            array_push($arr_fields,$i."///".$key['name']."///".$key['property']['dataType']."///".$key['property']['booleanValues']['true']."///".$key['property']['booleanValues']['false']); 
                        }else{
                            // For normal easily insertable 
                             
                            // [arrayindex][explode symbol][field name][explode symbol][data type]
                            array_push($arr_fields,$i."///".$key['name']."///".$key['property']['dataType']); 
                        }
 
    
                    } 
                }
            } 
        } 
     }else{ 
        $insert ='(';
        $values ='VALUES(';
        $x = 0;

        for($i = 0; $i < count($arr_fields); $i++){

            // not first time loop
            if($x > 0) { 
                $insert .=', ';
                $values .=', ';
            }
            $x++; 

            $temp_arr = explode("///",$arr_fields[$i]);

            if($temp_arr[2] =='foreign'){ 
                // if it is  foreign key
 
                $foreign_id ='';

                // replace the value 
                $sql = str_replace("<value>",$csv[$temp_arr[0]],$temp_arr[3]); 
                // replace the field 
                $sql = str_replace("<field>",$temp_arr[4],$sql);
                $query=mysqli_query($con,$sql)or 
                die(mysqli_error($con));
                if($sql_row=mysqli_fetch_array($query)){
                    // if got match 
                    $foreign_id = $sql_row['id'];  
                }else{
                    // else, then default value is 1
                    $foreign_id = 1;  
                }
                
                 
                $insert .= '`'.$temp_arr[1].'`' ; 
                $values .= "'".$foreign_id."'" ; 
    
            }
            else if($temp_arr[2]  =='boolean'){ 
                // A boolean with display value

                $bool_value = 0;

                // if the value is = to 1 diplay value
                if($csv[$temp_arr[0]] == $temp_arr[3]){
                    
                    $bool_value = 1;

                }// if the value is = to 0 diplay value
                else if($csv[$temp_arr[0]] == $temp_arr[4]){
                    
                    $bool_value = 0;

                }// if no match, then dafault value of 1
                else{
                    
                    $bool_value = 1;

                } 
                
                $insert .= '`'.$temp_arr[1].'`' ; 
                $values .= "'".$bool_value."'" ; 
    
            }else{
                // For normal easily insertable 
                
                $insert .= '`'.$temp_arr[1].'`' ; 
                $values .= "'".$csv[$temp_arr[0]]."'" ; 
            }

        }
        // Process field values
          
        $insert .=')';
        $values .=')';
         
        // echo "INSERT INTO $table $insert $values";
        mysqli_query($con,"INSERT INTO $table $insert $values")or die(mysqli_error($con));
 
     } 
//   mysqli_query($con,"INSERT INTO admin_accounts( `username`,`password`,`first_name`,`last_name`,`email`,`admin_type_id`,`active` )
//             VALUES( '$username','$password','$firstname','$lastname','$email',1,1 )")or die(mysqli_error($con)); 
            
    $row ++;
 } 

?>