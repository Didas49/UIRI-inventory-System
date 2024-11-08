<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" 
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="office.css">
    <title>Office</title>
</head>
<body>
    <div class="head_content_office"></div>
    
    <div class="slap"> 
        <h2>Office</h2>
        <div> 
            <button>
                <a href="add_office_item.php">+ Create Office</a>
            </button>
            <table id="officeTable">
                <thead>
                    <tr>
                        <th>Office-ID</th>
                        <th>Office-Name</th>
                        <th>Room Number</th>
                        <th>Office-Contact</th>
                        <th>Office-email address</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data will be populated here by jQuery -->
                </tbody>
                <?php include "fetch_offices.php";?>
            </table>
        </div>
        <!-- <button>
                <a href="add_office_item.php">Delete</a>
            </button> -->
    </div>
    <div class="copyright">&copy; UIRI INVENTORY MANAGEMENT SYSTEM
        <span>-sunstudents</span>
    </div>
    <script src="script.js"></script>
</body>
<script class="text/javascript">
    $(document).ready(function() {
        $('.head_content_office').load('header.php');

        function fetchOffices() {
            $.ajax({
                url: 'fetch_offices.php',
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    var officeTable = $('#officeTable tbody');
                    officeTable.empty();
                    $.each(data, function(index, office) {
                        officeTable.append('<tr><td>' + office.office_id + '</td><td>' + office.office_name + '</td><td>' + office.room_number + '</td><td>' + office.office_contact + '</td><td>' + office.office_email + '</td></tr>');
                    });
                }
            });
        }

        fetchOffices();
    });
</script>
</html>
