<?php
session_start();
?>

<table border = 1px; align="center">
    <tr>
        <th width="45%;">Hobi</th>
        <th width="45%;">Foto</th>
        <th width="10%">Opsi</th>
    </tr>
    <tr>
        <td align="center">
            <?php
                foreach($_SESSION['hobi'] as $pilihan) {
                    echo $pilihan."<br>";
                }
            ?>
        </td>
        <td align="center">
            <img src="<?php echo $_SESSION['foto'];?>" width = "50%;">
        </td>
        <td align="center">
            <a href="pengisian.php">Hapus Data</a>
        </td>
    </tr>
</table>