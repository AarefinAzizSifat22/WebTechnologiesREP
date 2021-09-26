<!DOCTYPE html>
<html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">  
        <label>NAME</label> <br>
        <input type="text" name="name"> <br> 
        <input type="submit" name="Submit" <br> <br> 

        <?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  // collect value of input field
	  $name = $_REQUEST['name'];
	  if (empty($name)) {
	    echo "Name is empty";
	  } else {
	    echo $name;
	  }
	}
	?>
      <br>  <label>EMAIL</label> <br>
        <input type="email" name="email"> <br> <br>
        <label for="dob">DATE OF BIRTH</label> <br>
        <input type="date" name="dob"   <br> <br> <br>

        <label>GENDER</label> <br>
        <input type="radio" name="gnamem"> Male
            
        <input type="radio" name="gnamef"> Female
            
        <input type="radio" name="gnameo"> Other  <br> <br>

        <label>DEGREE</label> <br>
        <input type="checkbox" name="cbname1"> SSC
        <input type="checkbox" name="cbname2"> HSC 
        <input type="checkbox" name="cbname3"> BSc
        <input type="checkbox" name="cbname4"> Msc <br> <br>

        <label for="BLOOD GROUP">BLOOD GROUP</label> <br>
            <select name="BloodGroup">
                <option value="A(+)ve">A(+)ve</option>
                <option value="B(+)ve">B(+)ve</option>
                <option value="O(+)ve">O(+)ve</option>
                <option value="AB(+)ve">AB(+)ve</option>
                <option value="A(-)ve">A(-)ve</option>
                <option value="B(-)ve">B(-)ve</option>
                <option value="O(-)ve">O(-)ve</option>
                <option value="AB(-)ve">AB(-)ve</option>


            </select> <br> 
            <input type="submit" name="Submit" <br>



        

    </body>    
</html>
