<html>
<style type="text/css">
    td {
        border : 1px solid black;
    }
</style>
<body>
    <?php
        $ukuran = "";
    ?>
    <form method="POST">
        <label>Pilih Ukuran :</label><br>
        <select name="ukuran">
            <option value="kecil"
            <?php
            if(isset($_POST['pilih'])){
                if($_POST['ukuran'] == "kecil"){
                    echo " selected='selected'";
                }
            }
            ?>
            >kecil</option>
            <option value="sedang"
            <?php
            if(isset($_POST['pilih'])){
                if($_POST['ukuran'] == "sedang"){
                    echo " selected='selected'";
                }
            }
            ?>
            >sedang</option>
            <option value="besar"
            <?php
            if(isset($_POST['pilih'])){
                if($_POST['ukuran'] == "besar"){
                    echo ' selected="selected"';
                }
            }
            ?>
            >besar</option>
        </select>
        <input type="submit" name="pilih" value="Pilih">
    </form>
    <?php
        if(isset($_POST['pilih'])){
            if(isset($_POST['ukuran'])){
                $ukuran = $_POST['ukuran'];
            }
            echo "<table>";
            switch($ukuran){
                case $ukuran == "kecil":
                    echo "<td width=50 height=50>";
                    break;
                case $ukuran == "sedang":
                    echo "<td width=100 height=100>";
                    break;
                case $ukuran == "besar":
                    echo "<td width=150 height=150>";
                    break;
            }
            echo "</table>";
        }
    ?>
</body>
</html>