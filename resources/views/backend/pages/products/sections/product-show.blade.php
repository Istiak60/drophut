<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Products</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Products</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    An item of Products
                </div>
                <div class="card-body">
                    <div class="pull-right mb-3">
                        <a class="btn btn-success" href="{{ route('admin.products.index') }}">Go to index</a>
                    </div>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Fileds</th>
                                <td>Details</td>
                            </tr>
                            <tr>
                                <th>ID</th>
                                <td>{{ $product->id }}</td>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <td>{{ $product->title }}</td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>{{ $product->price}}</td>
                            </tr>
                            <tr>
                                <th>Old Price</th>
                                <td>{{ $product->old_price}}</td>
                            </tr>
                            <tr>
                                <th>Short_description</th>
                                <td>{{ $product->short_description}}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{ $product->description}}</td>
                            </tr>
                            <tr>
                                <th>Category</th>
                                <td>{{ $product->category->title}}</td>
                            </tr>
                            <tr>
                                <th>Image</th>
                                <td><img src=" {{ asset('storage/Product_image/'.$product->image) }}"
                                        style="height:150px;width:220px"></td>
                            </tr>
                            <tr>
                                <th>Created at</th>
                                <td>{{ $product->created_at}}</td>
                            </tr>
                            <tr>
                                <th>Updated at</th>
                                <td>{{ $product->updated_at}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Your Website 2021</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</div>
