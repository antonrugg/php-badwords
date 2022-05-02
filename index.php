
<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con 
tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php 
    $quote = "“Ph'nglui mglw'nafh Cthulhu R'lyeh wgah'nagl fhtagn.”";
    $quoteUncensoredLength = strlen($quote);
    $censoredWord = $_GET["censor"];

    $quoteCensored = str_replace($censoredWord, "***", $quote);
    $quoteCensoredLength = strlen($quoteCensored);

    //http://localhost/php-badwords/index.php?censor=insert word to censor

    //strlen(stringa)
    // str_replace(porzioneDaModificare, conCosa, stringa)

    
?>

<p>Cultist says: <?php echo $quote ?></p>
<p>Words said before censorship of the old ones: <?php echo $quoteUncensoredLength ?></p>

<p>Cultist says after censor: <?php echo $quoteCensored ?></p>
<p>Words said after censorship of the old ones: <?php echo $quoteCensoredLength ?></p>
