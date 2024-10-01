<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poznaj Europe</title>
    <link rel="stylesheet" href="styl9.css">
</head>
<body>
    <header>
        <div id="baner">
            <h1>BIURO PODRÓŻY</h1>
        </div>
        
        
    </header>

    <div id="lewy">
        <h2>Promocje</h2>
        <table>
            <tr>
               <td>Warszawa</td>
             <td>od 600zł</td>
          </tr>
          <tr>
                <td>Wenecja</td>
                <td>od 1200zł</td>
            </tr>
            <tr>
                <td>Paryż</td>
                <td>od 1200zł</td>
            </tr>
        </table>
    </div>

    <div id="srodkowy">
        <h2>W tym roku jedziemy do...</h2>
            <?php foreach($obrazy as $obraz): ?>
                <img src="<?= $obraz['nazwaPliku'] ?>" alt="<?= $obraz['podpis'] ?>" title="<?= $obraz['podpis'] ?>" />
            <?php endforeach; ?>
    </div>


    <div id="prawy">
        <h2>Kontakt</h2>
        <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
        <p>telefon: 444555666</p>
    </div>

    <div id="blokzdanymi">
        <h3>W poprzednich latach bylismy...</h3>

        <ol>
            <?php foreach($wycieczki as $wycieczka): ?>
                <li>Dnia <?= $wycieczka['dataWyjazdu'] ?> pojechaliśmy do <?= $wycieczka['cel'] ?></li>
            <?php endforeach ?>
        </ol>
    </div>

    <footer>
        <p>Stronę wykonał: Łukasz Potrykus</p>
    </footer>



</body>
</html>