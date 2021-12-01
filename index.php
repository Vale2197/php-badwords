<?php
/* Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. */

$bad_txt = "You won’t get good at anything by doing it a lot fucking aimlessly. Nothing of value comes to you without fucking working at it. Don’t fucking censor yourself. Sterility leads to susceptibility. Be fucking bold. Greatness isn’t the height of your stature, it’s the heft of your spirit. Keep fucking going. It isn’t what you are, but what you’re going to become. When you design, you have to draw on your own fucking life experiences. If it’s not something you would want to read/look at/use then why fucking bother? The details are not the details. They make the fucking design. Whatever can be captured in words can be conquered with understanding. Intuition is fucking important. You’ve been placed in the crucial moment. Abandon the shelter of insecurity. Don’t fucking lie to yourself. Think about all the fucking possibilities. Remember it’s called the creative process, it’s not the creative fucking moment. The graphic designer’s first fucking consideration is always the size and shape of the format, whether for the printed page or for digital display. Your rapidograph pens are fucking dried up, the x-acto blades in your bag are rusty, and your mind is dull. Stop clicking your mouse, get messy,";

$badWord = $_GET["badWord"];

$censuredTxt = str_replace($badWord, "***", $bad_txt);

var_dump($censuredTxt);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phpBADWORDS</title>
</head>
<body>
    <h1>
        BAD LOREM
    </h1>

    <p>
        <?php echo $censuredTxt ?>
    </p>
</body>
</html>