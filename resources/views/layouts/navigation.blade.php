<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <section>
        <nav class="navbar navbar-light bg-light p-2 shadow">
            <div class="container">
              <a class="navbar-brand" href="#">
                <img src="images/logo4.png" alt="" width="100" height="80">
              </a>            
              <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link fw-bold text-warning" aria-current="page" href="{{route('dashboard')}}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold text-dark" aria-current="page" href="{{route('about.us')}}">About us</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link fw-bold text-dark" aria-current="page" href="{{route('job.return')}}">Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold text-dark" aria-current="page" href="{{route('workers.return')}}">Workers</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            
                            <!-- dropdown button  -->
                            <button type="button" class="btn btn-outline-dark dropdown-toggle" data-bs-toggle="dropdown">
                            {{ Auth::user()->name }}
                            </button>

                            <ul class="dropdown-menu">

                                <li>

                                    <!-- profile  -->

                                    <a class="dropdown-item" href="route('profile.edit')">
                                        <x-responsive-nav-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                        </x-responsive-nav-link>
                                    </a>
                                </li>

                                <li>
                                    <!-- log out  -->
                                    <a class="dropdown-item" href="#">
                                        <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                            <x-responsive-nav-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-responsive-nav-link>

                                        </form>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
</body>
</html>