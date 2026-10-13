<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        }

        body {
            background-color: #f8f9fa;
            color: #111827;
            padding: 20px;
        }

        /* Responsive Tablet & Desktop Spacing */
        @media (min-width: 768px) {
            body {
                padding: 30px 40px;
            }
        }

        /* Top Header */
        .page-header {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-bottom: 25px;
        }

        @media (min-width: 640px) {
            .page-header {
                flex-direction: row;
                justify-content: space-between;
                align-items: flex-end;
            }
        }

        .header-title h1 {
            font-size: 22px;
            font-weight: 700;
            color: #111827;
            margin-bottom: 4px;
        }

        @media (min-width: 768px) {
            .header-title h1 {
                font-size: 24px;
            }
        }

        .header-title p {
            font-size: 13px;
            color: #6b7280;
        }

        /* Card Container */
        .card {
            background-color: #ffffff;
            border-radius: 16px;
            border: 1px solid #f3f4f6;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.02);
            overflow: hidden;
        }

        /* Mobile Horizontal Scroll Wrapper */
        .table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        /* Table */
        .user-table {
            width: 100%;
            min-width: 700px; /* Ensures columns don't crush on small mobile screens */
            border-collapse: collapse;
            text-align: left;
        }

        .user-table th {
            background-color: #fdfdfd;
            padding: 12px 20px;
            font-size: 11px;
            font-weight: 700;
            color: #9ca3af;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-bottom: 1px solid #f3f4f6;
        }

        .user-table td {
            padding: 16px 20px;
            border-bottom: 1px solid #f9fafb;
            vertical-align: middle;
            font-size: 13px;
        }

        .user-table tr:last-child td {
            border-bottom: none;
        }

        /* User Info Column */
        .user-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: #ccfbf1;
            color: #0f766e;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 14px;
            flex-shrink: 0;
        }

        .user-details .name {
            font-weight: 600;
            color: #111827;
            font-size: 13px;
            line-height: 1.2;
        }

        .user-details .id {
            font-size: 11px;
            color: #9ca3af;
            margin-top: 2px;
        }

        /* Role Badges */
        .badge-role {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.3px;
        }

        .badge-admin {
            background-color: #fef3c7;
            color: #92400e;
        }

        .badge-buyer {
            background-color: #e0e7ff;
            color: #3730a3;
        }

        .badge-staff {
            background-color: #d1fae5;
            color: #065f46;
        }

        /* Role Change Select Dropdown */
        .role-change-select {
            padding: 6px 10px;
            border-radius: 6px;
            border: 1px solid #d1d5db;
            font-size: 12px;
            background-color: #ffffff;
            cursor: pointer;
            outline: none;
        }

        .role-change-select:focus {
            border-color: #0f766e;
        }

        /* Contact Details */
        .contact-info {
            color: #4b5563;
            font-size: 12px;
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .contact-item svg {
            width: 14px;
            height: 14px;
            stroke: #9ca3af;
            flex-shrink: 0;
        }

        /* Account Status Badges */
        .badge-status {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 11px;
            font-weight: 600;
            transition: all 0.2s ease;
        }

        .badge-active {
            background-color: #ecfdf5;
            color: #047857;
        }

        .badge-suspended {
            background-color: #fef2f2;
            color: #dc2626;
        }

        .badge-status svg {
            width: 12px;
            height: 12px;
        }

        /* Action Buttons */
        .actions-cell {
            display: flex;
            gap: 8px;
        }

        .btn-action {
            width: 32px;
            height: 32px;
            border-radius: 6px;
            border: 1px solid;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            background-color: #ffffff;
            transition: all 0.2s ease;
        }

        .btn-lock {
            border-color: #fef3c7;
            color: #f59e0b;
            background-color: #fffbeb;
        }

        .btn-lock:active, .btn-lock:hover {
            background-color: #fef3c7;
        }

        .btn-delete {
            border-color: #fee2e2;
            color: #ef4444;
            background-color: #fef2f2;
        }

        .btn-delete:active, .btn-delete:hover {
            background-color: #fee2e2;
        }

        .btn-action svg {
            width: 14px;
            height: 14px;
            stroke-width: 2;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <div class="page-header">
        <div class="header-title">
            <h1>User Management</h1>
            <p>Monitor platform users, access levels, and account statuses.</p>
        </div>
    </div>

    <!-- Main Card Container -->
    <div class="card">
        <div class="table-responsive">
            <table class="user-table">
                <thead>
                    <tr>
                        <th>User Info</th>
                        <th>Current Role</th>
                        <th>Change Role</th>
                        <th>Contact Details</th>
                        <th>Account Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row 1 -->
                    <tr id="row-1">
                        <td>
                            <div class="user-info">
                                <div class="avatar">K</div>
                                <div class="user-details">
                                    <div class="name">Kenneth</div>
                                    <div class="id">ID: HOT-2848</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge-role badge-admin" id="badge-role-1">ADMIN</span></td>
                        <td>
                            <select class="role-change-select" onchange="updateUserRole(1, this.value)">
                                <option value="admin" selected>Admin</option>
                                <option value="buyer">Buyer</option>
                                <option value="staff">Staff</option>
                            </select>
                        </td>
                        <td>
                            <div class="contact-info">
                                <div class="contact-item">
                                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                    Kenneth666@gmail.com
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge-status badge-active" id="status-badge-1">
                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"/></svg>
                                <span id="status-text-1">Active</span>
                            </span>
                        </td>
                        <td>
                            <div class="actions-cell">
                                <button class="btn-action btn-lock" title="Suspend / Activate User" onclick="toggleUserStatus(1)">
                                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                                </button>
                                <button class="btn-action btn-delete" title="Delete User" onclick="deleteUser(1)">
                                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 2 -->
                    <tr id="row-2">
                        <td>
                            <div class="user-info">
                                <div class="avatar">C</div>
                                <div class="user-details">
                                    <div class="name">Chisom</div>
                                    <div class="id">ID: HOT-6785</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge-role badge-buyer" id="badge-role-2">BUYER</span></td>
                        <td>
                            <select class="role-change-select" onchange="updateUserRole(2, this.value)">
                                <option value="admin">Admin</option>
                                <option value="buyer" selected>Buyer</option>
                                <option value="staff">Staff</option>
                            </select>
                        </td>
                        <td>
                            <div class="contact-info">
                                <div class="contact-item">
                                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                    chisom419@gmail.com
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge-status badge-active" id="status-badge-2">
                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"/></svg>
                                <span id="status-text-2">Active</span>
                            </span>
                        </td>
                        <td>
                            <div class="actions-cell">
                                <button class="btn-action btn-lock" title="Suspend / Activate User" onclick="toggleUserStatus(2)">
                                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                                </button>
                                <button class="btn-action btn-delete" title="Delete User" onclick="deleteUser(2)">
                                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 3 -->
                    <tr id="row-3">
                        <td>
                            <div class="user-info">
                                <div class="avatar">T</div>
                                <div class="user-details">
                                    <div class="name">Thiago</div>
                                    <div class="id">ID: HOT-9012</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge-role badge-staff" id="badge-role-3">STAFF</span></td>
                        <td>
                            <select class="role-change-select" onchange="updateUserRole(3, this.value)">
                                <option value="admin">Admin</option>
                                <option value="buyer">Buyer</option>
                                <option value="staff" selected>Staff</option>
                            </select>
                        </td>
                        <td>
                            <div class="contact-info">
                                <div class="contact-item">
                                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                    thiago666@gmail.com
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge-status badge-active" id="status-badge-3">
                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"/></svg>
                                <span id="status-text-3">Active</span>
                            </span>
                        </td>
                        <td>
                            <div class="actions-cell">
                                <button class="btn-action btn-lock" title="Suspend / Activate User" onclick="toggleUserStatus(3)">
                                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                                </button>
                                <button class="btn-action btn-delete" title="Delete User" onclick="deleteUser(3)">
                                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- JavaScript Functions (or link your userManagement.js file here) -->
    <script>
        function updateUserRole(userId, newRole) {
            const badge = document.getElementById(`badge-role-${userId}`);
            badge.className = 'badge-role';
            badge.textContent = newRole.toUpperCase();
            
            if (newRole === 'admin') {
                badge.classList.add('badge-admin');
            } else if (newRole === 'buyer') {
                badge.classList.add('badge-buyer');
            } else if (newRole === 'staff') {
                badge.classList.add('badge-staff');
            }
        }

        function toggleUserStatus(userId) {
            const badge = document.getElementById(`status-badge-${userId}`);
            const textSpan = document.getElementById(`status-text-${userId}`);

            if (textSpan.textContent.trim() === 'Active') {
                textSpan.textContent = 'Suspended';
                badge.classList.remove('badge-active');
                badge.classList.add('badge-suspended');
            } else {
                textSpan.textContent = 'Active';
                badge.classList.remove('badge-suspended');
                badge.classList.add('badge-active');
            }
        }

        function deleteUser(userId) {
            if (confirm("Are you sure you want to delete this user?")) {
                const row = document.getElementById(`row-${userId}`);
                row.remove();
            }
        }
    </script>

</body>
</html>