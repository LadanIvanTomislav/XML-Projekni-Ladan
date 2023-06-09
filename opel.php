<?php
    $xml = simplexml_load_file('opel.xml');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Opel</title>

    <link rel="stylesheet" type="text/css" href="stil.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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

            <div class="col-lg-5 col-sm-12 glavni">
                <div class="row border p-3 mb-5 oglasopel">
                        <div id="carouselExampleControls" class="carousel" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="oglas1/opel1.jpg" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="oglas1/opel2.jpg" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="oglas1/opel3.jpg" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="oglas1/opel4.jpg" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="oglas1/opel5.jpg" alt="">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only"></span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only"></span>
                            </a>
                        </div>
                </div>

                <div class="row mb-5">
                    <div class="container col-6">
                        <table class="table mt-2 table-info table-striped table-bordered">
                            <tbody>
                                <?php foreach ($xml->detalji as $detalji): ?>
                                    <tr>
                                        <th>Marka vozila</th>
                                        <td><?php echo $detalji->marka; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Model vozila</th>
                                        <td><?php echo $detalji->model; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Lokacija</th>
                                        <td><?php echo $detalji->lokacija; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Godina proizvodnje</th>
                                        <td><?php echo $detalji->godina_proizvodnje; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kilometraža</th>
                                        <td><?php echo $detalji->kilometraza; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Registriran do</th>
                                        <td><?php echo $detalji->registracija; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Snaga</th>
                                        <td><?php echo $detalji->snaga; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Mjenjač</th>
                                        <td><?php echo $detalji->mjenjac; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Potrošnja</th>
                                        <td><?php echo $detalji->potrosnja; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Vlasnik</th>
                                        <td><?php echo $detalji->vlasnik; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Cijena</th>
                                        <td><b><?php echo $detalji->cijena; ?></b></td>
                                    </tr>
                                <?php endforeach; ?>                                  
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <footer>
            <p>Ivan Tomislav Ladan</p>
            <p>JMBAG: 0246102192</p>
        </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
    crossorigin="anonymous"></script>
  </body>
</html>