<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "cab";
$con = mysqli_connect($server, $user, $password, $database);

if (!$con) {
    die("Connection Error");
}

$query = "select *from info";
$ans = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            justify-content: center;
            margin-top: 2rem;
        }

        table {
            min-width: 50vw;
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
        }

        table td
        {
            border: 1px solid #ddd;
            padding: 8px;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }

        thead tr {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: grey;
            color: white;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <td>Action</td>
                <td>Date</td>
                <td>From Time</td>
                <td>To Time</td>
                <td>Requester Name</td>
                <td>Requester Contect</td>
                <td>View</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                while ($tr = mysqli_fetch_assoc($ans)) {
                ?>
                    <td><i class="material-icons">motorcycle</i></td>
                    <td><?php echo $tr['Date'] ?></td>
                    <td><?php echo $tr['From_Time'] ?></td>
                    <td><?php echo $tr['To_Time'] ?></td>
                    <td>UserName</td>
                    <td>User Contact</td>
                    <td><i class="material-icons">visibility</i></td>
            </tr>
        <?php
                }
        ?>

        </tbody>
    </table>
</body>

</html>