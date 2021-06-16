<!DOCTYPE html>

<html>
    <head>
        <?php
            extract($_POST);
            $conn = mysqli_connect("localhost", "root", "", "hospitals");
            $res = mysqli_query($conn, "SELECT * FROM donars");
            $flag = 0;
            for ($i = 0; $i < mysqli_num_rows($res); $i++){
                $row = mysqli_fetch_assoc($res);
                if ($row['blood'] == $blood && $row['city'] == $district){
                    
                    $flag = 1;
                    break;
                }
            }
            if ($flag){
                session_start();
                $sql = "SELECT * FROM donars";
                $result = mysqli_query($conn, $sql);
               
               
            }
               
            else{
                header("location:Find_Unsuccessful.html");
            }
        ?>
        <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
    </style>
    </head>
    
    <body style="bgcolor=red">
    <section>
        <h1>The Match Data</h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
                <th>Blood Group</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>City</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['blood'];?></td>
                <td><?php echo $rows['phone'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['city'];?></td>
            </tr>
            <?php
                }
             ?>
        </table>
    </section>
</body>
    </body>
</html>