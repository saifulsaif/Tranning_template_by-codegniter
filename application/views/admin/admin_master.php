<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IN ADMIN PANEL | Powered by INDEZINER</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>style_login.css" />
<script type="text/javascript" src="<clockp.js"></script>
<script type="text/javascript" src="clockh_url(); ?>.js"></script> 
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="ddaccordion.js"></script>
<script type="text/javascript">
ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='images/plus.gif' class='statusicon' />", "<img src='images/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})
</script>

<script type="text/javascript" src="jconfirmaction.jquery.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});
	
</script>

<script language="javascript" type="text/javascript" src="niceforms.js"></script>


</head>
<body>
<div id="main_container">

	<div class="header">
    <div class="logo"><a href="#"><img src="images1/logo.gif" alt="" title="" border="0" /></a></div>
    
    </div>
    
    <div class="main_content">
    
                  
                    
                    
                    
                    
    <div class="center_content">  
    
    
    
    <div class="left_content">
    
    		
    
            <div class="sidebarmenu">
            
                <a class="menuitem submenuheader" href="">Photos</a>
                <div class="submenu">
                    <ul>
                     <li><a href="<?php echo base_url(); ?>super_admin/slide">Main Slide Images</a></li>
                     <li><a href="<?php echo base_url(); ?>super_admin/logo"> Logo</a></li>
                    
      
                 
                    </ul>
                </div>
                
                <a class="menuitem submenuheader" href="">Portfolio Pages</a>
              <div class="submenu">
                    <ul>
                      <li><a href="<?php echo base_url(); ?>super_admin/main_portfolio">Main Portfolio Image</a></li>
      
                 
                    </ul>
                </div>
                
                <a class="menuitem submenuheader" href="">Meet Our Coaches </a>
              <div class="submenu">
                    <ul>
                         <li><a href="<?php echo base_url(); ?>super_admin/coaches">Meet Our Team</a></li>
      
                 
                    </ul>
                </div>
                <a class="menuitem submenuheader" href="">About Pages</a>
              <div class="submenu">
                    <ul>
                     <li><a href="<?php echo base_url(); ?>super_admin/about">About Information</a></li>
      
                 
                    </ul>
                </div>
                
                 <a class="menuitem submenuheader" href="">Training Pages</a>
              <div class="submenu">
                    <ul>
                     <li><a href="<?php echo base_url(); ?>super_admin/trainings">Training Information</a></li>
      
                 
                    </ul>
                </div>

                
                
                <a class="menuitem submenuheader" href="<?php echo base_url();?>super_admin/header">Index</a>
                <div class="submenu">
                    <ul>
                    <li><a href="<?php echo base_url();?>super_admin/header">header Information</a></li>
                   
                    <li><a href="<?php echo base_url();?>super_admin/service">Service Information</a></li>
                    <li><a href="<?php echo base_url();?>super_admin/company_content">Company_content</a></li>
                    <li><a href="<?php echo base_url();?>super_admin/we_do_list">We_do_list</a></li>
                    <li><a href="<?php echo base_url();?>super_admin/content_about">Content_about</a></li>
                    <li><a href="<?php echo base_url();?>super_admin/work_area">Work_area</a></li>
                    <li><a href="<?php echo base_url();?>super_admin/portfolio">Portfolio</a></li>
                    <li><a href="<?php echo base_url();?>super_admin/feature">Feature</a></li>
                     <li><a href="<?php echo base_url();?>super_admin/purchase">Purchase</a></li>
                     <li><a href="<?php echo base_url();?>super_admin/slide2">Slide2</a></li>
                     <li><a href="<?php echo base_url();?>super_admin/partner">Partner Logo</a></li>
                    </ul>
                </div>
                <a class="menuitem" href="">User Reference</a>
                <a class="menuitem" href="">Blue button</a>
                
                <a class="menuitem_green" href="">Green button</a>
                
                <a class="menuitem_red" href="">Red button</a>
                    
            </div>
            
            
         
       
           
           
    
    </div>  
    
     <div class="right_content">
         
       <?php echo $maincontent ?>
         
     
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear">
       
    </div>
    </div> <!--end of main content-->
	
    
    <div class="footer">
        
       
    </div>

</div>	
    <h1> This is a complate project</h1>
</body>
</html>