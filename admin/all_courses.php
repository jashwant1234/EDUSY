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
            bottom: 10em;
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
                <th class="th-sm">cours id
                </th>
                <th class="th-sm">cours name
                </th>
                <th class="th-sm">cours image
                </th>
                <th class="th-sm">tag1
                </th>
                <th class="th-sm">tag2
                </th>
                <th class="th-sm">tag3
                </th>
                <th class="th-sm">short desc
                </th>
                <th class="th-sm">long desc
                </th>
                <th class="th-sm">video link
                </th>
                <th class="th-sm">trainer name
                </th>
                <th class="th-sm">duration
                </th>
                <th class="th-sm">cours price
                </th>
                <th class="th-sm">cours discount
                </th>
                <th class="th-sm">top cours
                </th>
                <th class="th-sm">date
                </th>
                <th class="th-sm">edit
                </th>
                <th class="th-sm">delete
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../config.php";
            $sql = "SELECT * FROM courses;";
            $result = mysqli_query($conn, $sql) or die("Query Failed.");
            while ($row = mysqli_fetch_assoc($result)) {
                echo
                    "<tr>
                <td>{$row['cours_id']}</td>
                <td>{$row['cours_name']}</td>
                <td><img src='img/cours/{$row['cours_img']}' width='50' height='50' alt='img'></td>
                <td>{$row['tag_1']}</td>
                <td>{$row['tag_2']}</td>
                <td>{$row['tag_3']}</td>
                <td>{$row['short_desc']}</td>
                <td>{$row['long_desc']}</td>
                <td>{$row['link']}</td>
                <td>{$row['trainer_id']}</td>
                <td>{$row['duration']}</td>
                <td>{$row['cours_price']}</td>
                <td>"; if($row['cours_discount'] == null) echo "null";else echo $row['cours_discount']; echo "</td>
                <td>"; if($row['top_cours'] == null) echo "null";else echo $row['top_cours']; echo "</td>
                <td>{$row['date']}</td>
                <td><a href='{$url}/admin/cours_update.php?id={$row['cours_id']}'><i class='far fa-edit'></i></a></td>
                <td><a href='{$url}/admin/cours_delete.php?id={$row['cours_id']}'><i class='fas fa-trash'></i></a></td>
            </tr>"; 
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th class="th-sm">cours id
                </th>
                <th class="th-sm">cours name
                </th>
                <th class="th-sm">cours image
                </th>
                <th class="th-sm">tag1
                </th>
                <th class="th-sm">tag2
                </th>
                <th class="th-sm">tag3
                </th>
                <th class="th-sm">short desc
                </th>
                <th class="th-sm">long desc
                </th>
                <th class="th-sm">video link
                </th>
                <th class="th-sm">trainer name
                </th>
                <th class="th-sm">duration
                </th>
                <th class="th-sm">cours price
                </th>
                <th class="th-sm">cours discount
                </th>
                <th class="th-sm">top cours
                </th>
                <th class="th-sm">date
                </th>
                <th class="th-sm">edit
                </th>
                <th class="th-sm">delete
                </th>
            </tr>
        </tfoot>
    </table>



    <!-- End your project here-->
    <!-- jQuery -->

</body>
<?php include "../footer.php"; ?>

</html>