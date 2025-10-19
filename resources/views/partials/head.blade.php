<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>{{ $title ?? config('app.name') }}</title>
<!-- Favicon & Apple Touch Icon -->
<link rel="icon" href="{{ asset('assets/img/app-logo-icon.jpeg') }}" sizes="any">
<link rel="apple-touch-icon" href="{{ asset('assets/img/app-logo-icon.jpeg') }}">

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

<!-- Open Graph (For Facebook, LinkedIn, WhatsApp, etc.) -->
<meta property="og:title" content="{{ config('app.name', 'BASIQRESERVE') }} – Your secure and convienient gateway to seamless transactions to global financial services. Make international payments, manage your finances, and access a world of financial opportunities with ease.">
<meta property="og:description"
    content="{{ config('app.name', 'BASIQRESERVE') }} – Your secure and convienient gateway to seamless transactions to global financial services. Make international payments, manage your finances, and access a world of financial opportunities with ease.">
<meta property="og:image" content="{{ asset('assets/img/app-logo-icon.jpeg') }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="website">

<!-- Twitter Card (For Twitter/X) -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ config('app.name', 'BASIQRESERVE') }} – Your secure and convienient gateway to seamless transactions to global financial services. Make international payments, manage your finances, and access a world of financial opportunities with ease.">
<meta name="twitter:description"
    content="{{ config('app.name', 'BASIQRESERVE') }} – Your secure and convienient gateway to seamless transactions to global financial services. Make international payments, manage your finances, and access a world of financial opportunities with ease.">
<meta name="twitter:image" content="{{ asset('assets/img/app-logo-icon.jpeg') }}">


@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance