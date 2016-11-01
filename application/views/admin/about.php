<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

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


<form  action="<?php echo base_url(); ?>super_admin/save_about" enctype="multipart/form-data" method="post">

    <header><h2>Add About</h2>
    </header>
    <fieldset>
        
        
        
         <dl>
             <h2>Abuut Details </h2>
           <textarea rows="5" cols="75" name="about_details">
             </textarea>
             
        </dl>
        </dl>
        <dl>
            <dt><label>feature1</label></dt>
            <dd>  <input type="text" name="feature1"></textarea>
            </dd>
        </dl>
          <dl>
            <dt><label>feature2</label></dt>
            <dd>  <input type="text" name="feature2"></textarea>
            </dd>
        </dl>
          <dl>
            <dt><label>feature3</label></dt>
            <dd>  <input type="text" name="feature3"></textarea>
            </dd>
        </dl>
          <dl>
            <dt><label>feature4</label></dt>
            <dd>  <input type="text" name="feature4"></textarea>
            </dd>
        </dl>
          <dl>
            <dt><label>feature5</label></dt>
            <dd>  <input type="text" name="feature5"></textarea>
            </dd>
        </dl>
          <dl>
            <dt><label>feature6</label></dt>
            <dd>  <input type="text" name="feature6"></textarea>
            </dd>
        </dl>
          <dl>
            <dt><label>feature7</label></dt>
            <dd>  <input type="text" name="feature7"></textarea>
            </dd>
        </dl>
          <dl>
            <dt><label> Image</label></dt>
            <dd><input type="file" name="photo"></dd>
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
            <th scope="col" class="rounded">About_details</th>
            <th scope="col" class="rounded">feature1</th>
            <th scope="col" class="rounded">feature2</th>
            <th scope="col" class="rounded">feature3</th>
            <th scope="col" class="rounded">feature4</th>
            <th scope="col" class="rounded">feature5</th>
            <th scope="col" class="rounded">feature6</th>
            <th scope="col" class="rounded">feature7</th>
            <th scope="col" class="rounded">photo</th>
            <th scope="col" class="rounded">Delete</th>
            <th scope="col" class="rounded-q4">Edit</th>
        </tr>
    </thead>
    <tbody>
      <?php 
                foreach($all_about as $service){
                    ?>
            <tr> 
                <td>  <?php
                   echo $service->about_details;
            ?></td>
                <td> <?php echo $service->feature1 ?>  </td>
               <td> <?php echo $service->feature2 ?>  </td>
               <td> <?php echo $service->feature3 ?>  </td>
               <td> <?php echo $service->feature4 ?>  </td>
               <td> <?php echo $service->feature5 ?>  </td>
               <td> <?php echo $service->feature6 ?>  </td>
               <td> <?php echo $service->feature7 ?>  </td>
                <td><img height="100" width="100px" src="<?php echo $service->photo ?>"/></td>  
               <td><a href="<?php echo base_url(); ?>super_admin/delete_about/<?php echo $service->id ?>" class="ask" >
               <img src="<?php echo base_url(); ?>images/trash.png" alt="" title="" border="0" /></a>   
               <td> <a href="<?php echo base_url(); ?>super_admin/edit_about/<?php echo $service->id; ?>"><input type="image" src="<?php echo base_url() ?>images/user_edit.png" title="Edit"></a>

                </td>
            </tr> 
                <?php } ?>
    </tbody>
</table>






