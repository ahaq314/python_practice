<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Learn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php
    // aray fefine
    $employee = [
        array('firstname' => 'Yusuf', 'lastname' => 'Haque', 'state' => 'Bihar'),
        array('firstname' => 'Ehsan', 'lastname' => 'Haque', 'state' => 'UP'),
        array('firstname' => 'Faiz', 'lastname' => 'Umar', 'state' => 'Maharashtra'),
        array('firstname' => 'Ayub', 'lastname' => 'Haque', 'state' => 'Andhra'),
        array('firstname' => 'Anwar', 'lastname' => 'Haque', 'state' => 'Bihar')
    ];

    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>State</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($employee as $emp) { ?>
                            <tr>
                                <td><?php echo $emp['firstname']; ?></td>
                                <td><?php echo $emp['lastname']; ?></td>
                                <td><?php echo $emp['state']; ?></td>
                            </tr>
                        <?php } ?>

                        <!-- foreach ($employee as $emp) {
                   echo '<tr>';
                   echo '<td>'.$emp['firstname'].'</td>';
                   echo '<td>'.$emp['lastname'].'</td>';
                   echo '<td>'.$emp['state'].'</td>';
                   echo '</tr>';
                } -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>