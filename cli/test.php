<?php
$fichier = __DIR__ . DIRECTORY_SEPARATOR . 'demo.txt';
file_put_contents($fichier, 'marc comment vas-tu ?', FILE_APPEND);
