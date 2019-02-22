<?php
require('lib/print.php');
?>
<?php
require('view/top.php');
?>
        <a href="PHP_study16create.php">create</a>
        <?php if(isset($_GET['id'])) { ?>
        <!-- <a href="PHP_study16update.php?id=<?php //echo $_GET['id']; ?>">update</a> --> <!-- 아래와 같다-->
        <a href="PHP_study16update.php?id=<?=$_GET['id'] ?>">update</a>
        <?php } ?>
        <h2>
        <?php
        print_title();
        ?>
        </h2>
        <?php
        print_description();
        ?>
        <form action="PHP_study16update_process.php" method="post">
                <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
            <p>
                <input type="text" name="title" placeholder="Title" value="<?php print_title(); ?>">
            </p>
            <p>
                <textarea name="description" placeholder="Descriptrion" cols="100" rows="20"><?php print_description(); ?></textarea>
            </p>
            <p>
                <input type="submit">
            </p>
        </form>
<?php
require('view/bottom.php');
?>