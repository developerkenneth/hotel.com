<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings</title>
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
            <h1 class="page-title">Bookings</h1>

            <div class="table-container">
                <table class="bookings-table">
                    <thead>
                        <tr>
                            <th>Guest</th>
                            <th>Room</th>
                            <th>Dates</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="guest-info">
                                    <span class="guest-name">Nweze Chibuikem</span>
                                    <span class="guest-contact">09161426400 · chibuikemnweze2020@gmail.com</span>
                                </div>
                            </td>
                            <td class="room-type">Family Room</td>
                            <td class="booking-dates">2026-02-11 &rarr; 2026-07-11</td>
                            <td>
                                <div class="select-wrapper">
                                    <select class="status-select">
                                        <option value="confirmed" selected>confirmed</option>
                                        <option value="pending">pending</option>
                                        <option value="cancelled">cancelled</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>