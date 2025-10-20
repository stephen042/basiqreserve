<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Transaction Update' }}</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f5f7fa; padding: 30px; color: #333; margin: 0;">
    <table align="center" cellpadding="0" cellspacing="0" width="100%"
        style="max-width: 650px; background: #ffffff; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.05); margin: auto;">

        {{-- Header --}}
        <tr>
            <td
                style="background-color: #1a56db; color: #fff; text-align: center; padding: 20px 0; font-size: 22px; font-weight: bold;">
                {{ config('app.name') }}
            </td>
        </tr>

        {{-- Bank Name --}}
        <tr>
            <td
                style="text-align: center; padding: 15px; font-size: 20px; color: #1a56db; font-weight: 600; background-color: #f9fafb;">
                {{ strtoupper($bankName) }}
            </td>
        </tr>

        {{-- Amount --}}
        <tr>
            <td style="text-align: center; font-size: 18px; font-weight: bold; color: #111827; padding: 12px;">
                {{ $transaction['currency'] ?? '$' }} {{ number_format($transaction['amount'], 2) }}
            </td>
        </tr>

        {{-- Status --}}
        <tr>
            @php
            $status = strtolower($transaction['transaction_status']);
            $statusColors = [
            'pending' => ['bg' => '#fff7ed', 'text' => '#f97316'],
            'completed' => ['bg' => '#ecfdf5', 'text' => '#16a34a'],
            'failed' => ['bg' => '#fef2f2', 'text' => '#dc2626'],
            ];
            $colors = $statusColors[$status] ?? ['bg' => '#f9fafb', 'text' => '#374151'];
            @endphp

            <td style="
                text-align: center;
                padding: 12px;
                font-size: 18px;
                font-weight: 600;
                color: {{ $colors['text'] }};
                background-color: {{ $colors['bg'] }};
                border-top: 1px solid #e5e7eb;
                border-bottom: 1px solid #e5e7eb;
            ">
                {{ ucfirst($transaction['transaction_status']) }}
            </td>
        </tr>

        {{-- Message Body --}}
        <tr>
            <td style="padding: 20px 30px; font-size: 15px; line-height: 1.7; color: #444;">
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
                        <td>Transaction ID:</td>
                        <td style="text-align: right;">TXN{{ str_pad($transaction['id'], 6, '0', STR_PAD_LEFT) }}</td>
                    </tr>
                    <tr>
                        <td>Recipient:</td>
                        <td style="text-align: right;">{{ $transaction['recipient_name'] ?? 'N/A' }}</td>
                    </tr>
                    <tr style="background-color: #f9fafb;">
                        <td>Account Number:</td>
                        <td style="text-align: right;">{{ $transaction['account_number'] ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Bank:</td>
                        <td style="text-align: right;">{{ $transaction['bank_name'] ?? 'N/A' }}</td>
                    </tr>
                    @if (!empty($transaction['swift_code']))
                    <tr style="background-color: #f9fafb;">
                        <td>SWIFT Code:</td>
                        <td style="text-align: right;">{{ $transaction['swift_code'] }}</td>
                    </tr>
                    @endif
                    <tr>
                        <td>Date:</td>
                        <td style="text-align: right;">{{ \Carbon\Carbon::parse($transaction['created_at'])->format('M
                            d, Y h:i A') }}</td>
                    </tr>
                    @if (!empty($transaction['alert_caption']))
                    <tr style="background-color: #f9fafb;">
                        <td>Alert Caption:</td>
                        <td style="text-align: right;">{{ $transaction['alert_caption'] }}</td>
                    </tr>
                    @endif
                    @if (!empty($transaction['description']))
                    <tr>
                        <td>Description:</td>
                        <td style="text-align: right;">{{ $transaction['description'] }}</td>
                    </tr>
                    @endif
                </table>
            </td>
        </tr>

        {{-- Contact Support Button --}}
        @if ($link)
        <tr>
            <td style="text-align: center; padding: 20px;">
                <a href="{{ $link }}" style="display: inline-block; background-color: #1a56db; color: white; padding: 12px 30px; 
                   text-decoration: none; border-radius: 6px; font-weight: bold;">
                    Get Help from Support
                </a>
            </td>
        </tr>
        @endif


        {{-- Footer --}}
        <tr>
            <td
                style="background-color: #f9fafb; text-align: center; padding: 15px 20px; font-size: 13px; color: #6b7280; line-height: 1.6;">
                You’re receiving this email because a transaction occurred on your {{ config('app.name') }} account.
                <br><br>
                © {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
            </td>
        </tr>
    </table>
</body>

</html>