<div>
    {{-- Success / Error Alerts --}}
    @if (session('success'))
    <div class="alert success">
        <span>{{ session('success') }}</span>
        <button wire:click="$refresh" class="close-btn">&times;</button>
    </div>
    @endif

    @if (session('error'))
    <div class="alert error">
        <span>{{ session('error') }}</span>
        <button wire:click="$refresh" class="close-btn">&times;</button>
    </div>
    @endif

    {{-- Users Table --}}
    <div class="transaction-table-container">
        <table class="transaction-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Bank</th>
                    <th>Account No.</th>
                    <th>Status</th>
                    <th>Created</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->bank ?? 'N/A' }}</td>
                    <td>{{ $user->account_number ?? 'N/A' }}</td>
                    <td>
                        <span class="status-badge {{ strtolower($user->status) }}">
                            {{ ucfirst($user->status) }}
                        </span>
                    </td>
                    <td>{{ $user->created_at ? $user->created_at->format('d M, Y') : 'N/A' }}</td>
                    <td class="flex gap-2">
                        <button wire:click.prevent="approve({{ $user->id }})"
                            onclick="confirm('Are you sure you want to approve this user?') || event.stopImmediatePropagation()"
                            class="bg-green-500 text-white px-3 py-1.5 rounded-md font-medium hover:bg-green-600 transition">
                            Approve
                        </button>

                        <button wire:click.prevent="decline({{ $user->id }})"
                            onclick="confirm('Are you sure you want to decline this user?') || event.stopImmediatePropagation()"
                            class="bg-red-500 text-white px-3 py-1.5 rounded-md font-medium hover:bg-red-600 transition">
                            Decline
                        </button>

                        <button wire:click.prevent="edit({{ $user->id }})"
                            class="bg-blue-500 text-white px-3 py-1.5 rounded-md font-medium hover:bg-blue-600 transition">
                            Edit
                        </button>
                    </td>

                </tr>
                @empty
                <tr>
                    <td colspan="8" style="text-align:center; padding: 1rem;">No users found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Edit Modal --}}
    @if ($showModal)
    <div class="modal-overlay fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div
            class="modal-box dark:bg-gray-800 dark:text-gray-200 bg-white text-gray-900 rounded-lg p-6 w-full max-w-md">
            <h2 class="text-lg font-semibold mb-4">Edit User</h2>

            <form wire:submit.prevent="update" class="space-y-3">
                <div>
                    <label class="block text-sm mb-1">Name</label>
                    <input type="text" wire:model="name"
                        class="form-input dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100 w-full">
                    @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-sm mb-1">Email</label>
                    <input type="email" wire:model="email"
                        class="form-input dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100 w-full">
                    @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-sm mb-1">Bank</label>
                    <input type="text" wire:model="bank"
                        class="form-input dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100 w-full">
                </div>

                <div>
                    <label class="block text-sm mb-1">Account Number</label>
                    <input type="text" wire:model="account_number"
                        class="form-input dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100 w-full">
                </div>

                <div>
                    <label class="block text-sm mb-1">Status</label>
                    <select wire:model="status"
                        class="form-input dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100 w-full">
                        <option value="pending">Pending</option>
                        <option value="approved">Approved</option>
                        <option value="declined">Declined</option>
                    </select>
                </div>

                <div class="flex justify-between gap-2 pt-4">
                    <button type="button" wire:click="deleteUser"
                        onclick="confirm('Are you sure you want to delete this user?') || event.stopImmediatePropagation()"
                        class="bg-red-500 text-white px-4 py-2 rounded-md font-medium hover:bg-red-600 transition">
                        Delete
                    </button>

                    <div class="flex gap-2">
                        <button type="button" wire:click="$set('showModal', false)"
                            class="bg-gray-300  dark:bg-gray-700 text-gray-100 dark:text-white px-4 py-2 rounded-md hover:bg-gray-400 transition">
                            Cancel
                        </button>
                        <button type="submit"
                            class="bg-blue-500 text-white px-4 py-2 rounded-md font-medium hover:bg-blue-600 transition">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endif


    {{-- Styling --}}
    <style>
        /* Alerts */
        .alert {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 16px;
            border-radius: 8px;
            margin-bottom: 12px;
            font-size: 14px;
        }

        .alert.success {
            background-color: #dcfce7;
            border: 1px solid #16a34a;
            color: #166534;
        }

        .alert.error {
            background-color: #fee2e2;
            border: 1px solid #dc2626;
            color: #991b1b;
        }

        .close-btn {
            background: none;
            border: none;
            font-size: 18px;
            cursor: pointer;
            line-height: 1;
        }

        /* Table Container */
        .transaction-table-container {
            overflow-x: auto;
            margin-top: 20px;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            background-color: #ffffff;
        }

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

        .status-badge.approved {
            background-color: #dcfce7;
            color: #166534;
        }

        .status-badge.pending {
            background-color: #fef9c3;
            color: #854d0e;
        }

        .status-badge.declined {
            background-color: #fee2e2;
            color: #991b1b;
        }

        /* Buttons */
        .btn-approve {
            color: #16a34a;
            font-weight: 500;
        }

        .btn-decline {
            color: #dc2626;
            font-weight: 500;
        }

        .btn-edit {
            color: #2563eb;
            font-weight: 500;
        }

        .btn-approve:hover,
        .btn-decline:hover,
        .btn-edit:hover {
            text-decoration: underline;
        }

        /* Pagination */
        .pagination {
            margin-top: 16px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Modal */
        .modal-overlay {
            position: fixed;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 50;
        }

        .modal-box {
            background-color: #ffffff;
            padding: 24px;
            border-radius: 12px;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .form-input {
            width: 100%;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            padding: 8px 10px;
            font-size: 14px;
        }

        .error-text {
            color: #dc2626;
            font-size: 12px;
        }

        .btn-cancel {
            background-color: #e5e7eb;
            color: #374151;
            padding: 8px 14px;
            border-radius: 6px;
        }

        .btn-save {
            background-color: #2563eb;
            color: white;
            padding: 8px 14px;
            border-radius: 6px;
        }

        .btn-cancel:hover {
            background-color: #d1d5db;
        }

        .btn-save:hover {
            background-color: #1d4ed8;
        }

        /* Responsive */
        @media (max-width: 640px) {

            .transaction-table th,
            .transaction-table td {
                font-size: 12px;
                padding: 8px;
            }

            .modal-box {
                width: 90%;
                padding: 16px;
            }
        }
    </style>
</div>