<!-- PHP URL파라미터 활용(URL parameter) -->
<!DOCTYPE html>
<html>
    <head>
        <meta charest="utf-8">
    </head>
    <body>
        <h1>function</h1>
        <?php
        $str = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
        Explicabo corrupti possimus consectetur soluta quisquam consequuntur 
        iste excepturi culpa, rem sit nostrum, numquam pariatur accusamus tenetur vero vitae sed, odit labore.";
        echo $str;
        ?>
        <!-- php string length 검색어 -->
        <h2>strlen()</h2>
        <?php
        echo strlen($str);
        ?>
        <h2>nl2br</h2>
        <!-- 이거 엔터키도 먹히게 해주는 함수 -->
        <?php
        echo nl2br($str);
        ?>
    </body>
</html>