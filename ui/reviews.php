<?php 
$currentPage = 'reviews';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Reviews - Hotel.com</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .review-card { background: var(--surface); border: 1px solid var(--border); border-radius: 12px; padding: 20px; margin-bottom: 15px; box-shadow: var(--shadow); }
        .review-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px; }
        .stars { color: #FFB800; font-size: 16px; }
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
                    <input type="text" placeholder="Search reviews...">
                </div>
            </div>
        </header>

        <section class="dashboard-content">
            <div class="page-heading">
                <div>
                    <h1>Guest Feedback & Reviews</h1>
                    <p>Read customer feedback and stay ratings</p>
                </div>
            </div>

            <div class="review-card">
                <div class="review-header">
                    <div>
                        <strong>John Doe</strong>
                        <div class="stars">★★★★★</div>
                    </div>
                    <span class="current-date">18 Aug 2026</span>
                </div>
                <p>The Deluxe Room was extremely clean and spacious. Excellent hospitality and fast room service!</p>
            </div>

            <div class="review-card">
                <div class="review-header">
                    <div>
                        <strong>Mary Jane</strong>
                        <div class="stars">★★★★☆</div>
                    </div>
                    <span class="current-date">15 Aug 2026</span>
                </div>
                <p>Great location and wonderful pool view. The breakfast menu could use a few more options.</p>
            </div>
        </section>
    </main>
</body>
</html>