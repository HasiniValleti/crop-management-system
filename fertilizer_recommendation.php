<!DOCTYPE html>
<html>
<?php include ('header.php');  ?>

  <body class="bg-white" id="top">
  
<?php include ('nav.php');  ?>

 
  <section class="section section-shaped section-lg">
    <div class="shape shape-style-1 shape-primary">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
<!-- ======================================================================================================================================== -->

<div class="container-fluid ">
    
    	 <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <span class="badge badge-danger badge-pill mb-3">Recommendation</span>
          </div>
        </div>
		
          <div class="row row-content">
            <div class="col-md-12 mb-3">

				<div class="card text-white bg-gradient-success mb-3">
				<form role="form" action="#" method="post" >  
				  <div class="card-header">
				  <span class=" text-info display-4" > Fertilizer Recommendation  </span>	
						<span class="pull-right">
							<button type="submit" value="Recommend" name="Fert_Recommend" class="btn btn-warning btn-submit">SUBMIT</button>
						</span>		
				  
				  </div>

				  <div class="card-body text-dark">
					 
				<table class="table table-striped table-hover table-bordered bg-gradient-white text-center display" id="myTable">

    <thead>
					<tr class="font-weight-bold text-default">
					<th><center> Nitrogen</center></th>
					<th><center>Phosporous</center></th>
					<th><center>Potassium</center></th>
					<th><center>Temparature</center></th>
					<th><center>Humidity</center></th>
					<th><center>Soil Moisture</center></th>
					<th><center>Soil Type</center></th>
					<th><center>Crop</center></th>
				    <th><center>Fertilizer Type</center></th>
					
        </tr>
    </thead>
 <tbody>
                                 <tr class="text-center">
                                    <td>
                                    	<div class="form-group">
											<input type = 'number' name = 'n' placeholder="Nitrogen Eg:37" required class="form-control">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name = 'p' placeholder="Phosphorus Eg:0" required class="form-control">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name = 'k' placeholder="Pottasium Eg:0" required class="form-control">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name = 't'  placeholder="Temperature Eg:26" required class="form-control">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name = 'h'  placeholder="Humidity Eg:52" required class="form-control">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name='soilMoisture' placeholder="Soil Moisture Eg:38" required class="form-control">
											
										</div>
                                    </td>
									
									<td>
										<div class="form-group ">
													<select name="soil" id="soil_select" class="form-control">
													<option  value="">Select Soil Type</option>
													<option  value="Sandy">Sandy</option>
													<option  value="Loamy">Loamy</option>
													<option  value="Black">Black</option>
													<option  value="Red">Red</option>
													<option  value="Clayey">Clayey</option>											
													</select>
										</div>
									</td>
									
									<td>
										<div class="form-group ">
									<select name="crop" id="crop_select" class="form-control">
													<option  value="">Select Crop</option>
													<option  value="Maize">Maize</option>
										            <option value="Cauliflower">Cauliflower</option>
										             <option  value="Maize">Rice</option>
													<option  value="Sugarcane">Sugarcane</option>
													<option  value="Cotton">Cotton</option>
													<option  value="Tobacco">Tobacco</option>
													<option  value="Paddy">Paddy</option>	
													<option  value="Barley">Barley</option>	
													<option  value="Wheat">Wheat</option>	
													<option  value="Millets">Millets</option>	
													<option  value="Oil seeds">Oil seeds</option>	
													<option  value="Pulses">Pulses</option>	
													<option  value="Ground Nuts">Ground Nuts</option>													
													</select>
										</div>

									</td>
									 <td>
                                           <div class="form-group">
                                         <select name="fertilizer_type" class="form-control">
                                   <option value="chemical">Chemical</option>
                                    <option value="organic">Organic</option>
                                     </select>
                                      </div>
                                    </td>
                                </tr>
                            </tbody>
							
					
	</table>
	</div>
	</form>

</div>



