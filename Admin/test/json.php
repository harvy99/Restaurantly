<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p id="demo">This is demo</p>
    <div id="append">
        <p>Append here:</p><br>

    </div>
    <div>
        <p>PHP JSON OBJECT</p>
        <?php 
        $json = file_get_contents("json.json");
        $json = json_decode($json);
         
        
        foreach($json->arrays as $key ) { 
            echo 'Field:'.$key->name.'<br>';
            echo '
            <ul>
            <li>'.$key->property->dataType.'</li>
            <li>'.($key->property->editable == 1 ? 'true' : 'false').'</li> 
            </ul>
            
            
            '; 
        } 
        ?>
        <p>PHP JSON ASSOCIATIVE ARRAYS</p>
         <?php 
        $json = file_get_contents("json.json");
        $json = json_decode($json,true);
         
        
        foreach($json['arrays'] as $key ) { 
            echo 'Field:'.$key['name'].'<br>';
            echo '
            <ul>
            <li>'.$key['property']['dataType'].'</li>
            <li>'.($key['property']['editable'] == 1 ? 'true' : 'false').'</li> 
            </ul>
            
            
            '; 
        } 
        echo $json['arrays'][0]['name'];
        ?>
    </div>
</body>
</html>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
<script>
    fetch("json.json")
    .then(response => {
      return response.json();
    })
    .then(function(data) { 
      console.log(data.employees);

    var text = '';

      data.employees.forEach(setViews); 
      data.arrays.forEach(setFields); 

      function setViews(item, index) { 
        text += item.firstName+'\n'; 
      }
      function setFields(item, index) {  
          $('#append').append('<p>Field:'+item.name+'</p>')
          $('#append').append('<ul>')
          $('#append').append('<li>'+item.property.dataType+'</li>')
          $('#append').append('<li>'+item.property.editable+'</li>')
          $('#append').append('</ul>')
        console.log(item)
      }

      $('#demo').html(text)
         

    }).catch(function(error) {
            console.log(error);
    });
</script>