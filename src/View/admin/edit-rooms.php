<?php
$room = $data['room'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Room | Hotel.com</title>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">



    <style>
        body {
            margin: 0;
            padding: 40px 20px;
            font-family: Arial, sans-serif;
            background-color: #f4f5f9;
            color: #222;
        }

        .edit-room-container {
            max-width: 850px;
            margin: 0 auto;
        }

        .page-header {
            margin-bottom: 30px;
        }

        .back-link {
            display: inline-block;
            margin-bottom: 20px;
            color: #f68b1e;
            text-decoration: none;
            font-weight: bold;
        }

        .back-link:hover {
            color: #d96e08;
        }

        .page-header h1 {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .page-header p {
            color: #777;
            font-size: 15px;
        }

        .room-id {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 15px;
            background-color: #fff0df;
            color: #e67e12;
            border-radius: 6px;
            font-size: 14px;
        }

        .form-card {
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            margin-bottom: 25px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        .card-heading {
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .card-heading h2 {
            font-size: 20px;
            margin-bottom: 8px;
        }

        .card-heading p {
            font-size: 14px;
            color: #888;
        }

        .form-group {
            margin-bottom: 22px;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-size: 14px;
            font-weight: bold;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 13px;
            border: 1px solid #ddd;
            border-radius: 7px;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            font-size: 14px;
            outline: none;
            background-color: white;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            border-color: #f68b1e;
            box-shadow: 0 0 0 3px rgba(246, 139, 30, 0.12);
        }

        .form-group textarea {
            resize: vertical;
            line-height: 1.6;
        }

        .form-group small {
            display: block;
            margin-top: 8px;
            color: #888;
            font-size: 12px;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 15px;
            margin-top: 30px;
        }

        .btn {
            display: inline-block;
            padding: 13px 24px;
            border-radius: 7px;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
            cursor: pointer;
            border: none;
        }

        .btn-cancel {
            background-color: white;
            color: #444;
            border: 1px solid #ddd;
        }

        .btn-cancel:hover {
            background-color: #eee;
        }

        .btn-save {
            background-color: #f68b1e;
            color: white;
        }

        .btn-save:hover {
            background-color: #d96e08;
        }

        @media (max-width: 600px) {
            body {
                padding: 25px 12px;
            }

            .form-card {
                padding: 20px;
            }

            .page-header h1 {
                font-size: 26px;
            }

            .form-actions {
                flex-direction: column;
            }

            .btn {
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <div class="edit-room-container">

        <!-- Page Header -->
        <div class="page-header">

            <div>
                <a href="javascript:history.back()" class="back-link">
                    <i class="bi bi-arrow-left"></i>
                    Back to Rooms
                </a>

                <h1>Edit Room</h1>

                <p>Update the details and settings for this room.</p>
            </div>

            <div class="room-id">
                <i class="bi bi-door-open"></i>
                Room ID: <?= htmlspecialchars((int) $room['id']) ?>
            </div>

        </div>


        <!-- Edit Room Form -->
        <form action="" method="POST" class="edit-room-form" id="edit-room-form">

            <!-- Room Information -->
            <div class="form-card">

                <div class="card-heading">
                    <div class="heading-icon">
                        <i class="bi bi-building"></i>
                    </div>

                    <div>
                        <h2>Room Information</h2>
                        <p>Update the basic information about this room.</p>
                    </div>
                </div>


                <!-- Room Number -->
                <div class="form-group">
                    <label for="room_number">Room Number</label>
                    <input
                        type="text"
                        id="room_number"
                        name="room_number"
                        value="<?= htmlspecialchars((string) ($room['room_number'] ?? '')) ?>"
                        placeholder="e.g. 101"
                        required>
                </div>

                <!-- Room Type -->
                <div class="form-group">
                    <label for="room_type">Room Type</label>
                    <input
                        type="text"
                        id="room_type"
                        name="room_type"
                        value="<?= htmlspecialchars($room['room_type'] ?? '') ?>"
                        placeholder="e.g. Deluxe Room"
                        required>
                </div>

                <!-- Floor -->
                <div class="form-group">
                    <label for="floor">Floor</label>
                    <input
                        type="number"
                        id="floor"
                        name="floor"
                        value="<?= htmlspecialchars((string) ($room['floor'] ?? '')) ?>"
                        placeholder="Enter floor number"
                        min="0"
                        required>
                </div>

                <!-- Price -->
                <div class="form-group">
                    <label for="price">Price per Night (₦)</label>
                    <input
                        type="number"
                        id="price"
                        name="price"
                        value="<?= htmlspecialchars((string) ($room['price'] ?? '')) ?>"
                        placeholder="Enter room price"
                        min="0"
                        step="0.01"
                        required>
                </div>

                <!-- Capacity -->
                <div class="form-group">
                    <label for="capacity">Room Capacity</label>
                    <input
                        type="number"
                        id="capacity"
                        name="capacity"
                        value="<?= htmlspecialchars((string) ($room['capacity'] ?? '')) ?>"
                        placeholder="Number of guests"
                        min="1"
                        required>
                </div>

                <!-- Description -->
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea
                        id="description"
                        name="description"
                        rows="5"
                        placeholder="Describe the room"
                        required><?= htmlspecialchars($room['description'] ?? '') ?></textarea>
                </div>

                <!-- Amenities -->
                <div class="form-group">
                    <label for="amenities">Amenities</label>
                    <textarea
                        id="amenities"
                        name="amenities"
                        rows="3"
                        placeholder="Free Wi-Fi, Air Conditioning, Smart TV"
                        required><?= htmlspecialchars($room['amenities'] ?? '') ?></textarea>

                    <small>Separate amenities with commas.</small>
                </div>

                <!-- Status -->
                <div class="form-group">
                    <label for="status">Room Status</label>
                    <select id="status" name="status" required>
                        <option value="available" <?= ($room['status'] ?? '') === 'available' ? 'selected' : '' ?>>
                            Available
                        </option>

                        <option value="reserved" <?= ($room['status'] ?? '') === 'reserved' ? 'selected' : '' ?>>
                            Reserved
                        </option>

                        <option value="occupied" <?= ($room['status'] ?? '') === 'occupied' ? 'selected' : '' ?>>
                            Occupied
                        </option>

                        <option value="cleaning" <?= ($room['status'] ?? '') === 'cleaning' ? 'selected' : '' ?>>
                            Cleaning
                        </option>

                        <option value="maintenance" <?= ($room['status'] ?? '') === 'maintenance' ? 'selected' : '' ?>>
                            Maintenance
                        </option>
                    </select>
                </div>


                <!-- Form Actions -->
                <div class="form-actions">

                    <a href="javascript:history.back()" class="btn btn-cancel">
                        Cancel
                    </a>

                    <button type="submit" class="btn btn-save">
                        <i class="bi bi-check2-circle"></i>
                        Save Changes
                    </button>

                </div>

        </form>

    </div>
    <script>
        const form = document.getElementById("edit-room-form");

        form.addEventListener("submit", async function(event) {
            event.preventDefault();

            const formData = new FormData(form);

            const data = {

                id: <?= (int) $room['id'] ?>,
                room_number: formData.get("room_number"),
                room_type: formData.get("room_type"),
                floor: formData.get("floor"),
                price: formData.get("price"),
                capacity: formData.get("capacity"),
                description: formData.get("description"),
                amenities: formData.get("amenities"),
                status: formData.get("status")

            };

            try {
                const response = await fetch(
                    `/hotel.com/rooms/edit-room/<?= (int) $room['id'] ?>`, {
                        method: "PATCH",
                        headers: {
                            "Content-Type": "application/json"
                        },
                        body: JSON.stringify(data)
                    }
                );


                const result = await response.json();

                if (response.ok && result.success) {
                    alert("Room updated successfully!");
                    window.location.href = "/hotel.com/admin/rooms";
                } else {
                    alert(result.message || "Failed to update room.");
                }

            } catch (error) {
                console.error("Error:", error);
                alert("Something went wrong while updating the room.");
            }
        });
    </script>

</body>

</html>