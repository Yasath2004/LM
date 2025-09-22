<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Recovery Management - Payments</title>
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
            <li><a href="payments.html" class="active"><span class="material-icons">payments</span>Payments</a></li>
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
            <h1>Payments</h1>
            <div class="search-bar">
                <input type="text" placeholder="Search payments...">
                <span class="material-icons">search</span>
            </div>
            <div class="header-icons">
                <button class="btn add-new"><span class="material-icons">add_card</span> Record New Payment</button>
            </div>
        </header>

        <div class="data-table">
            <h2>Recent Payments</h2>
            <table>
                <thead>
                    <tr>
                        <th>Payment ID</th>
                        <th>Loan ID</th>
                        <th>Borrower</th>
                        <th>Amount Paid</th>
                        <th>Payment Date</th>
                        <th>Method</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>PAY001</td>
                        <td>LN001</td>
                        <td>Alice Johnson</td>
                        <td>$500</td>
                        <td>2023-11-01</td>
                        <td>Bank Transfer</td>
                        <td><button class="btn view">View Receipt</button></td>
                    </tr>
                    <tr>
                        <td>PAY002</td>
                        <td>LN002</td>
                        <td>Bob Williams</td>
                        <td>$800</td>
                        <td>2023-10-28</td>
                        <td>Credit Card</td>
                        <td><button class="btn view">View Receipt</button></td>
                    </tr>
                    <tr>
                        <td>PAY003</td>
                        <td>LN004</td>
                        <td>Alice Johnson</td>
                        <td>$250</td>
                        <td>2023-10-25</td>
                        <td>Cash</td>
                        <td><button class="btn view">View Receipt</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>