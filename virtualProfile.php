<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


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
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">See My Virtual Profile</a>
            </li>
          </ul>
         
        </div>
      </nav>




    <!------------------------
    VIRTUAL PROFILE
    -------------------------->
    <div class="container">
        <h3 class="display-4 text-center text-white">My Virtual Profile</h3>
    </div>
    
    <div class="m-3">
        <div class="accordion" id="accordionAboutMe" >

            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left text-center" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Contact Details
                    </button>
                    </h2>
                </div>
        
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionAboutMe">
                    <div class="card-body">
                        <div class="container">

                            <div class="row align-center text-center">
                                <div class="col-md-6 basic-info">
                                    <div class="align-middle">
                                        <p><i class="fa fa-user" aria-hidden="true"></i> Name: <span class="font-italic">Basturescu Andrei</span> </p>
                                        <p><i class="fa fa-heartbeat"></i> Age: <span class="font-italic">29</span> </p>
                                        <p><i class="fa fa-address-book" aria-hidden="true"></i> e-Mail: <span class="font-italic">andrei.bast@gmail.com / andrei.bast@yahoo.com</span></p>
                                        <p><i class="fa fa-phone"></i> Phone: <span class="font-italic">+40 0734 367 792</span></p>
                                    </div>
                                </div>
                                <img src="image/IMG_8079.jpg" class="img-responsive col-md-6">
                            </div>
                        
                        </div>
                    </div>
                </div>

            </div>

            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed text-center" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Motto
                    </button>
                    </h2>
                </div>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionAboutMe">
                    <div class="card-body text-center">
                        <p><i class="fa fa-angle-double-right"></i> Every effect is caused by a source. <i class="fa fa-angle-double-left"></i></p>
                        <p><i class="fa fa-angle-double-right"></i> Solving is the middle point between getting lost, getting frustrated and giving enough space for the problem to be resolved. <i class="fa fa-angle-double-left"></i></p>
                        <p><i class="fa fa-angle-double-right"></i> Success is an option. <i class="fa fa-angle-double-left"></i></p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>





    