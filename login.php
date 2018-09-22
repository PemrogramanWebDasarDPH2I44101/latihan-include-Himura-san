<?php
    session_start();

    $akun = array(
                array("dida", "dida", "user"), 
                array("zahid","zahid", "admin")
            );

    if (@$_SESSION['sukses_admin'])
        header("Location: index.php?content=admin");

    if (@$_SESSION['sukses_user'])
        header("Location: index.php?content=user");
        
    if (@$_GET['exit']) {
        session_destroy();
        header("Location: index.php");
    }
?>
        <form method="post">
            <div class="login">
                <div id="title">
                    <h3>Login</h3>
                </div>
                <div id="data">
                    <form method="POST">
                        <b>Username</b><br><input type="text" name="username" required><br><br>
                        <b>Password</b><br><input type="password" name="password" required><br><br>
                        <input type="submit" value="Login"> <input type="reset" value="Reset">
                    </form>
                </div>
            </div>
        </form>
        <?php
            if(isset($_POST['username'])){
                $username = $_POST['username'];
                $password = $_POST['password'];

                $_SESSION['username'] = $username;

                $cek = 0;
                for ( $i = 0; $i  < count($akun); $i++) { 
                    if ( $akun[$i][0] == $username && $akun[$i][1] == $password ) {
                        if( $akun[$i][2] == "user"){
                            $_SESSION['sukses_user'] = "sukses";
                            $_SESSION['akses'] = $akun[$i][2];
                            header("Location: index.php?content=user");
                        } else {
                            $_SESSION['sukses_admin'] = "sukses";
                            $_SESSION['akses'] = $akun[$i][2];
                            header("Location: index.php?content=admin");
                        }
                        $cek = 1;
                    } 
                    else {
                        $cek = 0;
                    }
                }
                if ($cek == 0) {
                    ?>
                    <script type="text/javascript">
                        alert("Akun tidak ada..!!");
                    </script>
                    <?php
                }
            }
        ?>
        </div>
    </body>
</html>