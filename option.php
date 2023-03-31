<form method="post" action="process.php">
    <label for="option1">Option 1:</label>
    <select name="option1" id="option1">
        <?php
            include("dbcon.php"); // include database connection file
            $query = "SELECT code, cabinmodel, chassis, length FROM truckinv";
            $result = mysqli_query($conn, $query);
            while($row = mysqli_fetch_array($result)){
                echo '<option value="'.$row['code'].'">'.$row['code'] . ' ' . $row['length'] . ' ' . $row['chassis'] . ' ' . $row['cabinmodel'] . '</option>';
            }
        ?>
    </select>
<br>
    <label for="option2">Option 2:</label>
    <select name="option2" id="option2">
        <?php
            $query = "SELECT bodytype FROM truckinv";
            $result = mysqli_query($conn, $query);
            while($row = mysqli_fetch_array($result)){
                echo '<option value="'.$row['bodytype'].'">'.$row['bodytype'].'</option>';
            }
        ?>
    </select>
<br>
    <label for="option3">Option 3:</label>
    <select name="option3" id="option3">
        <?php
            $query = "SELECT engine FROM truckinv";
            $result = mysqli_query($conn, $query);
            while($row = mysqli_fetch_array($result)){
                echo '<option value="'.$row['engine'].'">'.$row['engine'].'</option>';
            }
        ?>
    </select>

    
<br>

    <input type="submit" value="Submit">
</form>
