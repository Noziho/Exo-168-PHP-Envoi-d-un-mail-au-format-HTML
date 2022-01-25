<?php
/**
 * 1. Complétez la variable $html, elle devra contenir un texte court de newsletter.
 * 2. Ajoutez au moins une adresse mail ( la vôtre ? ) au tableau $to.
 * 3. Envoyez ce mail au format HTML à toutes les personnes de $ to qui ont souscrit à votre newsletter.
 * Bonus, pour chaque adresse mail indiquer si le mail a bien été envoyer, ou faire un tableau contenant les succès / erreurs et l'afficher après envoi
 *    ex: ['j.conan@fondationface.org' => true, 'toto@fondationface.org' => false] => à vous de trouver la suite !
 */

$to = [
    'noah.decroix3@gmail.com',
    'yskaa59570@gmail.com',
];

$html = "
    <html lang='fr'>
        <head>
            <title>Mes actualités</title>
        </head>
        <body>
            <div>
                Ah ça oui !
            </div>
        </body>
    </html>
";
$headers = [
    'reply-To' => 'noah.decroix3@gmail.com',
    'X-Mailer' => 'PHP/' . phpversion(),
    'Mime-Version' => '1.0',
    'Content-type' => 'text/html; charset=utf-8',
];
foreach ($to as $value) {
    $sucess = mail($value, 'Mon sujet', $html, $headers);
    if (!$sucess) {
        echo 'Le mail na pas été envoyé à ' .$value ."<br>";
    }
    else {
        echo 'Le mail à bien été envoyer à ' . $value . "<br>";
    }
}

