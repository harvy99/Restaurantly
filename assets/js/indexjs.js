$(document).ready(function() {
    $product_name = [];
    $product_price = [];
    $product_id = [];
    $count = 0;


})

var exampleModal = document.getElementById('modal-menu')
exampleModal.addEventListener('show.bs.modal', function(event) {
    // Button that triggered the modal
    var button = event.relatedTarget
        // Extract info from data-bs-* attributes
    var name = button.getAttribute('data-bs-name')
    var id = button.getAttribute('data-bs-id')
        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.
        //
        // Update the modal's content.
    var modalTitle = exampleModal.querySelector('.modal-title')
        // var modalBodyInput = exampleModal.querySelector('.modal-body input')

    modalTitle.textContent = '' + name
        // modalBodyInput.value = recipient

    $.ajax({
        url: "includes/getVariants.php",
        method: "POST",
        cache: false,
        dataType: "json",
        data: { id: id },
        success: function(data) {
            $product_id = data.id;
            $product_name = data.name;
            $product_price = data.price;
            $count = data.count;


            $('#select_variant').empty();
            for (var x = 0; x < data.count; x++) {

                $('#select_variant').append('<option value="' + data.id[x] + '">' + data.name[x] + '</option> ');
            }

            $('#product_price').html('₱' + $product_price[0]);
            $('.input-number').val(1);



        },
        error: function(response, error) {
            alert('fail');
        }

    })
});

// Change the price when variant is chosen
$('#select_variant').change(function() {

    var index = 0;
    for (var x = 0; x < $count; x++) {

        if ($product_id[x] == this.value) {
            index = x;
        }
    }

    $('#product_price').html('₱' + $product_price[index]);

    $('.input-number').val(1);

})

var containers = document.querySelectorAll('.container2');

new PerfectScrollbar(containers[0], {
    useBothWheelAxes: true
});


$('.left-arrow').hide();

$('.left-arrow').on('click', function() {
    $('.container2').scrollLeft($('.container2').scrollLeft() - 1000);
});
$('.right-arrow').on('click', function() {
    $('.container2').scrollLeft($('.container2').scrollLeft() + 1000);
});
$('.container2').on('scroll', function() {

    // console.log($(this).scrollLeft() + $(this).innerWidth()); 
    // console.log($(this)[0].scrollWidth); 
    if ($(this).scrollLeft() + $(this).innerWidth() >= $(this)[0].scrollWidth - 1) {
        // alert("reached end");
        $('.right-arrow').hide();
    } else {
        $('.right-arrow').show();
    }

    if ($(this).scrollLeft() == 0) {
        // alert("reached end");
        $('.left-arrow').hide();
    } else {
        $('.left-arrow').show();
    }

});