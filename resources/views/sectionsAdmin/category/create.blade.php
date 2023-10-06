<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Add category</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{ route('category.store')}}" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title"  class="form-control" id="exampleInputEmail1" placeholder="Enter title">
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