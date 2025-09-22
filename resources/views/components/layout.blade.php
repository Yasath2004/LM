<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Recovery Management - Dashboard</title>
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
            <li><a href="{{ url("/") }}" class="active"><span class="material-icons">dashboard</span>Dashboard</a></li>
            <li><a href="borrowers.html"><span class="material-icons">people</span>Borrowers</a></li>
            <li><a href="{{ url("/loans") }}"><span class="material-icons">account_balance_wallet</span>Loans</a></li>
            <li><a href="payments.html"><span class="material-icons">payments</span>Payments</a></li>
            <li><a href="collections.html"><span class="material-icons">gavel</span>Collections</a></li>
            <li><a href="settings.html"><span class="material-icons">settings</span>Settings</a></li>
        </ul>
        <div class="user-info">
            <span class="material-icons">account_circle</span>
            <p>Admin User</p>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h1>Dashboard</h1>
            <div class="search-bar">
                <input type="text" placeholder="Search...">
                <span class="material-icons">search</span>
            </div>
            <div class="header-icons">
                <span class="material-icons">notifications</span>
                <span class="material-icons">message</span>
            </div>
        </header>
        {{ $slot }}
    </div>
 </body>
</html>