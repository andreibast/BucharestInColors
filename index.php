<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucharest in colors</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
<body class="bg-dark">
    <!------------
    1.HEADER
    -------------->
    <div class=" jumbotron-fluid  bg-warning">
        <div class="container" >
          <h1 class="display-3 text-white">Bucharest in colors</h1>
          <p class="lead text-white mb-0 font-weight-normal">Bucharest, like many cities in Romania, is seen as a predominantly gray and gloomy city. Therefore, I am determined to color it in the vineyards to make the rainbow.</p>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light border">
        <a class="navbar-brand" href="#">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="virtualProfile.php">See My Virtual Profile</a>
            </li>
          </ul>
         
        </div>
      </nav>
  
    <!------------
    2.MAP SECTION
    ------------->
    <div id="map"></div>


    <!------------
    3.FOOTER
    ------------->
    <div class="text-center text-white mt-3">2020. Andrei Basturescu. All Rights Reserved.</div>



    
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOfIJ__n3KWGG76xfHXpY_eaMM7Sk_abU&callback=initMap"></script>
    <script src="script/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>