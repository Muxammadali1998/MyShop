<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Update Products</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="/productUpdate/{{$product->id}}" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" value="{{ $product->title }}"  class="form-control" id="exampleInputEmail1" placeholder="Enter title">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Price</label>
                <input type="number" name="price" value="{{ $product->price }}" class="form-control" id="exampleInputPassword1" placeholder="Price">
              </div>
              <div class="form-group">

                <label for="exampleInputPassword1">Image</label>
                <img src="/rasim/{{$product->image}}"  height="100px"  alt="">
                <input type="file" name="image" class="form-control" id="exampleInputPassword1" >
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form>
        </div>
        <!-- /.card -->


      </div>
      <!--/.col (left) -->
      
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->