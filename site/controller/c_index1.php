<?php
include_once 'site/model/m_database.php';
include_once 'site/view/pages/v_header.php';
    $cn = isset($_GET['cn'])?$_GET['cn']:'home';
    switch($cn)
    {
        case 'home': 
            include_once 'site/controller/c_home.php';
            break;
        case 'giohang': 
            include_once 'site/controller/c_gio_hang.php';
            break;
    }
include_once 'site/view/pages/v_footer1.php';