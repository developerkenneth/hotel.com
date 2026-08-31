<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overview</title>
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
            <h1 class="page-title">Welcome Admin!</h1>

            <div class="stats-grid">
                <div class="stat-card">
                    <span class="card-label">Pending bookings</span>
                    <span class="card-value">0</span>
                </div>

                <div class="stat-card">
                    <span class="card-label">Check-ins today</span>
                    <span class="card-value">0</span>
                </div>

                <div class="stat-card">
                    <span class="card-label">Unread messages</span>
                    <span class="card-value">0</span>
                </div>

                <div class="stat-card">
                    <span class="card-label">Occupancy</span>
                    <span class="card-value">0%</span>
                </div>
            </div>
        </main>
    </div>
</body>
</html>