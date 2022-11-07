<?php
    //Including top.php
    include_once("top.php");

    // Deleting user
    if(isset($_GET['action']) && $_GET['action']=='delete') {
        $admin->userDelete($_GET['id']);
    }
    // User Data from DB Table
    $data = $admin->userDetails();
?>

    <!-- Content Area Start -->
        
        <div class="content-area">
            <table>
                <thead>
                    <tr>
                        <th id = "no.">#</th>
                        <th id = "id-no">ID</th>
                        <th id = "name">Name</th>
                        <th id = "email">Email</th>
                        <th id="action">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        foreach($data as $list) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $list['id']; ?></td>
                        <td><?php echo $list['name']; ?></td>
                        <td><?php echo $list['email']; ?></td>
                        <td>
                            <a href="?action=delete&id=<?php echo $list['id']; ?>">Delete</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    <!-- Content Area End -->


<?php
    // Including footer.php
    include_once("footer.php");
?>