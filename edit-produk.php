<?php
include './config.php';
$id_mhs = $_GET['id_mhs'];
$query = mysql_query("select * from mahasiswa where id_mhs=$id_mhs");
while ($q = mysql_fetch_array($query)) {
    ?>
    <table>
        <form action="update.php" method="post">
            <tr>
                <td>Nim</td>
                <td><input type="text" value="<?php echo $q['nim_mhs'] ?>" name="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $q['nama_mhs'] ?>"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="jurusan" value="<?php echo $q['jur_mhs'] ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $q['alamat_mhs'] ?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><select name="jk">
                       <?php
                       if($q['jk_mhs']=="Pria"){
                           $pilih_pria="selected";
                       }else if($q['jk_mhs']=="Wanita"){
                           $pilih_wanita="selected";
                       }
                       ?>
                        <option value="Pria" <?php echo $pilih_pria ?>>Pria</option>
                        <option value="Wanita" <?php echo $pilih_wanita ?>>Wanita</option>
                    </select></td>
            </tr>
            <tr>
                <td></td><td><input type="submit" value="update"></td>
            </tr>
        </form>
    </table>
    <?php
}
?>