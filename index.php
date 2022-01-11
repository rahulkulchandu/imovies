<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description"
        content="karan aujla movie sidhu mosevala new movie new punjabi hindi hollywood tollywood web series watch online here you can also download all videos in full hd resolution and high speed">
        
        <!--google webmaster-->
    <meta name="google-site-verification" content="CcKWhWvQNYX1-2zw_NtEe29Ep_9bKctREVdnSDoBSso" />
     <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>iMovies-all latest movies all language hindi punjabi english all new movies 2021</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2MEE2P9BN7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2MEE2P9BN7');
</script>
</head>

<body>
    <?php include 'partials/dbconnect.php' ?>
    <?php include 'partials/_nav.php' ?>

    <div class="container my-4">
        <div class="row">
            <?php
       $sql = "Select * from movies ORDER BY movie_id DESC";
       $result = mysqli_query($conn,$sql);
       while($row = mysqli_fetch_assoc($result)){
           $movie_name = $row['movie_name'];
           $thumbnail = $row['thumbnail_link'];
           $id = $row['movie_id'];

           echo ' 
           <div class="col-md-3 mt-3">
               <div class="card" style="height:375px">
                   <a href="movies.php?id='.$id.'"><img style="height: 180px;" src="images/'.$thumbnail.'"
                       class="card-img-top" alt="'.$movie_name.'"></a>
                   <div class="card-body">
                       <h5 class="card-title"><a href="movies.php?id='.$id.'" class="text-decoration-none text-dark">'.$movie_name.'</a> </h5>
                       <a href="movies.php?id='.$id.'" class="text-decoration-none text-dark">click to download</a>
                   </div>
               </div>
           </div>';
       }
    ?>
        </div>
    </div>


<?php include 'partials/footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>