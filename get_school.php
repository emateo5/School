<table id="my-final-table" class="table table-striped">
    <thead>
    <th>School ID</th>
    <th>School Name</th>
    <th>Students</th>
    <th>Staff</th>
    <th>Classrooms</th>
    <th>Seats</th>
    <th>Hospitals</th>
</thead>
<tbody>
    <?php
    require_once 'config.php';
    ?>
    <?php
    $district = $_GET['district'];
    $village = $_GET['village'];
    $category = $_GET['category'];
    $medium = $_GET['medium'];


    $condition = "";
    if ($district !== "") {
        $condition = "district = '" . $district . "'";
        if ($village !== "") {
            $condition .= " and village_panchayat = '" . $village . "'";
        }
    }

    if ($category !== "") {
        if ($condition !== "") {
            $condition .= " and ";
        }
        $condition .= "category_of_school = '" . $category . "'";
    }

    if ($medium !== "") {
        if ($condition !== "") {
            $condition .= " and ";
        }
        $condition .= "school_medium = '" . $medium . "'";
    }
    if ($condition !== "") {
        $condition = " where " . $condition;
    }

    $sql = "select * from schools " . $condition;

    $schools = mysql_query($sql) or die(mysql_error());
    while ($row = mysql_fetch_array($schools)) {
        echo "<tr>";
        echo "<td>" . $row['school_id'] . "</td>";
        echo "<td><a href='/school_info.php?id=" . $row['school_id'] . "'>" . $row['school_name'] . "</a></td>";
        echo "<td>" . $row['number_of_students'] . "</td>";
        echo "<td>" . $row['number_of_staff'] . "</td>";
        echo "<td>" . $row['number_of_classrooms'] . "</td>";
        echo "<td>" . $row['number_of_seats'] . "</td>";
        echo "<td>" . $row['availability_of_hospital'] . "</td>";
        echo "</tr>";
    }
    ?>
</tbody>
</table>

