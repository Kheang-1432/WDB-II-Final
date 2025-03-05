<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Bootstrap</title>

    <!-- link stylesheet for bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <center>
        <div class="col-6 shadow p-3 mt-5 bg-white rounded" style="transform: translate(0, 20%);">
            <form action="connectionDB.php" method="post">
                <h1 class="text-success h2 mt-4">EMPLOYEES FORM BOOTSTRAP</h1>
                <h2 class="text-bg-info h1 mb-4 border border-white rounded"><?php include 'connection.php' ?></h2>

                <!-- Inputs -->
                <input class="form-control mb-3" type="text" name="inputName" placeholder="Enter your name" required>
                <input class="form-control mb-3" type="text" name="inputAddress" placeholder="Enter your address" required>
                <input class="form-control mb-3" type="date" name="inputHireDate" placeholder="Enter your hire date" required>
                <input class="form-control mb-3" type="text" name="inputEmail" placeholder="Enter your email" required>
                <input class="form-control mb-3" type="text" name="inputPosition" placeholder="Enter your position" required>
                <input class="form-control mb-3" type="number" name="inputSalary" placeholder="Enter your salary" required>       

                <!-- Buttons -->
                <div class="d-flex">
                    <button class="btn btn-success w-100 me-2" type="submit">Submit</button>
                    <button class="btn btn-danger w-100 me-2" type="reset">Reset</button>
                    <button type="reset" class="btn btn-info shadow-none me-2 bg-light rounded">Back</button>
                </div>
            </form>
        </div>
    </center>
</body>
</html>
