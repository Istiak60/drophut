<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Feedbacks</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Feedbacks</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Trash of Feedbacks
                </div>
                <div class="card-body">
                    <div class="pull-right mb-3">
                        <a class="btn btn-success" href="{{ route('admin.feedbacks.index') }}">Go to index</a>
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Feedback</th>
                             
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Feedback</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @php
                            $i = 1;
                            @endphp
                            @foreach ($feedbacks as $item)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->msg}}</td>
                               
                                <td>
                                    <form action="{{ route('admin.feedbacks.destroy',$item->id) }}" method="POST">
                                        <a class="btn btn-success"
                                            href="{{ route('admin.feedbacks.restore',$item->id) }}">Restore</a>

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
