
  <!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>Open CPD Network Portfolio InfoSys</title>
    </head>
    <body>
      <div class="container-fluid">
      <!-- Navigation Here -->
        <nav class="navbar navbar-expand-md navbar-dark sticky-top" style="background-color: #800080;">
          <a class="navbar-brand" href="#">
            <img src="img/opencpd.jpg" alt="Open CPD Network" height="60px" width="60px">
          </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                    <a class="nav-link" href="/home">Home</a>
                </li>
                @auth
                  @if(Auth::user()->web_admin_flag == "YES")
                    <li class="nav-item active">
                      <a class="nav-link" href="/course_managers">Course Managers</a>
                    </li>           
                  @endif
                @endauth
                    <li class="nav-item active">
                        <a class="nav-link" href="/professionals">Professionals</a>
                    </li>
                    <!--
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">CPD Providers</a>
                            <div class="dropdown-menu">
                                <a href="/cpd_providers" class="dropdown-item">Providers A-Z</a>                                
                            </div>
                        </li>
                       -->
                      <li class="nav-item active">
                        <a class="nav-link" href="/cpd_providers">CPD Providers</a>
                    </li>  
                        <!--
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Courses</a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Course 1</a>
                                <a href="#" class="dropdown-item">Course 2</a>
                                <a href="#" class="dropdown-item">Course 3</a>
                            </div>
                        </li>
                        -->    
                         <li class="nav-item active">
                          <a class="nav-link" href="/courses">Courses</a>
                        </li>     
                        <li class="nav-item active">
                          <a class="nav-link" href="/accreditations">CPD Units</a>
                        </li>                   
                        <li class="nav-item">
                    <a class="nav-link" href="#">FAQ</a>
                    </li>
                </ul>
                    <ul class="nav navbar-nav navbar-right">
             @guest       <form  method="GET" action="/login">
                             <button class="btn btn-success" type="subnmit"><span class="fa fa-sign-in"></span> Login</button> 
                             </form>
                        @else
                            <li class="nav-item dropdown">
                               
                                <form action="/logout" method="POST">
                                  {{ csrf_field()}}
                                 <button class="btn btn-success" type="subnmit"><span class="fa fa-sign-in"></span> Logout                               
                                </button> 
                              </form>
                            </li>
                        @endguest
              </ul>
              </div>
            </nav>

      <div class="jumbotron mt-0">
       @yield ('content')
      <!-- BREADCRUMB -->
      <ol class="breadcrumb">
          <li class="breadcrumb-item active">Home</li>
      </ol>

      <div class="card-deck mb-2">
          <div class="card">
              <div class="card-body">
                  <h4 class="card-title">Card Title</h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas.
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas.</p>
              </div>
          </div>
          <div class="card">
              <div class="card-body">
                  <h4 class="card-title">Card Title</h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas.</p>
              </div>
          </div>
          <div class="card">
              <div class="card-body">
                  <h4 class="card-title">Card Title</h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas.</p>
              </div>
          </div>
      </div>

      <footer class="container-fluid bg-info text-white text-center m-auto p-3">
        <p>Copyright &copy; 2018</p>
      </footer>
    </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <div style='text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;display:block !important;'><a title="000webhost logo" rel="nofollow" target="_blank" href="https://www.hostinger.com/website-000webhostapp-offer?utm_source=000webhostapp&amp;utm_campaign=000_logo&amp;utm_campaign=ss-footer_logo&amp;utm_medium=000_logo&amp;utm_content=website"><img src="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"  alt="000webhost logo"></a></div></body>
  </html>


