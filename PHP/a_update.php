<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
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

<div class="container-fluid bgbox2">
    
    <div class="acbox">

        <?php
            require_once 'db_connect.php';
            if($_POST) {
                $id = $_POST["id"];
                $cover = $_POST["cover"];
                $title = $_POST["title"];
                $author = $_POST["author"];
                $description = $_POST["description"];
                $type = $_POST["type"];
                $status = $_POST["status"];
                $published = $_POST["published"];
                $publisher = $_POST["publisher"];
                $isbn = $_POST["isbn"];


                $sql = "UPDATE `media` SET `COVER` = '$cover', `TITLE` = '$title',  `AUTHOR`= '$author', `DESCRIPTION` = '$description', `TYPE` = '$type', `STATUS_OF_BOOK` = '$status', `PUBLISHED` = '$published', `PUBLISHER` = '$publisher', `ISBN` = '$isbn' 
                WHERE ID = $id";
                if(mysqli_query($conn, $sql)) {
                    echo "
                    <div class='card bookbg' style='width: 18rem;'>
                        <button class='btn btn-success btn-lg btn-block'>Book successfully edited!</button>
                        <img src='$cover'>
                        <div class='card-body'>
                            <h5 class='card-title'>$title</h5>
                            <p class='card-text'>writen by $author</p>
                            <p><small class='card-text'>$description</small></p>
                            <p><small class='card-text'>Format: $type</small><br>
                            <small class='card-text'>Status: $status</small><br>
                            <small class='card-text'>Published: $published</small><br>
                            <small class='card-text'>Publisher: $publisher</small><br>
                            <small class='card-text'>ISBN: $isbn</small></p>
                            <a class='btn btn-block btn-info btn-lg' href='index.php'>Back</a>
                        </div>
                    </div>";
                } else { 
                    echo "
                    <div class='myerror'>
                        <h1>ERROR!</h1>
                        <p class='errorp'>Something went wrong. Please try again.</p>
                        <a class='btn btn-warning btn-lg btn-block' href='update.php'>Back</a>
                    </div>";;
                };
            };

            $conn->close();
        ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
