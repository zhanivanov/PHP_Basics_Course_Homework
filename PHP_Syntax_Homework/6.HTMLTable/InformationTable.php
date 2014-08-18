<?php
$name = "Pesho";
$phone = "0884-888-888";
$age = "67";
$address = "Suhata Reka";
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            text-indent: 5px;
            border-collapse: collapse;
        }
        table tr {
            border: 2px solid #000;
        }
        table th, table td {
            width: 110px;
            line-height: 30px;
        }
        table th {
            text-align: left;
            background: #FFA100;
        }
        table td {
            text-align: right;
        }
    </style>
</head>
<body>
<table>
    <tbody>
    <tr>
        <th><strong>Name</strong></th>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <th><strong>Phone number</strong></th>
        <td><?php echo $phone; ?></td>
    </tr>
    <tr>
        <th><strong>Age</strong></th>
        <td><?php echo $age; ?></td>
    </tr>
    <tr>
        <th><strong>Address</strong></th>
        <td><?php echo $address; ?></td>
    </tr>
    </tbody>
</table>
</body>
</html>
