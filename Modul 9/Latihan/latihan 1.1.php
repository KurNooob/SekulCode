<!DOCTYPE html>
<html>

    <head>
        <title>Metode GET</title>
    </head>

<body>

    <!-- Form HTML -->
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="get"> Nama
        <input type="text" name="nama" /> <br/>

        <input type="submit" value="OK" />
    </form>

<!-- Metode Get PHP -->
<?php
if (isset($_GET['nama'])) {
    echo 'Hello, ' . $_GET['nama'];
}

?>

</body>
</html>