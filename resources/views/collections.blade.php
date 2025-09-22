<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Recovery Management - Collections</title>
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
            <li><a href="collections.html" class="active"><span class="material-icons">gavel</span>Collections</a></li>
            <li><a href="settings.html"><span class="material-icons">settings</span>Settings</a></li>
        </ul>
        <div class="user-info">
            <span class="material-icons">account_circle</span>
            <p>Admin User</p>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h1>Collections</h1>
            <div class="search-bar">
                <input type="text" placeholder="Search collections cases...">
                <span class="material-icons">search</span>
            </div>
            <div class="header-icons">
                <button class="btn add-new"><span class="material-icons">assignment_add</span> Assign New Case</button>
            </div>
        </header>

        <div class="data-table">
            <h2>Overdue & Collection Cases</h2>
            <table>
                <thead>
                    <tr>
                        <th>Case ID</th>
                        <th>Loan ID</th>
                        <th>Borrower</th>
                        <th>Overdue Days</th>
                        <th>Amount Due</th>
                        <th>Collector</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>COL001</td>
                        <td>LN004</td>
                        <td>Alice Johnson</td>
                        <td>25</td>
                        <td>$7,500</td>
                        <td>John Smith</td>
                        <td class="status overdue">Pending Contact</td>
                        <td>
                            <button class="btn view">View Case</button>
                            <button class="btn edit">Update</button>
                        </td>
                    </tr>
                    <tr>
                        <td>COL002</td>
                        <td>LN005</td>
                        <td>Frank White</td>
                        <td>45</td>
                        <td>$3,000</td>
                        <td>Jane Doe</td>
                        <td class="status active">Attempted Contact</td>
                        <td>
                            <button class="btn view">View Case</button>
                            <button class="btn edit">Update</button>
                        </td>
                    </tr>
                    <tr>
                        <td>COL003</td>
                        <td>LN006</td>
                        <td>Grace Green</td>
                        <td>90</td>
                        <td>$12,000</td>
                        <td>John Smith</td>
                        <td class="status overdue">Legal Review</td>
                        <td>
                            <button class="btn view">View Case</button>
                            <button class="btn edit">Update</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>