<?php 

    function menu(string $lien, string $title, string $linkClass = ''): string{
        $class = ($_SERVER['SCRIPT_NAME'] === $lien)? 'active' : '';
        return '
            <li class=" '.$class.' ">
                <a class="'.$linkClass.'" href="'.$lien.'">'.$title.'</a>
            </li>
        ';
    }

    function nav_menu(string $linkClass = ''): string{
        return 
                menu('/html/index.php', 'Accueil', $linkClass).
                menu('/html/contact.php', 'Contact', $linkClass).
                menu('/html/test.php', 'Test', $linkClass);
    }
    
?>