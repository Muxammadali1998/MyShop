<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">DataTable with minimal features & hover style</h3>
            <a href="/addProduct">Create Product</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Title UZ</th>
                <th>Title RU</th>
                <th>Category</th>
                <th>Image</th>
                <th>Price</th>
                <th>Update</th>
                <th>Delete</th>
              </tr>
              </thead>
              <tbody>

                @foreach ($products as $product)
                  <tr>
                    <td>{{ $product->title_uz}}</td>
                    <td>{{ $product->title_ru}}</td>
                    <td>{{ $product->category->title}}</td>
                    <td><img src="/rasim/{{$product->image}}" style=" height: 150px; width: 150px;" alt=""></td>
                    <td>{{ $product->price}}</td>
                    <td> <a href="/editProduct/{{$product->id}}">Update</a></td>
                    <td><a href="/product/{{$product->id}}">Delete</a></td>
                  </tr>
                @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>Title</th>
                <th>Image</th>
                <th>Price</th>
                <th>Engine version</th>
                <th>CSS grade</th>
              </tr>
              </tfoot>
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