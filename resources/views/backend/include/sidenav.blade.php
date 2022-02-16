<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
                    aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Pages
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            Category
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('admin.categories.index') }}">Index</a>
                                <a class="nav-link" href="{{ route('admin.categories.create') }}">Create</a>
                                <a class="nav-link" href="{{ url('categories/trash') }}">Trash</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#pagesCollapseError" aria-expanded="false"
                            aria-controls="pagesCollapseError">
                            Product
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                 <a class="nav-link" href="{{ route('admin.products.index') }}">Index</a>
                                <a class="nav-link" href="{{ route('admin.products.create') }}">Create</a>
                                <a class="nav-link" href="{{ url('products/trash') }}">Trash</a>
                            </nav>
                        </div>
                           <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#pagesCollapseSlider" aria-expanded="false"
                            aria-controls="pagesCollapseSlider">
                            Slider
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseSlider" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                 <a class="nav-link" href="{{ route('admin.sliders.index') }}">Index</a>
                                <a class="nav-link" href="{{ route('admin.sliders.create') }}">Create</a>
                                <a class="nav-link" href="{{ url('sliders/trash') }}">Trash</a>
                            </nav>
                        </div>
                           <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#pagesCollapseBlog" aria-expanded="false"
                            aria-controls="pagesCollapseBlog">
                            Blog
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseBlog" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                 <a class="nav-link" href="{{ route('admin.blogs.index') }}">Index</a>
                                <a class="nav-link" href="{{ route('admin.blogs.create') }}">Create</a>
                                <a class="nav-link" href="{{ url('blogs/trash') }}">Trash</a>
                            </nav>
                        </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#pagesCollapseFeedbacks" aria-expanded="false"
                            aria-controls="pagesCollapseFeedbacks">
                            Feedbacks
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseFeedbacks" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                 <a class="nav-link" href="{{ route('admin.feedbacks.index') }}">Index</a>
                                {{-- <a class="nav-link" href="{{ route('admin.feedbacks.create') }}">Create</a> --}}
                                <a class="nav-link" href="{{ url('feedbacks/trash') }}">Trash</a>
                            </nav>
                        </div>

                    </nav>
                </div>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>
