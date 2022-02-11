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
                    Trash of Products
                </div>
                <div class="card-body">
                    <div class="pull-right mb-3">
                        <a class="btn btn-success" href="{{ route('admin.products.index') }}">Go to index</a>
                    </div>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success mt-3">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    @if ($message = Session::get('danger'))
                    <div class="alert alert-danger mt-3">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Short Description</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>SL</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Short Description</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @php
                            $i = 1;
                            @endphp
                            @foreach ($products as $item)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->short_description}}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->category->title }}</td>
                                <td>
                                    <img src=" {{ asset('storage/Product_image/'.$item->image) }}"
                                        style="height:50px;width:60px">
                                </td>
                                <td>
                                    <form action="{{ route('admin.products.destroy',$item->id) }}" method="POST">
                                        <a class="btn btn-success"
                                            href="{{ route('admin.products.restore',$item->id) }}">Restore</a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
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
