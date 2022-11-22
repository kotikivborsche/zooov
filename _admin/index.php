<?php
    $title = "Админка";
    include 'includes/header.php'; 
?>

<?php
if(!is_auth()){
    // echo "<script>http://localhost/zooov/_admin/auth.php';</script>";
    header("Location: auth.php");
    die;
}
?>

<section class="admin-panel d-flex">
    
<?php include 'includes/sidebar.php';?>

    <div class="admin-content">

<?php 
    include 'includes/modal_update.php';
    include 'includes/faq_modal_update.php';
    include 'includes/main_modal_update.php';
    
    if(isset($_GET['item']) && $_GET['item'] =='product'){
    include 'includes/product_table.php';
    }
    if(isset($_GET['item']) && $_GET['item'] =='faq'){
        include 'includes/faq_table.php';
    }
    if(isset($_GET['item']) && $_GET['item'] =='order'){
        include 'includes/ord_table.php';  
    }
    if(isset($_GET['item']) && $_GET['item'] =='main'){
        include 'includes/main_table.php';  
    }

    ?>  

    </div>

</section>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script_auth.js"></script>

</body>
</html>