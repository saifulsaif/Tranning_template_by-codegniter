
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

<form  action="<?php echo base_url(); ?>super_admin/update_header" enctype="multipart/form-data" method="post">

    <h3>Edit Header Message</h3>
    <fieldset>
        <dl>
            <dt><label>Header Title </label></dt>
            <dd>
                <input type="hidden" name="header_id" value="<?php echo $header_info->header_id; ?>">
                <input type="text" name="number" value="<?php echo $header_info->number; ?>">
            </dd>
        </dl>
         <dl>
            <dt><label>Address</label></dt>
            <dd>
                <input type="text" name="address" value="<?php echo $header_info->address; ?>">
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