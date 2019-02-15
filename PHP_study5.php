<!-- PHP URL파라미터 활용(URL parameter) -->
<!DOCTYPE html>
<html>
    <head>
        <meta charest="utf-8">
    </head>
    <body>
        <h1>WEB</h1>
        <ol>
        <!-- 그냥 종류별로 카테고리 나눠놓음  -->
            <li><a href="PHP_study5.php?id=HTML">HTML</a></li>
            <li><a href="PHP_study5.php?id=CSS">CSS</a></li>
            <li><a href="PHP_study5.php?id=JavaScript">JavaScript</a></li>
        </ol>
        <h2>
        <!--  -->
            <?php
            echo $_GET['id'];//달라_대문자[''] url파라미터의 값을 get한다 하여 GET인듯 
            ?>
        </h2>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis delectus sequi officiis odit ipsum ut incetunt aliquid, cupiditate eveniet? Libero deleniti error reprehenderit pariatur fugiat expedita perferendis nemo corrupti dolor?
    </body>
</html>