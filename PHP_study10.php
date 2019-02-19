<!-- PHP 조건문 활용 -->
<!-- php check value exist -->
<!DOCTYPE html>
<html>
    <head>
        <meta charest="utf-8">
    </head>
    <body>
        <h1><a href="PHP_study10.php">WEB</a></h1>
        <ol>
            <li><a href="PHP_study10.php?id=HTML">HTML</a></li>
            <li><a href="PHP_study10.php?id=CSS">CSS</a></li>
            <li><a href="PHP_study10.php?id=JavaScript">JavaScript</a></li>
        </ol>
        <h2>
            <?php
            //isset 값이 있으면 트루 없으면 폴스 
            if(isset($_GET['id'])){
                echo $_GET['id'];
            } else{
                echo "Welcome";
            }
            ?>
        </h2>
        <?php
        if(isset($_GET['id'])){
            echo file_get_contents("data/".$_GET['id']);
        } else {
            echo "Hello, PHP";
        }
        ?>
    </body>
</html>
