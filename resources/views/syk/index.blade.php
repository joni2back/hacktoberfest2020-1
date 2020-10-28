<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lalala</title>
    <link rel="stylesheet" href="{{ asset('assets/dist/css/bootstrap.min.css') }}">
    
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Lalala</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Pricing</a>
                    </li>

                  </ul>
                </div>
              </nav>
    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid ">
      <img src="{{ asset('assets/img/petshop2.png') }}" alt="petshop" width="100%" height="600px">
  <div class="container ">
      <div class="row text-center p-5">
          <div class="col">
              <h1 class="display-4">Welcome to Syerin's Pet</h1>
              <p class="lead">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim vitae nam corporis sint numquam fuga quam ipsa molestiae! Minus et inventore dolorum necessitatibus eaque voluptatem ratione placeat mollitia repellendus tempora?</p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa quod esse enim harum numquam! Nihil nesciunt unde id ad? Et consequatur eius necessitatibus, nesciunt excepturi alias. Dicta sint impedit saepe.
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id ab accusantium, quae accusamus fugiat iste, illum quo, esse at cupiditate perferendis adipisci voluptatum dolorem laudantium perspiciatis distinctio impedit minima delectus.
          </div>
      </div>
      
      <div class="row m-5">
          <div class="col">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModalCenter">
                      LOGIN
                  </button>
                  
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalCenterTitle">LOGIN</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                          </div>
                          <div class="modal-body">
                              <form>
                                      <div class="form-group">
                                              <label for="email">Email</label>
                                              <input type="email" class="form-control" name="email" id="email" aria-describedby="usernameHelp" placeholder="Enter Email">
                                      </div>
                                      <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                      </div>
                              </form>
                          </div>
                          <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Login</button>
                          </div>
                      </div>
                      </div>
                  </div>
          </div>
<!-- button register -->
          <div class="col">
                  <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLong">
                      REGISTER
                  </button>
                  
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">REGISTER</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                          </div>
                          <div class="modal-body">
                          <form method="POST" action="/register">
                            @csrf
                                  <div class="form-group">
                                          <label for="username">Username</label>
                                          <input type="text" class="form-control" name="username" id="username" aria-describedby="nameHelp" placeholder="Enter username">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control" name="nama" id="nama" aria-describedby="usernameHelp" placeholder="Enter nama">
                                          </div>
                                        <div class="form-group">
                                          <label for="email">E-mail</label>
                                          <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                          <label for="password">Password</label>
                                          <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                        </div>
                          
                          </div>
                          <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Register</button>
                          </div>
                          </form>
                      </div>
                      </div>
                  </div>
          </div>
      </div>

  </div>
  <br>
  
</div>
          
    <script src="{{ asset('assets/jquery.js') }}"></script>
    <script src="{{ asset('assets/dist/js/bootstrap.min.js') }}"></script>
</body>
</html>
