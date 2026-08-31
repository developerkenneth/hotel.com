<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <div class="brand">
                <h2 class="brand-title">Hotel.com</h2>
            </div>
            
            <?php include 'sidebar.php'; ?>
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
                <h2 class="section-title">Add a room type</h2>
                <form class="room-form">
                    <div class="form-group">
                        <label for="room-name">Name</label>
                        <input type="text" id="room-name" class="form-input">
                    </div>

                    <div class="form-group">
                        <label for="room-description">Description</label>
                        <textarea id="room-description" class="form-input form-textarea" rows="4"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="room-price">Price (₦)</label>
                        <input type="number" id="room-price" class="form-input">
                    </div>

                    <div class="form-group">
                        <label for="room-capacity">Capacity</label>
                        <input type="number" id="room-capacity" class="form-input" value="2">
                    </div>

                    <div class="form-group">
                        <label for="room-units">Units</label>
                        <input type="number" id="room-units" class="form-input" value="1">
                    </div>

                    <div class="form-group">
                        <label for="room-image">Image URL</label>
                        <input type="text" id="room-image" class="form-input">
                    </div>

                    <button type="submit" class="btn-submit">Add room</button>
                </form>
            </section>
        </main>
    </div>
</body>
</html>