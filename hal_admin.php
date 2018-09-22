<?php
    session_start();
    if($_SESSION['akses'] == "user") {
        ?>
        <script type="text/javascript">
            alert("Hak akses ditolak ..!!");
            location = "index.php?content=user";
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
            <p> Welcome, <?php echo $_SESSION['username']; ?> on Admin Dashboard..</p>
            <center><a href="login.php?exit=logout"><button>Logout</button></a></center>
        </div>