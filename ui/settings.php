<?php
$currentPage = 'settings';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Settings - Hotel.com</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .settings-card { background: var(--surface); border: 1px solid var(--border); border-radius: 12px; padding: 25px; box-shadow: var(--shadow); max-width: 700px; }
        .form-group { margin-bottom: 20px; display: flex; flex-direction: column; gap: 8px; }
        .form-group label { font-size: 14px; font-weight: 600; }
        .form-group input { padding: 12px; border: 1px solid var(--border); border-radius: 8px; outline: none; font-size: 14px; }
    </style>
</head>
<body>
    <input type="checkbox" id="menu-toggle" class="menu-toggle">
    <div class="overlay"></div>

     <?php include 'sidebar.php'; ?>

    <main class="main-content">
        <header class="top-header">
            <label for="menu-toggle" class="menu-button"><span></span><span></span><span></span></label>
        </header>

        <section class="dashboard-content">
            <div class="page-heading">
                <div>
                    <h1>System Settings</h1>
                    <p>Configure hotel details and preferences</p>
                </div>
            </div>

            <div class="settings-card">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Hotel Name</label>
                        <input type="text" value="Hotel.com Admin">
                    </div>
                    <div class="form-group">
                        <label>Contact Email</label>
                        <input type="email" value="admin@hotel.com">
                    </div>
                    <div class="form-group">
                        <label>Currency Symbol</label>
                        <input type="text" value="₦">
                    </div>
                    <button type="submit" class="primary-button">Save Changes</button>
                </form>
            </div>
        </section>
    </main>
</body>
</html>