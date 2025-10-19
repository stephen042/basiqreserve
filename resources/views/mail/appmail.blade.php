<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f4f7fb; padding: 30px; color: #333;">
    <table align="center" cellpadding="0" cellspacing="0" width="100%"
        style="max-width: 650px; background: #ffffff; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.08);">

        {{-- Header --}}
        <tr>
            <td
                style="background-color: #1a56db; color: white; text-align: center; padding: 20px 0; font-size: 22px; font-weight: bold;">
                {{ config('app.name') }}
            </td>
        </tr>

        {{-- Bank Name --}}
        <tr>
            <td
                style="text-align: center; padding: 15px; font-size: 20px; color: #1a56db; font-weight: bold; background-color: #f9fafb;">
                {{ strtoupper($bankName) }}
            </td>
        </tr>

        {{-- Amount --}}
        <tr>
            <td style="text-align: center; font-size: 18px; font-weight: bold; color: #111827; padding: 10px;">
                {{ $transaction['currency'] ?? '$' }} {{ number_format($transaction['amount'], 2) }}
            </td>
        </tr>

        {{-- Status --}}
        <tr>
            @php
            $status = strtolower($transaction['transaction_status']);
            $statusColors = [
            'pending' => ['bg' => '#fff7ed', 'text' => '#f97316'], // Soft orange background
            'completed' => ['bg' => '#ecfdf5', 'text' => '#16a34a'], // Soft green background
            'failed' => ['bg' => '#fef2f2', 'text' => '#dc2626'], // Soft red background
            ];

            $colors = $statusColors[$status] ?? ['bg' => '#f9fafb', 'text' => '#374151'];
            @endphp

            <td style="
                text-align: center;
                padding: 12px;
                font-size: 20px;
                font-weight: bold;
                color: {{ $colors['text'] }};
                background-color: {{ $colors['bg'] }};
                border-top: 1px solid #e5e7eb;
                border-bottom: 1px solid #e5e7eb;
            ">
                {{ ucfirst($transaction['transaction_status']) }}
            </td>
        </tr>


        {{-- Body --}}
        <tr>
            <td style="padding: 20px 30px; font-size: 15px; line-height: 1.6; color: #444;">
                {{ $body }}
            </td>
        </tr>

        {{-- Transaction Details --}}
        <tr>
            <td style="padding: 0 30px 20px 30px;">
                <h3
                    style="margin-bottom: 10px; color: #111827; border-bottom: 2px solid #1a56db; display: inline-block; padding-bottom: 4px;">
                    Transaction Details
                </h3>
                <table width="100%" cellpadding="8" cellspacing="0" style="border-collapse: collapse; font-size: 14px;">
                    <tr style="background-color: #f9fafb;">
                        <td style="border-bottom: 1px solid #e5e7eb;">Transaction ID:</td>
                        <td style="border-bottom: 1px solid #e5e7eb; text-align: right;">TXN{{
                            str_pad($transaction['id'], 6, '0', STR_PAD_LEFT) }}</td>
                    </tr>
                    <tr>
                        <td style="border-bottom: 1px solid #e5e7eb;">Recipient Name:</td>
                        <td style="border-bottom: 1px solid #e5e7eb; text-align: right;">{{
                            $transaction['recipient_name'] ?? 'N/A' }}</td>
                    </tr>
                    <tr style="background-color: #f9fafb;">
                        <td style="border-bottom: 1px solid #e5e7eb;">Account Number:</td>
                        <td style="border-bottom: 1px solid #e5e7eb; text-align: right;">{{
                            $transaction['account_number'] ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td style="border-bottom: 1px solid #e5e7eb;">Bank:</td>
                        <td style="border-bottom: 1px solid #e5e7eb; text-align: right;">{{ $transaction['bank_name'] ??
                            'N/A' }}</td>
                    </tr>
                    @if (!empty($transaction['swift_code']))
                    <tr style="background-color: #f9fafb;">
                        <td style="border-bottom: 1px solid #e5e7eb;">SWIFT Code:</td>
                        <td style="border-bottom: 1px solid #e5e7eb; text-align: right;">{{ $transaction['swift_code']
                            }}</td>
                    </tr>
                    @endif
                    <tr style="background-color: #f9fafb;">
                        <td style="border-bottom: 1px solid #e5e7eb;">Date:</td>
                        <td style="border-bottom: 1px solid #e5e7eb; text-align: right;">{{
                            \Carbon\Carbon::parse($transaction['created_at'])->format('M d, Y h:i A') }}</td>
                    </tr>
                    @if (!empty($transaction['alert_caption']))
                    <tr>
                        <td style="border-bottom: 1px solid #e5e7eb;">Alert Caption:</td>
                        <td style="border-bottom: 1px solid #e5e7eb; text-align: right;">{{
                            $transaction['alert_caption'] }}</td>
                    </tr>
                    @endif
                    @if (!empty($transaction['description']))
                    <tr style="background-color: #f9fafb;">
                        <td style="border-bottom: 1px solid #e5e7eb;">Description:</td>
                        <td style="border-bottom: 1px solid #e5e7eb; text-align: right;">{{ $transaction['description']
                            }}</td>
                    </tr>
                    @endif
                </table>
            </td>
        </tr>

        {{-- CTA Button --}}
        @if ($link)
        <tr>
            <td style="text-align: center; padding: 20px;">
                <a href="{{ $link }}"
                    style="background-color: #1a56db; color: white; padding: 12px 30px; text-decoration: none; border-radius: 6px; font-weight: bold;">
                    Contact Support
                </a>
            </td>
        </tr>
        @endif

        {{-- Security Note --}}
        <tr>
            <td style="background-color: #f9fafb; text-align: center; padding: 20px; font-size: 13px; color: #4b5563;">
                This transaction is protected by <strong>{{ config('app.name') }}</strong>.
                Our security systems continuously monitor and verify all transactions for your protection.
            </td>
        </tr>

        {{-- Footer --}}
        <tr>
            <td style="background-color: #f3f4f6; text-align: center; padding: 15px; font-size: 13px; color: #6b7280;">
                © {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
            </td>
        </tr>
    </table>
</body>

</html>