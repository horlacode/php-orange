<?php

if (isset($_POST['submit'])) {

 $num_oranges   = $_POST['num_oranges'];
 $orange_img    = "";
 $error_msg     = "";

  if(is_numeric($num_oranges)){

    for ($i=0; $i < (int)$num_oranges; $i++) { 

      $orange_img = $orange_img . "<img src='images/full.png' width='50px' height='50px'/> ";
    }

    if(substr($num_oranges, -2) == ".5"){

      $orange_img = $orange_img . "<img src='images/half.png' width='50px' height='50px'/> ";
    }  
  }
  
  else{
    $error_msg = "Invalid user input";
  }

}

?>


<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <title>Practice</title>
</head>

<?php echo $error_msg . $orange_img; ?>

<body class="jumbotron">
  <form action="" method="POST">

    <div class="form-group" style="text-align: center;margin-top: 10px">
      <input name="num_oranges" placeholder="How many oranges?" required><br><br>
      <button class="btn btn-primary" name="submit">Submit</button>
    </div>

  </form>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>