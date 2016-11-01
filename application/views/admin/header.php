
<?php
$message = $this->session->userdata('message');
if ($message) {
    ?>
    <h4 class="valid_box"><?php echo $message; ?></h4>
    <?php
    $this->session->unset_userdata('message');
} else {
    
}
?>
<?php
$error_message = $this->session->userdata('error_message');
if ($error_message) {
    ?>
    <h4 class="error_box"><?php echo $error_message; ?></h4>
    <?php
    $this->session->unset_userdata('error_message');
} else {
    
}
?>


<br />


<form  action="<?php echo base_url(); ?>super_admin/save_header" enctype="multipart/form-data" method="post">
 
    <header><h2>Add Header</h2>
    </header>
    <fieldset>
        <dl>
            <dt><label>Contact Number</label></dt>
            <dd>   <input type="text" name="number"> 
            </dd>
        </dl>
         <dl>
            <dt><label>Contact Address</label></dt>
            <dd>   <input type="text" name="address"> 
            </dd>
        </dl>
        


        <footer>
            <div class="submit_link">

                <input type="submit" value="Submit" class="alt_btn">
                <input type="reset" value="Reset">
            </div>
        </footer>

    </fieldset>
</form>
<hr /><hr />

<h2>Header View</h2>
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
        <tr>
            <th scope="col" class="rounded">Number</th>
            <th scope="col" class="rounded">Address</th>
             
            <th scope="col" class="rounded">Delete</th>
            <th scope="col" class="rounded-q4">Edit</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($all_header as $v_member) { ?>
            <tr> 
                <td><?php echo $v_member->number ?></td>
                <td><?php echo $v_member->address ?></td>
                <td><a href="<?php echo base_url(); ?>super_admin/delete_header/<?php echo $v_member->header_id ?>" class="ask" >
                <img src="<?php echo base_url(); ?>images1/trash.png" alt="" title="" border="0" /></a>   
                <td> <a href="<?php echo base_url(); ?>super_admin/edit_header/<?php echo $v_member->header_id; ?>"><input type="image" src="<?php echo base_url() ?>images1/user_edit.png" title="Edit"></a>

                </td>
            </tr> 
        <?php } ?>
    </tbody>
</table>






