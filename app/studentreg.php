<?php session_start();
if (isset($_SESSION['email'])) {
?>
<!DOCTYPE html>
<html>
<head>
<title>Student Registration</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- jss -->
  <link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.min.css">
<script src="js/jquery-2.1.3.min.js" type="text/javascript"></script>
<!-- //jss -->
<link href="css/sss.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Signika:400,300,600,700' rel='stylesheet' type='text/css'>
<link href="css/leads.css" rel="stylesheet" type="text/css" media="all" />
 <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="csss/select2/select2.min.css">
      <link rel="stylesheet" href="csss/datapicker/datepicker3.css">
          <link rel="shortcut icon" href="images/graduate.png">
<style>
	
	body{  background: url(images/dawn.jpg)   fixed;
    background-size: cover;
    -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    width: 100%;
    
    overflow: hidden;
    

}
</style>
</head>
<body>
<a href="index.php" ><i class="fa fa-arrow-left fa-2x" style="width:40px;float:left;color:#1d52ba;margin-top:-30px"></i></a>
	<div class="main">
		<h1>Student Registration Platform</h1>

		<div id="wrapper" class="wrapper_w3layouts">
			<center>
			<?php 
        
            if (isset($msgit)) {
              echo "<div class='alert alert-danger'>"."<marquee>".$msgit."</marquee>"."</div>";
              
            }
          ?>
           <?php 
            if (isset($msgis)) {
              echo "<div class='alert alert-danger'>"."<marquee>".$msgis."</marquee>"."</div>";
            }
          ?>
		</center>
			<form action="sreg.php" class="testform" id="testform" method="post" enctype="multipart/form-data">
				<fieldset class="personal-data w3_agileits_field">
					<span class="w3l_personal">
						<label class="agileits_label" for="name">Surname: <i class="required">*</i></label>
						<input type="text" id="name" name="sname" placeholder="Surname" />
					</span>
					<span class="w3l_personal">
						<label class="agileits_label" for="name">Firstname: <i class="required">*</i></label>
						<input type="text" id="name" name="fname" placeholder=" Firstname" />
					</span>
					<span class="w3l_personal">
						<label class="agileits_label" for="name">Other Name: <i class="required">*</i></label>
						<input type="text" id="name" name="lname" placeholder="Lastname" />
					</span>
					
					
				</fieldset>

				<fieldset class="address-data-inputs w3_agileits_field agileinfo_field">
				<span class="w3ls_personal">
						<label class="agileits_label" for="email">Email: <i class="required">*</i></label>
						<input type="email" name="email" id="email" placeholder="example@mail.com" />
					</span>
					 <span class="w3l_personal" >
				 <label class="agileits_label" for="email">Address: <i class="required">*</i></label>
						<input type="text" id="name" name="ad" placeholder="Address" style="" />
					</span>
					   <span class="w3l_personal" >
				 <label class="agileits_label" for="email">State: <i class="required">*</i></label>
						<input type="text" id="name" name="state" placeholder="State" style="" />
					</span>

                              
				<span class="agileits_personal">
						<label class="agileits_label" for="phone">Parents' Contact:</label>
						<input type="tel" name="phone" id="phone" placeholder="000-000-000" />
					</span>
					
				</fieldset>

				<fieldset class="message-details w3_agileits_field">
					 <div class="form-group data-custon-pick" id="data_3">
                                        <label style="color:white">Admission Date</label>
                                        <div class="input-group date">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="text" class="form-control" value="10/11/2013" name="date">
                                        </div>
                                    </div>
				<span class="w3layouts_personal">
				 <label class="custom-file-upload">
            <input type="file" name="fileToUpload" id="files" hidden="hidden">
            <p style="background-color:#1d52ba;color:white" class="btn">Select Profile Picture</p>
          </label>
         
				</fieldset>

					<fieldset>
                                            <div class="chosen-select-single mg-b-20">
                                                <label style="color:white"> Select Class</label>
                                               <select class="select2_demo_3 form-control" style="width:100%" name="part">
														<option>Select</option>
													 <option name="action" value="JSS1">JSS1</option>
             										 <option name="action" value="JSS2">JSS2</option>
              										<option name="action" value="JSS3">JSS3</option>
              										<option name="action" value="SSS1">SSS1</option>
             										 <option name="action" value="SSS2">SSS2</option>
             										 <option name="action" value="SSS3">SSS3</option>
													</select>
                                            </div>
                               <div class="chosen-select-single mg-b-20">
                                                <label style="color:white"> Select Country</label>
                                               <select class="select2_demo_3 form-control" style="width:100%" name="country">
														<option>Select</option>
													<option value="">Select Country</option>
                                                                    <option value="United States">United States</option>
                                                                    <option value="United Kingdom">United Kingdom</option>
                                                                    <option value="Afghanistan">Afghanistan</option>
                                                                    <option value="Aland Islands">Aland Islands</option>
                                                                    <option value="Albania">Albania</option>
                                                                    <option value="Algeria">Algeria</option>
                                                                    <option value="American Samoa">American Samoa</option>
                                                                    <option value="Andorra">Andorra</option>
                                                                    <option value="Angola">Angola</option>
                                                                    <option value="Anguilla">Anguilla</option>
                                                                    <option value="Antarctica">Antarctica</option>
                                                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                                    <option value="Argentina">Argentina</option>
                                                                    <option value="Armenia">Armenia</option>
                                                                    <option value="Aruba">Aruba</option>
                                                                    <option value="Australia">Australia</option>
                                                                    <option value="Austria">Austria</option>
                                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                                    <option value="Bahamas">Bahamas</option>
                                                                    <option value="Bahrain">Bahrain</option>
                                                                    <option value="Bangladesh">Bangladesh</option>
                                                                    <option value="Barbados">Barbados</option>
                                                                    <option value="Belarus">Belarus</option>
                                                                    <option value="Belgium">Belgium</option>
                                                                    <option value="Belize">Belize</option>
                                                                    <option value="Benin">Benin</option>
                                                                    <option value="Bermuda">Bermuda</option>
                                                                    <option value="Bhutan">Bhutan</option>
                                                                    <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                                                                    <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                                    <option value="Botswana">Botswana</option>
                                                                    <option value="Bouvet Island">Bouvet Island</option>
                                                                    <option value="Brazil">Brazil</option>
                                                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                                    <option value="Bulgaria">Bulgaria</option>
                                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                                    <option value="Burundi">Burundi</option>
                                                                    <option value="Cambodia">Cambodia</option>
                                                                    <option value="Cameroon">Cameroon</option>
                                                                    <option value="Canada">Canada</option>
                                                                    <option value="Cape Verde">Cape Verde</option>
                                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                                    <option value="Central African Republic">Central African Republic</option>
                                                                    <option value="Chad">Chad</option>
                                                                    <option value="Chile">Chile</option>
                                                                    <option value="China">China</option>
                                                                    <option value="Christmas Island">Christmas Island</option>
                                                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                                    <option value="Colombia">Colombia</option>
                                                                    <option value="Comoros">Comoros</option>
                                                                    <option value="Congo">Congo</option>
                                                                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                                    <option value="Cook Islands">Cook Islands</option>
                                                                    <option value="Costa Rica">Costa Rica</option>
                                                                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                                    <option value="Croatia">Croatia</option>
                                                                    <option value="Cuba">Cuba</option>
                                                                    <option value="Curacao">Curacao</option>
                                                                    <option value="Cyprus">Cyprus</option>
                                                                    <option value="Czech Republic">Czech Republic</option>
                                                                    <option value="Denmark">Denmark</option>
                                                                    <option value="Djibouti">Djibouti</option>
                                                                    <option value="Dominica">Dominica</option>
                                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                                    <option value="Ecuador">Ecuador</option>
                                                                    <option value="Egypt">Egypt</option>
                                                                    <option value="El Salvador">El Salvador</option>
                                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                    <option value="Eritrea">Eritrea</option>
                                                                    <option value="Estonia">Estonia</option>
                                                                    <option value="Ethiopia">Ethiopia</option>
                                                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                                    <option value="Fiji">Fiji</option>
                                                                    <option value="Finland">Finland</option>
                                                                    <option value="France">France</option>
                                                                    <option value="French Guiana">French Guiana</option>
                                                                    <option value="French Polynesia">French Polynesia</option>
                                                                    <option value="French Southern Territories">French Southern Territories</option>
                                                                    <option value="Gabon">Gabon</option>
                                                                    <option value="Gambia">Gambia</option>
                                                                    <option value="Georgia">Georgia</option>
                                                                    <option value="Germany">Germany</option>
                                                                    <option value="Ghana">Ghana</option>
                                                                    <option value="Gibraltar">Gibraltar</option>
                                                                    <option value="Greece">Greece</option>
                                                                    <option value="Greenland">Greenland</option>
                                                                    <option value="Grenada">Grenada</option>
                                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                                    <option value="Guam">Guam</option>
                                                                    <option value="Guatemala">Guatemala</option>
                                                                    <option value="Guernsey">Guernsey</option>
                                                                    <option value="Guinea">Guinea</option>
                                                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                                                    <option value="Guyana">Guyana</option>
                                                                    <option value="Haiti">Haiti</option>
                                                                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                                    <option value="Honduras">Honduras</option>
                                                                    <option value="Hong Kong">Hong Kong</option>
                                                                    <option value="Hungary">Hungary</option>
                                                                    <option value="Iceland">Iceland</option>
                                                                    <option value="India">India</option>
                                                                    <option value="Indonesia">Indonesia</option>
                                                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                                    <option value="Iraq">Iraq</option>
                                                                    <option value="Ireland">Ireland</option>
                                                                    <option value="Isle of Man">Isle of Man</option>
                                                                    <option value="Israel">Israel</option>
                                                                    <option value="Italy">Italy</option>
                                                                    <option value="Jamaica">Jamaica</option>
                                                                    <option value="Japan">Japan</option>
                                                                    <option value="Jersey">Jersey</option>
                                                                    <option value="Jordan">Jordan</option>
                                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                                    <option value="Kenya">Kenya</option>
                                                                    <option value="Kiribati">Kiribati</option>
                                                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                                                    <option value="Kuwait">Kuwait</option>
                                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                                    <option value="Latvia">Latvia</option>
                                                                    <option value="Lebanon">Lebanon</option>
                                                                    <option value="Lesotho">Lesotho</option>
                                                                    <option value="Liberia">Liberia</option>
                                                                    <option value="Libya">Libya</option>
                                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                                    <option value="Lithuania">Lithuania</option>
                                                                    <option value="Luxembourg">Luxembourg</option>
                                                                    <option value="Macao">Macao</option>
                                                                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                                    <option value="Madagascar">Madagascar</option>
                                                                    <option value="Malawi">Malawi</option>
                                                                    <option value="Malaysia">Malaysia</option>
                                                                    <option value="Maldives">Maldives</option>
                                                                    <option value="Mali">Mali</option>
                                                                    <option value="Malta">Malta</option>
                                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                                    <option value="Martinique">Martinique</option>
                                                                    <option value="Mauritania">Mauritania</option>
                                                                    <option value="Mauritius">Mauritius</option>
                                                                    <option value="Mayotte">Mayotte</option>
                                                                    <option value="Mexico">Mexico</option>
                                                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                                    <option value="Monaco">Monaco</option>
                                                                    <option value="Mongolia">Mongolia</option>
                                                                    <option value="Montenegro">Montenegro</option>
                                                                    <option value="Montserrat">Montserrat</option>
                                                                    <option value="Morocco">Morocco</option>
                                                                    <option value="Mozambique">Mozambique</option>
                                                                    <option value="Myanmar">Myanmar</option>
                                                                    <option value="Namibia">Namibia</option>
                                                                    <option value="Nauru">Nauru</option>
                                                                    <option value="Nepal">Nepal</option>
                                                                    <option value="Netherlands">Netherlands</option>
                                                                    <option value="New Caledonia">New Caledonia</option>
                                                                    <option value="New Zealand">New Zealand</option>
                                                                    <option value="Nicaragua">Nicaragua</option>
                                                                    <option value="Niger">Niger</option>
                                                                    <option value="Nigeria">Nigeria</option>
                                                                    <option value="Niue">Niue</option>
                                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                                    <option value="Norway">Norway</option>
                                                                    <option value="Oman">Oman</option>
                                                                    <option value="Pakistan">Pakistan</option>
                                                                    <option value="Palau">Palau</option>
                                                                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                                    <option value="Panama">Panama</option>
                                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                                    <option value="Paraguay">Paraguay</option>
                                                                    <option value="Peru">Peru</option>
                                                                    <option value="Philippines">Philippines</option>
                                                                    <option value="Pitcairn">Pitcairn</option>
                                                                    <option value="Poland">Poland</option>
                                                                    <option value="Portugal">Portugal</option>
                                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                                    <option value="Qatar">Qatar</option>
                                                                    <option value="Reunion">Reunion</option>
                                                                    <option value="Romania">Romania</option>
                                                                    <option value="Russian Federation">Russian Federation</option>
                                                                    <option value="Rwanda">Rwanda</option>
                                                                    <option value="Saint Barthelemy">Saint Barthelemy</option>
                                                                    <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                                                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                                    <option value="Saint Lucia">Saint Lucia</option>
                                                                    <option value="Saint Martin (French part)">Saint Martin (French part)</option>
                                                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                                    <option value="Samoa">Samoa</option>
                                                                    <option value="San Marino">San Marino</option>
                                                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                                    <option value="Senegal">Senegal</option>
                                                                    <option value="Serbia">Serbia</option>
                                                                    <option value="Seychelles">Seychelles</option>
                                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                                    <option value="Singapore">Singapore</option>
                                                                    <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                                                                    <option value="Slovakia">Slovakia</option>
                                                                    <option value="Slovenia">Slovenia</option>
                                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                                    <option value="Somalia">Somalia</option>
                                                                    <option value="South Africa">South Africa</option>
                                                                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                                                    <option value="South Sudan">South Sudan</option>
                                                                    <option value="Spain">Spain</option>
                                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                                    <option value="Sudan">Sudan</option>
                                                                    <option value="Suriname">Suriname</option>
                                                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                                    <option value="Swaziland">Swaziland</option>
                                                                    <option value="Sweden">Sweden</option>
                                                                    <option value="Switzerland">Switzerland</option>
                                                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                                    <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                                    <option value="Tajikistan">Tajikistan</option>
                                                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                                    <option value="Thailand">Thailand</option>
                                                                    <option value="Timor-leste">Timor-leste</option>
                                                                    <option value="Togo">Togo</option>
                                                                    <option value="Tokelau">Tokelau</option>
                                                                    <option value="Tonga">Tonga</option>
                                                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                                    <option value="Tunisia">Tunisia</option>
                                                                    <option value="Turkey">Turkey</option>
                                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                                    <option value="Tuvalu">Tuvalu</option>
                                                                    <option value="Uganda">Uganda</option>
                                                                    <option value="Ukraine">Ukraine</option>
                                                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                                                    <option value="United Kingdom">United Kingdom</option>
                                                                    <option value="United States">United States</option>
                                                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                                    <option value="Uruguay">Uruguay</option>
                                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                                    <option value="Vanuatu">Vanuatu</option>
                                                                    <option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
                                                                    <option value="Viet Nam">Viet Nam</option>
                                                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                                    <option value="Western Sahara">Western Sahara</option>
                                                                    <option value="Yemen">Yemen</option>
                                                                    <option value="Zambia">Zambia</option>
                                                                    <option value="Zimbabwe">Zimbabwe</option>
													</select>
                                            </div>


                             
				</fieldset>
				
		</div>
		<script src="js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="js/simpleform.min.js"></script>
		<script type="text/javascript">
			$(".testform").simpleform({
				speed : 500,
				transition : 'fade',
				progressBar : true,
				showProgressText : true,
				validate: true
			});

			function validateForm(formID, Obj){

				switch(formID){
					case 'testform' :
						Obj.validate({
							rules: {
								email: {
									required: true,
									email: true
								},
								name: {
									required: true
								},
								street: {
									required: true
								}
							},
							messages: {
								email: {
									required: "Please enter an email address",
									email: "Not a valid email address"
								},
								name: {
									required: "Please enter your name"
								},
								street: {
									required: "Please enter street name"
								}
							}
						});
					return Obj.valid();
					break;
				}
			}
			</script>
		<div class="agileits_copyright">
			
		</div>
	</div>

    <script src="jss/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap jss
		============================================ -->
    <script src="jss/bootstrap.min.js"></script>
    <!-- wow jss
		============================================ -->
    <script src="jss/wow.min.js"></script>
    <!-- price-slider jss
		============================================ -->
    <script src="jss/jquery-price-slider.js"></script>
    <!-- meanmenu jss
		============================================ -->
    <script src="jss/jquery.meanmenu.js"></script>
    <!-- owl.carousel jss
		============================================ -->
    <script src="jss/owl.carousel.min.js"></script>
    <!-- sticky jss
		============================================ -->
    <script src="jss/jquery.sticky.js"></script>
    <!-- scrollUp jss
		============================================ -->
    <script src="jss/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar jss
		============================================ -->
    <script src="jss/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="jss/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu jss
		============================================ -->
    <script src="jss/metisMenu/metisMenu.min.js"></script>
    <script src="jss/metisMenu/metisMenu-active.js"></script>
    <!-- touchspin jss
		============================================ -->
    <script src="jss/touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="jss/touchspin/touchspin-active.js"></script>
    <!-- colorpicker jss
		============================================ -->
    <script src="jss/colorpicker/jquery.spectrum.min.js"></script>
    <script src="jss/colorpicker/color-picker-active.js"></script>
    <!-- datapicker jss
		============================================ -->
    <script src="jss/datapicker/bootstrap-datepicker.js"></script>
    <script src="jss/datapicker/datepicker-active.js"></script>
    <!-- input-mask jss
		============================================ -->
    <script src="jss/input-mask/jasny-bootstrap.min.js"></script>
    <!-- chosen jss
		============================================ -->
    <script src="jss/chosen/chosen.jquery.js"></script>
    <script src="jss/chosen/chosen-active.js"></script>
    <!-- select2 jss
		============================================ -->
    <script src="jss/select2/select2.full.min.js"></script>
    <script src="jss/select2/select2-active.js"></script>
    <!-- ionRangeSlider jss
		============================================ -->
    <script src="jss/ionRangeSlider/ion.rangeSlider.min.js"></script>
    <script src="jss/ionRangeSlider/ion.rangeSlider.active.js"></script>
    <!-- rangle-slider jss
		============================================ -->
    <script src="jss/rangle-slider/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="jss/rangle-slider/jquery-ui-touch-punch.min.js"></script>
    <script src="jss/rangle-slider/rangle-active.js"></script>
    <!-- knob jss
		============================================ -->
    <script src="jss/knob/jquery.knob.js"></script>
    <script src="jss/knob/knob-active.js"></script>
    <!-- tab jss
		============================================ -->
    <script src="jss/tab.js"></script>
    <!-- plugins jss
		============================================ -->
    <script src="jss/plugins.js"></script>
    <!-- main jss
		============================================ -->
    <script src="jss/main.js"></script>
</body>
</html>
<?php
 } 
 else{
 include 'schools_admin_staff_master_login.php';
 }
?>