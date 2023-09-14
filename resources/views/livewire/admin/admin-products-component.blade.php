<!-- All Products -->
<div class="container" id="admin-prod-cont">
  <h3 class="text-center">All Products</h3>  
  <table id="example" class="display product_table">
    <thead>
      <tr>
          <th>Image</th>
          <th>Name</th>
          <th>Category</th>
          <th>Quantity</th>
          <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $product)
      <tr>
        <td class="admin-prod-item-image">
          <a href="{{route('admin.products.edit',['product_id'=>$product->id])}}">
            <img src="{{asset('images/')}}/{{$product->image}}.jpg" alt="Product Image">
          </a>
        </td>
        <td>{{$product->name}}</td>
        <td> {{$product->category->name}}</td>
        <td class="">{{$product->qty}}</td>
        <td class="">
          <div class="action-btns">
            <a href="{{route('admin.products.edit',['product_id'=>$product->id])}}"><i class="fa-solid fa-pen-to-square act-icon"></i>Edit</a>
            <a href="" class="text-danger"><i class="fa-solid fa-trash act-icon"></i>Remove</a>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
    <tfoot>
      <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Category</th>
        <th>Quantity</th>
        <th>Action</th>
      </tr>
    </tfoot>
  </table>                
</div>

<?php
/*
  if ($product->category !== null) {
    echo "<h5>{$product->category->name}</h5>";
  } else {
    echo "<h5>Category name is missing</h5>";
  }
*/
?>