<?php
require('lib/print.php');
?>
<?php
require('view/top.php');
?>
        <a href="PHP_study16create.php">create</a>
        <form action="PHP_study16create_process.php" method="post">
            <p>
            <!-- 타입은 텍스트 박스, 네임은 태그네임 플레이스홀더 설명 -->
                <input type="text" name="title" placeholder="Title">
            </p>
            <!-- 텍스트에이리어  -->
            <p>
                <textarea name="description" placeholder="Descriptrion" cols="70" rows="20"></textarea>
            </p>
            <p>
                <input type="submit">
            </p>
        </form>
<?php
require('view/bottom.php');
?>