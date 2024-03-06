<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy Challenges</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* Each column takes up equal width */
            grid-template-rows: repeat(4, 1fr); /* Each row takes up equal height */
            width: 100vw; /* Full width of viewport */
            height: 100vh; /* Full height of viewport */
        }

        .box {
            /* background-color: lightblue; */
            border: 1px solid black;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
        }

          
        
        html, body {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            color: #f5f5f5; /* Lighter text color */
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #121212; /* Dark background color */
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* Each column takes up equal width */
            grid-gap: 20px; /* Gap between grid items */
            max-width: 800px; /* Limiting max width */
            padding: 20px;
        }

        .box {
            border: none; /* No border */
            background-color: #333; /* Dark grey background */
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            text-decoration: none; /* Remove default underline for links */
            color: #f5f5f5; /* Lighter text color */
            border-radius: 10px; /* Rounded corners */
            transition: all 0.3s ease; /* Smooth transition */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Soft shadow */
            padding: 20px; /* Padding inside the box */
        }

        .box:hover {
            transform: translateY(-5px); /* Move up on hover */
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2); /* Increase shadow on hover */
        }

    </style>


<head>
  <?php
    session_start();
    if (isset($_SESSION['loggedIn'])) 
    {
      // If user is logged in, set the URL accordingly
      $linkURL1 = 'easy.php'; 
      $linkURL2 = 'medium.php'; 
      $linkURL3 = 'hard.php';
      $linkURL4 = 'profile.php'; 


    } 
    else 
    {
      // If user is not logged in, set the URL accordingly
      $linkURL1 = 'login.html';
      $linkURL2 = 'login.html'; 
      $linkURL3 = 'login.html';
      $linkURL4 = 'login.html'; 


    }
  ?>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>ByteQuest</title>

  <!-- slider stylesheet -->
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>



</head>
<body>






    <div class="grid-container">
        <div class="box"><a href="easy/easy1.html">Challenge 1</a></div>
        <div class="box"><a href="easy/easy2.html">Challenge 2</a></div>
        <div class="box"><a href="easy/easy3.html">Challenge 3</a></div>
        <div class="box"><a href="easy/easy4.html">Challenge 4</a></div>
        <div class="box"><a href="easy/easy5.html">Challenge 5</a></div>
        <div class="box"><a href="easy/easy6.html">Challenge 6</a></div>
        <div class="box"><a href="easy/easy7.html">Challenge 7</a></div>
        <div class="box"><a href="easy/easy8.html">Challenge 8</a></div>
        <div class="box"><a href="easy/easy1.html">Challenge 9</a></div>
        <div class="box"><a href="easy/easy2.html">Challenge 10</a></div>
        <div class="box"><a href="easy/easy3.html">Challenge 11</a></div>
        <div class="box"><a href="easy/easy4.html">Challenge 12</a></div>
        <div class="box"><a href="easy/easy5.html">Challenge 13</a></div>
        <div class="box"><a href="easy/easy6.html">Challenge 14</a></div>
        <div class="box"><a href="easy/easy7.html">Challenge 15</a></div>
        <div class="box"><a href="easy/easy8.html">Challenge 16</a></div>
        
    </div>
</body>
</html>
