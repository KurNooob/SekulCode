<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Data Checkbox</title>
    </head>

<body>

    <!-- Form Check Box HTML -->
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        Jenis Kelamin

        <input type="checkbox" name="hobby[]" value="Membaca"
        />Membaca

        <input type="checkbox" name="hobby[]" value="Olahraga"
        />Olahraga

        <input type="checkbox" name="hobby[]" value="Menyanyi"
        />Menyanyi <br />

        <input type="submit" value="ok" />

    </form>

    <!-- Code PHP -->
    <?php
    // Ekstraksi nilai
    if (isset($_POST['hobby'])) {
        //diubah bernilai variabel
        foreach ($_POST['hobby'] as $key => $val) {
            echo $key . ' -> ' .$val . '<br />';
        }
    }
    ?>
    
</body>
</html>