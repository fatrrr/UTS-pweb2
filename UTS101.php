<html>
<body>
    <?php
        $jml = 0;
        if(!isset($_POST['submit'])){
    ?>
    <form method="POST">
        <label>Jumlah List :</label><br>
        <input type="text" name="jml"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        }
        if(isset($_POST['submit'])){
            if(isset($_POST['jml'])){
                $jml = $_POST['jml'];
            }
            echo "<h2> Jumlah List adalah $jml : <br></h2>";
            echo "<ul>";
            for($i = 1; $i <= $jml; $i++){
                echo "<li> $i </li>";
            }
            echo "</ul>";
        }
    ?>
</body>
</html>