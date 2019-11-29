<?php
function saveTextarea(string $data)
{
    if (isset($_POST['btn'])) {

        $filename = __DIR__ . DIRECTORY_SEPARATOR . 'demo.txt';
        $data = $_POST['input1'];

        file_put_contents($filename, $data . "\n", FILE_APPEND);
    } else {
        echo 'Reprendre tout simplement';
    }
}
