<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <!-- MDB icon -->
    <link rel="icon" href="../img/mdb-favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="../css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="../css/style.css">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <?php include '../menu_bar.php'; ?>
    <style>
        table.dataTable thead .sorting:after,
        table.dataTable thead .sorting:before,
        table.dataTable thead .sorting_asc:after,
        table.dataTable thead .sorting_asc:before,
        table.dataTable thead .sorting_asc_disabled:after,
        table.dataTable thead .sorting_asc_disabled:before,
        table.dataTable thead .sorting_desc:after,
        table.dataTable thead .sorting_desc:before,
        table.dataTable thead .sorting_desc_disabled:after,
        table.dataTable thead .sorting_desc_disabled:before {
            bottom: .5em;
        }
    </style>
</head>

<body>
    <!-- Start your project here-->
    <script>
        $(document).ready(function() {
            $('#dtBasicExample').DataTable();
            $('.dataTables_length').addClass('bs-select');
        });
    </script>
    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th class="th-sm">categories name
                </th>
                <th class="th-sm">color
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../config.php";
            $sql = "SELECT * FROM categories_cours;";
            $result = mysqli_query($conn, $sql) or die("Query Failed.");
            while ($row = mysqli_fetch_assoc($result)) {
                echo
                    "<tr>
                <td>{$row['categories']}</td>
                <td><span class='badge badge-{$row['color']}'>{$row['categories']}</span></td>
            </tr>";
            }
            ?>
        </tbody>

    </table>

    <a href="<?php echo "{$url}/admin/categories_cours.php" ?>"> <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Add New categorie</button></a>

    <!-- End your project here-->
    <!-- jQuery -->

</body>
<?php include "../footer.php"; ?>

</html>