<!doctype html>
<html lang="en">
  <head>
    @include('backend.includes.header-links')
  </head>
  <body>
    {{-- Navbar Start --}}
    @include('backend/layouts/navbar')
    {{-- Navbar End --}}

    {{-- Main Section Start --}}
    <section>
        <div class="row ">
            {{-- Side-Content Start  --}}
            @include('backend/layouts/sidebar')
            {{-- Side-Content End --}}

            {{-- Main-Content Start --}}
            <div class="col-md-10">
                @yield('main-content')
            </div>
            {{-- Main-Content End --}}
        </div>
    </section>

    {{-- Main Section End --}}


    @include('backend.includes.footer-links')
  </body>
</html>
