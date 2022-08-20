@extends('welcome')
@section('content')


<center>


<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-danger fw-bold fs-4 rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add record
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">CRUD Project</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="insertData" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="mb-2">
                    <input type="text" placeholder="Enter Product name" class="form-control" id="" name="pname">
                </div>

                <div class="mb-2">
                    <input type="text" placeholder="Enter Product price" class="form-control" id="" name="pprice">
                </div>

                <div class="mb-2">
                    <input type="file" placeholder="file upload" class="form-control" id="" name="pimage">
                </div>

                <button type="submit" class="btn btn-outline-danger" > Add Record</button>

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
  </div>
</center>


<div class="container">
  <table class="table mt-5">
    <thead class="bg-danger text-white fw-bold ">
      <th>ID</th>
      <th>Product Name</th>
      <th>Product Price</th>
      <th>Product Image</th>
    </thead>
    <tbody>
      @foreach ($data as $item)
          <tr>
            <td class="pt-5">{{$item->ID}}</td>
            <td class="pt-5">{{$item->PName}}</td>
            <td class="pt-5">{{$item->PPrice}}</td>
            <td ><img src="images/{{$item['PImage']}}" width="100px" height="100px"</td>
          </tr>
      @endforeach
    </tbody>
  </table>
</div>
  @endsection