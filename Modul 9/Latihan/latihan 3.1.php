<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Data Radio Button</title>
    </head>

<body>

    <!-- Form Radio Button HTML -->
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        Jenis Kelamin
        <input type="radio" name="sex" value="Pria" />Pria
        <input type="radio" name="sex" value="Wanita" />Wanita <br />
        <input type="submit" value="ok" />
    </form>

    <!-- Code PHP -->
    <?php
        if (isset($_POST['sex'])) {
        echo $_POST['sex'];
        }
    ?>

</body>

</html>