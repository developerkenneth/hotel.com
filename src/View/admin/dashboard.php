<?php

use App\Helpers\View;
use App\Models\Model;

$getAll = new Model();
//get pending bookings
$pending = count($getAll->getAll('bookings', [
    'status' => 'pending'
], 10));
//get current day check-in's
$date = date('Y-m-d');
$checkedInToday = count($getAll->getAll('bookings', [
    'checkin' => $date
], 10));

//get rooms-occupied percentage
$bookedRooms = count($getAll->getAll('bookings', null, 10));
$totalRooms = count($getAll->getAll('rooms', null, 10));
$occupancy = ($bookedRooms/$totalRooms) * 100;
View::handleComponents('admin/header.php');
?>

<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <div class="brand">
                <h2 class="brand-title">Hotel.com</h2>
            </div>

            <?php View::handleComponents('admin/sidebar.php') ?>
        </aside>

        <main class="main-content">
            <h1 class="page-title">Welcome Admin!</h1>

            <div class="stats-grid">
                <div class="stat-card">
                    <span class="card-label">Pending bookings</span>
                    <span class="card-value"><?= $pending ?></span>
                </div>

                <div class="stat-card">
                    <span class="card-label">Check-ins today</span>
                    <span class="card-value"><?= $checkedInToday ?></span>
                </div>

                <div class="stat-card">
                    <span class="card-label">Unread messages</span>
                    <span class="card-value">0</span>
                </div>

                <div class="stat-card">
                    <span class="card-label">Occupancy</span>
                    <span class="card-value"><?= $occupancy . "%" ?></span>
                </div>
            </div>
        </main>
    </div>
</body>

</html>