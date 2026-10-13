<?php

use App\Helpers\View;

?>
<!-- header -->

<?php View::handleComponents('admin/header.php');
?>

<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <div class="brand">
                <h2 class="brand-title">Hotel.com</h2>
            </div>

            <?php View::handleComponents('admin/sidebar.php'); ?>
        </aside>

        <main class="main-content">
            <h1 class="page-title">Rooms</h1>

            <div class="table-container">
                <table class="rooms-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Units</th>
                            <th>Open</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="room-name">Standard Room</td>
                            <td>
                                <input type="number" class="table-input" value="15000.00" step="0.01">
                            </td>
                            <td>
                                <input type="number" class="table-input short-input" value="4">
                            </td>
                            <td>
                                <input type="checkbox" class="custom-checkbox" checked>
                            </td>
                            <td>
                                <button type="button" class="btn-delete">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="room-name">Deluxe Room</td>
                            <td>
                                <input type="number" class="table-input" value="25000.00" step="0.01">
                            </td>
                            <td>
                                <input type="number" class="table-input short-input" value="3">
                            </td>
                            <td>
                                <input type="checkbox" class="custom-checkbox" checked>
                            </td>
                            <td>
                                <button type="button" class="btn-delete">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="room-name">Family Room</td>
                            <td>
                                <input type="number" class="table-input" value="40000.00" step="0.01">
                            </td>
                            <td>
                                <input type="number" class="table-input short-input" value="2">
                            </td>
                            <td>
                                <input type="checkbox" class="custom-checkbox" checked>
                            </td>
                            <td>
                                <button type="button" class="btn-delete">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Add a Room Type Form -->
            <section class="add-room-section">
                <h2 class="section-title">Add a Room </h2>
                <form class="room-form" action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="room-name">Room Type</label>
                        <input type="text" id="room-type" name="room_type" class="form-input">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" name="description" class="form-input form-textarea" rows="4"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="price">Price (₦)</label>
                        <input type="number" id="price" name="price" class="form-input">
                    </div>

                    <div class="form-group">
                        <label for="capacity">Capacity</label>
                        <input type="number" id="capacity" name="capacity" class="form-input" value="2">
                    </div>

                    <div class="form-group">
                        <label for="room-number">Room Number</label>
                        <input type="number" id="room-number" name="room-number" class="form-input" value="1">
                    </div>

                    <div class="form-group">
                        <label for="floor">Floor</label>
                        <input type="number" id="floor" name="floor" class="form-input" value="1">
                    </div>


                    <div class="form-group">
                        <label for="floor">Amenities</label>
                        <input type="text" id="amenities" name="amenities" class="form-input">
                        <span>Amenities should be seperated with a comma. example: bath tub, wifi, AC</span>
                    </div>


                    <div class="form-group">
                        <label for="status">Room Status</label>
                        <select name="status" id="status">
                            <option value="available">Available</option>
                            <option value="reserved">Reserved</option>
                            <option value="cleaning">Cleaning</option>
                            <option value="occupied">Occupied</option>
                            <option value="maintenance">Maintenance</option>

                        </select>
                    </div>


                    <!-- <div class="form-group">
                        <label for="room-image">Add Image</label>
                        <input type="file" id="room-image" name="room_image" class="form-input" accept="image/*">
                    </div> -->

                    <button type="submit" class="btn-submit">Add room</button>
                </form>
            </section>
        </main>
    </div>

    <script src="<?php assets('js/addRooms.js'); ?>"></script>
</body>

</html>