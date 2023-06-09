<?php
    $korisnicko_ime = "";
    $lozinka = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["korisnicko_ime"])) {
                echo "<b>Unesite korisničko ime!</b>";    
        }

        else if (empty($_POST["lozinka"])) {
                echo "<b>Unesite lozinku!</b>";           
        }

        else {
            $korisnicko_ime = $_POST["korisnicko_ime"];
            $lozinka = $_POST["lozinka"];
            korisnik($korisnicko_ime, $lozinka);
        }
    }


    function korisnik($korisnicko_ime, $lozinka) {
        $xml = simplexml_load_file("korisnici.xml");
        
        foreach ($xml->korisnik as $n) {
            $k_i = $n->korisnicko_ime;
            $l = $n->lozinka;

            if($k_i == $korisnicko_ime) {
                if($l == $lozinka) {
                    echo "<b>Prijavljeni ste kao $korisnicko_ime</b>";
                    return;
                }

                else { 
                    echo "<b>Netočna lozinka</b>";
                    return;
                }
            }
        }
            
        echo "<b>Korisnik ne postoji.</b>";
        return;
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prijava</title>

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
                    <li><a href="login2.php" class="butona"><button type="button" class="buton">POSTAVI OGLAS</button></a></li>                    
                </ul>
            </div>

            <div class="col-lg-5 col-sm-12 mt-5">
                <div class="row border p-3 mb-5 siva">
                        <h2 class="boja">Rabljeno.com</h2><br><br><br>
                        <form method="POST">
                            <label for = "korisnicko_ime" class="detalji">Korisničko ime:</label><br>
                            <input type = "text" name = "korisnicko_ime"><br><br>

                            <label for = "lozinka" class="detalji">Lozinka:</label><br>
                            <input type = "password" name = "lozinka"><br><br>

                            <input type = "submit" value = "Prijava" class>
                        </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="fixed-bottom">
        <p>Ivan Tomislav Ladan</p>
        <p>JMBAG: 0246102192</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
    crossorigin="anonymous"></script>
  </body>
</html>