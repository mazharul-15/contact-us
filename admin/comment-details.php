<?php
    // Including top.php
    include_once("top.php");

    // getting details of comment
    if(isset($_GET['id'])) {
        $data = $admin->contactUsDetails($_GET['id']);
        prx($data);
    }
?>

    <!-- Content Area Start -->
        
        <div class="content-area">
            
        </div>


<?php
    // Including top.php
    include_once("footer.php");
?>