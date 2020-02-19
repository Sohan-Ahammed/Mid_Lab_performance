<!DOCTYPE html>
<html>
  <head>
	 <title>Registration</title>
  </head>
    <body>
      <center>
        <table  border="1" cellspacing="0">
		
		  <tr>
		  <td colspan='2'>
		  <center>
	        <legend><b>PERSON PROFILE</b></legend>
             <form method="post" action="Validation.php" 
	      </tr>
		
	      <tr>
			<td>Name</td>
			<td><input type="text" name="" value="" size="20" /></td>
			<td></td>
		</tr>
		
		<tr>
			<td>Email</td>
			<td><input type="text" name="email"/></td>
			<td></td>
		</tr>
		
		<tr>
			<td>Gender </td>
			<td> 
				<input type="radio" name="gender" value="">Male 
				<input type="radio" name="gender" value="">Female
				<input type="radio" name="gender" value="">Other
			</td>
		
		<td></td>
		
		<tr>
			<td>Date of Birth</td>
			<td><input type="date" name="date" value=""/></td>
			<td></td>
		</tr>

		
		</tr>
		<tr>
			<td>Blood Group</td>
			<td>
				<select>
					<option>A+</option>
					<option>B+</option>
					<option>A-</option>
				</select>
			</td>
			<td></td>
		</tr>
		
		<tr>
			<td>Degree</td>
			<td>
				<input type="checkbox" name="">SSC
				<input type="checkbox" name="">HSC
				<input type="checkbox" name="">B.sc
				<input type="checkbox" name="">M.sc
			</td>
			<td></td>
		</tr>
		
		<tr>
			<td>Photo</td>
			<td>
				<input type="file" name="Browse" value=""/>
			</td>
			<td></td>
		       </tr>
		 
		      <tr> <td> </td> </tr>
		
		
		        <tr>
			      <td><input type="Submit" value="Submit" name="Submit"/>
				      <input type="Reset" value="Reset" name="Reset"/></td>
				<tr>
	    </table>
	
	</form>
	</center>
  </body>
</html>


		
		
		