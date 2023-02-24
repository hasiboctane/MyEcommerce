<!doctype html>
<html lang="en">
  <head>
    @include('custom_auth.includes.header-links')
  </head>
  <body>
    <div class="container-fluid g-0 wrapper">
        <div class="auth-section">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-first">Register</h3>
                </div>
                <div class="card-body">
                    <form method="post" action="">
                        <div class="mb-3">
                            <label for="name" class="form-label text-first">Name</label>
                            <input type="name" class="form-control" name="name" id="name" placeholder="Enter name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label text-first">Email address</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label text-first">Password</label>
                            <div class="input-group">
                                <input type="password" id="password" name="password" class="form-control" placeholder="Enter password">
                                <div style="cursor: pointer;" id="password_btn" class="input-group-text"><i class="bi bi-eye-fill"></i></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label text-first">Confirm Password</label>
                            <div class="input-group">
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Enter password">
                            </div>
                        </div>
                        <div class="mt-3 mb-0">
                            <div class="d-grid"><a class="btn button-color btn-block" href=""><span class="text-white">Login</span></a></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>

    @include('custom_auth.includes.footer-links')
  </body>
</html>
