
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>


<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>


<script>
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
</script>


<script>

//alert('oky.?');


$(document).ready(function(){

$(document).on('click', '.add_product',function(e){

    e.preventDefault();

    //alert('oky.?');

var product_name = $('#product_name').val();
var product_price = $('#product_price').val();

//console.log(product_name+product_price);



$.ajax({

url:"{{ route('add.product') }}",
method: 'post',

data: {

    product_name:product_name, product_price:product_price,
},


success:function(res){

    if(res.status=='success'){

        $('#AddModal').modal('hide');
        $('#AddModalForm')[0].reset();
        $('#tableID').load(location.href+" #tableID");







        Command: toastr["success"]("Product Added....!", "Success")

                    toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                    }




    }

}, error:function(err){

    let error= err.responseJSON;

    console.log(error);


    $.each(error.errors, function(index,value){

      $('.errorMsg').append("<span class='text-danger'>" +value+ "</span>" + "<br>");
    });

}

 });




})// end add product function




// edit prooduct



$(document).on('click','.editProductForm',function(){


//alert('oky.?');

var up_id = $(this).data('id');
var up_name = $(this).data('name');
var up_price =$(this).data('price');

console.log(up_id+up_name+up_price);



$('#update_id').val(up_id);

$('#update_name').val(up_name);


$('#update_price').val(up_price);



});// end edit view function






// update product





$(document).on('click', '.update_product',function(e){

e.preventDefault();

//alert('oky.?');
var update_id = $('#update_id').val();

var update_name = $('#update_name').val();
var update_price = $('#update_price').val();

console.log(update_id+update_name+update_price);


$.ajax({

url:"{{ route('product.update') }}",
method: 'post',

data: {

    update_id:update_id, update_name:update_name, update_price:update_price,
},


success:function(res){

    if(res.status=='success'){

        $('#editModal').modal('hide');
        $('#UpdateModalForm')[0].reset();
        $('#tableID').load(location.href+" #tableID");




        Command: toastr["success"]("Product Updated....!", "Success")

                toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
                }


    }

}, error:function(){

}

 });



})// end update product function




// delete poduct



$(document).on('click', '.DeleteProduct',function(e){

e.preventDefault();

//alert('oky.?');
var product_id = $(this).data('id');

//alert(product_id);
//console.log(product_id);

if(confirm('are u sure.?')){


 $.ajax({

        url:"{{ route('product.delete') }}",
        method: 'get',

        data: {

            product_id:product_id,
        },


success:function(res){

    if(res.status=='success'){


        $('#tableID').load(location.href+" #tableID");




        Command: toastr["success"]("Product Deleted....!", "Success")

                    toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                    }


    }
}


 });



}



})




});// end main function


</script>






