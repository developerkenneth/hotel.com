<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
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
            <h1 class="page-title">Messages</h1>
            
            <div class="messages-container">
                <div class="messages-layout">
                    <!-- Left Sidebar Pane -->
                    <div class="conversations-sidebar">
                        <i class="fa-regular fa-comments empty-icon"></i>
                        <p class="empty-text">No conversation yet</p>
                    </div>

                    <!-- Main Chat Pane -->
                    <div class="chat-area">
                        <i class="fa-regular fa-comments empty-icon"></i>
                        <h3 class="empty-title">Your Messages</h3>
                        <p class="empty-text">Select a conversation to start chatting</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>