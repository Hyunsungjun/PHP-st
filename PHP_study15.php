<?php
// 이런방식은 주소를 보내면 글도 보내져버리는 오류가 있으므로 쓰지 않는다 다만 URL을 통해서 서버쪽 데이터를 전송하는 것은 북마크에서 사용하기 적합하다 
// echo "<p>title: ".$_GET['title']."</p>"; //연관배열열
// echo "<p>description: ".$_GET['description']."</p>";
// file_put_contents('data/'.$_GET['title'],$_GET['description']);
// file_put_contents('data/'.$_POST['title'], $_POST['description']);
file_put_contents('data/'.$_POST['title'], $_POST['description']);
?>
<!-- title: ss

description: dd -->