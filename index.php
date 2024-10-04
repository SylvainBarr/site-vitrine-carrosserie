<?php
require_once('view/HeaderView.php');

if(!empty($_GET['page'])){
    if($_GET['page'] == 'garage'){
        require_once('view/GarageView.php');
    }elseif($_GET['page'] == 'prestations'){
        require_once('view/PrestationsView.php');
    }elseif($_GET['page'] == 'contact'){
        require_once('view/ContactView.php');
    }elseif($_GET['page'] == 'mentions-legales'){
        require_once('view/MentionsView.php');
    }else{
        require_once('view/HomeView.php');
    }
}else{
    require_once('view/HomeView.php');
}

require_once('view/FooterView.php');

?>


