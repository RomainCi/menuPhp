<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello world</h1>
    <?php
    $logo = "monkid";

    $array = [
        "accueil" => "https://www.google.com/",
        "reservation" => "https://ici.radio-canada.ca/nouvelle/1348196/singes-humains-flexibilite-jugement"

    ];
    $footer = [
        "contact" => "https://fr.wiktionary.org/wiki/singe",
        "remboursement" => "https://developer.mozilla.org/fr/docs/Web/HTML/Element/a"
    ];
    require_once __DIR__ . "/menu.php";
    $afficheMenu($array, $logo);
    echo nl2br("\n");
    $afficheMenu($footer, $hey = null);
    $array["lola"] = "https://www.google.com/search?client=firefox-b-d&q=lol";
    echo nl2br("\n");
    $afficheMenu($array, $hey = null);
    ?>
</body>

</html>