<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">DataTable with minimal features & hover style</h3>
            <a href="{{ route('category.create')}}">Create category</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Title</th>
                <th>Products</th>
                <th>Update</th>
                <th>Delete</th>
              </tr>
              </thead>
              <tbody>

                @foreach ($categories as $category)
                    
          
                  <tr>
                    <td>{{ $category->title}}</td>
                    <td>{{ count($category->products)}}</td>
                    <td> <a href="{{ route('category.edit',  $category->id)  }}">Update</a></td>
                    <td><form action="{{route('category.destroy',$category->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" >DELETE</button>
                    </form></td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>