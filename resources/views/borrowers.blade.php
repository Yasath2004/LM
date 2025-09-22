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
<li><a href="dashboard.html" class="active"><span class="material-icons">dashboard</span>Dashboard</a></li>
<li><a href="borrowers.html"><span class="material-icons">people</span>Borrowers</a></li>
<li><a href="loans.html"><span class="material-icons">account_balance_wallet</span>Loans</a></li>
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
<div class="dashboard-overview">
<div class="card">
<h3>Total Loans</h3>
<p>1,250</p>
<span class="material-icons icon-bg">account_balance_wallet</span>
</div>
<div class="card">
<h3>Outstanding Amount</h3>
<p>$12,500,000</p>
<span class="material-icons icon-bg">payments</span>
</div>
<div class="card">
<h3>Overdue Loans</h3>
<p>125</p>
<span class="material-icons icon-bg">warning</span>
</div>
<div class="card">
<h3>Collected Today</h3>
<p>$50,000</p>
<span class="material-icons icon-bg">check_circle</span>
</div>
</div>

<div class="recent-activity">
<h2>Recent Loan Activities</h2>
<table>
<thead>
<tr>
<th>Loan ID</th>
<th>Borrower</th>
<th>Amount</th>
<th>Due Date</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>LRM001</td>
<td>John Doe</td>
<td>$5,000</td>
<td>2023-11-15</td>
<td class="status overdue">Overdue</td>
<td><button class="btn view">View</button></td>
</tr>
<tr>
<td>LRM002</td>
<td>Jane Smith</td>
<td>$10,000</td>
<td>2023-12-01</td>
<td class="status active">Active</td>
<td><button class="btn view">View</button></td>
</tr>
<tr>
<td>LRM003</td>
<td>Peter Jones</td>
<td>$2,500</td>
<td>2023-11-10</td>
<td class="status paid">Paid</td>
<td><button class="btn view">View</button></td>
</tr>
<tr>
<td>LRM004</td>
<td>Sarah Brown</td>
<td>$7,500</td>
<td>2023-11-20</td>
<td class="status active">Active</td>
<td><button class="btn view">View</button></td>
</tr>
</tbody>
</table>
</div>
</div>
</body>
</html>
