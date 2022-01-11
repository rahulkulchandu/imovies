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
    <div class="container my-4">
        <h1>Search Result for <?php echo $_GET['search']?></h1>
        <div class="row">
            <?php
    $noResult=true;
    $query = $_GET['search'];
    // echo $query;
    $sql = "SELECT * FROM movies WHERE MATCH(movie_name) against('$query')";
           $result = mysqli_query($conn , $sql);
           while($row = mysqli_fetch_assoc($result)){
            $noResult=false;
            $name = $row['movie_name'];
            $thumbnail = $row['thumbnail_link'];
            $id = $row['movie_id'];
            echo ' 
           <div class="col-md-3">
               <div class="card">
                   <a href="movies.php?id='.$id.'"><img style="height: 180px;" src="images/'.$thumbnail.'"
                       class="card-img-top" alt="'.$name.'"></a>
                   <div class="card-body">
                       <h5 class="card-title"><a href="movies.php?id='.$id.'" class="text-decoration-none text-dark">'.$name.'</a> </h5>
                       <a href="movies.php?id='.$id.'" class="text-decoration-none text-dark">click to download</a>
                   </div>
               </div>
           </div>';
           }
    ?>
        </div>
    </div>
    <?php
    if($noResult){
        echo ' <div class="container my-4">
        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">No Results Found</h1>
            </div>
        </div>
    </div>';
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>