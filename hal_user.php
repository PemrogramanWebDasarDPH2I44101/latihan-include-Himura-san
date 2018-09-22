<?php
    session_start();
    if($_SESSION['akses'] == "admin") {
        ?>
        <script type="text/javascript">
            alert("Hak akses ditolak ..!!");
            location = "index.php?content=admin";
        </script>
        <?php
    }
    if($_SESSION['akses'] == "") {
        ?>
        <script type="text/javascript">
            alert("Anda harus login terdahulu..");
            location = "index.php";
        </script>
        <?php
    }
?>
            <p> Welcome, <?php echo $_SESSION['username']; ?> on User Dashboard..</p>
            <center><a href="login.php?exit=logout"><button>Logout</button></a></center>
        </div>