<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" 
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>

    <div class="head_content"></div>
  
    <div class="gen">
        <div class="general">
            <h2>General</h2>
        </div>
        <div class="row_cards">
            <div class="cards">
                <div class="num">1</div>
                <div class="detail">
                    <div class="item_name">Total items</div>
                    <div class="total_num">3400</div>
                </div>
            </div>
            <div class="cards">
                <div class="num">2</div>
                <div class="detail">
                    <div class="item_name">Available items</div>
                    <div class="total_num">2500</div>
                </div>
            </div>
            <div class="cards">
                <div class="num">3</div>
                <div class="detail">
                    <div class="item_name">Borrowed items</div>
                    <div class="total_num">1230</div>
                </div>
            </div>
            <div class="cards">
                <div class="num">4</div>
                <div class="detail">
                    <div class="item_name">Repaired items</div>
                    <div class="total_num">300</div>
                </div>
            </div>
        </div>    
        
        <div class="general">
            <h2>Electronics</h2>
        </div>
        <div class="row_cards">
            <div class="cards">
                <div class="num">1</div>
                <div class="detail">
                    <div class="item_name">Total items</div>
                    <div class="total_num">3400</div>
                </div>
            </div>
            <div class="cards">
                <div class="num">2</div>
                <div class="detail">
                    <div class="item_name">Available items</div>
                    <div class="total_num">2500</div>
                </div>
            </div>
            <div class="cards">
                <div class="num">3</div>
                <div class="detail">
                    <div class="item_name">Borrowed items</div>
                    <div class="total_num">1230</div>
                </div>
            </div>
            <div class="cards">
                <div class="num">4</div>
                <div class="detail">
                    <div class="item_name">Repaired items</div>
                    <div class="total_num">300</div>
                </div>
            </div>
        </div>

        <div class="general">
            <h2>Mechanics</h2>
        </div>
        <div class="row_cards">
            <div class="cards">
                <div class="num">1</div>
                <div class="detail">
                    <div class="item_name">Total items</div>
                    <div class="total_num">3400</div>
                </div>
            </div>
            <div class="cards">
                <div class="num">2</div>
                <div class="detail">
                    <div class="item_name">Available items</div>
                    <div class="total_num">2500</div>
                </div>
            </div>
            <div class="cards">
                <div class="num">3</div>
                <div class="detail">
                    <div class="item_name">Borrowed items</div>
                    <div class="total_num">1230</div>
                </div>
            </div>
            <div class="cards">
                <div class="num">4</div>
                <div class="detail">
                    <div class="item_name">Repaired items</div>
                    <div class="total_num">300</div>
                </div>
            </div>
        </div>

        <table>
            <tr>
                <th>Item ID</th>
                <th>Item Name</th>
                <th>Status</th>
                <th>Item Type</th>
                <th>Office</th>
                <th>Serial Number</th>
                <th>Engraved Number</th>
                <th>Department</th>
                <th>Admin Name</th>
                <th>Location</th>
                <th>User</th>
                <th>Year of Purchase</th>
            </tr>
            <?php include 'fetch_items.php'; ?>
        </table>

    </div>
    <!-- <script src="script.js"></script> -->
</body>
<script>
    $(document).ready(function() {
        // Load header.html content into .head_content div
        $('.head_content').load('header.php', function(response, status, xhr) {
            if (status == "error") {
                console.log("Error loading header.php: " + xhr.status + " " + xhr.statusText);
                // Display error message or handle the error accordingly
            }
        });
    });
</script>
</html>
