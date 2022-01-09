// Call the dataTables jQuery plugin
$(document).ready(function() { 
  

 $datatable= $('#dataTable').DataTable( {
  dom: 'lfrtipB',
  "columnDefs": [
    { "width": "5%", "targets": 0 },
    { "width": "5%", "targets": 1 },
    { "width": "5%", "targets": 2 },
  ],
  lengthMenu: [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]],
  buttons: [   
       { 
        extend:'excel',
        text: 'excel',
        className: 'datatable1-hidden datatable1-excel'
        },   
        { 
         extend:'print',
         text: 'print',
         className: 'datatable1-hidden datatable1-print'
         }
  ]
  } );
});
$('.selector-checkbox').change(function() {
            
  // var id = $(this).attr('id'); 
  // id = id.replace(/\D/g,'');
  // alert(id) 
  if(this.checked) {
      $(this).removeClass('selector-uncheck')
      $(this).addClass('selector-checked')
  }else{ 
      $(this).removeClass('selector-checked')
      $(this).addClass('selector-uncheck')
  }
  
  $('.selector-checkbox')
  
  var arrSelected = [] 
  var all = $(".selector-checked").map(function() {
     
      var id = $(this).attr('id'); 
      id = id.replace(/\D/g,'');
      return id;
  }).get();
  
  arrSelected = all.join();
  if(arrSelected.length > 0){ 
    $('#edit-btn').prop('disabled', false);
    $('#delete-btn').prop('disabled', false); 
  }else{ 
    $('#edit-btn').prop('disabled', true);
    $('#delete-btn').prop('disabled', true); 
  }

});