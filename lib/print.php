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
}
function print_list(){

    $list = scandir('./data');
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
    }
}
?>