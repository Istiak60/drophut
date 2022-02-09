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
                    Update a categoty item
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control @error('title') is-invalid @enderror" id="inputTitle"
                                        name="title" value="{{ $category->title }}" type="text"
                                        placeholder="Enter your title" />
                                    <label for="inputTitle">Title</label>
                                    @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control  @error('slug') is-invalid @enderror" id="inputSlug"
                                        name="slug" value="{{ $category->slug }}" type="text"
                                        placeholder="Enter your Slug" />
                                    <label for="inputSlug">Slug</label>
                                    @error('slug')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid"><button class="btn btn-outline-primary btn-block" type="submit">Update a
                                    Category</button></div>
                        </div>
                    </form>
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
