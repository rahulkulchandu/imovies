<?php include 'partials/dbconnect.php' ?>
<?php
    $id = $_GET['id'];
       $sql = "Select * from movies WHERE movie_id = '$id'";
       $result = mysqli_query($conn,$sql);
       $row = mysqli_fetch_assoc($result);
           $movie_name = $row['movie_name'];
           $story = $row['movie_story'];
     ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>iMovies- <?php echo $movie_name ?></title>
</head>

<body>
    
    <?php include 'partials/_nav.php' ?>

    <div class="container my-4">
        <div class="jumbotron">
            <video class="col-12" controls>
                <source src="uploadd/<?php echo $movie_name ?>">
            </video>
            <hr class="my-4">
            <h1 class="text-primary"><?php echo $movie_name ?>
            </h1>
            <hr class="my-4">
            <h2>Story</h2>
            <p><?php echo $story ?></p>
            <a class="btn btn-primary btn-lg" href="uploadd/<?php echo $movie_name ?>" download
                role="button">Download</a>
        </div>
    </div>


    <?php include 'partials/footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>