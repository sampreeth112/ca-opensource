<html>
    <head>
        <title>INT 301 Assignment</title>
<a href="ca.php">CLick here to enter details</a>
    </head>
    <body>
        <form method="POST">
            <table>
                <tr><td><label for="flat">Flat Type</label></td><td>
                    <select required  name="flat" id="flat">
                        <option>select flat type</option>
                        <?php

         $servername = "localhost";
         $username = "root";
         $password = "";
         $dbname = "ab";
         $conn = new mysqli($servername, $username, $password,$dbname);
         if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
         }
                         $q1="select distinct(flattype) from flats order by flattype desc";
            $result1=mysqli_query($conn, $q1);
          while($row1 = mysqli_fetch_assoc($result1))
          {
          echo "<option value='".$row1["flattype"]."'>".$row1["flattype"]."</option>";
          }
                        ?>
                    </select></td></tr>
                <tr><td><label for="area">Area</label></td><td>
                    <select name="area">
                        <option>select area</option>
                        <?php
                    $q2="select distinct(area) from flats order by area";
            $result2=mysqli_query($conn, $q2);
          while($row2 = mysqli_fetch_assoc($result2))
          {
          echo "<option value='".$row2["area"]."'>".$row2["area"]."</option>";
          }?>
                    </select></td></tr>
                <tr><td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td></tr>
            </table>
        </form>
        <table border="1" align="center">
            <caption><strong>User Details</strong></caption>
            <tr><th>Id</th><th>Owner Name</th><th>Mobile No</th><th>area</th><th>flat type</th><th>full address</th><th>Price(per month)</th></tr>
        <?php


        if(isset($_POST["submit"]))
        {
            $area=$_POST["area"];
            $flat=$_POST["flat"];

            $q="select * from flats where area='$area' and flattype='$flat' ";


            $result=mysqli_query($conn, $q);
              if(mysqli_num_rows($result)>0){
          while($row = mysqli_fetch_assoc($result))
          {
              echo "<tr><td>" . $row["id"]. "</td><td>" . $row["ownername"]. "</td><td> " . $row["mobileno"]. "</td><td>".$row["area"]."</td><td> " . $row["flattype"]. "</td><td> " . $row["fulladdress"]. "</td><td> " . $row["rent"]. "</td></tr>";
          }}
            else
            {
                echo "no flats available in this combination";
            }


        }
        ?>
        </table>
    </body>
</html>
