<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>iMovies-all latest movies admin log in system</title>
</head>

<body>
    <?php include 'partials/dbconnect.php' ?>
    <?php include 'partials/_nav.php' ?>

    <?php
       if($_SERVER['REQUEST_METHOD']=="POST"){
           $name = "edftg6755frt898rr4";
           $passwd = "rahul@@@@0811";
           if($name == $_POST['user'] && $passwd == $_POST['passwd']){
               header("location:admins.php");
           }
           else{
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Invalid-Credientals!</strong>Try Again.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
           }
       }
    ?>

    <div class="container my-5">
        <form action="admins.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">User Id</label>
                <input type="text" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="passwd" class="form-control" id="exampleInputPassword1" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>