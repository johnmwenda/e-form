<?php
/* Generates a PDF Document from the POST DATA it receives. It uses the MPDF library  */

/* Variables passed from the form using POST are assigned to input name attribute
eg <input type="text" name="input_1_name">
in above input tag, 'input_1_name' becomes a variable which holds $_POST['input_1_name']
It enables us to shorten $_POST['input_1_name'] to $input_1_name
 */
$key_array;
$i=0;
$k=0;
foreach($_POST as $key => $value){
	$key_array[$i++]=$key;
}
foreach($_POST as $key => $value){
	$$key_array[$k++]=$value;
}

$html = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>HTML Form</title>

<style type=\"text/css\">

* { margin: 0; padding: 0; }

html { height: 100%; font-size: 62.5%;font-size: 12pt; }

body { height: 100%; background-color: #FFFFFF; }


/* ==================== Form style sheet ==================== */
form{width:1000px;margin: 20px auto 100px; solid;padding-right:18px;}
.form {  border-collapse: collapse; width:100%; }

.form .row{margin-bottom:20px;}
.form .row .th{ padding: 4px 0px;}
.form .row .td { padding: 4px 5px; font-weight: normal;text-decoration:underline;}

.form .row .th { color: #4A4643;font-style:italic;font-size:15px; }
.form td span { font-size: 0.9em; color: #181818; margin-left: 8px; }
.form td samp { font: 1em Verdana, Arial, Helvetica, sans-serif; color: #000000; }

.form input { width: 100%; }
.form input.answer { width: auto; }
.form textarea { width: 385px; height: 160px;  }

.form input.inp-text, .form input.answer, .form textarea
{ border: 1px solid #909090; border-right: 1px solid #BBBBBB; border-bottom: 1px solid #BBBBBB; padding: 3px; }
table.form input:focus, table.form textarea:focus { border: 1px solid #606060; } /* does not work in IE */

table.form th.message-up { vertical-align: top !important; }

table.form label.invisible { visibility: hidden; }

table.form td.submit-button-right { text-align: right !important; }
table.form input.submit-text { font: 1.4em Georgia, \"Times New Roman\", Times, serif; letter-spacing: 1px; width: auto; }

/* ==================== Form style sheet END ==================== */


.header{overflow:hidden;color:#8A8683;font-weight:300;}
.header h3{margin-bottom:2px;font-style:italic}
p { 	text-align: justify; margin-bottom: 4pt; margin-top:0pt;  }
	
		h5 {	font-weight: bold; font-style:italic; ; font-size: 11pt; color: #000044; 
			font-family: \'DejaVu Sans Condensed\'; margin-top: 8pt; margin-bottom: 4pt; 
			text-align: ;  page-break-after:avoid; }



</style>

<!--[if lte IE 7]>
<style type=\"text/css\">

/* ==================== Form style sheet for IE 7 and lower ==================== */

legend { position: relative; top: 6px; left: -7px; }

/* ==================== Form style sheet for IE end ==================== */

</style>
<![endif]-->
</head>


<body>
	<form action=\"\" method=\"post\">
		<!-- Header section with image and contact details-->
		<div class=\"header\">
			<div style=\"float:right;width:40%;\">
			<h5>EAGLE BUSINESS VENTURE</h5>
			<p>P.O.BOX 2878-60100</p>
			<p>Phone 020304322</p>
			<p>Tel:0719512216</p>
			<p>Email:eaglebusiness@gmail.com</p>
			<p>WEBSITE:eaglebusinessventure.co.ke</p>
			</div>	
			<div style=\"float:right;width:30%;text-align:right;padding-right:10px\">
			<img src=\"oval3.png\"/>
			</div>	
			
		</div>
		<hr style=\"width:100%;\" />
		
		<h5 style=\"text-align:center;text-decoration:underline;margin-bottom:10px;margin-bottom: 15px;
    margin-top: 15px;\">MEMBERSHIP APPLICATION FORM</h5>
	
		
	<!-- Beginning of table-->
		<div class=\"form\">			
			<div class=\"row\">
				<span class=\"th\"><label for=\"input-1\"><strong>Applicant\'s Name</strong></label></span>
				<span class=\"td\">$input_1_name</span></br>
			</div>
			<div class=\"row\">				
				<span class=\"th\"><label for=\"input-2\"><strong>Home Address</strong></label></span>
				<span class=\"td\">$input_2_address</span>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
				<span class=\"th\"><label for=\"input-3\"><strong>Phone Number:</strong></label></span>
				<span class=\"td\">$input_3_phone</span></br>
			</div>
			<div class=\"row\">				
				<span class=\"th\"><label for=\"input-4\"><strong>I.D Number</strong></label></span>
				<span class=\"td\">$input_4_id</span>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<span class=\"th\"><label for=\"input-5\"><strong>MEMBERSHIP No</strong></label></span>
				<span class=\"td\">$input_5_membership</span></br>
			</div>
			<div class=\"row\">				
				<span class=\"th\"><label for=\"input-6\"><strong>Sex</strong></label></span>
				<span class=\"td\">$input_6_sex</span>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
				<span class=\"th\"><label for=\"input-7\"><strong>Year of Birth</strong></label></span>
				<span class=\"td\">$input_7_yob</span></br>
			</div>
			<div class=\"row\">				
				<span class=\"th\"><label for=\"input-8\"><strong>Next of Kin</strong></label></span>
				<span class=\"td\">$input_8_kin_name</span>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
				<span class=\"th\"><label for=\"input-9\"><strong>Relationship</strong></label></span>
				<span class=\"td\">$input_9_kin_rshp</span>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
				<span class=\"th\"><label for=\"input-10\"><strong>I.D No</strong></label></span>
				<span class=\"td\">$input_10_kin_id</span></br>
			</div>
			<div class=\"row\">				
				<span class=\"th\"><label for=\"input-11\"><strong>Type of Business</strong></label></span>
				<span class=\"td\">$input_11_type_of_business</span>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<span class=\"th\"><label for=\"input-12\"><strong>Location</strong></label></span>
				<span class=\"td\">$input_12_location</span></br>
			</div>
			<div class=\"row\">				
				<span class=\"th\"><label for=\"input-13\"><strong>Age of Business</strong></label></span>
				<span class=\"td\">$input_13_age_of_business</span></br>
				
			</div>
			<div class=\"row\">				
				<span style=\"width:140px\"><label for=\"input-14\">Date of membership to be effective</label></span>
				<span class=\"td\">$input_14_date_of_member</span>	</br>
				
			</div>
			<div class=\"row\">				
				<span class=\"th\" style=\"text-align:left\"><label style=\"color:#181818;\"><strong>Registration Fee Paid:</strong></label></span></br>
			</div>
			<div class=\"row\">				
				<span class=\"th\"><label for=\"input-15\"><strong>Amount</strong></label></span>
				<span class=\"td\">$input_15_ammount_register</span>	<br/>			
			</div>
			<div class=\"row\">				
				<span class=\"th\"><label for=\"input-16\"><strong>Date</strong></label></span>
				<span class=\"td\">$input_16_date_register</span></br>		
			</div>
			<div class=\"row\">				
				<span style=\"text-align:left;padding-top:30px\"><label style=\"font-style:normal;color:#181818;font-size:13px\">I agree to the terms and conditions of EAGLE BUSINESS VENTURE</label></span></br>
			</div>
			<div class=\"row\">				
				<span class=\"th\" style=\"text-align:left\"><label><strong>Applicant\'s Signature</strong></label></span><span class=\"td\"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
				
				<span class=\"th\"><label for=\"input-17\"><strong>Date</strong></label></span>
				<span class=\"td\">$input_17_date_register</span></br>
			</div>
			<div class=\"row\">				
				<span class=\"th\"><label><strong><h3 style=\"text-align:left;font-size:16px;text-decoration:underline;margin-bottom:10px;margin-bottom: 15px;
    margin-top: 15px;color:#181818;font-style:normal\"><strong>For official use only</h3></strong></label></span></br>
			</div>
			<div class=\"row\">				
				<span style=\"text-align:left\"><label><strong>Signed in the presence of EAGLE BUSINESS VENTURE officer</strong></label></span></br>
			</div>
			<div class=\"row\">
				<span class=\"th\"><label for=\"input-18\"><strong>Name</strong></label></span>
				<span class=\"td\">$input_18_name_official</span></br>
			</div>
			<div class=\"row\">
				<span class=\"th\"><label><strong>Signature</strong></label></span>
				<span class=\"td\">Sign here</span>
			</br>
			</div>
			<div class=\"row\">
				<span class=\"th\"><label for=\"input-19\"><strong>Date:</strong></label></span>
				<span class=\"td\">$input_19_date_official</span></br>
			</div>	
	
		</div> <!-- End of table-->
	</form>
</body>
</html>

";

//==============================================================
//==============================================================
//==============================================================
include("mpdf/mpdf.php");

$mpdf=new mPDF('c','A4','','',15,15,16,16,9,9); 

$mpdf->SetDisplayMode('fullpage');

$mpdf->list_indent_first_level = 0;	// 1 or 0 - whether to indent the first level of a list

// LOAD a stylesheet

$mpdf->WriteHTML($stylesheet,1);	// The parameter 1 tells that this is css/style only and no body/html/text

$mpdf->WriteHTML($html,0);

$mpdf->Output('mpdf.pdf','I');
exit;
//==============================================================
//==============================================================
//==============================================================


?>


