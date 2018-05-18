<?php
include_once 'dbh.php';

if (isset($_POST['search'])) {
    //$search = mysqli_real_escape_string($conn, $_POST['cname']);
    echo "fuck";
    $sql = "select * from course where Title like '%$search%'";
    $result = mysqli_query($conn, $sql);
    $queryResult = mysqli_num_rows($result);

    if ($queryResult > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div>
				<h3>" . $row['CourseID'] . "</h3>
				<p>" . $row['SubjectID'] . "</p>
				<p>" . $row['Title'] . "</p>
					</div>";
        }
    } else {
        echo "No results to match";
    }
}
?>
</div>
</body>
</html>