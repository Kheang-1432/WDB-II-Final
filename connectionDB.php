<!-- Include Connection Datanase -->
<?php include 'connection.php'; ?>

<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Delcare Variables Getter from BootStrap
        $getName = $_POST['inputName'];
        $getAddress = $_POST['inputAddress'];
        $getHireDate = $_POST['inputHireDate'];
        $getEmail = $_POST['inputEmail'];
        $getPosition = $_POST['inputPosition'];
        $getSalary = $_POST['inputSalary'];

        // Prepare SQL Statement
        $stmt=$connection->prepare('CALL pro_InsertEmployee(?,?,?,?,?,?)');
        $stmt->bind_param('sssssd', $getName, $getAddress, $getHireDate, $getEmail, $getPosition, $getSalary);
        // s = string, s = string, s = string, s = string, s = string, s = string, d = float

        if($stmt->execute()){
            echo "You have inserted data successfully";
        }else{
            echo "Failed to add data to the database ";
        }

        // Call DataTable.php
        header('Location: ListData.php');

        $stmt->close();
        $connection->close();
    }
?>