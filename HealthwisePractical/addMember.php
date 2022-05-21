 <html>
	 <!-- Header here -->
 <body>
 <div id="header" >
      <img src="images/healthwiseLogo1.jpg" alt="Logo" />
     </div>
 
 <h3 style="text-align:center;"></h3>
 <div id="content">

    <form method="post" action="addMember.php" >
		<div id="col1">
		   First Name: 
		<input type="text" name="first_name" size="40" maxlength="150" />*
		<br />
		Last Name: 
		<input type="text" name="last_name" size="40" maxlength="150" />*
		<br />
		Membership Type:
		<select name="mem_type" id="mem_type">
		  <option value="0">--Select A Type--</option>
		</select>
		<br />
		    Comments:<br />
		 <textarea cols="10" rows="3" name="mem_comments"></textarea>
	
     </div>	
     <div id="col2" style="text-align:left;">
     
		 Membership Length (months):
		<input type="text" name="mem_length" size="6" maxlength="10" />*
			<br />
		 Amount Paid: 
		<input type="text" name="amt_paid" size="6" maxlength="10" />*
			<br />
			<br />
				<br />
		
	
		<input type="submit" name="submit" value="submit" />
		<input type="reset" name="reset" value="Reset" />
	
     </div>
   
    <!-- Footer here -->
	</form>
	</div>
</body>
</html>