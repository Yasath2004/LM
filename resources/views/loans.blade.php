<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Recovery Management - Loans</title>
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
            <li><a href="loans.html" class="active"><span class="material-icons">account_balance_wallet</span>Loans</a></li>
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
            <h1>Loans</h1>
            <div class="search-bar">
                <input type="text" placeholder="Search loans...">
                <span class="material-icons">search</span>
            </div>
            <div class="header-icons">
                <button class="btn add-new"><span class="material-icons">add_circle</span> Add New Loan</button>
            </div>
        </header>

        <div class="data-table">
            <h2>All Loan Details</h2>
            <table>
                <thead>
                    <tr>
                        <th>Loan ID</th>
                        <th>Borrower</th>
                        <th>Amount</th>
                        <th>Interest</th>
                        <th>Term</th>
                        <th>Due Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>LN001</td>
                        <td>Alice Johnson</td>
                        <td>$5,000</td>
                        <td>8%</td>
                        <td>12 months</td>
                        <td>2024-05-20</td>
                        <td class="status active">Active</td>
                        <td>
                            <button class="btn view">View</button>
                            <button class="btn edit">Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>LN002</td>
                        <td>Bob Williams</td>
                        <td>$10,000</td>
                        <td>6%</td>
                        <td>24 months</td>
                        <td>2025-01-10</td>
                        <td class="status active">Active</td>
                        <td>
                            <button class="btn view">View</button>
                            <button class="btn edit">Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>LN003</td>
                        <td>Charlie Davis</td>
                        <td>$2,500</td>
                        <td>10%</td>
                        <td>6 months</td>
                        <td>2023-11-10</td>
                        <td class="status paid">Paid</td>
                        <td>
                            <button class="btn view">View</button>
                        </td>
                    </tr>
                    <tr>
                        <td>LN004</td>
                        <td>Alice Johnson</td>
                        <td>$7,500</td>
                        <td>7%</td>
                        <td>18 months</td>
                        <td>2024-12-01</td>
                        <td class="status overdue">Overdue</td>
                        <td>
                            <button class="btn view">View</button>
                            <button class="btn edit">Edit</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>