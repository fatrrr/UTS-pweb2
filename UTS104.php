<html>
<body>
    <?php
        $unameTr = "admin";
        $uname = "";
        $passTr = "admin";
        $pass = "";
        if(!isset($_POST['submit'])){
    ?>
    <form method="POST">
        <label>Username :</label><br>
        <input type="text" name="uname"><br>
        <label>Password :</label><br>
        <input type="password" name="pass"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        }
        if(isset($_POST['submit'])){
            if(isset($_POST['uname'])){
                $uname = $_POST['uname'];
            }
            if(isset($_POST['pass'])){
                $pass = $_POST['pass'];
            }
            if($uname == $unameTr && $pass == $passTr){
                echo "<h1> Selamat Datang Admin";
            } else echo "<h1> Username dan Password yang anda masukkan salah!!!";
        }
    ?>
</body>
</html>