<?php

    session_start();
    session_destroy();
    setcookie(session_name(),'',0,'/');
?>