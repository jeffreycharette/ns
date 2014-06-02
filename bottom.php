</div>
<div class="footer">
	<div class="container">
		<div class="row">
			<div style="margin-top: 21px;" class="col-xs-4">
				<p>&copy;<script>document.write(new Date().getFullYear());</script> NATURAL SEA. ALL RIGHTS RESERVED</p>
				<ul class="list-inline">
					<li class="first"><a href="/">HOME</a></li>
					<li><a href="terms.php">TERMS OF USE</a></li>
					<li><a href="privacy.php">PRIVACY</a></li>
				</ul>
			</div><!-- /.col-lg-4 -->
			<div class="col-xs-4">
				<img style="margin-top: 3px;" src="img/Footer_center.png" width="218" height="105" alt="Footer Center">
			</div><!-- /.col-lg-4 -->
			<div class="col-xs-4">
			</div><!-- /.col-lg-4 -->
		</div>
	</div>
</div>
<div class="modal" id="contact">
  <div class="modal-dialog">
    <div class="modal-content">
			<form id="emailForm" method="POST" action="">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Drop Us a Line!</h4>
      </div>
      <div class="modal-body">
		   <!--Begin Generic fields-->
		   <div class="ContactForm">
				<?php
				if(isset($_POST["emailForm"])) {
					include_once('contact_pt1.php');
					echo email_action("contact@naturalsea.com", "Natural Sea - web request", "Address1,Address2,City,State,ProductName,UPC,BestByDateLot,SignUp");
				}
				?>
	            <div class="FLTLEFT">
	               <p><span id="ctl00_WebPartManager_g_15f6332c_7097_4cde_80ac_d4c4e5c399c5_ctl00_lblFirstName">First Name</span><font color="red"> *</font></p>
	            </div>
	            <div class="FLTRIGHT">
	               <input name="FirstName" type="text" maxlength="50" id="FirstName" title="Enter your First Name" class="textbox"><span id="ctl00_WebPartManager_g_15f6332c_7097_4cde_80ac_d4c4e5c399c5_ctl00_rfvFirstName" style="color:Red;display:none;"> *</span>  
	            </div> 
	            <div class="Clear"></div>
	            <div class="FLTLEFT">
	               <p><span id="ctl00_WebPartManager_g_15f6332c_7097_4cde_80ac_d4c4e5c399c5_ctl00_lblLastName">Last Name</span><font color="red"> *</font></p>
	            </div>
	            <div class="FLTRIGHT">
	               <input name="LastName" type="text" maxlength="50" id="LastName" title="Enter your Last Name" class="textbox"><span id="ctl00_WebPartManager_g_15f6332c_7097_4cde_80ac_d4c4e5c399c5_ctl00_rfvLastName" style="color:Red;display:none;"> *</span>  
	            </div> 
	            <div class="Clear"></div>
	            <div class="FLTLEFT">
	               <p><span id="ctl00_WebPartManager_g_15f6332c_7097_4cde_80ac_d4c4e5c399c5_ctl00_lblEmail">Email Address</span><font color="red">*</font></p>
	            </div>
	            <div class="FLTRIGHT">
	              <input name="email" type="text" maxlength="100" id="Email" title="Enter your Email Address" class="textbox"><span id="ctl00_WebPartManager_g_15f6332c_7097_4cde_80ac_d4c4e5c399c5_ctl00_rfvEmail" style="color:Red;display:none;"> *</span><span id="ctl00_WebPartManager_g_15f6332c_7097_4cde_80ac_d4c4e5c399c5_ctl00_rxvEmail" style="color:Red;display:none;">Invalid Email</span>
	           </div>
	           <div class="Clear"></div> 
	           <div class="FLTLEFT">
	               <p><span id="ctl00_WebPartManager_g_15f6332c_7097_4cde_80ac_d4c4e5c399c5_ctl00_lblPhone">Phone</span><font color="red"> *</font></p>
	            </div>
	            <div class="FLTRIGHT">
	                <input name="Phone" type="text" maxlength="100" id="Phone" title="Enter your Phone Number" class="textbox"><span id="ctl00_WebPartManager_g_15f6332c_7097_4cde_80ac_d4c4e5c399c5_ctl00_rfvPhone" style="color:Red;display:none;"> *</span>  
	             </div> 
	             <div class="Clear"></div> 
	            <div class="FLTLEFT">
	               <p><span id="ctl00_WebPartManager_g_15f6332c_7097_4cde_80ac_d4c4e5c399c5_ctl00_lblAddress1">Address 1</span></p>
	            </div>
	            <div class="FLTRIGHT">
	                <input name="Address1" type="text" maxlength="200" id="Address1" title="Enter Address1" class="textbox"> 
	            </div> 
	            <div class="Clear"></div>
	            <div class="FLTLEFT">
	               <p><span id="ctl00_WebPartManager_g_15f6332c_7097_4cde_80ac_d4c4e5c399c5_ctl00_lblAddress2">Address 2</span></p>
	            </div>
	            <div class="FLTRIGHT">
	                <input name="Address2" type="text" maxlength="200" id="Address2" title="Enter Address2" class="textbox">
	            </div>
	            <div class="Clear"></div> 
	            <div class="FLTLEFT">
	               <p><span id="ctl00_WebPartManager_g_15f6332c_7097_4cde_80ac_d4c4e5c399c5_ctl00_lblCity">City</span></p>
	            </div>
	            <div class="FLTRIGHT">
	               <input name="City" type="text" maxlength="50" id="City" title="Enter City" class="textbox"> 
	            </div> 
	            <div class="Clear"></div> 
	            <div class="FLTLEFT">
	               <p><span id="ctl00_WebPartManager_g_15f6332c_7097_4cde_80ac_d4c4e5c399c5_ctl00_lblState">State</span></p>
	            </div>
	            <div class="FLTRIGHT">
	               <input name="State" type="text" maxlength="50" id="State" title="Enter State" class="textbox">  
	            </div> 
	            <div class="Clear"></div> 
	            <div class="FLTLEFT">
	               <p><span id="ctl00_WebPartManager_g_15f6332c_7097_4cde_80ac_d4c4e5c399c5_ctl00_lblZip">Zip</span><font color="red"> *</font></p>
	            </div>
	            <div class="FLTRIGHT">
	               <input name="Zip" type="text" maxlength="15" id="Zip" title="Enter Zip Code" class="textbox"><span id="ctl00_WebPartManager_g_15f6332c_7097_4cde_80ac_d4c4e5c399c5_ctl00_rfvZip" style="color:Red;display:none;"> *</span>  
	            </div> 
	            <div class="Clear"></div>
	            <div class="FLTLEFT">
	               <p><span id="ctl00_WebPartManager_g_15f6332c_7097_4cde_80ac_d4c4e5c399c5_ctl00_lblProduct">Product Name</span></p>
	            </div>
	            <div class="FLTRIGHT">
	                <input name="ProductName" type="text" maxlength="200" id="ProductName" title="Enter Product Name" class="textbox"> 
	            </div> 
	            <div class="Clear"></div>
	            <div class="FLTLEFT">
	               <p><span id="ctl00_WebPartManager_g_15f6332c_7097_4cde_80ac_d4c4e5c399c5_ctl00_lblUPC">UPC</span></p>
	            </div>
	            <div class="FLTRIGHT">
	                 <input name="UPC" type="text" maxlength="50" id="UPC" title="Enter UPC" class="textbox"> 
	            </div>
	            <div class="Clear"></div> 
	            <div class="FLTLEFT">
	               <p><span id="ctl00_WebPartManager_g_15f6332c_7097_4cde_80ac_d4c4e5c399c5_ctl00_lblBestByDateLot">Best By Date/Lot</span></p>
	            </div>
	            <div class="FLTRIGHT">
	                 <input name="BestByDateLot" type="text" maxlength="200" id="BestByDateLot" title="Enter Best By Date/Lot" class="textbox">        
	            </div> 
	            <div class="Clear"></div>
	            <div class="FLTFULL">
	               <img id="ctl00_WebPartManager_g_15f6332c_7097_4cde_80ac_d4c4e5c399c5_ctl00_imgBestByDateLot" src="img/UPC.jpg" alt="Best By Date/Lot image" style="border-width:0px;"> 
	            </div>
	            <div class="Clear"></div>            
	            <div class="FLTLEFT">
	             <p><span id="ctl00_WebPartManager_g_15f6332c_7097_4cde_80ac_d4c4e5c399c5_ctl00_lblMessage">Message</span><font color="red"> *</font></p>               
	            </div>
	            <div class="FLTRIGHT">
	                <textarea name="Message" rows="6" cols="20" id="Message" title="Enter your message" class="textbox"></textarea><span id="ctl00_WebPartManager_g_15f6332c_7097_4cde_80ac_d4c4e5c399c5_ctl00_rfvMessage" style="color:Red;display:none;"> *</span>
	            </div>
	            <div class="Clear"></div>
	            <div class="FLTFULL">
	            <br>
	                <p><span class="checkbox"><input id="SignUp" type="checkbox" name="SignUp"><label for="ctl00_WebPartManager_g_15f6332c_7097_4cde_80ac_d4c4e5c399c5_ctl00_cbSignUp"> I would like to receive periodic updates and promotions, such as coupons, newsletters, etc.</label></span></p>
	            </div>
	            <div class="Clear"></div>
	            <div class="FLTFULL">
	                  <p><span id="ctl00_WebPartManager_g_15f6332c_7097_4cde_80ac_d4c4e5c399c5_ctl00_Label1"><i>By checking this box I certify I am at least 13 years of age and accept the terms and conditions for this site.</i></span>  </p>  
	                  <br>             
	            </div>
	            <div class="Clear"></div>

	             <!--End of Misc fields-->
	       </div>
	
		        </div>
		        <div class="modal-footer">
		          <input type="submit" class="btn btn-primary" name="emailForm" value="Submit" />
		        </div>
						</form>
		      </div><!-- /.modal-content -->
		    </div><!-- /.modal-dialog -->
		  </div><!-- /.modal -->

			<!-- Le javascript
			================================================== -->
			<!-- Placed at the end of the document so the page loads faster -->
	<script>
	var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
	g.src=("https:"==location.protocol?"https://ssl":"http://www")+".google-analytics.com/ga.js";
	s.parentNode.insertBefore(g,s)}(document,"script"));
	</script>

	<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!--[if lt IE 9]> <script src="js/jquery.backgroundSize.js"></script> <script type="text/javascript" src="js/script.js"></script><![endif]-->
	<script type="text/javascript">
	$(document).ready(function(){
		$('.carousel').carousel({interval: 4000});
	});
	</script>
	<?php
	if(isset($_POST["emailForm"])) {
	?>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#contact').modal('show');
		('.carousel').carousel({interval: 4000});
	});
	</script>
	<?php
	}
	?>

</body>
</html>