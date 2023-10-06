<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Add Products</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="/productCreate" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Title UZ</label>
                <input type="text" name="title_uz" required  class="form-control" id="exampleInputEmail1" placeholder="Enter title">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Title RU</label>
                <input type="text" name="title_ru" required  class="form-control" id="exampleInputEmail1" placeholder="Enter title">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Price</label>
                <input type="number" name="price" required class="form-control" id="exampleInputPassword1" placeholder="Price">
              </div>
          
                <div class="form-group">
                  <label>Category</label>
                  <select name="category_id" class="form-control">
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
             
                  </select>
                </div>
           
              <div class="form-group">
                <label for="exampleInputPassword1">Image</label>
                <input type="file" name="image" class="form-control" id="exampleInputPassword1" >
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Create</button>
            </div>
          </form>
        </div>
        <!-- /.card -->


      </div>
      <!--/.col (left) -->
      
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->