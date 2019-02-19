<!-- PHP 반복문과 배열의 활용 -->
<!-- php get file list in directory -->
<!-- site:php.net scandir -->
<!-- 빨간줄이 보이는데 vscode 전형적인 버그임 실행은 매우 잘된다. -->
<?php
function print_title(){
    if(isset($_GET['id'])){
        echo $_GET['id'];
    } else{
        echo "Welcome";
    }
}
function print_description(){
    if(isset($_GET['id'])){
        echo file_get_contents("data/".$_GET['id']);
    } else {
        echo "Hello, PHP";
    }
    //여기서 .은 +의 역할을 한다 그래서 data/이하 디렉토리를 get을 이용해서 받아 동적인 자료를 가지게 되느것 
}
function print_list(){

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
        if($list[$i] != '.' ){
            if($list[$i] != '..'){
                if($list[$i] != '.DS_Store'){
                    echo "<li><a href=\"PHP_study16.php?id=$list[$i]\">$list[$i]</a></li>\n";//배열 숫자를 세는 함수를 이용하여 동적인 표현을 할수가 있게된다.
                }
            }
        }
        $i = $i +1;
    }//여기서 이중 if문을 썼는데 사실 더 깔끔한 코드가 없는지 고민해볼 필요는 있는듯 아마 이고잉님 커리큘럼에서 일부러 눈높이 할려고 쓴것 같은데  &&이런거 쓰면 되지않나 싶음 
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charest="utf-8">
        <title><?php
        print_title();
        ?></title>
    </head>
    <body>
        <h1><a href="PHP_study16.php">WEB</a></h1>
        <ol>
            <?php
            print_list();
            ?>
        </ol>
        <a href="PHP_study16create.php">create</a>
        <h2>
        <?php
        print_title();
        ?>
        </h2>
        <?php
        print_description();
        ?>
    </body>
</html>