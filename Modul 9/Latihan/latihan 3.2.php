<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Prefill Data Radio Button</title>
    </head>

<body>

    <!-- Form Radio Button HTML -->
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        Jenis Kelamin
        <input type="radio" name="sex" value="Pria" checked

        <?php
        if ($_POST['sex'] == 'Pria') {
            echo 'checked="checked"';
        }
        ?>
    />Pria

    <input type="radio" name="sex" value="Wanita"

        <?php
        if ($_POST['sex'] == 'Wanita') {
            echo 'checked="checked"';
        }
        ?>
        />Wanita <br />

        <input type="submit" value="ok" />

    </form>

    <!-- Code Post PHP -->
    <?php
    if (isset($_POST['sex'])) {
        echo $_POST['sex'];
    }
    ?>
    
</body>
</html>