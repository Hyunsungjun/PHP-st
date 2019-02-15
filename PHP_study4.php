<!-- PHP URL파라미터 (URL parameter) -->
<!DOCTYPE html>
<html>
<head>
<meta charest="utf-8"> 
</head>
 <body>
 
 안녕하세요. <?php echo $_GET['adress']; ?>에 사시는 <?php echo $_GET['name']; ?>님
 <!-- php?name=성준 파라미터를 이리준것임  ?name=성준&adress=서울 이거 그대로 복사래서 파라미터값으로 넣으면 된다-->
 <!-- 주소 파라미터값(입력값 구분자 &(엠퍼센드))마다 다른 값을 얻을수 있게 되었다. -->
 </body>
</html>