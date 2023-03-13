<?php
$nav = array("Úvod" => "index.php", "Přehled" => "prehled.php", "Kontakty" => "kontakty.php", "Dotaznik" => "dotaznik.php")
?>

<header>
    <nav>
        <h2 class="globalTitle">Muj web</h2>
        <?php
        foreach ($nav as $key => $value) {
            echo '<a href="' . $value . '">' . $key . '</a>';
        }
        ?>
    </nav>
</header>