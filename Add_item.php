<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" 
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="Add_item.css">
    <title>Add Items</title>
</head>

<body>
    <div class="head_content2"></div>
    <div class="container">

        <h2>Add Items</h2>

        <form action="add_items.php" method="POST">
            <div class="form-row">
                <div class="col">
                    <label for="id">Item-ID:</label>
                    <input type="text" id="Item-ID" name="Item-ID" placeholder="Item-ID" required>
                </div>
        
                <div class="col">
                    <label for="name">Item Name:</label>
                    <input type="text" id="item-Name" name="item-Name" placeholder="item-Name" required>
                </div>
        
                <div class="col">
                    <label for="status">Status</label>
                    <select id="status" name="status">
                        <option value=" ">Select Status</option>
                        <option value="working">working</option>
                        <option value="Repair">Repair</option>
                        <option value="damaged">Damaged</option>
                    </select>
                </div>
        
            </div>
        
            <div class="form-row">
            <div class="col">
                    <label for="item-type">Item Type:</label>
                    <input type="text" id="item-type" name="item-type" placeholder="Item Type" required>
                </div>

                <div class="col">
                    <label for="office">Select office:</label>
                    <select id="office" name="office">
                        <option value=" ">Select office</option>
                        <option value="ICT">ICT</option>
                        <option value="ED">E.D</option>
                        <option value="HR">H.R</option>
                        <option value="Warden">Warden</option>
                    </select>
                </div>
        
                <div class="col">
                    <label for="serial-number">Serial-Number</label>
                    <input type="text" id="Serial-Number" name="Serial-Number" placeholder="Serial-Number" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <label for="engraved-number">Engraved Number</label>
                    <input type="text" id="Engraved-Number" name="Engraved-Number" placeholder="Engraved Number" required>
                </div>
        
                <div class="col">
                    <label for="department">Choose Department</label>
                    <select id="department" name="department">
                        <option value=" ">Select Department</option>
                        <option value="Mechatronics">Mechatronics</option>
                        <option value="Textile">Textile</option>
                        <option value="Wood">Wood technology</option>
                        <option value="Welding">Welding</option>
                    </select>
                </div>

                <div class="col">
                    <label for="admin-name">Admin-Name:</label>
                    <input type="text" id="Admin-Name" name="Admin-Name" placeholder="Admin-Name" required>
                </div>
        
            </div>
        
            <div class="form-row">
        
                <div class="col">
                    <label for="location">Location-site</label>
                    <select id="location" name="location">
                        <option value="location-site">Select location</option>
                        <option value="Nakawa">Nakawa</option>
                        <option value="Namanve">Namanve</option>
                    </select>
                </div>
        
                <div class="col">
                    <label for="user">User</label>
                    <select id="user" name="user">
                        <option value=" ">Select user</option>
                        <option value="Staff">Staff</option>
                        <option value="Students">Students</option>
                        <option value="Cleaners">Cleaners</option>
                    </select>
                </div>
        
                <div class="col">
                    <label for="year-of-purchase">Year-of-Purchase</label>
                    <input type="date" id="Year-of-Purchase" name="Year-of-Purchase" placeholder="Year-of-Purchase" required>
                </div>
            </div>
        
            <div class="submit">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
     
    <div class="copyright">&copy; UIRI INVENTORY MANAGEMENT SYSTEM
        <span>-sunstudents</span>
    </div>

    
</body>
<script class="text/javascript">
    $('.head_content2').load('header.php')

</script>

</html>