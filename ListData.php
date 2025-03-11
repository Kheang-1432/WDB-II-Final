<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- link DataTable get from Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.bootstrap5.css">
    
    <!-- link stylesheet for bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {margin: 0; padding: 40px;}
    </style>

</head>
<body>
    <div class="table">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>EMP #</th>
                    <th>FIRSTNAME</th>
                    <th>LASTNAME</th>
                    <th>SALARY</th>
                    <th>HIREDATE</th>
                    <th>ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>Mengkheang</td>
                    <td>Keo</td>
                    <td>$1,200.00</td>
                    <td>2025-01-11</td>
                    <td>Edit/Delete</td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>Connor</td>
                    <td>Keo</td>
                    <td>$1,000.00</td>
                    <td>2025-03-29</td>
                    <td>Edit/Delete</td>
                </tr>
                <tr>
                    <td>003</td>
                    <td>Sovann</td>
                    <td>Makara</td>
                    <td>$800.00</td>
                    <td>2025-06-21</td>
                    <td>Edit/Delete</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>EMP #</th>
                    <th>FIRSTNAME</th>
                    <th>LASTNAME</th>
                    <th>SALARY</th>
                    <th>HIREDATE</th>
                    <th>ACTIONS</th>
                </tr>
            </tfoot>
        </table>
    </div>
    
</body>

    <!-- link DataTable get from JavaScript -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap5.js"></script> 
    
    <!-- link javascript for bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>$('#example').DataTable();</script>

</html>