<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Research Archive</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html">Research Archive</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="{{ route('homepage.index')}}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="/about-us">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="/contact-us">Contact</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('login')}}">Login</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Header-->
            
            <header class="bg-dark py-5" style="background-image: url('pic/sdasda.jpg'); background-size: cover; background-position: bottom;">
              <div class="container px-5">
                  <div class="row gx-5 align-items-center justify-content-center">
                      <div class="col-lg-8 col-xl-7 col-xxl-6">
                          <div class="my-5 text-center text-xl-start">
                            <br>
                              <h1 class="display-5 fw-bolder text-white mb-2">@yield('pageTitle')</h1>
                              <p class="lead fw-normal text-white-50 mb-4">There's more than what meets the eye</p>
                              <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                  <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Get Started</a>
                                  <a class="btn btn-outline-light btn-lg px-4" href="about.html">Learn More</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </header>
            <!-- Features section-->
            <section class="py-5" id="features">
                <div class="container ">
                    <div class="row">
                        <div class="col-lg-12"><h1 class="fw-bolder mb-0">@yield('pageContent')<br></h2></div>
                        </div>
                </div>
            </section>
            
          
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; 2024. <strong style='color: #809eba;'>RES Admin</strong>. All rights reserved.</div></div>
                    
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>