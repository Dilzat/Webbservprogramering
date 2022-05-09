<?php
session_start();
session_destroy();
echo
    '<script>
    alert("Du är nu utloggad ");
    window.location.href="LoginSite.html";
    </script>';
?>