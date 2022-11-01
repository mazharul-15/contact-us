<?php
    //Including top.php
    include_once("top.php");

    // Geting contact-us data from DB
    $data = $admin->contactUsDetails('');
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
                        <th id="mobile">Mobile</th>
                        <th id="comment">Comment</th>
                        <th id="action">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        foreach($data as $list) {
                    ?>
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $list['id']; ?></td>
                        <td><?php echo $list['name']; ?></td>
                        <td><?php echo $list['email']; ?></td>
                        <td><?php echo $list['mobile']; ?></td>
                        <td><a href="comment-details.php?id=<?php echo $list['id'];?>">Details</a></td>
                        <td>
                            <a href="?action=delete&contact_id=<?php echo $list['id'];?>" class = "user-delete">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    <!-- Content Area End -->


<?php
    // Including footer.php
    include_once("footer.php");
?>