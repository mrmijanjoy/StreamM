<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
     <link href="../styles/style.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<div id="wrapper">
    <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
      <div class="container">
      <a class="navbar-brand" href="#">LOGO</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav side-nav" >
          <li class="nav-item">
            <a class="nav-link" style="margin-left: 20px;" href="../index.html">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../admins/admins.html" style="margin-left: 20px;">Admins</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../shows-admins/show-shows.html" style="margin-left: 20px;">Shows</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../genres-admins/show-genres.html" style="margin-left: 20px;">Genres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../episodes-admins/show-episodes.html" style="margin-left: 20px;">Episodes</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-md-auto d-md-flex">
          <li class="nav-item">
            <a class="nav-link" href="../index.html">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              username
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Logout</a>
              
          </li>
                          
          
        </ul>
      </div>
    </div>
    </nav>
    <div class="container-fluid">

          <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Shows</h5>
              <a  href="create-shows.html" class="btn btn-primary mb-4 text-center float-right">Create Shows</a>

              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">title</th>
                    <th scope="col">image</th>
                    <th scope="col">type</th>
                    <th scope="col">date_aired</th>
                    <th scope="col">status</th>
                    <th scope="col">genre</th>
                    <th scope="col">num_available</th>
                    <th scope="col">num_total</th>
                    <th scope="col">created_at</th>
                    <th scope="col">delete</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Nartuo</td>
                    <td>image.jpg</td>
                    <td>tv series </td>
                    <td>11/2/2023</td>
                    <td>Airing</td>
                    <td>Magic</td>
                    <td>11</td>
                    <td>15</td>
                    <td>2023-04-09 15:13:17</td>
                     <td><a href="delete-shows.html" class="btn btn-danger  text-center ">delete</a></td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Nartuo</td>
                    <td>image.jpg</td>
                    <td>tv series </td>
                    <td>11/2/2023</td>
                    <td>Airing</td>
                    <td>Magic</td>
                    <td>11</td>
                    <td>15</td>
                    <td>2023-04-09 15:13:17</td>
                     <td><a href="delete-shows.html" class="btn btn-danger  text-center ">delete</a></td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Nartuo</td>
                    <td>image.jpg</td>
                    <td>tv series </td>
                    <td>11/2/2023</td>
                    <td>Airing</td>
                    <td>Magic</td>
                    <td>11</td>
                    <td>15</td>
                    <td>2023-04-09 15:13:17</td>
                     <td><a href="delete-shows.html" class="btn btn-danger  text-center ">delete</a></td>
                  </tr>
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>



  </div>
<script type="text/javascript">

</script>
</body>
</html>