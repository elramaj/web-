<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rangers of Nature Worldwide</title>

    <!-- menyisipkan bootstrap -->
     <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">
    <header>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">

                    <p>&larr; <a href="index.php">Beranda</a>

                        <h1>Apa ada yang dapat kami bantu?</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img class="img img-responsive" src="img/ronw.png" />
              </div>
          </div>  
          <br>

          <?php 
$statusMsg = '';
$msgClass = '';
if(isset($_POST['submit'])){
    // Get the submitted form data
    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Cek apakah ada data yang belum diisi
    if(!empty($email) && !empty($name) && !empty($subject) && !empty($message)){
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter your valid email.';
            $msgClassk = 'errordiv';
        }else{
            // Pengaturan penerima email dan subjek email
            $toEmail = 'email@namadomain.com'; // Ganti dengan alamat email yang Anda inginkan
            $emailSubject = 'Pesan website dari '.$name;
            $htmlContent = '<h2> via Form Kontak Website</h2>
                <h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Subject</h4><p>'.$subject.'</p>
                <h4>Message</h4><p>'.$message.'</p>';
            
            // Mengatur Content-Type header untuk mengirim email dalam bentuk HTML
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            
            // Header tambahan
            $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";
            
            // Send email
            if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
                $statusMsg = 'Pesan Anda sudah terkirim dengan sukses !';
                $msgClass = 'succdiv';
            }else{
                $statusMsg = 'Maaf pesan Anda gagal terkirim, silahkan ulangi lagi.';
                $msgClass = 'errordiv';
            }
        }
    }else{
        $statusMsg = 'Harap mengisi semua field data';
        $msgClass = 'errordiv';
    }
}
?>
<style>
.mainContent {
    width: 35%;
    margin: 2.5em auto;
    background: #fff;
    padding: 2.5em;
}
.contactFrm h4 {
    font-size: 1em;
    color: #252525;
    margin-bottom: 0.5em;
    font-weight: 300;
    letter-spacing: 5px;
}
.contactFrm input[type="text"], .contactFrm input[type="email"] {
    width: 70%;
    outline: none;
    font-size: 0.9em;
    padding: .7em 1em;
    border: 1px solid #000;
    -webkit-appearance: none;
    display: block;
    margin-bottom: 1.2em;
}
.contactFrm textarea {
    resize: none;
    width: 93.5%;
    font-size: 0.9em;
    outline: none;
    padding: .6em 1em;
    border: 1px solid #000;
    min-height: 10em;
    -webkit-appearance: none;
}
.contactFrm input[type="submit"] {
    outline: none;
    color: #FFFFFF;
    padding: 0.5em 0;
    font-size: 1em;
    margin: 1em 0 0 0;
    -webkit-appearance: none;
    background: #006faa;
    transition: 0.5s all;
    border: 2px solid #006faa;
    -webkit-transition: 0.5s all;
    transition: 0.5s all;
    -moz-transition: 0.5s all;
    width: 47%;
    cursor: pointer;
}
.contactFrm input[type="submit"]:hover {
    background: none;
    color: #006faa;
}
p.statusMsg{font-size:18px;}
p.succdiv{color: #008000;}
p.errordiv{color:#E80000;}
</style>
<div class="mainContent">
    <h2>Silahkan hubungi kami !</h2>
    <div class="contactFrm">
        <?php if(!empty($statusMsg)){ ?>
            <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
        <?php } ?>
        <form action="" method="post">
            <h4>Name</h4>
            <input type="text" name="name" placeholder="Nama Anda" required="">
            <h4>Email </h4>
            <input type="email" name="email" placeholder="email@example.com" required="">
            <h4>Subject</h4>
            <input type="text" name="subject" placeholder="Tulis subject" required="">
            <h4>Message</h4>
            <textarea name="message" placeholder="Tulis pesan Anda disini" required=""> </textarea>
            <input type="submit" name="submit" value="Submit">
            <div class="clear"> </div>
        </form>
    </div>
</div>

      </div>
      <br>
</section>

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