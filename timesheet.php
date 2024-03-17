<html>
<?php include "time_entry.php" ?>
<head>
    <style>
        table, td, th {
            border: 1px solid #32383E;
            text-align: left;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 15px;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #2C3034
        }

        tr:nth-child(odd) {
            background-color: #212529
        }
    </style>
</head>
<?php
if (isset($_POST['submit'])) {
    ?>
    <table>
        <thead>
        <tr>
            <th>Day</th>
            <th>Date</th>
            <th>Start Time</th>
            <th>Finish Time</th>
            <th>Break</th>
            <th>Hours Worked</th>
        </tr>
        </thead>

        <tbody style="text-align:right">
        <?php
        $days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
        for ($x = 0; $x < count($days); $x++) {
            $new_date = date('m/d/y', strtotime($_POST['week']));

            ?>
            <form action="" method="post">
                <tr>
                    <td><?php echo $days[$x] ?></td>
                    <td><?php echo $new_date ?></td>
                    <td> <input type="time" id="starttime" name="start time"></td>
                    <td> <input type="time" id="finishtime" name="finish time"></td>
                    <td> <select name="break"><option value="1">0</option> <option value="2">0.5</option> <option value="3">1</option></select></td>
                    <td>0</td>
                </tr>
                <?php
            }
        }
        ?>
        </tbody>
    </table>
</html>
