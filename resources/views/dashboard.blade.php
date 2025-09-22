<x-layout>
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
</x-layout>
