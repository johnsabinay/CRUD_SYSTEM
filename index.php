<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD SYSTEM</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    
    
    <div class="tableCon">
    <a class="addBtn btn" href="#" role="button">+</a>
    <table class="table">
        <thead>
                <tr>
                    <th scope="col">ID </th>
                    <th scope="col">NAME </th>
                    <th scope="col">AGE</th>
                    <th scope="col">EMAIL </th>
                    <th scope="col">CONTACTNO </th>
                    <th scope="col">BIRTHDATE </th>
                    <th scope="col"> POSITION</th>
                    <th scope="col"> ACTION</th>

                </tr>
             

                <?php
                $hostName="localhost";
                $dbUser="root";
                $dbPass="";
                $dbName="employee_db";
                $conn = mysqli_connect($hostName, $dbUser,$dbPass,$dbName);
                if (!$conn) {
                    die("Connection is not successful");
                }
                $sql = "SELECT * FROM employee_tb";
                $result = mysqli_query($conn,$sql);
                while ($row = mysqli_fetch_array($result)) {
                    $id=$row["ID"];
                    $name=$row["NAME"];
                    $age=$row["AGE"];
                    $email=$row["EMAIL"];
                    $contact=$row["CONTACTNO"];
                    $bday=$row["BIRTHDATE"];
                    $position=$row["POSITION"];


                    echo "<tr>
                    <th scope ='row'>$id</th>
                    <td>$name</td>
                    <td>$age</td>
                    <td>$email</td>
                    <td>$contact</td>
                    <td>$bday</td>
                    <td>$position</td>
                    <td>
                    <a class='removeBtn btn' href=deleteData.php?id=$row[ID] role='button'>Delete</a>
                    <a class='editBtn btn' href='#'?id=$row[ID] role='button'>Edit</a>
                    
                    </td>
                    </tr>";

                }
                ?>






        </thead>
    </table>
    </div>
</body>
</html>