<!-- PHP 함수의 사용 -->
<!DOCTYPE html>
<html>
    <head>
        <meta charest="utf-8">
    </head>
    <body>
        <h1>WEB</h1>
        <ol>
            <li><a href="PHP_study7.php?id=HTML">HTML</a></li>
            <li><a href="PHP_study7.php?id=CSS">CSS</a></li>
            <li><a href="PHP_study7.php?id=JavaScript">JavaScript</a></li>
        </ol>
        <h2>
            <?php
            echo $_GET['id'];
            ?>
        </h2>
        <?php
        echo file_get_contents("data/".$_GET['id']);
        ?>
    </body>
</html>