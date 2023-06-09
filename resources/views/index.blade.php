<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Login Aplication</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>
<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
                  <div class="text-left mb-4">
                    <img src="img/Logox.png" alt="logo">
                  </div>
                  <h4 class="mt-1 mb-1 pb-1">Login</h4>
                  <p style="color: #677A96">Welcome back, Please fill your Details</p>
                 <form method="POST" action="{{ ('login') }}" class="my-login-validation" novalidate="">
                @csrf
                    <div class="form-outline mb-2">
                        <label class="form-label" for="form2Example11"><h6>Username</h6></label>
                        <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                        <div class="invalid-feedback">
                            Email is invalid
                        </div>
                    </div>
  
                    <div class="form-outline mb-1 mt-3">
                        <label class="form-label" for="form2Example22"><h6>Password</h6></label>
                        <input id="password" type="password" class="form-control" name="password" required data-eye>
                        <div class="invalid-feedback">
                            Password is required
                        </div>
                    </div>

                    <div class="row mb-5">
                        <div class="col d-flex justify-content-center">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                            <label class="form-check-label" for="form2Example31"> Remember me </label>
                          </div>
                        </div>
                    
                        <div class="col">
                          <a href="#!">Forgot password?</a>
                        </div>
                      </div>
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button type="submit" class="btn btn-primary btn-block">
                        Login
                    </button>
                    </div>
                    <h6 style="font-size: 8px; color: #999999; text-align: center;">@PT BERKAH ANDALAN REKAYASA 2002. All Rights Reserved</h6>

                  </form>
                </div>
              </div>
              <div class="col-sm-6 px-0 d-none d-sm-block" style="background-color: #f2f2f2;">
                <img src="img/gambar1.png" alt="Login image" class="w-100 h-100" style="object-fit: cover; object-position: left;">
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</html>
