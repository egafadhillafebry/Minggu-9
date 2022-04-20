<?php
    session_start();
?>
<html>
    <body>
        <?php
            //menghapus semua variabel session
            session_unset();

            //menghapus session
            session_destroy();

            echo "session telah dihapus";
        ?>
    </body>
</html>