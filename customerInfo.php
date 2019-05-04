<!DOCTYPE html>
<html>
  <head>
      <title>Student information form</title>
      <style>
      body
      {
          font-family: Arial;
          background-color: rgb(220, 240, 255);
          color: rgb(40, 90, 140);
      }
      hr
      {
          border-color: rgb(40, 90, 140);
      }
      select
      {
          width: 100px;
          font-size: 20px;
          border: 2px rgb(40, 90, 140) outset;
          
      }
      input[type=text]
      {
          width: 300px;
          height: 30px;
          font-size: 20px;
          border: 2px rgb(40, 90, 140) outset;
      }
      input[type=submit]
      {
          width: 200px;
          height: 40px;
          font-size: 20px;
          color: white;
          background-color: rgb(40, 90, 140);
          border: 2px rgb(140, 190, 240) outset;
      }
      input[type=submit]:hover
      {
          width: 200px;
          height: 40px;
          font-size: 20px;
          color: rgb(40, 90, 140);
          background-color: rgb(140, 190, 240);
          border: 2px rgb(40, 90, 140) outset;
      }
      table
      {
          margin-left: 30px;
      }
      
      textarea
      {
          resize: none;
          width: 300px;
          height: 100px;
          font-size: 20px;
          border: 2px rgb(40, 90, 140) outset;
      }
      </style>
  </head>
  <body>
        
    <form action="confarmation.php" method="post">
        <h1>Customer Information</h1>
        Enter your information here.
        <hr>
        
        <table cellpadding="4">
          <tr>
			<td>First Name:</td>
			<td><input type="text" name="Fname" placeholder="Enter First Name"></td>
		  <tr>
			<td>Lasr Name:</td>
			<td><input type="text" name="Lname" placeholder="Enter Last Name"></td>
		  </tr>
		  <tr>
            <td>Email:</td>
            <td><input type="text" name="email"></td>

          </tr>
            <td></td>
            <td><input type="submit" value="Confirm"></td>
          </tr>
    </table>
    
    </form>
  </body>
</html>
