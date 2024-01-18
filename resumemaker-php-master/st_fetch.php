
<?php 
  require('connect.php');  

 $sql="SELECT * from student";
 $result=$con->query($sql);
if($result-> num_rows>0){
  while($row=$result->fetch_assoc())
{?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            td{
                margin-left:10px;
                padding-left:20px;
            }
        </style>
    </head>
    <body>
        <!-- <table border=1>
            
            <tr>
                <td><?php echo $row["id"];?> </td>
                <td><?php echo $row["fname"];?> </td>
                <td><?php echo $row["lname"];?> </td>
                <td><?php echo $row["mail"];?> </td>
                <td colspan="2"><?php echo $row["gen"];?> </td>

            </tr>
            <tr>
                <td><?php echo $row["ps"];?> </td>
                <td><?php echo $row["cps"];?> </td>
                <td><?php echo $row["gen"];?> </td>
                <td><?php echo $row["city"];?> </td>
                <td><?php echo $row["state"];?> </td>
           
                <td><?php echo $row["address"];?> </td>

            </tr>
            <tr>

            </tr>
        </table> -->

        <table align="center" cellspacing="0" border=1 style="width:60%;">

        <th align="center" colspan=2>User Information</th>

        <tr>
            <td style="width:30%;">First Name</td>
            <td><?php echo $row["fname"];?> </td>

        </tr>
        <tr>
            <td>Last Name</td>
            <td><?php echo $row["lname"];?> </td>

        </tr>
        <tr>
            <td>E-Mail</td>
            <td><?php echo $row["mail"];?> </td>

        </tr>
        <tr>
            <td>Gender</td>
            <td><?php echo $row["gen"];?> </td>

        </tr>
        <tr>
            <td>password Name</td>
            <td><?php echo $row["ps"];?> </td>

        </tr>
        <tr>
            <td>confirm password</td>
            <td><?php echo $row["cps"];?> </td>

        </tr>
        <tr>
            <td>state</td>
            <td><?php echo $row["state"];?> </td>

        </tr>
        <tr>
            <td>City</td>
            <td><?php echo $row["city"];?> </td>

        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $row["address"];?> </td>

        </tr>
        </table>
        <br><hr><br>
    </body>
    </html>

<?php 
} }
 else {
  echo "0 results";
 }

//  http://localhost/php-tutorial/project/www/resumemaker-php-master/st_fetch.php
?>

