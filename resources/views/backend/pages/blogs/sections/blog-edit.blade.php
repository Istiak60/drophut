<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Blogs</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Blogs</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Update a Blog item
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="col-md-6 mb-3">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control @error('title') is-invalid @enderror" id="inputTitle"
                                        name="title" value="{{ $blog->title }}" type="text"
                                        placeholder="Enter your title" />
                                    <label for="inputTitle">Title</label>
                                    @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control @error('posted_by') is-invalid @enderror"
                                        id="inputPostedBy" name="posted_by" value="{{ $blog->posted_by }}" type="text"
                                        placeholder="Enter your posted_by" />
                                    <label for="inputPostedBy">Posted By</label>
                                    @error('posted_by')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control  @error('short_description') is-invalid @enderror"
                                        id="inputShortDescription" name="short_description"
                                        value="{{ $blog->short_description }}" type="text"
                                        placeholder="Enter your Short Description" />
                                    <label for="inputShortDescription">Short Description</label>
                                    @error('short_description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control  @error('description') is-invalid @enderror"
                                        id="inputDescription" name="description" value="{{ $blog->description }}"
                                        type="text" placeholder="Enter your Description" />
                                    <label for="inputDescription">Description</label>
                                    @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputImage" name="image" type="file"
                                        value="{{ $blog->image }}" />
                                    <label class="mb-3" for="inputImage">Image</label>
                                    @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid"><button class="btn btn-outline-primary btn-block" type="submit">Update a
                                    Blog</button></div>
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
