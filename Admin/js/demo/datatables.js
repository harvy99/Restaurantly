// Call the dataTables jQuery plugin
$(document).ready(function() { 
  

 $datatable= $('#dataTable').DataTable( {
  dom: 'lBfrtip',
  lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
  buttons: [   
       { 
        extend:'print',
        text: 'Print',
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

});