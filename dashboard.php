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
            <?php
            $conn = new mysqli("localhost", "root", "", "inventory");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Pagination setup
            $items_per_page = 4; // Number of items to display per page
            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
            $page = $page > 0 ? $page : 1; // Ensure page is a positive integer
            $start = ($page - 1) * $items_per_page;

            // Fetch total number of items
            $sql_total = "SELECT COUNT(*) as total FROM items";
            $result_total = $conn->query($sql_total);
            $row_total = $result_total->fetch_assoc();
            $total_items = $row_total['total'];
            $total_pages = ceil($total_items / $items_per_page);

            // Fetch items for the current page
            $sql = "SELECT item_id, item_name, status_of_item, item_type, office, serial_number, engraved_number, department, admin_name, location_site, item_user, year_of_purchase FROM items LIMIT $start, $items_per_page";
            $result = $conn->query($sql);

            if (!$result) {
                die("Query failed: " . $conn->error);
            }

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . htmlspecialchars($row["item_id"]) . "</td>
                            <td>" . htmlspecialchars($row["item_name"]) . "</td>
                            <td>" . htmlspecialchars($row["status_of_item"]) . "</td>
                            <td>" . htmlspecialchars($row["item_type"]) . "</td>
                            <td>" . htmlspecialchars($row["office"]) . "</td>
                            <td>" . htmlspecialchars($row["serial_number"]) . "</td>
                            <td>" . htmlspecialchars($row["engraved_number"]) . "</td>
                            <td>" . htmlspecialchars($row["department"]) . "</td>
                            <td>" . htmlspecialchars($row["admin_name"]) . "</td>
                            <td>" . htmlspecialchars($row["location_site"]) . "</td>
                            <td>" . htmlspecialchars($row["item_user"]) . "</td>
                            <td>" . htmlspecialchars($row["year_of_purchase"]) . "</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='12'>0 results</td></tr>";
            }

            $conn->close();
            ?>
        </table>

        <!-- Pagination links -->
        <div class="pagination">
            <?php
            if ($page > 1) {
                echo '<a href="?page=' . ($page - 1) . '">&laquo; Previous</a>';
            }

            for ($i = 1; $i <= $total_pages; $i++) {
                if ($i == $page) {
                    echo '<span>' . $i . '</span>';
                } else {
                    echo '<a href="?page=' . $i . '">' . $i . '</a>';
                }
            }

            if ($page < $total_pages) {
                echo '<a href="?page=' . ($page + 1) . '">Next &raquo;</a>';
            }
            ?>
        </div>

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
