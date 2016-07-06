<?php
    include_once 'site/model/m_database.php';
    include_once 'site/view/pages/v_head.php';
    include_once 'site/view/pages/v_nav.php';
    include_once 'site/view/pages/v_content.php';
    if(!isset($_GET["cn"])){
        include_once 'site/controller/c_sach.php';
    }
    else {
        $cn=$_GET["cn"];
        switch($cn)
        {
            case "sach":
                include_once 'site/controller/c_sach.php';
                break;
        } 
    }
    include_once 'site/view/pages/v_footer.php';
?>