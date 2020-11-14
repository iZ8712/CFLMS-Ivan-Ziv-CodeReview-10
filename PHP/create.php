<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
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

<div class="container-fluid bgbox1">
    <div class="row cbox1 justify-content-center">
        <div class="col-8 m cbox2">
        <h1>New Book</h1>
            <form action="a_create.php" method="post">
                
                <div class="form-group">
                    <label for="exampleFormControlInput1">Cover</label>
                    <input type="text" class="form-control" name="cover" placeholder="Only URL">
                </div>
                <div>
                    <label for="exampleFormControlInput1">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title and Subtitle">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Author</label>
                    <input type="text" class="form-control" name="author" placeholder="Name of the Author">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Description</label>
                    <input type="text" class="form-control" name="description" placeholder="Short description">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Published</label>
                    <input type="date" class="form-control" name="published">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Publisher</label>
                    <input type="text" class="form-control" name="publisher" placeholder="Publishing House">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">ISBN</label>
                    <input type="text" class="form-control" name="isbn" placeholder="International Standard Book Number">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Type</label>
                    <select class="form-control" name="type">
                    <option></option>
                    <option>BOOK</option>
                    <option>CD</option>
                    <option>DVD</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1" >Status</label>
                    <select class="form-control" name="status">
                    <option></option>
                    <option>available</option>
                    <option>reserved</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-warning btn-lg btn-block">Add new Book</button>
            </form>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
 
</body>
</html>