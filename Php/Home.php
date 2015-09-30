<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Academia International College</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../Styles/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="../scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="../scripts/jquery-s3slider.js"></script>
<script type="text/javascript" src="../scripts/jquery-s3slider.setup.js"></script>
</head>
<body>
<div id="content_wrapper">
	<div id="header_wrapper">
	  <div id="header">
		
		
	  </div>
	  <!-- end of header -->
	</div>
<!-- end of menu_wrapper -->
<div id="menu_wrapper">
 <? include("Menu.php");?>
  <!-- end of menu -->
</div>

 
  <!-- end of sidebar -->
  <div id="content">
    
     <? include("Slider.php");?>
	 <div id="marquee">
<?include("Marquee.php");?>
</div>
</div>
<? include("MiddleMenu.php");?>


<div id="content_Page">
	<div id="holder">
		<div id="leftmost">
			
			<div id="msg">
						<b><h2><center>Academia International College </center></h2></b>
						<div class="message" ><b><h2><center>News and Event:</center></h2></b><br></div>
				____________________________<br>
				<b>Admin:</b>Ram Nawami holiday.<br> april 25<br>
				____________________________<br>
				<b>Admin:</b>Exam begins from 1st <br>march 2015<br>
				____________________________<br>
						<?
		
					$con=mysql_connect("localhost","root","");
					mysql_select_db("Website",$con);
					$sql="SELECT * from Message";
					$result=mysql_query($sql);
					mysql_close();
					while($row=mysql_fetch_array($result)){
					$Name=$row['Name'];
					$Message=$row['Message'];
					
					
					echo "<B>$Name:</b>$Message<br>";
					echo "_______________________<br>";}
					?>
									
    
				</div><!--End of msg Content -->
		</div>
		<div id="rightmost">
			<? include("ContentRight.php");?>
				
		</div>
	</div>
</div>
  <!-- end of content -->
  

<div id="footer_wrapper">
  <?include("Footer.php");?>
</div>
</body>
</html>
