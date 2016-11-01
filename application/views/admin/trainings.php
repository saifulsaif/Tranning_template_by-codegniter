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


<form  action="<?php echo base_url(); ?>super_admin/save_trainings" enctype="multipart/form-data" method="post">

    <header><h2>Add Training</h2>
    </header>
    <fieldset>
      
    
          <dl>
            <dt><label> Training Title </label></dt>
            <dd><input type="text" name="trainings_title"></dd>
        </dl>
        <dl>
            <dt><label> Speaker </label></dt>
            <dd><input type="text" name="trainings_speaker"></dd>
        </dl>
        <dl>
            <dt><label> Training Date </label></dt>
            <dd><input type="text" name="trainings_date"></dd>
        </dl>
        <dl>
            <dt><label> Training Time</label></dt>
            <dd><input type="text" name="trainings_time"></dd>
        </dl>
        <dl>
            <dt><label> Training Price </label></dt>
            <dd><input type="text" name="trainings_price"></dd>
        </dl>
          <dl>
            <dt><label> Image</label></dt>
            <dd><input type="file" name="trainings_photo"></dd>
        </dl>


        <footer>
            <div class="submit_link">

                <input type="submit" value="Add Image" class="alt_btn">
                <input type="reset" value="Reset">
            </div>
        </footer>

    </fieldset>
</form>
<hr /><hr />
<h4 style="color:green;">
    <?php
    $img_deleted = $this->session->userdata('message');

    if (isset($cat_deleted)) {
        echo $imgt_deleted;
        $this->session->unset_userdata('message');
    }
    ?>
</h4>
<h2>Services view</h2>
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
        <tr>
            <th scope="col" class="rounded"> Title</th>
            <th scope="col" class="rounded">Image</th>
            <th scope="col" class="rounded">Speaker</th>
            <th scope="col" class="rounded">Date</th>
            <th scope="col" class="rounded">Time</th>
            <th scope="col" class="rounded">Price</th>
            <th scope="col" class="rounded">Delete</th>
            <th scope="col" class="rounded-q4">Edit</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($all_trainings as $gallery_image) { ?>
            <tr> 
                <td><?php echo $gallery_image->trainings_title ?></td>
               
                <td><img height="200" width="200px" src="<?php echo $gallery_image->trainings_photo ?>"/></td>                      
                <td><?php echo $gallery_image->trainings_speaker ?></td>
                <td><?php echo $gallery_image->trainings_date ?></td>
                <td><?php echo $gallery_image->trainings_time ?></td>
                <td><?php echo $gallery_image->trainings_price ?></td>
               <td><a href="<?php echo base_url(); ?>super_admin/delete_trainings/<?php echo $gallery_image->id ?>" class="ask" >
                <img src="<?php echo base_url(); ?>images/trash.png" alt="" title="" border="0" /></a>   
                <td> <a href="<?php echo base_url(); ?>super_admin/edit_trainings/<?php echo $gallery_image->id; ?>"><input type="image" src="<?php echo base_url() ?>images/user_edit.png" title="Edit"></a>

                </td> 
            </tr>
        <?php } ?>
    </tbody>
</table>







