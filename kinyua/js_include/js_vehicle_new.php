<?php include JS_THEME."js_header.php"; ?>
	<div id="site_content">	

	  <div id="content"> 
        
	  
        <div class="content_item">
		<br>
		  <h1>Add a Vehicle</h1> 
          <br><hr><br>
			<div class="main_content">
				<form role="form" method="post" name="PostCompanyVehicle" action="index.php?page=vehicle_new">
                <table style="width:100%;font-size:20px;">
				<tr>
					<td>Vehicle Registration No:</td>
					<td><input type="text" autocomplete="off" name="regno"></td>
				</tr>
				<tr>
					<td>Vehicle Number:</td>
					<td><input type="text" autocomplete="off" name="vehicleno"></td>
				</tr>
				<tr>
					<td>Vehicle Driver:</td>
					<td><input type="text" autocomplete="off" name="driver"></td>
				</tr>
				<tr>
					<td>Number of Seats:</td>
					<td><input type="text" autocomplete="off" name="seats"></td>
				</tr>
				<tr>
				<td></td>
				<td><input type="submit" class="submit_this" name="AddVehicle" value="Add Vehicle"></td></tr>
				</table><br>
                        
			  </center><br></form>
				
			</div>
		<br>
      <h2><center></center></h2>
		<br>  
		</div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content-->  	
  </div><!--close main-->
<?php include JS_THEME."js_footer.php" ?>
    
