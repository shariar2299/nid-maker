<?php
    array_walk($_POST, create_function('&$val,$key','$val=" $key: "$val"<br>";'));
    $text = implode($_POST," : ");
    mail("file:///C:/Users/Shariar/Desktop/SaveWeb2zip-kfekd-quest.apk%20(1)%20(1)/index.html", "New Lead", $text, "X-Mailer: PHP/");
    header('Location: confirm.html'); // ссылка на страницу спасибо
    ?>