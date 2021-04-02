<?php 

include('filters.php');
require_once 'delete.php';

?>


<!DOCTYPE html>
<html>
    <head>
        <title> database </title>
       <style>
            table,tr,th,td
            {
                border: 1px solid black;

            }
        </style>
    </head>
    <body>
     
        <form action="" method="post">
			<label>Date</label>
            <input type="submit" name="DateASC" value="Ascending">
            <input type="submit" name="DateDESC" value="Descending">
			<br>
            <label>Email</label>
            <input type="submit" name="EmailASC" value="Ascending">
            <input type="submit" name="EmailDESC" value="Descending">
			<br>

			<input type="text" name="valueToSearch" placeholder="Value To Search">
            <input type="submit" name="search" value="Filter">
            <br>
                       
            <?php 

                if(isset($_SESSION['message'])) {
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                }
            ?>

            <table>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Date</th>
					<th>Delete</th>	
                </tr>
                <!-- populate table from mysql database -->
                <?php 
				
				while ($row = $result->fetch_assoc()):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['emails'];?></td>
                    <td><?php echo $row['date'];?></td>
					<td><a href='delete.php?delete=<?php echo $row['id']; ?>'>Delete</a></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
     
    </body>
</html>