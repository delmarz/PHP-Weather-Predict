<!DOCTYPE html>
<html lang="eng">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Weather Predictor</title>
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 center">
            <h1 class="white">Weather Predictor</h1>
            <p class="lead white">Enter your city to get a forecast for the weather</p>

            <form>
                <div class="form-group">
                <input type="text" class="form-control" name="city" id="city" placeholder="Eg. New York, Manila, Cebu..."/>
                </div>

                <button id="findMyWeather" class="btn btn-success btn-lg">Find My Weather</button>
            </form>

            <div id="success" class="alert alert-success">
                Success!  
            </div>
            <div id="fail" class="alert alert-danger">
               Could not find weather data for that city. Please try again.
            </div>
            <div id="noCity" class="alert alert-danger">
               Please enter a City!
            </div>
        </div>
    </div>
     
</div>
 <div class="footer">
       <p class="lead footer-delmarz">Copyright © 2014 <a href="http://delmarz.esy.es" target="_blank">deLmarz</a>. All rights reserved.</p>
    </div>

<!-- Latest compiled and minified JavaScript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/javascript.js"></script>
</body>
</html>