<!-- PHP 문자열과 문자열의 처리 -->
<!doctype html>
<html>
<body>
    <h1>String & String Operator</h1>
<?php
echo 'Hello world';
echo "Hello world";
// 싱글 쿼츠로 시작하면 싱글 쿼츠로 끝나야 된다
// 더블 쿼츠로 시작하면 더블 쿼츠로 끝나야 된다
echo "Hello \"w\"orld";
// 이스케이프 코드는 PHP도 마찬가지로 사용할수있다.
?>
<h2>concatenation operator</h2>
<?php
echo "Hello"."world"; //파이썬에서 +랑 같은 것같은데?
?>
<!-- php string length 구글 검색 예시를 보여주심  -->
<?php
echo strlen("Hello world") //파이썬과 마찬가지이다
?>
</body>
</html>
