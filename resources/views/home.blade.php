<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>











     <div class="container">


          <div class="row">


               <div class="col-md-12">

                    <h1 class="py-4 text-center">Ajax Crud Operation</h1>

                    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AddModal">
   Add Product
   </button>

   <!-- Modal -->
   <div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>

         <form id="AddModalForm">

         <div class="modal-body">



               <div class="mb-3">
                 <label for="Name" class="form-label">Product Name
                 </label>
                 <input type="text" class="form-control" name="product_name" id="product_name" aria-describedby="Name">

               </div>


               <div class="mb-3">
                 <label for="Price" class="form-label">Price</label>
                 <input type="text" class="form-control" name="product_price" id="product_price">
               </div>


         </div>

         <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
           <button type="button" class="btn btn-primary add_product">Add Save</button>
         </div>

     </form>


       </div>
     </div>
   </div>

                    <table class="table" id="tableID">
                         <thead>
                           <tr>
                             <th scope="col">No</th>
                             <th scope="col">Product Name</th>
                             <th scope="col">Price</th>
                             <th scope="col">Action</th>
                           </tr>
                         </thead>
                         <tbody>

                            @foreach ($Products as $key=>$product)

                            <tr>
                                <th scope="row">{{ $key+1 }}</th>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->product_price }}</td>


                                <td>
                                 <a href="" class="btn btn-success editProductForm"
                                  data-bs-toggle="modal" data-bs-target="#editModal"

                                  data-id={{ $product->id }}
                                  data-name={{ $product->product_name }}

                                  data-price={{ $product->product_price }}



                                  >Edit</a>
                                 <a href="" class="btn btn-danger">Delete</a>


                                </td>
                              </tr>


                            @endforeach

                         </tbody>

                       </table>
                       {{ $Products->links() }}


               </div>


          </div>
     </div>


     @include('edit')
@include('product_js')
  </body>
</html>
