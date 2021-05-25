
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
  <link rel="stylesheet" href=" css/style.css">

  <title>b201210035 M.NilayBezirci</title>
  <script src="https://kit.fontawesome.com/94c2f0f80e.js" crossorigin="anonymous"></script>
</head>

<body>

 
  
         

  <header>

<div class=" text-light jumbotron ">

    <div class="container">

        <div class="">
            <h1 class="display-4 font-italic">
                Giriş Ekranı
            </h1>
        </div>

    </div>

</div>

</header>

<main>

<div class="container">
    
    <?php 

        include("bilgiler.php");


        if (($_POST["email"] == $user) and ($_POST["password"] == $pass))
        {
           $_SESSION["login"] = "true";
           $_SESSION["user"] = $user;
           $_SESSION["pass"] = $pass;
    
           echo("SİTEYE GİRİŞ YAPTINIZ HOŞGELDİNİZ !!");
    
        }
    
        else 
        {
                echo "Kullancı Adı veya Şifre Yanlış.<br>";
                echo "!!!TEKRAR DENEYİN!!!";
                header("Refresh: 2; url=login.php");
        }
    
    ?>
    
</div>

</main>

