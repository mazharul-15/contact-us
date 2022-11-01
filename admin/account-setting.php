<?php 
    //including top.php
    include_once("top.php");
    
    // Admin Id
    if(isset($_GET['admin_id'])) {
        $admin_id = $_GET['admin_id'];

        $data = $admin->adminInfo($admin_id);
        // prx($data);
    }
    
    // Admin infor update
    if(isset($_POST['submit'])) {
        // prx($_POST);
        $message = $admin->adminInfoUpdate($_POST);
        if($message == 'YES') {
            header("location: admin-panel.php");
            die();
        }
    }
?>

    <!-- Content Area Start -->
        <div class="content-area">
            <form action="" method = "POST">

                <!-- Admin Id -->
                <input type="hidden" name="id" value = "<?php echo $data[0]['id']; ?>">

                <!-- Name -->
                <div class="input-field">
                    <label for="name">Change Name:</label>
                    <input type="text" name="name" class = "input-all" id="change-name" value = "<?php echo $data[0]['name']; ?>">
                </div>

                <!-- Email -->
                <div class="input-field">
                    <label for="email">Change Email:</label>
                    <input type="email" name="email" class = "input-all" id="change-email" value = "<?php echo $data[0]['email']; ?>">
                </div>

                <!-- Password -->
                <div class="input-field">
                    <label for="password">Change Password:</label>
                    <input type="password" name="password" class = "input-all" id="change-password" placeholder = "enter new password">
                </div>

                <!-- Submit -->
                <div class="input-field">
                    <input type="submit" name = "submit" class = "input-all" value="Save Changes">
                </div>
            </form>
        </div>
    <!-- Content Area End -->

<?php
    //including footer.php
    include_once("footer.php");

?>