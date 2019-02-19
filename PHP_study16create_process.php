<?php
file_put_contents('data/'.$_POST['title'], $_POST['description']); //왜 소스가 똑같은데 이건 실행이 안될까? 원인 찾았는데 전혀 이상한곳에서 names라고 적어놓음 php에서는 오류표시를 안해주네
//redirection header location을 해주면 그 주소로 이동하는 모양 
header('Location: /PHP_study16.php?id='.$_POST['title']);
?>