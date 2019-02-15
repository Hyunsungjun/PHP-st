<!-- PHP 반복문과 배열의 활용 -->
<!-- php get file list in directory -->
<!-- site:php.net scandir -->
<!DOCTYPE html>
<html>
    <head>
        <meta charest="utf-8">
    </head>
    <body>
        <h1><a href="PHP_study13.php">WEB</a></h1>
        <ol>
            <?php
                $list = scandir('./data');//../부모디렉토리 scandir로 파일목록을 가져왔다 이것은 배열에 담아서 준다 
                // var_dump($list);
                /*
                echo "<li>$list[0]</li>\n";//.
                echo "<li>$list[1]</li>\n";//..이 scandir에 포함이 되어있다 그러나 앞에 두개는 필요가 없는데 뒤에 설명을 할 것 
                echo "<li>$list[2]</li>\n";// 이코드의 특징은 숫자만 빼고 반복이 되므로 반복문을 사용해볼 예정
                echo "<li>$list[3]</li>\n";
                echo "<li>$list[4]</li>\n";
                echo "<li>$list[5]</li>\n";
                */
                // $i = 0;
                // while($i<6){
                //     echo "<li>$list[$i]</li>\n";//그러나 정적인 코드인것이 단점
                //     $i = $i +1;
                // }
                $i = 0;
                while($i<count($list)){
                    echo "<li><a href=\"PHP_study13.php?id=$list[$i]\">$list[$i]</a></li>\n";//배열 숫자를 세는 함수를 이용하여 동적인 표현을 할수가 있게된다.
                    $i = $i +1;
                }
            ?>
        </ol>
        <h2>
            <?php
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