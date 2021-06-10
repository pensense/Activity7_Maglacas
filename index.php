<?php

  //initialize session
  session_start();

  if( !isset($_SESSION['email']) || empty($_SESSION['email'])){
    header('location: login.php');
    exit;
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <title>Dashboard</title>
</head>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
body {
  background-image: url("image/3.jpg");
  
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  
  background-size: cover;
}

        h2.midle{
          text-align: center;
          background: rgba(255, 255, 255, 0.25);
          font-family: 'Pacifico', cursive;
          font-size: 100px;
        }
        p.bot{
          text-align: center;
          background: rgba(255, 255, 255, 0.25);
          font-family: 'Pacifico', cursive;
          font-size: 37px;
        }
        a, h3{
          display: flex;
          justify-content: center;
          align-items: lower;
          background: rgba(500, 500, 500, 500);
          font-family: 'Pacifico', cursive;
          font-size: 37px;
        
        }
        h5{
          width:1000%;
    margin-left:45%;
    margin-right:25%;
    margin-top: 10%;
    background: rgba(500, 500, 500, 500);
        }
        
        

    </style>

<body>
  <!--  
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card card-body bg-primary text-white mt-5">
          -->
          
<!--		
		<div class="col-sm-12" style="padding-right: -200px; padding-left: 5px;">
          <div class="rounded" style="background-color: #FFE4B5; margin-bottom: 5px; padding: 2px; padding-left: 10px;">
                 
          <h5 class="text-center" style="color: white;">Dashboard</h5> 
          --> 
          <h2 class="midle">Famous Quote Entries</h2>
          <p class="bot"><strong> Write down your experiences and thoughts</strong></p>

        <!--   
        </div>
            
          <div class="card-group">
            <div class="card border border-light">
      
              <img class="rounded card-img-top border border-dark" src="image/3.jpg" alt="Card image cap">
          -->    
              <a href="indexfq.php">Famous Quotes</a>
              <h3>List of Popular quotes in the social media. </h3>
              <!--
                <div class="card-body" style="padding: 5px;">
      -->
                    <h5 class="card-title" style="margin-bottom: 1px; text-align: left;">
                  
	<!--	</div>
    </div>
    
		<div class="col-sm-12 border border-bottom-dark mt-3">
			
		</div>
		</div>
      -->
		<h5 class="col-sm-1"  ><a href="logout.php" class="mt-20 btn btn-danger">Logout</a></h5>
    <!--
		</div>  
      </div>
    </div>
  </div>
      -->
</body>
</html>