<?php
include "admin-header.php";
include "check_login.php";
?>
<div class="dashboard-wrapper">
    <div style="font-weight:bold; text-align: center;" class="admin-logged">You are logged in as Admin <a href="logout.php">Log Out</a></div>
    <div class="admin-content">
        <a href="add_user.php" class="add_user_btn">Add Guest User</a>
        
        <p class="message-box"><?php if(isset($_GET['msg'])){echo $_GET['msg'];} ?></p>
        <div class="user-wrapper">
            <a href="javascript:void(0);" class="norm_user_btn active">Normal Users</a>
            <a href="javascript:void(0);" class="guest_user_btn ">Guest Users</a>
        </div>
        
        <div class="guest-user" style="display: none;">
            <h3 style="font-weight:bold; text-align: center;">Guest Users</h3>
            <table border="0" style="margin: 0 auto;" cellpadding="0" cellspacing="0">
                <tr>
                    <th>SN</th>
                    <th>User</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Role</th>
                    <th>IP-Address</th>
                    <th>Action</th>
                </tr>
                <?php
                $i=1;
                $res = mysql_query("select * from tbl_guest_user");
                while($data = mysql_fetch_assoc($res)){
                    ?>
                    <tr>
                        <td><?php echo $i++?></td>
                        <td><?php echo $data['username']?></td>
                        <td><?php echo $data['email']?></td>
                        <td><?php if($data['status']==0){echo "Inactive";}else{ echo "Active";}?></td>
                        <td><?php echo $data['role']; ?></td>
                        <td><?php echo $data['ip_address']; ?></td>
                        <td><?php if($data['status']==0){ ?>
                            <form name="activate" action="activate_guest_user.php" method="get">
                                <select name="time_duration">
                                    <option value="1">24 hours</option>
                                    <option value="3">3 days</option>
                                    <option value="7">7 days</option>
                                    <option value="30">1 month</option>
                                    <option value="90">3 months</option>
                                    <option value="180">6 months</option>
                                    <option value="365">1 year</option>
                            <input type="hidden" name="id" value="<?php echo $data['id'];?>" />
                            <input type="hidden" name="status" value="0" />
                            <input type="hidden" name="email" value="<?php echo $data['email'];?>" />
                        </select>
                        <input type="submit" name="activate_submit" value="Activate" />
                    </form>                
                    <?php }else{ ?><a href="activate_guest_user.php?status=1&id=<?php echo $data['id']?>&email=<?php echo $data['email'];?>">Deactivate</a><?php }?>
                    <a href="delete_guest_user.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>


<div class="normal-user">
    <h3 style="font-weight:bold; text-align: center;">Registered Normal Users</h3>
    <table border="0" style="margin: 0 auto;" cellpadding="0" cellspacing="0">
        <tr>
            <th>SN</th>
            <th>User</th>
            <th>Email</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php
        $i=1;
        $res = mysql_query("select * from tbl_user_detail");
        while($data = mysql_fetch_assoc($res)){
            ?>
            <tr>
                <td><?php echo $i++?></td>
                <td><?php echo $data['username']?></td>
                <td><?php echo $data['email']?></td>
                <td><?php if($data['status']==0){echo "Inactive";}else{ echo "Active";}?></td>
                <td><?php if($data['status']==0){ ?>
                    <form name="activate" action="activate_user.php" method="get">
                        <select name="time_duration">
                            <option value="1">24 hours</option>
                            <option value="3">3 days</option>
                            <option value="7">7 days</option>
                            <option value="30">1 month</option>
                            <option value="90">3 months</option>
                            <option value="180">6 months</option>
                            <option value="365">1 year</option>
                            <input type="hidden" name="id" value="<?php echo $data['id'];?>" />
                            <input type="hidden" name="status" value="0" />
                            <input type="hidden" name="email" value="<?php echo $data['email'];?>" />
                        </select>
                        <input type="submit" name="activate_submit" value="Activate" />
                    </form>                
                    <?php }else{ ?><a href="activate_user.php?status=1&id=<?php echo $data['id']?>&email=<?php echo $data['email'];?>">Deactivate</a><?php }?>
                    <a href="delete_user.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
</div>
</div>
</body>