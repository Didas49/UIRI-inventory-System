<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" 
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="admin.css">
    <title>Admin</title>
</head>
<body>
    <div class="head_content1"></div>
    
    <div class="slap"> 
        <h2>Administrators</h2>
    <div> 
        <button>
          <a href="add_admin_items.php">+ Add Admin</a>  
        </button>
        
        <table>
            <tr>
                <th>Admin Id</th>
                <th>Admin Name</th>
                <th>Admin Email</th>
                <th>Admin Contact</th>
                <th>Actions</th>
            </tr>
            <?php include 'fetch_admins.php'; ?>
        </table>
    </div>
    <!-- <button>
          <a href="add_admin_items.php">Delete</a>  
        </button> -->
    </div>
    <div class="copyright">&copy; UIRI INVENTORY MANAGEMENT SYSTEM
        <span>-sunstudents</span>
    </div>
    <script src="script.js"></script>
</body>

<script  class="text/javascript">
    $('.head_content1').load('header.php')

</script>
</html>