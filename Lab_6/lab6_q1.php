<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>
<body>
    <?php
    $name    = "AHMAD ISMAIL BIN SHAMSUL KAMAL";
    $matric  = "AI250226";
    $course  = "BIC21203 Web Development";
    $year    = "Year 2";
    $address = "No. 12, Jalan Universiti, 86400 Parit Raja, Johor";
    ?>
    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <td><strong>Name</strong></td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td><strong>Matric Number</strong></td>
            <td><?php echo $matric; ?></td>
        </tr>
        <tr>
            <td><strong>Course</strong></td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td><strong>Year of Study</strong></td>
            <td><?php echo $year; ?></td>
        </tr>
        <tr>
            <td><strong>Address</strong></td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>