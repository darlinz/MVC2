<?php
    ob_start();
?>

<h2>Проект MVC технологии. Игры</h2>
<article>
    <p>
        Просмотр списка игр и детальной информации по одной игре
    </p>
</article>

<?php
    $content = ob_get_clean(); 
?>

<?php 
    include 'view/templates/layout.php';
?>
