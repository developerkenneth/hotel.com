<?php
$currentPage = 'index';
$currentDate = date("l, d F Y");

$totalRooms = 42;
$totalBookings = 128;
$totalGuests = 96;
$totalRevenue = 4250000;

$recentBookings = [
    [
        "id" => "BK1001",
        "guest" => "John Doe",
        "room" => "Deluxe Room 101",
        "checkin" => "20 Aug 2026",
        "checkout" => "23 Aug 2026",
        "amount" => "₦150,000",
        "status" => "Confirmed"
    ],
    [
        "id" => "BK1002",
        "guest" => "Mary Jane",
        "room" => "Suite Room 203",
        "checkin" => "21 Aug 2026",
        "checkout" => "24 Aug 2026",
        "amount" => "₦280,000",
        "status" => "Pending"
    ],
    [
        "id" => "BK1003",
        "guest" => "Michael Brown",
        "room" => "Standard Room 105",
        "checkin" => "22 Aug 2026",
        "checkout" => "25 Aug 2026",
        "amount" => "₦100,000",
        "status" => "Checked-in"
    ],
    [
        "id" => "BK1004",
        "guest" => "Sarah Wilson",
        "room" => "Deluxe Room 102",
        "checkin" => "23 Aug 2026",
        "checkout" => "26 Aug 2026",
        "amount" => "₦150,000",
        "status" => "Cancelled"
    ],
    [
        "id" => "BK1005",
        "guest" => "David Smith",
        "room" => "Executive Room 302",
        "checkin" => "24 Aug 2026",
        "checkout" => "27 Aug 2026",
        "amount" => "₦200,000",
        "status" => "Confirmed"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>

<body>

<input type="checkbox" id="menu-toggle" class="menu-toggle">

<label for="menu-toggle" class="overlay"></label>

<?php include 'sidebar.php'; ?>

<main class="main-content">

    <header class="top-header">

        <div class="header-left">
            <label for="menu-toggle" class="menu-button">
                <span></span>
                <span></span>
                <span></span>
            </label>
        </div>

        <div class="header-right">

            <div class="search-box">
                <span class="search-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/></svg></span>
                <input type="text" placeholder="Search here...">
            </div>

            <button class="notification-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16"><path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"/></svg>
                <span class="notification-count">5</span>
            </button>

            <div class="admin-profile">

                <div class="admin-avatar">
                    A
                </div>

                <div class="admin-info">
                    <strong>Admin</strong>
                    <span>Super Admin</span>
                </div>

                <span class="profile-arrow">⌄</span>

            </div>

        </div>

    </header>

    <section class="dashboard-content">

        <div class="page-heading">

            <div>
                <h1>Dashboard</h1>
                <p>Welcome back, Admin!</p>
            </div>

            <span class="current-date">
                <?php echo $currentDate; ?>
            </span>

        </div>

        <div class="stats-grid">

            <div class="stat-card">
                <div class="stat-icon orange-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-steps" viewBox="0 0 16 16"><path d="M.5 0a.5.5 0 0 1 .5.5v15a.5.5 0 0 1-1 0V.5A.5.5 0 0 1 .5 0M2 1.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm2 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-6a.5.5 0 0 1-.5-.5zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5z"/></svg>
                </div>

                <div class="stat-details">
                    <p>Total Rooms</p>
                    <h2><?php echo $totalRooms; ?></h2>
                    <span class="stat-change">
                        ↑ 12 new this month
                    </span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon orange">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journals" viewBox="0 0 16 16"><path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2"/><path d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0"/></svg>
                </div>

                <div class="stat-details">
                    <p>Total Bookings</p>
                    <h2><?php echo $totalBookings; ?></h2>
                    <span class="stat-change">
                        ↑ 8 new today
                    </span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon orange-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-heart-eyes" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/><path d="M11.315 10.014a.5.5 0 0 1 .548.736A4.5 4.5 0 0 1 7.965 13a4.5 4.5 0 0 1-3.898-2.25.5.5 0 0 1 .548-.736h.005l.017.005.067.015.252.055c.215.046.515.108.857.169.693.124 1.522.242 2.152.242s1.46-.118 2.152-.242a27 27 0 0 0 1.109-.224l.067-.015.017-.004.005-.002zM4.756 4.566c.763-1.424 4.02-.12.952 3.434-4.496-1.596-2.35-4.298-.952-3.434m6.488 0c1.398-.864 3.544 1.838-.952 3.434-3.067-3.554.19-4.858.952-3.434"/></svg>
                </div>

                <div class="stat-details">
                    <p>Total Guests</p>
                    <h2><?php echo $totalGuests; ?></h2>
                    <span class="stat-change">
                        ↑ 5 new this week
                    </span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon orange">
                    ₦
                </div>

                <div class="stat-details">
                    <p>Total Revenue</p>
                    <h2>
                        ₦<?php echo number_format($totalRevenue); ?>
                    </h2>
                    <span class="stat-change">
                        ↑ 18% from last month
                    </span>
                </div>
            </div>

        </div>

        <section class="bookings-section">

            <div class="section-header">

                <div>
                    <h2>Recent Bookings</h2>
                    <p>Latest reservations made by guests</p>
                </div>

                <a href="#" class="primary-button">
                    View All Bookings
                </a>

            </div>

            <div class="table-container">

                <table>

                    <thead>
                        <tr>
                            <th>Booking ID</th>
                            <th>Guest Name</th>
                            <th>Room</th>
                            <th>Check-in</th>
                            <th>Check-out</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach ($recentBookings as $booking): ?>

                            <tr>

                                <td>
                                    <strong>
                                        <?php echo $booking["id"]; ?>
                                    </strong>
                                </td>

                                <td>
                                    <?php echo $booking["guest"]; ?>
                                </td>

                                <td>
                                    <?php echo $booking["room"]; ?>
                                </td>

                                <td>
                                    <?php echo $booking["checkin"]; ?>
                                </td>

                                <td>
                                    <?php echo $booking["checkout"]; ?>
                                </td>

                                <td>
                                    <strong>
                                        <?php echo $booking["amount"]; ?>
                                    </strong>
                                </td>

                                <td>

                                    <?php
                                    $statusClass = "";

                                    if ($booking["status"] === "Confirmed") {
                                        $statusClass = "confirmed";
                                    } elseif ($booking["status"] === "Pending") {
                                        $statusClass = "pending";
                                    } elseif ($booking["status"] === "Checked-in") {
                                        $statusClass = "checked-in";
                                    } elseif ($booking["status"] === "Cancelled") {
                                        $statusClass = "cancelled";
                                    }
                                    ?>

                                    <span class="status <?php echo $statusClass; ?>">
                                        <?php echo $booking["status"]; ?>
                                    </span>

                                </td>

                                <td>

                                    <div class="table-actions">

                                        <a href="#" class="action-button view" title="View booking">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-binoculars" viewBox="0 0 16 16"><path d="M3 2.5A1.5 1.5 0 0 1 4.5 1h1A1.5 1.5 0 0 1 7 2.5V5h2V2.5A1.5 1.5 0 0 1 10.5 1h1A1.5 1.5 0 0 1 13 2.5v2.382a.5.5 0 0 0 .276.447l.895.447A1.5 1.5 0 0 1 15 7.118V14.5a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 14.5v-3a.5.5 0 0 1 .146-.354l.854-.853V9.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v.793l.854.853A.5.5 0 0 1 7 11.5v3A1.5 1.5 0 0 1 5.5 16h-3A1.5 1.5 0 0 1 1 14.5V7.118a1.5 1.5 0 0 1 .83-1.342l.894-.447A.5.5 0 0 0 3 4.882zM4.5 2a.5.5 0 0 0-.5.5V3h2v-.5a.5.5 0 0 0-.5-.5zM6 4H4v.882a1.5 1.5 0 0 1-.83 1.342l-.894.447A.5.5 0 0 0 2 7.118V13h4v-1.293l-.854-.853A.5.5 0 0 1 5 10.5v-1A1.5 1.5 0 0 1 6.5 8h3A1.5 1.5 0 0 1 11 9.5v1a.5.5 0 0 1-.146.354l-.854.853V13h4V7.118a.5.5 0 0 0-.276-.447l-.895-.447A1.5 1.5 0 0 1 12 4.882V4h-2v1.5a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5zm4-1h2v-.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm4 11h-4v.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5zm-8 0H2v.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5z"/></svg>
                                        </a>

                                        <a href="#" class="action-button delete" title="Delete booking">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16"><path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/><path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.4 5.4 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2z"/></svg>
                                        </a>

                                    </div>

                                </td>

                            </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

            <div class="mobile-bookings">

                <?php foreach ($recentBookings as $booking): ?>

                    <div class="mobile-booking-card">

                        <div class="mobile-booking-top">

                            <strong>
                                <?php echo $booking["id"]; ?>
                            </strong>

                            <?php
                            $statusClass = "";

                            if ($booking["status"] === "Confirmed") {
                                $statusClass = "confirmed";
                            } elseif ($booking["status"] === "Pending") {
                                $statusClass = "pending";
                            } elseif ($booking["status"] === "Checked-in") {
                                $statusClass = "checked-in";
                            } elseif ($booking["status"] === "Cancelled") {
                                $statusClass = "cancelled";
                            }
                            ?>

                            <span class="status <?php echo $statusClass; ?>">
                                <?php echo $booking["status"]; ?>
                            </span>

                        </div>

                        <h3>
                            <?php echo $booking["guest"]; ?>
                        </h3>

                        <p>
                            <?php echo $booking["room"]; ?>
                        </p>

                        <div class="mobile-booking-info">

                            <span>
                                Check-in:
                                <strong>
                                    <?php echo $booking["checkin"]; ?>
                                </strong>
                            </span>

                            <span>
                                Check-out:
                                <strong>
                                    <?php echo $booking["checkout"]; ?>
                                </strong>
                            </span>

                        </div>

                        <div class="mobile-booking-bottom">

                            <strong>
                                <?php echo $booking["amount"]; ?>
                            </strong>

                            <div class="table-actions">

                                <a href="#" class="action-button view">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-binoculars" viewBox="0 0 16 16"><path d="M3 2.5A1.5 1.5 0 0 1 4.5 1h1A1.5 1.5 0 0 1 7 2.5V5h2V2.5A1.5 1.5 0 0 1 10.5 1h1A1.5 1.5 0 0 1 13 2.5v2.382a.5.5 0 0 0 .276.447l.895.447A1.5 1.5 0 0 1 15 7.118V14.5a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 14.5v-3a.5.5 0 0 1 .146-.354l.854-.853V9.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v.793l.854.853A.5.5 0 0 1 7 11.5v3A1.5 1.5 0 0 1 5.5 16h-3A1.5 1.5 0 0 1 1 14.5V7.118a1.5 1.5 0 0 1 .83-1.342l.894-.447A.5.5 0 0 0 3 4.882zM4.5 2a.5.5 0 0 0-.5.5V3h2v-.5a.5.5 0 0 0-.5-.5zM6 4H4v.882a1.5 1.5 0 0 1-.83 1.342l-.894.447A.5.5 0 0 0 2 7.118V13h4v-1.293l-.854-.853A.5.5 0 0 1 5 10.5v-1A1.5 1.5 0 0 1 6.5 8h3A1.5 1.5 0 0 1 11 9.5v1a.5.5 0 0 1-.146.354l-.854.853V13h4V7.118a.5.5 0 0 0-.276-.447l-.895-.447A1.5 1.5 0 0 1 12 4.882V4h-2v1.5a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5zm4-1h2v-.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm4 11h-4v.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5zm-8 0H2v.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5z"/></svg>
                                </a>

                                <a href="#" class="action-button delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16"><path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/><path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.4 5.4 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2z"/></svg>
                                </a>

                            </div>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        </section>

    </section>

</main>

</body>
</html>