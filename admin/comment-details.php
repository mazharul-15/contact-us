<?php
    // Including top.php
    include_once("top.php");

    // getting details of comment
    if(isset($_GET['id'])) {
        $data = $admin->contactUsDetails($_GET['id']);
        // prx($data);
    }
?>

    <!-- Content Area Start -->
        
        <div class="content-area">
            <form action="" method = "POST">

                <!-- Name -->
                <div class="input-field">
                    <label for="name">Name</label>
                    <input type="text" name="name" class = "input-all" id="name-details" value = "<?php echo $data[0]['name']; ?>" readonly>
                </div>

                <!-- Email -->
                <div class="input-field">
                    <label for="email">Email</label>
                    <input type="email" name="email" class = "input-all" id="email-details" value = "<?php echo $data[0]['email']; ?>" readonly>
                </div>

                <!-- Mobile -->
                <div class="input-field">
                    <label for="mobile">Mobile</label>
                    <input type="text" name="mobile" class = "input-all" id="mobile-details" value = "<?php echo $data[0]['mobile']; ?>" readonly>
                </div>

                <!-- Comment -->
                <div class="input-field">
                    <label for="comment">Comment</label>
                    <textarea name="comment" class = "input-all" id="comment-details" cols="30" rows="10" readonly>
                        <?php echo $data[0]['comment']; ?>
                    </textarea>
                </div>

                <!-- Response -->
                <div class="input-field">
                    <input type="submit" class = "input-all" name = "response" value="Response">
                </div>
            </form>
        </div>


<?php
    // Including top.php
    include_once("footer.php");
?>