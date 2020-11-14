<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY BIG LIBRARY</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>

<?php 

include "db_connect.php";

    $sql ="SELECT * FROM media";
    $result = mysqli_query($conn, $sql);

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">My Big Library</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link btn btn-primary btn-lg m-4" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <a class="nav-link btn btn-success btn-lg m-4" href="create.php">Add a new Book</a>
      </li>      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="container-fluid bgbox1">
    <p><h1>My Big Library</h1></p>
    <div class="row justify-content-center">
        <?php 
            if($result->num_rows == 0){
                echo "No Books";
            }else {
                $rows = $result->fetch_all(MYSQLI_ASSOC);
                foreach ($rows as $key => $value) {
                echo "
                    <div class='card col-2 m-5 bookbg'>
                        <img src='".$value["COVER"]."'>
                        <div class='card-body'>
                            <h5 class='card-title'>". $value["TITLE"]. "</h5>
                            <p class='card-text'>writen by ". $value["AUTHOR"]. "</p>
                            <p><small class='card-text'>". $value["DESCRIPTION"]. "</small></p>
                            <p><small class='card-text'>Format: ". $value["TYPE"]. "</small><br>
                            <small class='card-text'>Status: ". $value["STATUS_OF_BOOK"]. "</small><br>
                            <small class='card-text'>Published: ". $value["PUBLISHED"]. "</small><br>
                            <small class='card-text'>Publisher: ". $value["PUBLISHER"]. "</small><br>
                            <small class='card-text'>ISBN: ". $value["ISBN"]. "</small></p>
                            <a class='btn btn-primary btn-lg' href='update.php?id=".$value["ID"]."'>Change</a>
                            <a class='btn btn-danger btn-lg' href='delete.php?id=".$value["ID"]."'>Delete</a>
                        </div>
                    </div>";
                }
            }
            $conn->close();
        ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
</body>
</html>