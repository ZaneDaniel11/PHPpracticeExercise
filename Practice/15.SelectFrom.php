<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabl</title>
</head>
<body>
    <table>
       <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>School</th>
            </tr>
       </thead>

       <tbody>

       <?php
        include '15-1.connectdb.php';

        $sql = "select *from `register_db`";
        $result = mysqli_query($conn,$sql);

        if($result)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $id = $row['id'];
                $name = $row['Name'];
                $lastname = $row['Lastname'];
                $school = $row['School'];

                echo '
                <tr>
                <td>'.$id.'</td>
                <td>'.$name.'</td>
                <td>'.$lastname.'</td>
                <td>'.$school.'</td>
            </tr>
                ';

            }
        }

       ?>
           
       </tbody>
    </table>
</body>
</html>