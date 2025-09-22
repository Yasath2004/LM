<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Recovery Management - Settings</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <span class="material-icons">monetization_on</span>
            <h2>LoanRMS</h2>
        </div>
        <ul class="nav-links">
            <li><a href="dashboard.html"><span class="material-icons">dashboard</span>Dashboard</a></li>
            <li><a href="borrowers.html"><span class="material-icons">people</span>Borrowers</a></li>
            <li><a href="loans.html"><span class="material-icons">account_balance_wallet</span>Loans</a></li>
            <li><a href="payments.html"><span class="material-icons">payments</span>Payments</a></li>
            <li><a href="collections.html"><span class="material-icons">gavel</span>Collections</a></li>
            <li><a href="settings.html" class="active"><span class="material-icons">settings</span>Settings</a></li>
        </ul>
        <div class="user-info">
            <span class="material-icons">account_circle</span>
            <p>Admin User</p>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h1>Settings</h1>
            <div class="search-bar">
                <input type="text" placeholder="Search settings...">
                <span class="material-icons">search</span>
            </div>
            <div class="header-icons">
                <span class="material-icons">help_outline</span>
            </div>
        </header>

        <div class="settings-grid">
            <div class="setting-card">
                <h3>General Settings</h3>
                <p>Manage application wide configurations.</p>
                <button class="btn view">Go to General</button>
            </div>
            <div class="setting-card">
                <h3>User Management</h3>
                <p>Add, edit, or remove users and roles.</p>
                <button class="btn view">Manage Users</button>
            </div>
            <div class="setting-card">
                <h3>Notifications</h3>
                <p>Configure email and in-app notifications.</p>
                <button class="btn view">Edit Notifications</button>
            </div>
            <div class="setting-card">
                <h3>Integrations</h3>
                <p>Connect with external services.</p>
                <button class="btn view">View Integrations</button>
            </div>
        </div>
    </div>
</body>
</html>