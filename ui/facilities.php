<?php 
$currentPage = 'facilities';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facilities - Hotel.com</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <style>
        .facility-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; }
        .facility-card { background: var(--surface); border: 1px solid var(--border); border-radius: 12px; padding: 20px; box-shadow: var(--shadow); }
        .facility-card h3 { margin-bottom: 8px; font-size: 18px; }
        .facility-card p { color: var(--muted); font-size: 13px; margin-bottom: 15px; }
    </style>
</head>
<body>
    <input type="checkbox" id="menu-toggle" class="menu-toggle">
    <div class="overlay"></div>


     <?php include 'sidebar.php'; ?>

    <main class="main-content">
        <header class="top-header">
            <label for="menu-toggle" class="menu-button"><span></span><span></span><span></span></label>
            <div class="header-right">
                <div class="search-box">
                    <span class="search-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/></svg></span>
                    <input type="text" placeholder="Search facilities...">
                </div>
            </div>
        </header>

        <section class="dashboard-content">
            <div class="page-heading">
                <div>
                    <h1>Hotel Facilities</h1>
                    <p>Manage hotel amenities and service availability</p>
                </div>
                <button class="primary-button">+ Add Facility</button>
            </div>

            <div class="facility-grid">
                <div class="facility-card">
                    <h3><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-water" viewBox="0 0 16 16"><path d="M.036 3.314a.5.5 0 0 1 .65-.278l1.757.703a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.757-.703a.5.5 0 1 1 .372.928l-1.758.703a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0L.314 3.964a.5.5 0 0 1-.278-.65m0 3a.5.5 0 0 1 .65-.278l1.757.703a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.757-.703a.5.5 0 1 1 .372.928l-1.758.703a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0L.314 6.964a.5.5 0 0 1-.278-.65m0 3a.5.5 0 0 1 .65-.278l1.757.703a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.757-.703a.5.5 0 1 1 .372.928l-1.758.703a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0L.314 9.964a.5.5 0 0 1-.278-.65m0 3a.5.5 0 0 1 .65-.278l1.757.703a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.757-.703a.5.5 0 1 1 .372.928l-1.758.703a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.757-.703a.5.5 0 0 1-.278-.65"/></svg> Swimming Pool</h3>
                    <p>Open daily from 6:00 AM to 10:00 PM</p>
                    <span class="status confirmed">Operational</span>
                </div>
                <div class="facility-card">
                    <h3><svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="currentColor" viewBox="0 0 24 24" ><path d="M16.5 9c-2.11 0-3.99 1.2-4.91 3.05-.9-.09-1.78-.07-2.63.05a15.4 15.4 0 0 0-.13-3.37A3.49 3.49 0 0 0 11 5.5C11 3.57 9.43 2 7.5 2c-1.69 0-3.91.99-4.92 5.69C2 10.43 2 13.51 2 15v2c0 2.95 4.48 5 8.5 5 2.42 0 4.63-.74 6.03-2 3.02-.02 5.47-2.48 5.47-5.5S19.53 9 16.5 9m-.05 8.99h-.02c-.06 0-.13-.02-.2-.02l-.48-.04-.33.36C14.45 19.35 12.56 20 10.5 20 7.06 20 4 18.32 4 17v-2c0-1.42 0-4.36.54-6.89C5.12 5.39 6.12 4 7.5 4 8.33 4 9 4.67 9 5.5c0 .78-.62 1.44-1.41 1.49l-1.19.08.28 1.16c.2.84.31 1.8.31 2.78 0 .76-.06 1.5-.19 2.19l-.28 1.57 1.54-.43c1.24-.35 2.61-.43 3.99-.19l.86.15.26-.83c.46-1.47 1.8-2.45 3.32-2.45 1.93 0 3.5 1.57 3.5 3.5s-1.56 3.49-3.55 3.49Z"></path></svg> Fitness Gym</h3>
                    <p>24/7 Access for checked-in guests</p>
                    <span class="status confirmed">Operational</span>
                </div>
                <div class="facility-card">
                    <h3><svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="currentColor" viewBox="0 0 24 24" ><path d="M21 10.28V3c0-.55-.45-1-1-1h-2c-2.76 0-5 2.24-5 5v3.28c-.59.35-1 .99-1 1.72v8c0 1.1.9 2 2 2h6c1.1 0 2-.9 2-2v-8a2 2 0 0 0-1-1.72M18 4h1v6h-4V7c0-1.65 1.35-3 3-3m-4 16v-8h6v8z"></path><path d="M16 14h2v4h-2zm-6 6V4c0-1.1-.9-2-2-2H2v2h6v2.5H2v2h6V11H2v2h6v2.5H2v2h6V20H2v2h6c1.1 0 2-.9 2-2"></path></svg> Luxury Spa</h3>
                    <p>Open by appointment only</p>
                    <span class="status pending">Maintenance</span>
                </div>
            </div>
        </section>
    </main>
</body>
</html>