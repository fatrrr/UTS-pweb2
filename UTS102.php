<html>
<style type="text/css">
    td {
        border : 1px solid black;
        width : 100;
        height : 100;
    }
    table {
        border : 1px solid black;

    }
</style>
<body>
    <?php
        $row = 0;
        $colomn = 0;
        if(!isset($_POST['submit'])){
    ?>
    <form method="POST">
        <label>Jumlah List Baris :</label><br>
        <input type="text" name="row"><br>
        <label>Jumlah List Kolom :</label><br>
        <input type="text" name="colomn"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        }
        if(isset($_POST['submit'])){
            if(isset($_POST['row'])){
                $row = $_POST['row'];
            } else echo "<b>Anda belum memasukkan jumlah baris.";
            if(isset($_POST['colomn'])){
                $colomn = $_POST['colomn'];
            } else echo "<b>Anda belum memasukkan jumlah kolom.";
            echo "<table>";
            for($i = 1; $i <= $row; $i++){
                echo "<tr>";
                for ($j = 1; $j <= $colomn; $j++){
                    echo "<td>";
                }
            }
            echo "</table>";
        }
    ?>
</body>
</html>