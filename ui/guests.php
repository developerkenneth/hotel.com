<?php 
$currentPage = 'guests';

$guests = [
    [
        'id'     => 'GST-01',
        'name'   => 'John Doe',
        'email'  => 'john@example.com',
        'phone'  => '+234 801 234 5678',
        'stays'  => '4 Stays'
    ],
    [
        'id'     => 'GST-02',
        'name'   => 'Mary Jane',
        'email'  => 'mary@example.com',
        'phone'  => '+234 802 987 6543',
        'stays'  => '2 Stays'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guests Directory - Hotel.com</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <input type="checkbox" id="menu-toggle" class="menu-toggle">
    <div class="overlay"></div>

    <?php require_once 'sidebar.php'; ?>

    <main class="main-content">
        <header class="top-header">
            <label for="menu-toggle" class="menu-button"><span></span><span></span><span></span></label>
            <div class="header-right">
                <div class="search-box">
                    <span class="search-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 1 1 11 0"/>
                        </svg>
                    </span>
                    <input type="text" placeholder="Search guests...">
                </div>
            </div>
        </header>

        <section class="dashboard-content">
            <div class="page-heading">
                <div>
                    <h1>Guest Directory</h1>
                    <p>Manage guest contact details and stay history</p>
                </div>
            </div>

            <div class="bookings-section">
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Guest ID</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Total Stays</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($guests as $guest): ?>
                                <tr>
                                    <td><strong><?= htmlspecialchars($guest['id']) ?></strong></td>
                                    <td><?= htmlspecialchars($guest['name']) ?></td>
                                    <td><?= htmlspecialchars($guest['email']) ?></td>
                                    <td><?= htmlspecialchars($guest['phone']) ?></td>
                                    <td><?= htmlspecialchars($guest['stays']) ?></td>
                                    <td class="table-actions">
                                        <button class="action-button view">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"><path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/><path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/></svg>
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
</body>
</html>