<div class="card text-white bg-gradient-success mb-3">
				  <div class="card-header">
				  <span class=" text-success display-4" > Result  </span>					
				  </div>

					<h4>
					<?php 
					if(isset($_POST['Fert_Recommend'])){
					$n=trim($_POST['n']);
					$p=trim($_POST['p']);
					$k=trim($_POST['k']);
					$t=trim($_POST['t']);
					$h=trim($_POST['h']);
					$sm=trim($_POST['soilMoisture']);
					$soil=trim($_POST['soil']);
					$crop=trim($_POST['crop']);
					$type = trim($_POST['fertilizer_type']);
						echo "<h4>Soil Analysis</h4>";
echo "<h4>Recommended Fertilizer</h4>";

if($n < 50){

    if($type == "organic"){
        echo "<p>Recommended Organic Fertilizer: Compost</p>";
    } else {
        echo "<p>Recommended Fertilizer: Urea</p>";
    }

}

elseif($p < 50){

    if($type == "organic"){
        echo "<p>Recommended Organic Fertilizer: Bone Meal</p>";
    } else {
        echo "<p>Recommended Fertilizer: DAP</p>";
    }

}

elseif($k < 50){

    if($type == "organic"){
        echo "<p>Recommended Organic Fertilizer: Wood Ash</p>";
    } else {
        echo "<p>Recommended Fertilizer: MOP</p>";
    }

}



/* 3️⃣ Fertilizer Quantity Suggestion */

echo "<h4>Suggested Fertilizer Quantity</h4>";

if($n < 50){
    echo "<p>Apply 40 kg Urea per acre</p>";
}

if($p < 50){
    echo "<p>Apply 35 kg DAP per acre</p>";
}

if($k < 50){
    echo "<p>Apply 30 kg MOP per acre</p>";
}


/* 4️⃣ Soil Health Advice */

echo "<h4>Soil Health Advice</h4>";

if($n < 50){
    echo "<p>Add compost or nitrogen fertilizers.</p>";
}

if($p < 50){
    echo "<p>Use phosphate fertilizers for better root growth.</p>";
}

if($k < 50){
    echo "<p>Potassium fertilizers improve crop resistance.</p>";
}




/* 6️⃣ Balanced Soil Detection */

if($n >= 50 && $p >= 50 && $k >= 50){
    echo "<h4>Soil Status</h4>";
    echo "<p>Soil nutrients are balanced. No additional fertilizer required.</p>";
}


/* 7️⃣ Crop Suitability Advice */

echo "<h4>Crop Suitability Advice</h4>";

if($soil == "Sandy"){
    echo "<p>Sandy soil is suitable for crops like groundnut and watermelon.</p>";
}

if($soil == "Loamy"){
    echo "<p>Loamy soil supports crops like wheat, rice, and maize.</p>";
}

if($soil == "Clay"){
    echo "<p>Clay soil retains water and is suitable for paddy cultivation.</p>";
}


/* 8️⃣ Irrigation Suggestion */

echo "<h4>Irrigation Suggestion</h4>";

if($sm < 30){
    echo "<p>Soil moisture is low. Increase irrigation.</p>";
}

if($sm >= 30 && $sm <= 60){
    echo "<p>Soil moisture is adequate. Maintain regular irrigation.</p>";
}

if($sm > 60){
    echo "<p>Soil moisture is high. Avoid overwatering.</p>";
}
		//	echo "<h5>Recommended Fertilizer is :</h5>";


					$Jsonn=json_encode($n);
					$Jsonp=json_encode($p);
					$Jsonk=json_encode($k);
					$Jsont=json_encode($t);
					$Jsonh=json_encode($h);
					$Jsonsm=json_encode($sm);
					$Jsonsoil=json_encode($soil);
					$Jsoncrop=json_encode($crop);

					$command = escapeshellcmd("python ML/fertilizer_recommendation/fertilizer_recommendation.py $Jsonn $Jsonp $Jsonk $Jsont $Jsonh $Jsonsm $Jsonsoil $Jsoncrop ");
                    $output = passthru($command);
					echo $output;					
					
                    ?>
					</h4>
            </div>
 
	
	
            </div>
          </div>  
       </div>
		 
</section>

    <?php require("footer.php");?>

</body>
</html>















