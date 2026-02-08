<?php
  $conn = mysqli_connect("localhost", "root", "", "uiutech_final");
  if($conn){
    echo "Connection successful";
  }
  else{
    echo "Connection failed";
  }

?>

<?php

    //a
    $sql = "SELECT PerformanceRating, COUNT(*) AS total
    FROM employee_final
    GROUP BY PerformanceRating";

    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)){
        echo "<br>";
        echo "Performance Rating: " .$row["PerformanceRating"]. "  Total: " .$row["total"]. "<br>";
    }

    //b
    $sql = "UPDATE employee_final
            SET PerformanceRating = 'C'
            WHERE salary < 40000 AND PerformanceRating != 'D'";

    mysqli_query($conn, $sql);
    echo "<br>";
    echo "Performance ratings updated successfully.";

    //c
    $sql = "UPDATE employee_final
            SET salary = salary + 5000
            WHERE salary > 50000 AND salary+5000 <= 60000";

    mysqli_query($conn, $sql);
    echo "<br>";
    echo "Salary updated successfully.";
    echo "<br>";

    //d
    $sql = "SELECT DepartmentName, COUNT(*) AS total
    FROM employee_final
    GROUP BY DepartmentName
    ORDER BY total DESC";

    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)){
        echo "<br>";
        echo "Department Name: " .$row["DepartmentName"]. "  Total: " .$row["total"]. "<br>";
    }

?>