<div class="border border-gray-500 dark:border-gray-700 p-4 rounded-xl">
    <form wire:submit.prevent="submit" class="mb-6">
        @csrf

        <!-- Recipient Name -->
        <div class="mb-6">
            <label class="block text-sm">Recipient Name</label>
            <input type="text" wire:model="recipient_name" class="w-full border rounded-lg px-3 py-2">
            @error('recipient_name')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Recipient Email -->
        <div class="mb-6">
            <label class="block text-sm">Recipient Email</label>
            <input type="email" wire:model="recipient_email" class="w-full border rounded-lg px-3 py-2">
            @error('recipient_email')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Account Number -->
        <div class="mb-6">
            <label class="block text-sm">Account Number</label>
            <input type="text" wire:model="account_number" class="w-full border rounded-lg px-3 py-2">
            @error('account_number')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Bank Name -->
        <div class="mb-6">
            <label class="block text-sm">Bank Name</label>
            <input type="text" wire:model="bank_name" class="w-full border rounded-lg px-3 py-2">
            @error('bank_name')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- SWIFT / BIC Code -->
        <div class="mb-6">
            <label class="block text-sm">SWIFT / BIC Code</label>
            <input type="text" wire:model="swift_code" class="w-full border rounded-lg px-3 py-2">
            @error('swift_code')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Amount & Currency -->
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-sm">Amount</label>
                <input type="number" wire:model="amount" class="w-full border rounded-lg px-3 py-2">
                @error('amount')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm">Currency</label>
                <select wire:model="currency" class="w-full border rounded-lg px-3 py-2">
                    <option value="">select currency eg ($ - US Dollar (USD))</option>
                    <option value="$">$ - US Dollar (USD)</option>
                    <option value="€">€ - Euro (EUR)</option>
                    <option value="£">£ - British Pound (GBP)</option>
                    <option value="¥">¥ - Japanese Yen (JPY)</option>
                    <option value="₦">₦ - Nigerian Naira (NGN)</option>
                    <option value="₩">₩ - South Korean Won (KRW)</option>
                    <option value="₹">₹ - Indian Rupee (INR)</option>
                    <option value="R$">R$ - Brazilian Real (BRL)</option>
                    <option value="₽">₽ - Russian Ruble (RUB)</option>
                    <option value="CHF">CHF - Swiss Franc (CHF)</option>
                    <option value="C$">C$ - Canadian Dollar (CAD)</option>
                    <option value="A$">A$ - Australian Dollar (AUD)</option>
                    <option value="NZ$">NZ$ - New Zealand Dollar (NZD)</option>
                    <option value="S$">S$ - Singapore Dollar (SGD)</option>
                    <option value="HK$">HK$ - Hong Kong Dollar (HKD)</option>
                    <option value="R">R - South African Rand (ZAR)</option>
                    <option value="AED">AED - UAE Dirham (AED)</option>
                    <option value="SAR">SAR - Saudi Riyal (SAR)</option>
                    <option value="EGP">EGP - Egyptian Pound (EGP)</option>
                    <option value="KES">KES - Kenyan Shilling (KES)</option>
                    <option value="GHS">GHS - Ghanaian Cedi (GHS)</option>
                    <option value="TZS">TZS - Tanzanian Shilling (TZS)</option>
                    <option value="UGX">UGX - Ugandan Shilling (UGX)</option>
                    <option value="MAD">MAD - Moroccan Dirham (MAD)</option>
                    <option value="DZD">DZD - Algerian Dinar (DZD)</option>
                    <option value="TND">TND - Tunisian Dinar (TND)</option>
                    <option value="XOF">XOF - West African CFA Franc (XOF)</option>
                    <option value="XAF">XAF - Central African CFA Franc (XAF)</option>
                    <option value="ZMW">ZMW - Zambian Kwacha (ZMW)</option>
                    <option value="MWK">MWK - Malawian Kwacha (MWK)</option>
                    <option value="BWP">BWP - Botswana Pula (BWP)</option>
                    <option value="ETB">ETB - Ethiopian Birr (ETB)</option>
                    <option value="SDG">SDG - Sudanese Pound (SDG)</option>
                    <option value="NAD">NAD - Namibian Dollar (NAD)</option>
                    <option value="MUR">MUR - Mauritian Rupee (MUR)</option>
                    <option value="SCR">SCR - Seychelles Rupee (SCR)</option>
                    <option value="MGA">MGA - Malagasy Ariary (MGA)</option>
                    <option value="KWD">KWD - Kuwaiti Dinar (KWD)</option>
                    <option value="BHD">BHD - Bahraini Dinar (BHD)</option>
                    <option value="OMR">OMR - Omani Rial (OMR)</option>
                    <option value="QAR">QAR - Qatari Riyal (QAR)</option>
                    <option value="JOD">JOD - Jordanian Dinar (JOD)</option>
                    <option value="LBP">LBP - Lebanese Pound (LBP)</option>
                    <option value="ILS">₪ - Israeli New Shekel (ILS)</option>
                    <option value="PKR">₨ - Pakistani Rupee (PKR)</option>
                    <option value="BDT">৳ - Bangladeshi Taka (BDT)</option>
                    <option value="LKR">Rs - Sri Lankan Rupee (LKR)</option>
                    <option value="MMK">Ks - Burmese Kyat (MMK)</option>
                    <option value="VND">₫ - Vietnamese Dong (VND)</option>
                    <option value="THB">฿ - Thai Baht (THB)</option>
                    <option value="IDR">Rp - Indonesian Rupiah (IDR)</option>
                    <option value="MYR">RM - Malaysian Ringgit (MYR)</option>
                    <option value="PHP">₱ - Philippine Peso (PHP)</option>
                    <option value="KHR">៛ - Cambodian Riel (KHR)</option>
                    <option value="LAK">₭ - Lao Kip (LAK)</option>
                    <option value="MMK">MMK - Myanmar Kyat (MMK)</option>
                    <option value="BND">BND - Brunei Dollar (BND)</option>
                    <option value="PGK">PGK - Papua New Guinean Kina (PGK)</option>
                    <option value="FJD">FJD - Fijian Dollar (FJD)</option>
                    <option value="WST">WST - Samoan Tala (WST)</option>
                    <option value="TOP">TOP - Tongan Paʻanga (TOP)</option>
                    <option value="SBD">SBD - Solomon Islands Dollar (SBD)</option>
                    <option value="VUV">VUV - Vanuatu Vatu (VUV)</option>
                    <option value="XPF">XPF - CFP Franc (XPF)</option>
                    <option value="ARS">$ - Argentine Peso (ARS)</option>
                    <option value="CLP">$ - Chilean Peso (CLP)</option>
                    <option value="COP">$ - Colombian Peso (COP)</option>
                    <option value="PEN">S/ - Peruvian Sol (PEN)</option>
                    <option value="UYU">$U - Uruguayan Peso (UYU)</option>
                    <option value="PYG">₲ - Paraguayan Guarani (PYG)</option>
                    <option value="BOB">Bs - Bolivian Boliviano (BOB)</option>
                    <option value="VEF">Bs - Venezuelan Bolívar (VEF)</option>
                    <option value="CRC">₡ - Costa Rican Colón (CRC)</option>
                    <option value="DOP">RD$ - Dominican Peso (DOP)</option>
                    <option value="GTQ">Q - Guatemalan Quetzal (GTQ)</option>
                    <option value="HNL">L - Honduran Lempira (HNL)</option>
                    <option value="NIO">C$ - Nicaraguan Córdoba (NIO)</option>
                    <option value="BZD">BZ$ - Belize Dollar (BZD)</option>
                    <option value="JMD">J$ - Jamaican Dollar (JMD)</option>
                    <option value="TTD">TT$ - Trinidad & Tobago Dollar (TTD)</option>
                    <option value="XCD">EC$ - East Caribbean Dollar (XCD)</option>
                    <option value="BSD">$ - Bahamian Dollar (BSD)</option>
                    <option value="BBD">$ - Barbadian Dollar (BBD)</option>
                    <option value="KYD">$ - Cayman Islands Dollar (KYD)</option>
                    <option value="BMD">$ - Bermudian Dollar (BMD)</option>
                    <option value="ANG">ƒ - Netherlands Antillean Guilder (ANG)</option>
                    <option value="AWG">ƒ - Aruban Florin (AWG)</option>
                    <option value="SRD">$ - Surinamese Dollar (SRD)</option>
                    <option value="GYD">$ - Guyanese Dollar (GYD)</option>
                    <option value="LRD">$ - Liberian Dollar (LRD)</option>
                    <option value="SLL">Le - Sierra Leonean Leone (SLL)</option>
                    <option value="GNF">FG - Guinean Franc (GNF)</option>
                    <option value="CVE">$ - Cape Verdean Escudo (CVE)</option>
                    <option value="MZN">MT - Mozambican Metical (MZN)</option>
                    <option value="AOA">Kz - Angolan Kwanza (AOA)</option>
                    <option value="SZL">E - Swazi Lilangeni (SZL)</option>
                    <option value="LSL">L - Lesotho Loti (LSL)</option>
                    <option value="BIF">FBu - Burundian Franc (BIF)</option>
                    <option value="RWF">FRw - Rwandan Franc (RWF)</option>
                    <option value="SOS">S - Somali Shilling (SOS)</option>
                    <option value="MRO">UM - Mauritanian Ouguiya (MRO)</option>
                    <option value="DJF">Fdj - Djiboutian Franc (DJF)</option>
                    <option value="KMF">CF - Comorian Franc (KMF)</option>
                    <option value="STD">Db - São Tomé and Príncipe Dobra (STD)</option>
                    <option value="LYD">LD - Libyan Dinar (LYD)</option>
                    <option value="YER">﷼ - Yemeni Rial (YER)</option>
                    <option value="IQD">IQD - Iraqi Dinar (IQD)</option>
                    <option value="IRR">﷼ - Iranian Rial (IRR)</option>
                    <option value="AFN">؋ - Afghan Afghani (AFN)</option>
                    <option value="MNT">₮ - Mongolian Tögrög (MNT)</option>
                    <option value="KZT">₸ - Kazakhstani Tenge (KZT)</option>
                    <option value="UZS">лв - Uzbekistani Som (UZS)</option>
                    <option value="TJS">SM - Tajikistani Somoni (TJS)</option>
                    <option value="AZN">₼ - Azerbaijani Manat (AZN)</option>
                    <option value="GEL">₾ - Georgian Lari (GEL)</option>
                    <option value="AMD">֏ - Armenian Dram (AMD)</option>
                    <option value="BYN">Br - Belarusian Ruble (BYN)</option>
                    <option value="UAH">₴ - Ukrainian Hryvnia (UAH)</option>
                    <option value="MDL">L - Moldovan Leu (MDL)</option>
                    <option value="RON">lei - Romanian Leu (RON)</option>
                    <option value="HUF">Ft - Hungarian Forint (HUF)</option>
                    <option value="CZK">Kč - Czech Koruna (CZK)</option>
                    <option value="PLN">zł - Polish Zloty (PLN)</option>
                    <option value="ISK">kr - Icelandic Krona (ISK)</option>
                    <option value="DKK">kr - Danish Krone (DKK)</option>
                    <option value="NOK">kr - Norwegian Krone (NOK)</option>
                    <option value="SEK">kr - Swedish Krona (SEK)</option>
                    <option value="BGN">лв - Bulgarian Lev (BGN)</option>
                    <option value="HRK">kn - Croatian Kuna (HRK)</option>
                    <option value="ALL">L - Albanian Lek (ALL)</option>
                    <option value="MKD">ден - Macedonian Denar (MKD)</option>
                    <option value="RSD">дин. - Serbian Dinar (RSD)</option>
                    <option value="TRY">₺ - Turkish Lira (TRY)</option>
                </select>
                @error('currency')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- Transaction Status -->
        <div class="mt-4">
            <label class="block text-sm">Transaction Status</label>
            <select wire:model="transaction_status" class="w-full border rounded-lg px-3 py-2">
                <option>Pending</option>
                <option>Completed</option>
                <option>Failed</option>
            </select>
            @error('transaction_status')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Alert Caption -->
        <div class="mt-4">
            <label class="block text-sm">Alert Caption (optional)</label>
            <select wire:model="alert_caption" class="w-full border rounded-lg px-3 py-2">
                <option value="" disabled>Select alert caption...</option>
                <option value="No Alert">No Alert</option>
                <option value="Gift card required">Gift card required</option>
                <option value="Account authentication required">Account authentication required</option>
                <option value="Invalid gift card">Invalid gift card</option>
                <option value="Authentication failed">Authentication failed</option>
                <option value="Withdrawal fee required">Withdrawal fee required</option>
                <option value="Invalid withdrawal fee">Invalid withdrawal fee</option>
                <option value="IMF code required">IMF code required</option>
                <option value="COT code required">COT code required</option>
                <option value="Suspicious Transaction Detected">Suspicious Transaction Detected</option>
                <option value="High Risk Transfer">High Risk Transfer</option>
                <option value="Account Security Alert">Account Security Alert</option>
                <option value="Large Transaction">Large Transaction</option>
                <option value="New Beneficiary">New Beneficiary</option>
            </select>

            @error('alert_caption')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>


        <!-- Description -->
        <div class="mt-4">
            <label class="block text-sm">Description (optional)</label>
            <textarea wire:model="description" class="w-full border rounded-lg px-3 py-2"></textarea>
            @error('description')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit"
            class="mt-6 bg-blue-500 text-white py-2 px-6 rounded-lg hover:bg-blue-600 disabled:opacity-70 disabled:cursor-not-allowed"
            wire:confirm="Are you sure you want to transfer funds?" wire:loading.attr="disabled">
            <span wire:loading.remove>Transfer Now</span>
            <span wire:loading>Processing...</span>
        </button>
    </form>
    @if (session('success'))
    <div id="successAlert"
        style="position: relative; margin-bottom: 1rem; background-color: #d1fae5; border: 1px solid #34d399; color: #065f46; padding: 0.75rem 1rem; border-radius: 8px;">
        <span>{{ session('success') }}</span>
        <button onclick="document.getElementById('successAlert').style.display='none'"
            style="position: absolute; top: 5px; right: 10px; background: none; border: none; color: #065f46; font-weight: bold; font-size: 22px; cursor: pointer;">
            &times;
        </button>
    </div>
    @endif

    @if (session('error'))
    <div id="errorAlert"
        style="position: relative; margin-bottom: 1rem; background-color: #fee2e2; border: 1px solid #f87171; color: #7f1d1d; padding: 0.75rem 1rem; border-radius: 8px;">
        <span>{{ session('error') }}</span>
        <button onclick="document.getElementById('errorAlert').style.display='none'"
            style="position: absolute; top: 5px; right: 10px; background: none; border: none; color: #7f1d1d; font-weight: bold; font-size: 22px; cursor: pointer;">
            &times;
        </button>
    </div>
    @endif

</div>