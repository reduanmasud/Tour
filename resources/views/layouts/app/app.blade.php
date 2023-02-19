<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        /* GLOBAL STYLES
        -------------------------------------------------- */
        /* Padding below the footer and lighter body text */

        /* body {
        padding-top: 3rem;
        padding-bottom: 3rem;
        color: #5a5a5a;
        } */


        /* CUSTOMIZE THE CAROUSEL
        -------------------------------------------------- */

        /* Carousel base class */
        .carousel {
        margin-bottom: 4rem;
        }
        /* Since positioning the image, we need to help out the caption */
        .carousel-caption {
        bottom: 3rem;
        z-index: 10;
        }

        /* Declare heights because of positioning of img element */
        .carousel-item {
        height: 32rem;
        }


        /* MARKETING CONTENT
        -------------------------------------------------- */

        /* Center align the text within the three columns below the carousel */
        .marketing .col-lg-4 {
        margin-bottom: 1.5rem;
        text-align: center;
        }
        /* rtl:begin:ignore */
        .marketing .col-lg-4 p {
        margin-right: .75rem;
        margin-left: .75rem;
        }
        /* rtl:end:ignore */


        /* Featurettes
        ------------------------- */

        .featurette-divider {
        margin: 5rem 0; /* Space out the Bootstrap <hr> more */
        }

        /* Thin out the marketing headings */
        /* rtl:begin:remove */
        .featurette-heading {
        letter-spacing: -.05rem;
        }

        /* rtl:end:remove */

        /* RESPONSIVE CSS
        -------------------------------------------------- */

        @media (min-width: 40em) {
        /* Bump up size of carousel content */
        .carousel-caption p {
            margin-bottom: 1.25rem;
            font-size: 1.25rem;
            line-height: 1.4;
        }

        .featurette-heading {
            font-size: 50px;
        }
        }

        @media (min-width: 62em) {
        .featurette-heading {
            margin-top: 7rem;
        }
        }

    </style>
    </head>
  <body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">Ghuri</span>
            </a>

            <ul class="nav nav-pills">
            <li class="nav-item"><a href="index.html" class="nav-link active" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="{{ route('browse.all') }}" class="nav-link">Browse</a></li>
            @auth
                <li class="nav-item"><a href="{{route('dashboard')}}" class="nav-link">profile</a></li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a class="nav-link" href="{{route('logout')}}"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                    </a>
                    </form>
                </li>
            @else
                <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="{{route('register')}}" class="nav-link">Registration</a></li>
            @endauth

            </ul>
        </header>
    </div>
 @yield('main-content')
    <div class="container-flex">
        <footer class="py-0 my-0">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Guids</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Places</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>
            <p class="text-center text-muted">&copy; 2023 GHUTI</p>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
