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
                    Create a new Product
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.products.store') }}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6 mb-3">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control @error('title') is-invalid @enderror" id="inputTitle"
                                        name="title" value="{{old('title')}}" type="text" />
                                    <label for="inputTitle">Title</label>
                                    @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control @error('price') is-invalid @enderror" id="inputPrice"
                                        name="price" value="{{old('price')}}" type="text" />
                                    <label for="inputPrice">Price</label>
                                    @error('price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control @error('old_price') is-invalid @enderror"
                                        id="inputOldPrice" name="old_price" value="{{old('old_price')}}" value="{{old('old_price')}}" type="text" />
                                    <label for="inputOldPrice">Old Price</label>
                                    @error('old_price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control @error('short_description') is-invalid @enderror"
                                        id="inputShortDescription" name="short_description" value="{{old('short_description')}}" type="text" />
                                    <label for="inputShortDescription">ShortDescription</label>
                                    @error('short_description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control @error('description') is-invalid @enderror"
                                        id="inputDescription" name="description" value="{{old('description')}}" type="text" />
                                    <label for="inputDescription">Description</label>
                                    @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-md-6 mb-3">
                                <label for="category_id">Category</label>
                                <select class="form-control @error('category_id') is-invalid @enderror"
                                    name="category_id" id="category_id">
                                    <option value="">Select Please</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ (old('category_id'))== "$category->id" ? 'selected' : '' }}>
                                        {{ $category->title }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputImage" name="image" type="file" />
                                    <label for="inputImage">Image</label>
                                    @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid"><button class="btn btn-outline-primary btn-block" type="submit">Create a
                                    Product</button></div>
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
