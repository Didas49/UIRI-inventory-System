<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="header.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function () {
            var path = window.location.pathname.split("/").pop();
            $('.links').each(function () {
                var href = $(this).attr('href');
                if (path === href) {
                    $(this).addClass('active');
                }
            });
        });
    </script>
</head>

<body>
    <header>
        <h1>UIRI Inventory System</h1>
        <nav>
            <ul>
                <ul>
                    <li><a href="dashboard.php" class="links">Dashboard</a></li>
                    <li><a href="department.php" class="links">Department</a></li>
                    <li><a href="admin.php" class="links">Administrator</a></li>
                    <li><a href="office.php" class="links">Office</a></li>
                    <li><a href="Add_item.php" class="links">Add item</a></li>
                </ul>
            </ul>
        </nav>
    </header>

    <div class="sidebar">
        <nav>
            <ul>
                <li><a href="dashboard.php" class="links">Dashboard</a></li>
                <li><a href="department.php" class="links">Department</a></li>
                <li><a href="admin.php" class="links">Administrator</a></li>
                <li><a href="office.php" class="links">Office</a></li>
                <li><a href="Add_item.php" class="links">Add item</a></li>
            </ul>
        </nav>
    </div>
</body>

</html>

