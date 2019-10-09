<?php require_once("auth.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Timeline RoNW</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">

            <div class="card">
                <div class="card-body text-center">

                    <img class="img img-responsive rounded-circle mb-3" width="160" src="img/<?php echo $_SESSION['user']['photo'] ?>" />
                    
                    <h3><?php echo  $_SESSION["user"]["name"] ?></h3>
                    <p><?php echo $_SESSION["user"]["email"] ?></p>

                    <p><a href="home.php">Home</a>
                    <p><a href="edit.php">Edit Profil</a></p>
                    <p><a href="logout.php">Logout</a></p>
                </div>
            </div>

            
        </div>


        <div class="col-md-8">

            <form action="" method="post" />
                <div class="form-group">
                    <textarea style="resize:none;height:100px;" class="form-control" placeholder="Apa yang kamu pikirkan?"></textarea>
                </div>
                <div class="form-group">
                <button type="submit">Post</button>
                </div>
            </form>

            <?php for($i=0; $i < 3; $i++){ ?>
            <div class="card mb-3">
                <div class="card-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis veritatis nemo ad recusandae labore nihil iure qui eum consequatur, officiis facere quis sunt tempora impedit ullam reprehenderit facilis ex amet!
                </div>
            </div>
            <?php } ?>
            
        </div>
    
    </div>
</div>

</body>

<footer id="footer" class="page-footer unique-color-dark mt-4">
  <div class="info-color-dark text-center py-4">
    <!--Newsletter-->
    <a href="tentang.php" class="btn btn-info" role="button">Tentang Kami</a>
    <a href="kontak.php" class="btn btn-info" role="button">Hubungi Kami</a>
    </div>
</footer>

<div class="footer-copyright py-3 text-center">
    &copy; 2019, Us to Earth
  </div>

</html>