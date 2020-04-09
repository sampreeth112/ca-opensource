<form method="POST">
    <table>

          <tr><td><label for="name"> Owner Name</label></td><td><input type="text" name="n" id="n" required></td></tr>
            <tr><td><label for="name">Mobile Number</label></td><td><input type="text" name="mb" id="mb" required></td></tr>
  <tr><td><label for="name">Flat type</label></td><td><input type="radio" name="f" value="3bhk" required>3bhk</td>
<td><input type="radio" name="f" value="2bhk" required>2bhk</td>
<td><input type="radio" name="f" value="1bhk" required>1bhk</td>
  </tr>
              <tr><td><label for="name">Address</label></td><td><input type="text" name="ad" id="ad" required></td></tr>
<tr><td><label for="name">Area</label></td><td><input type="radio" name="a" value="lawgate" required>lawgate</td>
<td><input type="radio" name="a" value="chaheru" required>chaheru</td>
<td><input type="radio" name="a" value="deep nagar" required>deep nagar</td>

</tr>
                <tr><td><label for="name">Rent</label></td><td><input type="text" name="r" id="r" required></td></tr>

        <tr><td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td></tr>
    </table>
</form>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ab";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}

    if(isset($_POST['submit']))
    {

            $n=$_POST['n'];
                $mb=$_POST['mb'];
                    $f=$_POST['f'];
                      $ad=$_POST['ad'];
                        $a=$_POST['a'];
                            $r=$_POST['r'];

    $q="INSERT INTO flats (ownername,mobileno,flattype,fulladdress,area,rent)
VALUES ('$n','$mb','$f','$ad','$a','$r')";
    $result=mysqli_query($conn, $q);
}
?>
