@extends('Layout/header_footer')
@section('content')

<script>
    // Create a link element
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = '/Frontend/css/checkoutPageA.css'; // Your CSS file path
    // Append it to the head
    document.head.appendChild(link);

    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = '/Frontend/css/calendar-jquery-ui.css'; // Your CSS file path
    // Append it to the head
    document.head.appendChild(link);

    var script = document.createElement('script');
    script.src = '/Frontend/js/calendar.js'; // JavaScript file path
    script.type = 'text/javascript';
    // Append it to the head
    document.head.appendChild(script);


    // var link = document.createElement('link');
    // link.rel = 'stylesheet';
    // link.type = 'text/css';
    // link.href = '/resources/demos/style.css'; // Your CSS file path
    // Append it to the head
    document.head.appendChild(link);
</script>

<div class="page-container">
    <div class="review-container">
        <h1 class="title">Booking review</h1>
        <div class="price-button">
            <div class="prices">
                <div class="monthly-rent">
                    <div class="content">
                        <h4>Rent per day</h4>
                        <p style="font-weight: 700;"> {{ $propertyDetail->price_per_month ? round($propertyDetail->price_per_month / 30, 2) : 'N/A' }}$</p>
                    </div>
                    {{-- <div class="content">
                        <h4 style="font-weight: 400">Utilities per month<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M10.0003 1.66699C8.35215 1.66699 6.74099 2.15573 5.37058 3.07141C4.00017 3.98709 2.93206 5.28858 2.30133 6.8113C1.6706 8.33401 1.50558 10.0096 1.82712 11.6261C2.14866 13.2426 2.94234 14.7274 4.10777 15.8929C5.27321 17.0583 6.75807 17.852 8.37458 18.1735C9.99109 18.4951 11.6666 18.3301 13.1894 17.6993C14.7121 17.0686 16.0136 16.0005 16.9292 14.6301C17.8449 13.2597 18.3337 11.6485 18.3337 10.0003C18.3337 8.90598 18.1181 7.82234 17.6993 6.8113C17.2805 5.80025 16.6667 4.88159 15.8929 4.10777C15.1191 3.33395 14.2004 2.72012 13.1894 2.30133C12.1783 1.88254 11.0947 1.66699 10.0003 1.66699ZM10.0003 14.167C9.83551 14.167 9.67439 14.1181 9.53735 14.0266C9.40031 13.935 9.2935 13.8048 9.23043 13.6526C9.16736 13.5003 9.15085 13.3327 9.18301 13.1711C9.21516 13.0094 9.29453 12.8609 9.41107 12.7444C9.52762 12.6279 9.6761 12.5485 9.83775 12.5163C9.9994 12.4842 10.167 12.5007 10.3192 12.5638C10.4715 12.6268 10.6017 12.7336 10.6932 12.8707C10.7848 13.0077 10.8337 13.1688 10.8337 13.3337C10.8337 13.5547 10.7459 13.7666 10.5896 13.9229C10.4333 14.0792 10.2213 14.167 10.0003 14.167ZM10.8337 10.8337C10.8337 11.0547 10.7459 11.2666 10.5896 11.4229C10.4333 11.5792 10.2213 11.667 10.0003 11.667C9.77932 11.667 9.56735 11.5792 9.41107 11.4229C9.25479 11.2666 9.167 11.0547 9.167 10.8337V6.66699C9.167 6.44598 9.25479 6.23402 9.41107 6.07774C9.56735 5.92146 9.77932 5.83366 10.0003 5.83366C10.2213 5.83366 10.4333 5.92146 10.5896 6.07774C10.7459 6.23402 10.8337 6.44598 10.8337 6.66699V10.8337Z" fill="#181A18" />
                            </svg></h4>
                        <p>£250.70</p>
                    </div> --}}
                    <div class="content">
                        <h4>Daily subtotal</h4>
                        <p id="daily-subtotal" style="font-weight: 700;">£0.00</p>
                    </div>
                </div>

                <div class="additional-fee">
                    <h4 style="font-weight: 400">One-time cleaning fee
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M10.0003 1.6665C8.35215 1.6665 6.74099 2.15525 5.37058 3.07092C4.00017 3.9866 2.93206 5.28809 2.30133 6.81081C1.6706 8.33353 1.50558 10.0091 1.82712 11.6256C2.14866 13.2421 2.94234 14.727 4.10777 15.8924C5.27321 17.0578 6.75807 17.8515 8.37458 18.173C9.99109 18.4946 11.6666 18.3296 13.1894 17.6988C14.7121 17.0681 16.0136 16 16.9292 14.6296C17.8449 13.2592 18.3337 11.648 18.3337 9.99984C18.3337 8.90549 18.1181 7.82186 17.6993 6.81081C17.2805 5.79976 16.6667 4.8811 15.8929 4.10728C15.1191 3.33346 14.2004 2.71963 13.1894 2.30084C12.1783 1.88205 11.0947 1.6665 10.0003 1.6665ZM10.0003 14.1665C9.83551 14.1665 9.67439 14.1176 9.53735 14.0261C9.40031 13.9345 9.2935 13.8043 9.23043 13.6521C9.16736 13.4998 9.15085 13.3322 9.18301 13.1706C9.21516 13.0089 9.29453 12.8605 9.41107 12.7439C9.52762 12.6274 9.6761 12.548 9.83775 12.5159C9.9994 12.4837 10.167 12.5002 10.3192 12.5633C10.4715 12.6263 10.6017 12.7332 10.6932 12.8702C10.7848 13.0072 10.8337 13.1684 10.8337 13.3332C10.8337 13.5542 10.7459 13.7661 10.5896 13.9224C10.4333 14.0787 10.2213 14.1665 10.0003 14.1665ZM10.8337 10.8332C10.8337 11.0542 10.7459 11.2661 10.5896 11.4224C10.4333 11.5787 10.2213 11.6665 10.0003 11.6665C9.77932 11.6665 9.56735 11.5787 9.41107 11.4224C9.25479 11.2661 9.167 11.0542 9.167 10.8332V6.6665C9.167 6.44549 9.25479 6.23353 9.41107 6.07725C9.56735 5.92097 9.77932 5.83317 10.0003 5.83317C10.2213 5.83317 10.4333 5.92097 10.5896 6.07725C10.7459 6.23353 10.8337 6.44549 10.8337 6.6665V10.8332Z" fill="#181A18" />
                        </svg>
                    </h4>
                    <p id="one-time-cleaning-fee">0.00$</p>
                </div>

                <div class="total-charges">
                    <h4>Total charges</h4>
                    <p id="total-charges" style="font-weight: 700">0.00$</p>
                </div>

                <div class="total-charges">
                    <h4 style="line-height: 32px; font-size: 24px;">Total</h4>
                    <p id="total" style="font-weight: 700; line-height: 32px; font-size: 24px;">0.0$</p>
                </div>
            </div>
            <div class="button-container">
                <div class="button-text">
                    <a href="{{URL::to('/CheckoutPageB')}}">Confirm and pay</a>
                    <p>You won’t be charged yet</p>
                </div>
            </div>
        </div>
    </div>
    <div class="detail-container">
        <div class="image"></div>
        <div class="points">
            <div class="moves">
                <div class="from move">
                    <label for="from">Move in:</label>
                    <div class="pick-date">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M15 3.33317H14.1667V2.49984C14.1667 2.27882 14.0789 2.06686 13.9226 1.91058C13.7663 1.7543 13.5543 1.6665 13.3333 1.6665C13.1123 1.6665 12.9004 1.7543 12.7441 1.91058C12.5878 2.06686 12.5 2.27882 12.5 2.49984V3.33317H7.5V2.49984C7.5 2.27882 7.4122 2.06686 7.25592 1.91058C7.09964 1.7543 6.88768 1.6665 6.66667 1.6665C6.44565 1.6665 6.23369 1.7543 6.07741 1.91058C5.92113 2.06686 5.83333 2.27882 5.83333 2.49984V3.33317H5C4.33696 3.33317 3.70107 3.59656 3.23223 4.0654C2.76339 4.53424 2.5 5.17013 2.5 5.83317V15.8332C2.5 16.4962 2.76339 17.1321 3.23223 17.6009C3.70107 18.0698 4.33696 18.3332 5 18.3332H15C15.663 18.3332 16.2989 18.0698 16.7678 17.6009C17.2366 17.1321 17.5 16.4962 17.5 15.8332V5.83317C17.5 5.17013 17.2366 4.53424 16.7678 4.0654C16.2989 3.59656 15.663 3.33317 15 3.33317ZM6.66667 14.1665C6.50185 14.1665 6.34073 14.1176 6.20369 14.0261C6.06665 13.9345 5.95984 13.8043 5.89677 13.6521C5.83369 13.4998 5.81719 13.3322 5.84935 13.1706C5.8815 13.0089 5.96087 12.8605 6.07741 12.7439C6.19395 12.6274 6.34244 12.548 6.50409 12.5159C6.66574 12.4837 6.8333 12.5002 6.98557 12.5633C7.13784 12.6263 7.26799 12.7332 7.35956 12.8702C7.45113 13.0072 7.5 13.1684 7.5 13.3332C7.5 13.5542 7.4122 13.7661 7.25592 13.9224C7.09964 14.0787 6.88768 14.1665 6.66667 14.1665ZM13.3333 14.1665H10C9.77899 14.1665 9.56702 14.0787 9.41074 13.9224C9.25446 13.7661 9.16667 13.5542 9.16667 13.3332C9.16667 13.1122 9.25446 12.9002 9.41074 12.7439C9.56702 12.5876 9.77899 12.4998 10 12.4998H13.3333C13.5543 12.4998 13.7663 12.5876 13.9226 12.7439C14.0789 12.9002 14.1667 13.1122 14.1667 13.3332C14.1667 13.5542 14.0789 13.7661 13.9226 13.9224C13.7663 14.0787 13.5543 14.1665 13.3333 14.1665ZM15.8333 9.1665H4.16667V5.83317C4.16667 5.61216 4.25446 5.4002 4.41074 5.24392C4.56702 5.08764 4.77899 4.99984 5 4.99984H5.83333V5.83317C5.83333 6.05418 5.92113 6.26615 6.07741 6.42243C6.23369 6.57871 6.44565 6.6665 6.66667 6.6665C6.88768 6.6665 7.09964 6.57871 7.25592 6.42243C7.4122 6.26615 7.5 6.05418 7.5 5.83317V4.99984H12.5V5.83317C12.5 6.05418 12.5878 6.26615 12.7441 6.42243C12.9004 6.57871 13.1123 6.6665 13.3333 6.6665C13.5543 6.6665 13.7663 6.57871 13.9226 6.42243C14.0789 6.26615 14.1667 6.05418 14.1667 5.83317V4.99984H15C15.221 4.99984 15.433 5.08764 15.5893 5.24392C15.7455 5.4002 15.8333 5.61216 15.8333 5.83317V9.1665Z" fill="#181A18" />
                        </svg>
                        {{-- <input value="{{ $from }}" type="text" id="from" name="from"> --}}
                        <p id="display-from">{{ $from }}</p>
                    </div>

                </div>
                <div class="to move">
                    <label for="to">Move out:</label>
                    <div class="pick-date">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M15 3.33317H14.1667V2.49984C14.1667 2.27882 14.0789 2.06686 13.9226 1.91058C13.7663 1.7543 13.5543 1.6665 13.3333 1.6665C13.1123 1.6665 12.9004 1.7543 12.7441 1.91058C12.5878 2.06686 12.5 2.27882 12.5 2.49984V3.33317H7.5V2.49984C7.5 2.27882 7.4122 2.06686 7.25592 1.91058C7.09964 1.7543 6.88768 1.6665 6.66667 1.6665C6.44565 1.6665 6.23369 1.7543 6.07741 1.91058C5.92113 2.06686 5.83333 2.27882 5.83333 2.49984V3.33317H5C4.33696 3.33317 3.70107 3.59656 3.23223 4.0654C2.76339 4.53424 2.5 5.17013 2.5 5.83317V15.8332C2.5 16.4962 2.76339 17.1321 3.23223 17.6009C3.70107 18.0698 4.33696 18.3332 5 18.3332H15C15.663 18.3332 16.2989 18.0698 16.7678 17.6009C17.2366 17.1321 17.5 16.4962 17.5 15.8332V5.83317C17.5 5.17013 17.2366 4.53424 16.7678 4.0654C16.2989 3.59656 15.663 3.33317 15 3.33317ZM6.66667 14.1665C6.50185 14.1665 6.34073 14.1176 6.20369 14.0261C6.06665 13.9345 5.95984 13.8043 5.89677 13.6521C5.83369 13.4998 5.81719 13.3322 5.84935 13.1706C5.8815 13.0089 5.96087 12.8605 6.07741 12.7439C6.19395 12.6274 6.34244 12.548 6.50409 12.5159C6.66574 12.4837 6.8333 12.5002 6.98557 12.5633C7.13784 12.6263 7.26799 12.7332 7.35956 12.8702C7.45113 13.0072 7.5 13.1684 7.5 13.3332C7.5 13.5542 7.4122 13.7661 7.25592 13.9224C7.09964 14.0787 6.88768 14.1665 6.66667 14.1665ZM13.3333 14.1665H10C9.77899 14.1665 9.56702 14.0787 9.41074 13.9224C9.25446 13.7661 9.16667 13.5542 9.16667 13.3332C9.16667 13.1122 9.25446 12.9002 9.41074 12.7439C9.56702 12.5876 9.77899 12.4998 10 12.4998H13.3333C13.5543 12.4998 13.7663 12.5876 13.9226 12.7439C14.0789 12.9002 14.1667 13.1122 14.1667 13.3332C14.1667 13.5542 14.0789 13.7661 13.9226 13.9224C13.7663 14.0787 13.5543 14.1665 13.3333 14.1665ZM15.8333 9.1665H4.16667V5.83317C4.16667 5.61216 4.25446 5.4002 4.41074 5.24392C4.56702 5.08764 4.77899 4.99984 5 4.99984H5.83333V5.83317C5.83333 6.05418 5.92113 6.26615 6.07741 6.42243C6.23369 6.57871 6.44565 6.6665 6.66667 6.6665C6.88768 6.6665 7.09964 6.57871 7.25592 6.42243C7.4122 6.26615 7.5 6.05418 7.5 5.83317V4.99984H12.5V5.83317C12.5 6.05418 12.5878 6.26615 12.7441 6.42243C12.9004 6.57871 13.1123 6.6665 13.3333 6.6665C13.5543 6.6665 13.7663 6.57871 13.9226 6.42243C14.0789 6.26615 14.1667 6.05418 14.1667 5.83317V4.99984H15C15.221 4.99984 15.433 5.08764 15.5893 5.24392C15.7455 5.4002 15.8333 5.61216 15.8333 5.83317V9.1665Z" fill="#181A18" />
                        </svg>
                        {{-- <input value="{{ $to }}" type="text" id="to" name="to"> --}}
                        <p id="display-to">{{ $to }}</p>
                    </div>
                </div>

            </div>
            <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
            <script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>
            <div class="guests">
                <h4><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M7.50033 9.16667C8.1596 9.16667 8.80406 8.97117 9.35223 8.6049C9.90039 8.23863 10.3276 7.71803 10.5799 7.10895C10.8322 6.49986 10.8982 5.82964 10.7696 5.18303C10.641 4.53643 10.3235 3.94249 9.85735 3.47631C9.39117 3.01014 8.79723 2.69267 8.15063 2.56405C7.50402 2.43543 6.8338 2.50144 6.22471 2.75374C5.61563 3.00603 5.09503 3.43327 4.72876 3.98143C4.36249 4.5296 4.16699 5.17406 4.16699 5.83334C4.16699 6.71739 4.51818 7.56524 5.1433 8.19036C5.76842 8.81548 6.61627 9.16667 7.50033 9.16667ZM14.167 10.8333C14.6614 10.8333 15.1448 10.6867 15.5559 10.412C15.967 10.1373 16.2875 9.74686 16.4767 9.29004C16.6659 8.83323 16.7154 8.33056 16.619 7.84561C16.5225 7.36066 16.2844 6.9152 15.9348 6.56557C15.5851 6.21594 15.1397 5.97784 14.6547 5.88137C14.1698 5.78491 13.6671 5.83442 13.2103 6.02364C12.7535 6.21286 12.363 6.53329 12.0883 6.94441C11.8136 7.35553 11.667 7.83888 11.667 8.33334C11.667 8.99638 11.9304 9.63226 12.3992 10.1011C12.8681 10.5699 13.504 10.8333 14.167 10.8333ZM17.5003 16.6667C17.7213 16.6667 17.9333 16.5789 18.0896 16.4226C18.2459 16.2663 18.3337 16.0543 18.3337 15.8333C18.333 15.0545 18.114 14.2914 17.7017 13.6307C17.2893 12.97 16.7 12.4381 16.0006 12.0954C15.3012 11.7527 14.5198 11.6128 13.745 11.6917C12.9702 11.7705 12.2329 12.065 11.617 12.5417C10.8008 11.7286 9.76204 11.1755 8.63185 10.952C7.50165 10.7285 6.33059 10.8447 5.26635 11.2859C4.2021 11.7272 3.29234 12.4736 2.65178 13.4312C2.01122 14.3888 1.66855 15.5146 1.66699 16.6667C1.66699 16.8877 1.75479 17.0996 1.91107 17.2559C2.06735 17.4122 2.27931 17.5 2.50033 17.5H12.5003C12.7213 17.5 12.9333 17.4122 13.0896 17.2559C13.2459 17.0996 13.3337 16.8877 13.3337 16.6667" fill="#181A18" />
                    </svg>Guests</h4>
                <h4> {{ $guestCount }}</h4>
            </div>
            <p>All utilities are included</p>
        </div>
        <div class="payment-timeline">
            <h4>Payment timeline</h4>

            <div class="steps">
                <div class="timeline">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="77" viewBox="0 0 13 77" fill="none">
                        <line x1="6.5" y1="4" x2="6.5" y2="64" stroke="#181A18" />
                        <circle cx="6.5" cy="6.5" r="6.5" fill="#181A18" />
                        <circle cx="6.5" cy="70.5" r="6.5" fill="#181A18" />
                    </svg>
                </div>
                <div class="point">
                    <div class="content">
                        <div class="text">
                            <h4 style="font-weight:400">Reserve this apaptment</h4>
                            <p style="font-weight:400; font-size: 14px;">Due now</p>
                        </div>
                        <p id="Reserve">0.00$</p>
                    </div>
                    <div class="content">
                        <div class="text">
                            <h4 style="font-weight:400">After move-out</h4>
                            <p style="font-weight:400; font-size: 14px;">Receive your 50$ deposit back within 30 days<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M10.0003 1.6665C8.35215 1.6665 6.74099 2.15525 5.37058 3.07092C4.00017 3.9866 2.93206 5.28809 2.30133 6.81081C1.6706 8.33353 1.50558 10.0091 1.82712 11.6256C2.14866 13.2421 2.94234 14.727 4.10777 15.8924C5.27321 17.0578 6.75807 17.8515 8.37458 18.173C9.99109 18.4946 11.6666 18.3296 13.1894 17.6988C14.7121 17.0681 16.0136 16 16.9292 14.6296C17.8449 13.2592 18.3337 11.648 18.3337 9.99984C18.3337 8.90549 18.1181 7.82186 17.6993 6.81081C17.2805 5.79976 16.6667 4.8811 15.8929 4.10728C15.1191 3.33346 14.2004 2.71963 13.1894 2.30084C12.1783 1.88205 11.0947 1.6665 10.0003 1.6665ZM10.0003 14.1665C9.83551 14.1665 9.67439 14.1176 9.53735 14.0261C9.40031 13.9345 9.2935 13.8043 9.23043 13.6521C9.16736 13.4998 9.15085 13.3322 9.18301 13.1706C9.21516 13.0089 9.29453 12.8605 9.41107 12.7439C9.52762 12.6274 9.6761 12.548 9.83775 12.5159C9.9994 12.4837 10.167 12.5002 10.3192 12.5633C10.4715 12.6263 10.6017 12.7332 10.6932 12.8702C10.7848 13.0072 10.8337 13.1684 10.8337 13.3332C10.8337 13.5542 10.7459 13.7661 10.5896 13.9224C10.4333 14.0787 10.2213 14.1665 10.0003 14.1665ZM10.8337 10.8332C10.8337 11.0542 10.7459 11.2661 10.5896 11.4224C10.4333 11.5787 10.2213 11.6665 10.0003 11.6665C9.77932 11.6665 9.56735 11.5787 9.41107 11.4224C9.25479 11.2661 9.167 11.0542 9.167 10.8332V6.6665C9.167 6.44549 9.25479 6.23353 9.41107 6.07725C9.56735 5.92097 9.77932 5.83317 10.0003 5.83317C10.2213 5.83317 10.4333 5.92097 10.5896 6.07725C10.7459 6.23353 10.8337 6.44549 10.8337 6.6665V10.8332Z" fill="#181A18" />
                                </svg></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Giá thuê theo ngày
        const rentPerDay = {{ $propertyDetail->price_per_month ? round($propertyDetail->price_per_month / 30, 2) : 0 }};
        const cleaningFee = 20; // Phí dọn dẹp một lần

        // Lấy ngày từ và ngày đến từ biến có sẵn
        const fromDate = new Date("{{ $from }}");
        const toDate = new Date("{{ $to }}");

        // Tính số ngày giữa hai ngày
        const days = Math.ceil((toDate - fromDate) / (1000 * 60 * 60 * 24));

        // Tính toán
        const dailySubtotal = days * rentPerDay;
        const totalCharges = dailySubtotal + cleaningFee;
        const total = totalCharges+50;
        const dueNow = (days * rentPerDay) / 2;

        // Cập nhật phần tử HTML
        document.getElementById("Reserve").innerText = `${dueNow.toFixed(2)}$`;
        // Cập nhật các phần tử HTML
        document.getElementById("daily-subtotal").innerText = `${dailySubtotal.toFixed(2)}$`;
        document.getElementById("one-time-cleaning-fee").innerText = `${cleaningFee.toFixed(2)}$`;
        document.getElementById("total-charges").innerText = `${totalCharges.toFixed(2)}$`;
        document.getElementById("total").innerText = `${total.toFixed(2)}$`;

    </script>
</div>

@endsection