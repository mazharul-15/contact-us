<?php
    // Including top.php
    include_once("top.php");

    // admin data fetching;
    $data = $admin->adminInfo('');
    // prx($data);
?>

    <!-- HTML CODE -->
    <!-- Content Area Start -->
        <!-- Admin Details -->
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
                        foreach($data as $list) { ?>
                    <tr>
                        <td id = "no."><?php echo $no++; ?></td>
                        <td id = "id-no"><?php echo $list['id'];?></td>
                        <td id = "name"><?php echo $list['name'];?></td>
                        <td id = "email"><?php echo $list['email'];?></td>
                        <td>
                            <a href="?admin_id=<?php echo $list['id'];?>">Delete</a>
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