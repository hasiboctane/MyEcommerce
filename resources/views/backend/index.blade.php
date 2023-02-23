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

    {{-- Main Section End --}}

    {{-- Side-Content Start  --}}
    @include('backend/layouts/sidebar')
    {{-- Side-Content End --}}



    @include('backend.includes.footer-links')
  </body>
</html>
