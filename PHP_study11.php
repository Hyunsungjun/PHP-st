<!-- PHP 반복문 형식 -->
<!-- php loop statements -->
<!-- site:php.net php loop statements 공식문서찾기 -->
<!DOCTYPE html>
<html>
    <head>
        <meta charest="utf-8">
        <title>Loop</title>
    </head>
    <body>
        <h1>while</h1>
        <?php
        echo '1<br>';
        $i = 0;
        while(10 > $i){
            echo '2<br>';
            $i = $i + 1;
        }
        
        echo '3<br>';
        ?>
        <!-- php에선 true만 써줘도 무한루프로 도는가보다  -->
    </body>
</html>