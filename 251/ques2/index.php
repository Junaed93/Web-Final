<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form method = "post">
        <table border = "1">
            <tr>
                <td>Attendees</td>
                <td>Cost Per Person</td>
                <td>Venue Per Person</td>
            </tr>
            <tr>
                <td><input type = "number" name = "attendees"></td>
                <td><input type = "number" name = "costPP"></td>
                <td><input type = "number" name = "capacity"></td>
            </tr>
        </table>
        <input type = "submit" name = "submit"value = "Calculate">
    </form>
    </div>
</body>
</html>

<?php

function calculateVenueWaste($attendees, $capacity, $cost) {

    $venue = $attendees / $capacity;
    $totalVenue = ceil($venue);
    $emptySeat = ($totalVenue * $capacity) - $attendees;
    $wastedMoney = $emptySeat * $cost;

    echo "<br>";
    echo "<table border='1'>";
    echo "<tr><td>Total Venue</td><td>Empty Seats</td><td>Wasted Money</td></tr>";
    echo "<tr><td>$totalVenue</td><td>$emptySeat</td><td>$wastedMoney</td></tr>";
    echo "</table>";
}

if (isset($_POST["submit"])) {

    $attendees = intval($_POST["attendees"]);
    $cost = intval($_POST["costPP"]);
    $capacity = intval($_POST["capacity"]);

    calculateVenueWaste($attendees, $capacity, $cost);
}
?>
