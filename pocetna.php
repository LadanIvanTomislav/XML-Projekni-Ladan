<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Početna</title>
    <link rel="stylesheet" type="text/css" href="stil.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>

    <ul class="navi">
        <h2 class="naslov">rabljeno.com</h2>
        <li class="lista"><a href="pocetna.php">POČETNA</a></li>
        <li class="lista"><a href="kontakt.php">KONTAKT</a></li>
        <li class="lista"><a href="onama.php">O NAMA</a></li>
    </ul>
      
    <div class="container-fluid klasa">
        <div class="row justify-content-center">
            <div class="col-lg-2 col-md-3 col-sm-2 col-6">
                <ul class="side">
                    <hr>
                    <h4 class="naslov2">IZBORNIK</h4>
                    <li class="lista2"><a href="pocetna.php">POČETNA</a></li>
                    <li class="lista2"><a href="kontakt.php">KONTAKT</a></li>
                    <li class="lista2"><a href="onama.php">O NAMA</a></li>
                    <hr>
                    <li><a href="login.php" class="butona"><button type="button" class="buton">POSTAVI OGLAS</button></a></li>                    
                </ul>
            </div>
            <div class="col-lg-8 col-sm-12 pt-3 glavni">

                <div class="row border m-0 mb-5 oglas">
                    
                    <div class="col-lg-4 col-sm-12 p-3"><a href="opel.php"><img src="oglas1/opel1.jpg" class="img-responsive pregled" alt=""></a></div>
                    <div class="col-lg-4 col-sm-12 p-3">
                        <a href="opel.php" class="druga"><h4>Opel Astra 1.4 ecoFlex</h4></a><br>
                        <p>Kilometraža: 220 000km<br>
                            Godište: 2009<br>
                            Lokacija: Zagreb<br>
                            Objavljeno: 1.6.2023.  
                        </p>
                        <b>Cijena: 2.200 EUR</b>
                    </div>
                </div>

                <div class="row border m-0 mb-5 oglas">
                    <div class="col-lg-4 col-sm-12 p-3"><a href="citroen.php"><img src="oglas2/citroen1.jpg" class="img-responsive pregled" alt=""></a></div>
                    <div class="col-lg-4 col-sm-12 p-3">
                        <a href="citroen.php" class="druga"><h4>Citroen C4 1.6 hdi</h4></a><br>
                        <p>Kilometraža: 155 000km<br>
                            Godište: 2011<br>
                            Lokacija: Zagreb<br>
                            Objavljeno: 7.6.2023.
                        </p>
                        <b>Cijena: 5.999 EUR</b>
                    </div>
                </div>

                <div class="row border m-0 mb-5 oglas">
                    <div class="col-lg-4 col-sm-12 p-3"><a href="bmw.php"><img src="oglas3/bmw1.jpg" class="img-responsive pregled" alt=""></a></div>
                    <div class="col-lg-4 col-sm-12 p-3">
                        <a href="bmw.php" class="druga"><h4>BMW SERIJA 320D</h4></a><br>
                        <p>Kilometraža: 210 000km<br>
                            Godište: 2012<br>
                            Lokacija: Maksimir<br>
                            Objavljeno: 3.6.2023.  
                        </p>
                        <b>Cijena: 13.999 EUR</b>
                    </div>
                </div>

                <div class="row border m-0 mb-5 oglas">
                    <div class="col-lg-4 col-sm-12 p-3"><a href="mercedes.php"><img src="oglas4/mercedes3.jpg" class="img-responsive pregled" alt=""></a></div>
                    <div class="col-lg-4 col-sm-12 p-3">
                        <a href="mercedes.php" class="druga"><h4>Mercedes S320 CDI</h4></a><br>
                        <p>Kilometraža: 246 000km<br>
                            Godište: 2008<br>
                            Lokacija: Matulji<br>
                            Objavljeno: 1.6.2023.  
                        </p>
                        <b>Cijena: 15.000 EUR</b>
                    </div>
                </div>

                <ul class="pagination justify-content-end">
                    <li><a class="page-link" href="#">Prethodna</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li><a class="page-link" href="#">Iduća</a></li>
                </ul>
            </div>
        </div>
    </div>
    
        <footer>
            <p>Ivan Tomislav Ladan</p>
            <p>JMBAG: 0246102192</p>
        </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>