<!-- PHP 배열의 형식 -->
<!-- site:php.net array -->
<!DOCTYPE html>
<html>
    <head>
        <meta charest="utf-8">
        <title>Array</title>
    </head>
    <body>
        <h1>Array</h1>
        <?php
            $coworkers = array('egoing','leezche','duru');
            // php data type검색을 하셨음 
            echo $coworkers[1].'<br>';
            echo $coworkers[3].'<br>';//초과 숫자에 대해서는 오류는 안나는 대신 무표기로 대체
            // php도 0기반 언어
            //php array total count 검색 
            echo count($coworkers); // 배열의 총 길이를 알수있다
            //배열 데이터 추가 검색 php array add vallue 
            array_push($coworkers,'good');
            var_dump($coworkers);
        ?>
    </body>
</html>