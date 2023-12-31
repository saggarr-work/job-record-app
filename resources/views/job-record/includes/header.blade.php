{{-- header start --}}
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href=""><b><i>JOB RECORD</i></b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}" aria-current="page"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('list.record.job') ? 'active' : '' }}"
                            aria-current="page" href="{{ route('list.record.job') }}">Job Records</a>
                    </li>
                </ul>
                <div class="btn-group">
                    <button class="btn btn-dark btn-sm dropdown-toggle text-success" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="">
                                <form class="d-flex" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="btn btn-sm btn-outline-danger" type="submit">Logout</button>
                                </form>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
{{-- header end  --}}
