<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" 
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="department.css">
    <script src="script.js"></script> <!-- Include script.js -->
    <title>Admin</title>
</head>
<body>
    <div class="head_content_department"></div>
    
    <div class="slap"> 
        <h2>Department</h2>
        <button>
           <a href="create_department.php">+ Create Department</a> 
        </button>
     
        <table>
            <tr>
                <th>Department Code</th>
                <th>Department Name</th>
                <th>Department Email</th>
                <th>Department Contact</th>
                <th>Actions</th>
            </tr>

            <?php include 'fetch_departments.php'; ?>
        </table>
    </div>      
    <div class="copyright">&copy; UIRI INVENTORY MANAGEMENT SYSTEM
        <span>-sunstudents</span>
    </div>
</body>

<script class="text/javascript">
    $('.head_content_department').load('header.php');
</script>
</html>
