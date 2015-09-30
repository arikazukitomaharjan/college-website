<?

	echo('	<div id="msg">
						<b><h2>Academia International College </h2></b>
						<div class="message" ><b><h2>News and Event:</h2></b><br></div>
				____________________________<br>
				<b>Admin:</b>Ram Nawami holiday.<br> april 25<br>
				____________________________<br>
				<b>Admin:</b>Exam begins from 1st <br>march 2015<br>
				____________________________<br>
				<b>Admin:</b>Valley Strike Holiday<br> april 25<br>
				____________________________<br>
				<b>Admin:</b>First golden jublie <br> april 25<br>
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
									
    
		</div>');
				 
				
?>