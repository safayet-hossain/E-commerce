@extends('backend.master')


@section('content')

<H1>Product Details</H1>
<a href="{{route('add.product')}}" class="btn btn-primary">Add Product Details</a>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name*</th>
      <th scope="col">CATEGORY</th>
      <th scope="col">Brand</th>

      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>PULSAR AS 150</td>
      <td>Bike</td>  
      <td>PULSAR</td>
      <td>120000$</td>
      <td>100</td>
      <td>
        <a href="http://" class="btn btn-primary">View</a>
        <a href="http://" class="btn btn-success" >Edit</a>
        <a href="http://" class="btn btn-danger" >Delete</a>
        
      </td>
    </tr>
    
  </tbody>
</table>



@endsection