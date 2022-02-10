<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Sliders</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Sliders</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    An item of Sliders
                </div>
                <div class="card-body">
                    <div class="pull-right mb-3">
                        <a class="btn btn-success" href="{{ route('admin.sliders.index') }}">Go to index</a>
                    </div>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Fileds</th>
                                <td>Details</td>
                            </tr>
                            <tr>
                                <th>ID</th>
                                <td>{{ $slider->id }}</td>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <td>{{ $slider->title }}</td>
                            </tr>
                            <tr>
                                <th>Subtitle</th>
                                <td>{{ $slider->subtitle}}</td>
                            </tr>
                            <tr>
                                <th>Offer</th>
                                <td>{{ $slider->offer}}</td>
                            </tr>
                            <tr>
                                <th>Image</th>
                                <td> <img src=" {{ asset('storage/Slider_image/'.$slider->image) }}" style="height:50px;width:60px">
</td>
                                
                            </tr>
                            <tr>
                                <th>Created at</th>
                                <td>{{ $slider->created_at}}</td>
                            </tr>
                            <tr>
                                <th>Updated at</th>
                                <td>{{ $slider->updated_at}}</td>
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
