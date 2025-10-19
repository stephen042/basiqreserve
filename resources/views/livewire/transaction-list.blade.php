<div>
    <div class="transaction-table-container">
        <table class="transaction-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Recipient</th>
                    <th>Email</th>
                    <th>Account No.</th>
                    <th>Bank</th>
                    <th>SWIFT</th>
                    <th>Amount</th>
                    <th>Currency</th>
                    <th>Status</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @forelse($transactions as $transaction)
                    <tr>
                        <td>{{ $loop->iteration + ($transactions->currentPage()-1)*$transactions->perPage() }}</td>
                        <td>{{ $transaction->recipient_name ?? 'N/A' }}</td>
                        <td>{{ $transaction->recipient_email ?? 'N/A' }}</td>
                        <td>{{ $transaction->account_number ?? 'N/A' }}</td>
                        <td>{{ $transaction->bank_name ?? 'N/A' }}</td>
                        <td>{{ $transaction->swift_code ?? 'N/A' }}</td>
                        <td>{{ $transaction->currency ?? '$' }}{{ number_format($transaction->amount, 2) }}</td>
                        <td>{{ strtoupper($transaction->currency ?? '-') }}</td>
                        <td>
                            <span class="status-badge {{ strtolower($transaction->transaction_status) }}">
                                {{ ucfirst($transaction->transaction_status ?? 'Unknown') }}
                            </span>
                        </td>
                        <td>{{ $transaction->created_at ? $transaction->created_at->format('d M, Y h:i A') : 'N/A' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="11" style="text-align:center; padding: 1rem;">No transactions found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="pagination">
        {{ $transactions->links() }}
    </div>

    <style>
        /* Table Container */
        .transaction-table-container {
            overflow-x: auto;
            margin-top: 20px;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            background-color: #ffffff;
        }

        /* Table */
        .transaction-table {
            width: 100%;
            border-collapse: collapse;
            font-family: 'Inter', sans-serif;
            color: #111827;
        }

        .transaction-table thead tr {
            background-color: #f3f4f6;
        }

        .transaction-table th,
        .transaction-table td {
            padding: 12px;
            text-align: left;
            font-size: 14px;
        }

        .transaction-table tbody tr {
            border-top: 1px solid #e5e7eb;
            transition: background-color 0.2s ease;
        }

        .transaction-table tbody tr:hover {
            background-color: #f9fafb;
        }

        /* Status Badges */
        .status-badge {
            padding: 6px 10px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 13px;
            text-transform: capitalize;
        }

        .status-badge.completed {
            background-color: #dcfce7;
            color: #166534;
        }

        .status-badge.pending {
            background-color: #fef9c3;
            color: #854d0e;
        }

        .status-badge.failed {
            background-color: #fee2e2;
            color: #991b1b;
        }

        .status-badge.denied {
            background-color: #ffe4e6;
            color: #9f1239;
        }

        /* Pagination */
        .pagination {
            margin-top: 16px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Responsive */
        @media (max-width: 640px) {
            .transaction-table-container {
                overflow-x: scroll !important;
            }

            .transaction-table th,
            .transaction-table td {
                font-size: 12px;
                padding: 8px;
            }
        }
    </style>
</div>
