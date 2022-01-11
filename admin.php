<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>iMovies-all latest movies</title>
</head>

<body>
    <?php include 'partials/dbconnect.php' ?>
    <?php include 'partials/_nav.php' ?>


    <?php
         if($_SERVER['REQUEST_METHOD'] == "POST"){
             $movie_name = $_POST['name'];
             $story = $_POST['story'];
             $link = $_POST['link'];
             if(empty($movie_name) || empty($story) || empty($link)){
                 echo "";
             }
             else{
             $sql = "INSERT INTO `movies` (`movie_name`,`movie_story`,`thumbnail_link`) VALUES ('$movie_name','$story','$link')";
              $result = mysqli_query($conn,$sql);
              if($result){
                  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Succesfully!</strong>Added.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
              }
              else{
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Sorry!</strong>Try Again.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
              }
            }
         }
    ?>

    <div class="container py-2 my-3">

        <form action="admin.php" method="post">
            <div class="mb-3">
                <label class="fw-bold" for="exampleInputEmail1" class="form-label">Movie Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    required>
            </div>
            <label class="fw-bold" for="floatingTextarea2">Movie Story</label>
            <div class="form-floating">
                <textarea name="story" class="form-control" placeholder="The story of movie" id="floatingTextarea2"
                    style="height: 100px" required></textarea>
            </div>
            <label class="fw-bold" for="floatingTextarea3">Thumbnail Link</label>
            <div class="form-floating">
                <textarea class="form-control" name="link" id="floatingTextarea3" style="height: 60px"
                    required></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Upload</button>

        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>