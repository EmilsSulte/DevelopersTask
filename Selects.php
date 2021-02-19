<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "developerstask");

 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM product_types";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<select>" ;
            
                
            
        while($row = mysqli_fetch_array($result)){
            $select = "<option value=" . $row['ID'].">" . $row['Name'] . "</option>";
            echo $select;
           /* echo "<tr>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                
            echo "</tr>";*/
        }
        echo "</select>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
<select class="List_box" id="UI_List_Box" onchange="getForm(this)" name="List_box" size="1">
    <option value="1">DISC</option>
    <option value="2">BOOK</option>
    <option value="3">CHAIR</option>
</select>