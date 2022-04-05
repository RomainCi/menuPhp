<?php

$afficheMenu = function ($array, $logo) {
    echo $logo;
    foreach ($array as $key => $value) { ?>

        <a href="<?php echo $value ?>"><?php echo $key ?></a>

<?php     }
};

?>