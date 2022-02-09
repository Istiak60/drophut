<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Categories</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Categories</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    An item of Categories
                </div>
                <div class="card-body">
                    <div class="pull-right mb-3">
                        <a class="btn btn-success" href="{{ route('admin.categories.index') }}">Go to index</a>
                    </div>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Fileds</th>
                                <td>Details</td>
                            </tr>
                            <tr>
                                <th>ID</th>
                                <td>{{ $category->id }}</td>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <td>{{ $category->title }}</td>
                            </tr>
                            <tr>
                                <th>Slug</th>
                                <td>{{ $category->slug}}</td>
                            </tr>
                            <tr>
                                <th>Created at</th>
                                <td>{{ $category->created_at}}</td>
                            </tr>
                            <tr>
                                <th>Updated at</th>
                                <td>{{ $category->updated_at}}</td>
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
