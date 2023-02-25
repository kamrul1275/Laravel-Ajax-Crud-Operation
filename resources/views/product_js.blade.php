
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>


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


    }

}, error:function(){

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
















});// end main function


</script>






