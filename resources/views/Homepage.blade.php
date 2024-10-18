@extends('Layout/header_footer')
@section('content')

<script>
    // Create a link element
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = '/Frontend/css/Homepage.css'; // Your CSS file path
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

    var script = document.createElement('script');
    script.src = '/Frontend/js/suggestLocation.js'; // JavaScript file path
    script.type = 'text/javascript';
    // Append it to the head
    document.head.appendChild(script);

    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = '/resources/demos/style.css'; // Your CSS file path
    // Append it to the head
    document.head.appendChild(link);

    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = '/Frontend/css/swiper-bundle.min.home.css'; // Your CSS file path
    // Append it to the head
    document.head.appendChild(link);
</script>

<div class="intro-video">
    <video autoplay loop muted>
        <source src="{{ ('/Frontend/Video/intro-video.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="intro-video-text">
        <div class="text-container">
            <h1>
                Unlock Your Property's Potential
            </h1>
            <p>FlexiRent makes it easy and fast to find the right tenants, optimizes the management of property,
                and
                ensures that all transactions are safe and convenient</p>
        </div>
    </div>


    {{-- <div class="searchBar_booking">

        <div class="searchPart1">
            <div class="searchCity">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path
                        d="M17.2583 16.075L14.425 13.25C15.3392 12.0854 15.8352 10.6472 15.8333 9.16667C15.8333 7.84813 15.4423 6.5592 14.7098 5.46287C13.9773 4.36654 12.9361 3.51206 11.7179 3.00747C10.4997 2.50289 9.15927 2.37087 7.86607 2.6281C6.57286 2.88534 5.38497 3.52027 4.45262 4.45262C3.52027 5.38497 2.88534 6.57286 2.6281 7.86607C2.37087 9.15927 2.50289 10.4997 3.00747 11.7179C3.51206 12.9361 4.36654 13.9773 5.46287 14.7098C6.5592 15.4423 7.84813 15.8333 9.16667 15.8333C10.6472 15.8352 12.0854 15.3392 13.25 14.425L16.075 17.2583C16.1525 17.3364 16.2446 17.3984 16.3462 17.4407C16.4477 17.4831 16.5567 17.5048 16.6667 17.5048C16.7767 17.5048 16.8856 17.4831 16.9872 17.4407C17.0887 17.3984 17.1809 17.3364 17.2583 17.2583C17.3364 17.1809 17.3984 17.0887 17.4407 16.9872C17.4831 16.8856 17.5048 16.7767 17.5048 16.6667C17.5048 16.5567 17.4831 16.4477 17.4407 16.3462C17.3984 16.2446 17.3364 16.1525 17.2583 16.075ZM4.16667 9.16667C4.16667 8.17776 4.45991 7.21106 5.00932 6.38882C5.55873 5.56657 6.33962 4.92571 7.25325 4.54727C8.16688 4.16883 9.17222 4.06982 10.1421 4.26274C11.112 4.45567 12.0029 4.93187 12.7022 5.63114C13.4015 6.3304 13.8777 7.22131 14.0706 8.19122C14.2635 9.16112 14.1645 10.1665 13.7861 11.0801C13.4076 11.9937 12.7668 12.7746 11.9445 13.324C11.1223 13.8734 10.1556 14.1667 9.16667 14.1667C7.84059 14.1667 6.56882 13.6399 5.63114 12.7022C4.69345 11.7645 4.16667 10.4928 4.16667 9.16667Z"
                        fill="#181A18" />
                </svg>
                <div class="search-container">
                    <input type="text" id="location-input" name="city" placeholder="Select a city" onkeyup="showSuggestions(this.value)">
                    <div id="suggestions" class="suggestions"></div>
                </div>
            </div>
            <div class="vertical-line"></div>
            <div class="searchDate">
                <div class="moves">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M15 3.33317H14.1667V2.49984C14.1667 2.27882 14.0789 2.06686 13.9226 1.91058C13.7663 1.7543 13.5543 1.6665 13.3333 1.6665C13.1123 1.6665 12.9004 1.7543 12.7441 1.91058C12.5878 2.06686 12.5 2.27882 12.5 2.49984V3.33317H7.5V2.49984C7.5 2.27882 7.4122 2.06686 7.25592 1.91058C7.09964 1.7543 6.88768 1.6665 6.66667 1.6665C6.44565 1.6665 6.23369 1.7543 6.07741 1.91058C5.92113 2.06686 5.83333 2.27882 5.83333 2.49984V3.33317H5C4.33696 3.33317 3.70107 3.59656 3.23223 4.0654C2.76339 4.53424 2.5 5.17013 2.5 5.83317V15.8332C2.5 16.4962 2.76339 17.1321 3.23223 17.6009C3.70107 18.0698 4.33696 18.3332 5 18.3332H15C15.663 18.3332 16.2989 18.0698 16.7678 17.6009C17.2366 17.1321 17.5 16.4962 17.5 15.8332V5.83317C17.5 5.17013 17.2366 4.53424 16.7678 4.0654C16.2989 3.59656 15.663 3.33317 15 3.33317ZM6.66667 14.1665C6.50185 14.1665 6.34073 14.1176 6.20369 14.0261C6.06665 13.9345 5.95984 13.8043 5.89677 13.6521C5.83369 13.4998 5.81719 13.3322 5.84935 13.1706C5.8815 13.0089 5.96087 12.8605 6.07741 12.7439C6.19395 12.6274 6.34244 12.548 6.50409 12.5159C6.66574 12.4837 6.8333 12.5002 6.98557 12.5633C7.13784 12.6263 7.26799 12.7332 7.35956 12.8702C7.45113 13.0072 7.5 13.1684 7.5 13.3332C7.5 13.5542 7.4122 13.7661 7.25592 13.9224C7.09964 14.0787 6.88768 14.1665 6.66667 14.1665ZM13.3333 14.1665H10C9.77899 14.1665 9.56702 14.0787 9.41074 13.9224C9.25446 13.7661 9.16667 13.5542 9.16667 13.3332C9.16667 13.1122 9.25446 12.9002 9.41074 12.7439C9.56702 12.5876 9.77899 12.4998 10 12.4998H13.3333C13.5543 12.4998 13.7663 12.5876 13.9226 12.7439C14.0789 12.9002 14.1667 13.1122 14.1667 13.3332C14.1667 13.5542 14.0789 13.7661 13.9226 13.9224C13.7663 14.0787 13.5543 14.1665 13.3333 14.1665ZM15.8333 9.1665H4.16667V5.83317C4.16667 5.61216 4.25446 5.4002 4.41074 5.24392C4.56702 5.08764 4.77899 4.99984 5 4.99984H5.83333V5.83317C5.83333 6.05418 5.92113 6.26615 6.07741 6.42243C6.23369 6.57871 6.44565 6.6665 6.66667 6.6665C6.88768 6.6665 7.09964 6.57871 7.25592 6.42243C7.4122 6.26615 7.5 6.05418 7.5 5.83317V4.99984H12.5V5.83317C12.5 6.05418 12.5878 6.26615 12.7441 6.42243C12.9004 6.57871 13.1123 6.6665 13.3333 6.6665C13.5543 6.6665 13.7663 6.57871 13.9226 6.42243C14.0789 6.26615 14.1667 6.05418 14.1667 5.83317V4.99984H15C15.221 4.99984 15.433 5.08764 15.5893 5.24392C15.7455 5.4002 15.8333 5.61216 15.8333 5.83317V9.1665Z" fill="#181A18" />
                    </svg>
                    <div class="from move">

                        <div class="pick-date">
                            <input type="text" id="from" name="from" placeholder="Move in">
                        </div>

                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                        <path d="M4.36702 10.8332H14.2504L11.2254 14.4665C11.1553 14.5508 11.1026 14.648 11.0701 14.7527C11.0376 14.8573 11.0261 14.9673 11.0362 15.0764C11.0565 15.2968 11.1635 15.5001 11.3337 15.6415C11.5039 15.783 11.7233 15.851 11.9436 15.8307C12.164 15.8104 12.3672 15.7034 12.5087 15.5332L16.6754 10.5332C16.7034 10.4934 16.7285 10.4516 16.7504 10.4082C16.7504 10.3665 16.792 10.3415 16.8087 10.2998C16.8465 10.2043 16.8662 10.1026 16.867 9.99984C16.8662 9.8971 16.8465 9.79539 16.8087 9.69984C16.8087 9.65817 16.767 9.63317 16.7504 9.59151C16.7285 9.54806 16.7034 9.50628 16.6754 9.46651L12.5087 4.46651C12.4303 4.37244 12.3322 4.29679 12.2213 4.24494C12.1104 4.19308 11.9894 4.16631 11.867 4.16651C11.6723 4.16613 11.4836 4.23394 11.3337 4.35817C11.2493 4.42813 11.1796 4.51405 11.1284 4.611C11.0773 4.70796 11.0458 4.81405 11.0357 4.9232C11.0257 5.03234 11.0372 5.1424 11.0698 5.24707C11.1023 5.35174 11.1552 5.44897 11.2254 5.53317L14.2504 9.16651H4.36702C4.14601 9.16651 3.93405 9.2543 3.77777 9.41058C3.62149 9.56686 3.53369 9.77883 3.53369 9.99984C3.53369 10.2209 3.62149 10.4328 3.77777 10.5891C3.93405 10.7454 4.14601 10.8332 4.36702 10.8332Z" fill="#181A18" />
                    </svg>
                    <div class="to move">
                        <div class="pick-date">
                            <input type="text" id="to" name="to" placeholder="Move out">
                        </div>
                    </div>

                </div>
                <script src="\Frontend\js\suggestLocation.js"></script>
                <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
                <script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>
            </div>
            <div class="vertical-line"></div>
            <div class="searchGuest">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 21 20" fill="none">
                    <path
                        d="M7.90029 9.16667C8.55956 9.16667 9.20403 8.97117 9.75219 8.6049C10.3004 8.23863 10.7276 7.71803 10.9799 7.10895C11.2322 6.49986 11.2982 5.82964 11.1696 5.18303C11.041 4.53643 10.7235 3.94249 10.2573 3.47631C9.79114 3.01014 9.19719 2.69267 8.55059 2.56405C7.90399 2.43543 7.23376 2.50144 6.62468 2.75374C6.01559 3.00603 5.49499 3.43327 5.12872 3.98143C4.76245 4.5296 4.56696 5.17406 4.56696 5.83334C4.56696 6.71739 4.91814 7.56524 5.54327 8.19036C6.16839 8.81548 7.01623 9.16667 7.90029 9.16667ZM14.567 10.8333C15.0614 10.8333 15.5448 10.6867 15.9559 10.412C16.367 10.1373 16.6874 9.74686 16.8767 9.29004C17.0659 8.83323 17.1154 8.33056 17.0189 7.84561C16.9225 7.36066 16.6844 6.9152 16.3347 6.56557C15.9851 6.21594 15.5396 5.97784 15.0547 5.88137C14.5697 5.78491 14.0671 5.83442 13.6102 6.02364C13.1534 6.21286 12.763 6.53329 12.4883 6.94441C12.2136 7.35553 12.067 7.83888 12.067 8.33334C12.067 8.99638 12.3303 9.63226 12.7992 10.1011C13.268 10.5699 13.9039 10.8333 14.567 10.8333ZM17.9003 16.6667C18.1213 16.6667 18.3333 16.5789 18.4895 16.4226C18.6458 16.2663 18.7336 16.0543 18.7336 15.8333C18.733 15.0545 18.514 14.2914 18.1016 13.6307C17.6893 12.97 17.0999 12.4381 16.4006 12.0954C15.7012 11.7527 14.9198 11.6128 14.1449 11.6917C13.3701 11.7705 12.6329 12.065 12.017 12.5417C11.2007 11.7286 10.162 11.1755 9.03181 10.952C7.90162 10.7285 6.73056 10.8447 5.66631 11.2859C4.60207 11.7272 3.6923 12.4736 3.05174 13.4312C2.41118 14.3888 2.06851 15.5146 2.06696 16.6667C2.06696 16.8877 2.15475 17.0996 2.31103 17.2559C2.46731 17.4122 2.67928 17.5 2.90029 17.5H12.9003C13.1213 17.5 13.3333 17.4122 13.4895 17.2559C13.6458 17.0996 13.7336 16.8877 13.7336 16.6667"
                        fill="#181A18" />
                </svg>
                <p>Guest</p>

                <button class="svg-button" id="btnPlus">
                    +</button>

                <p class="numberGuest" id="numberGuest">0</p>

                <button class="svg-button" id="btnMinus">
                    -
                </button>
            </div>

            <script src="\Frontend\js\plus-minus-btn.js"></script>

        </div>
        <div class="buttonSearch">
            <a href="{{URL::to('/bookingPage')}}">Search</a>
        </div>

    </div> --}}
    <div class="searchBar_booking">
        <form action="{{ route('search.properties') }}" method="post">
            {{ csrf_field() }}
            <div class="searchPart1">
                <div class="searchCity">
                    <div class="search-container">
                        <input type="text" autocomplete="off" id="location-input" name="city" placeholder="Select a city" onkeyup="showSuggestions(this.value)">
                        <div id="suggestions" class="suggestions"></div>
                    </div>
                </div>
                <div class="vertical-line"></div>
                <div class="searchDate">
                    <div class="moves">
                        <div class="from move">
                            <div class="pick-date">
                                <input type="date" id="from" name="from" placeholder="Move in">
                            </div>
                        </div>
                        <div class="to move">
                            <div class="pick-date">
                                <input type="date" id="to" name="to" placeholder="Move out">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vertical-line"></div>
                <div class="searchGuest">
                    <p>Guest</p>
                    <input type="number" id="guest_count" name="guest_count" min="1" value="1">
                </div>
            </div>
            <div class="buttonSearch">
                <button type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

<div class="quote-container">
    <div class="home-quote">
        <div class="left-part">
            <img class="quote-img" src="{{ ('/Frontend/Image/Quote/Eff1.png') }}" alt=""
                style="border-radius: 60px 0px 0px 0px;">
            <img class="quote-img" src="{{ ('/Frontend/Image/Quote/eff2.png') }}" alt="">
            <img class="quote-img" src="{{ ('/Frontend/Image/Quote/ef3.png') }}" alt=""
                style="border-radius: 0px 0px 0px 60px;">
            <img class="quote-img" src="{{ ('/Frontend/Image/Quote/ef4.png') }}" alt="">
        </div>

        <div class="right-part">
            <div class="text-container">
                <h1>Effortless Match</h1>
                <p>Our integrated solutions reduce friction and increase efficiency by matching the appropriate
                    renter with the correct property at the right moment.</p>
            </div>
        </div>
    </div>
</div>

<div class="strength-container">
    <div class="text">
        <h1>FlexiRent Makes Finding a Home Easy Right Away</h1>
        <p>We believe in a world where finding a home is just a click away. Whether you’re selling your home,
            travelling for work or moving to a new city. Just bring your bags, and we’ll handle the rest.</p>
    </div>

    <div class="strength">

        <!-- strength1 -->
        <div class="strength-block">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                    <path
                        d="M31.25 17.5C31.25 14.725 33.475 12.5 36.25 12.5H45C47.75 12.5 50 14.75 50 17.5V22.9C47.1 23.925 45 26.675 45 29.925V35H31.25V17.5ZM15 29.9V35H28.75V17.5C28.75 14.725 26.525 12.5 23.75 12.5H15C12.25 12.5 10 14.75 10 17.5V22.875C12.9 23.9 15 26.675 15 29.9ZM51.65 25.075C49.2 25.475 47.5 27.8 47.5 30.3V37.5H12.5V30C12.5 28.6739 11.9732 27.4021 11.0355 26.4645C10.0979 25.5268 8.82608 25 7.5 25C6.17392 25 4.90215 25.5268 3.96447 26.4645C3.02678 27.4021 2.5 28.6739 2.5 30V42.5C2.5 45.25 4.75 47.5 7.5 47.5V52.5H12.5V47.5H47.5V52.5H52.5V47.5C55.25 47.5 57.5 45.25 57.5 42.5V30C57.5 26.975 54.775 24.55 51.65 25.075Z"
                        fill="black" />
                </svg>
            </div>
            <h4>Flexible living</h4>
            <p>With month-to-month contracts, you can stay as long or as little as you need.</p>
        </div>

        <!-- strength2 -->
        <div class="strength-block">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                    <path
                        d="M45 10H42.5V7.5C42.5 6.83696 42.2366 6.20107 41.7678 5.73223C41.2989 5.26339 40.663 5 40 5C39.337 5 38.7011 5.26339 38.2322 5.73223C37.7634 6.20107 37.5 6.83696 37.5 7.5V10H22.5V7.5C22.5 6.83696 22.2366 6.20107 21.7678 5.73223C21.2989 5.26339 20.663 5 20 5C19.337 5 18.7011 5.26339 18.2322 5.73223C17.7634 6.20107 17.5 6.83696 17.5 7.5V10H15C13.0109 10 11.1032 10.7902 9.6967 12.1967C8.29018 13.6032 7.5 15.5109 7.5 17.5V47.5C7.5 49.4891 8.29018 51.3968 9.6967 52.8033C11.1032 54.2098 13.0109 55 15 55H45C46.9891 55 48.8968 54.2098 50.3033 52.8033C51.7098 51.3968 52.5 49.4891 52.5 47.5V17.5C52.5 15.5109 51.7098 13.6032 50.3033 12.1967C48.8968 10.7902 46.9891 10 45 10ZM20 42.5C19.5055 42.5 19.0222 42.3534 18.6111 42.0787C18.2 41.804 17.8795 41.4135 17.6903 40.9567C17.5011 40.4999 17.4516 39.9972 17.548 39.5123C17.6445 39.0273 17.8826 38.5819 18.2322 38.2322C18.5819 37.8826 19.0273 37.6445 19.5123 37.548C19.9972 37.4516 20.4999 37.5011 20.9567 37.6903C21.4135 37.8795 21.804 38.2 22.0787 38.6111C22.3534 39.0222 22.5 39.5055 22.5 40C22.5 40.663 22.2366 41.2989 21.7678 41.7678C21.2989 42.2366 20.663 42.5 20 42.5ZM40 42.5H30C29.337 42.5 28.7011 42.2366 28.2322 41.7678C27.7634 41.2989 27.5 40.663 27.5 40C27.5 39.337 27.7634 38.7011 28.2322 38.2322C28.7011 37.7634 29.337 37.5 30 37.5H40C40.663 37.5 41.2989 37.7634 41.7678 38.2322C42.2366 38.7011 42.5 39.337 42.5 40C42.5 40.663 42.2366 41.2989 41.7678 41.7678C41.2989 42.2366 40.663 42.5 40 42.5ZM47.5 27.5H12.5V17.5C12.5 16.837 12.7634 16.2011 13.2322 15.7322C13.7011 15.2634 14.337 15 15 15H17.5V17.5C17.5 18.163 17.7634 18.7989 18.2322 19.2678C18.7011 19.7366 19.337 20 20 20C20.663 20 21.2989 19.7366 21.7678 19.2678C22.2366 18.7989 22.5 18.163 22.5 17.5V15H37.5V17.5C37.5 18.163 37.7634 18.7989 38.2322 19.2678C38.7011 19.7366 39.337 20 40 20C40.663 20 41.2989 19.7366 41.7678 19.2678C42.2366 18.7989 42.5 18.163 42.5 17.5V15H45C45.663 15 46.2989 15.2634 46.7678 15.7322C47.2366 16.2011 47.5 16.837 47.5 17.5V27.5Z"
                        fill="#181A18" />
                </svg>
            </div>
            <h4>Move-in ready</h4>
            <p>Ready to move in with everything you need</p>
        </div>

        <!-- strength3 -->
        <div class="strength-block">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                    <path
                        d="M30 50C31.3807 50 32.5 48.8807 32.5 47.5C32.5 46.1193 31.3807 45 30 45C28.6193 45 27.5 46.1193 27.5 47.5C27.5 48.8807 28.6193 50 30 50Z"
                        fill="#181A18" />
                    <path
                        d="M29.9992 35.0002C26.7635 35.0001 23.6539 36.2547 21.3242 38.5002C20.8468 38.961 20.572 39.5926 20.5603 40.256C20.5486 40.9194 20.8009 41.5603 21.2617 42.0377C21.7225 42.5151 22.3541 42.7898 23.0175 42.8015C23.6809 42.8133 24.3218 42.561 24.7992 42.1002C26.219 40.8001 28.0742 40.0791 29.9992 40.0791C31.9242 40.0791 33.7795 40.8001 35.1992 42.1002C35.6766 42.561 36.3175 42.8133 36.9809 42.8015C37.6443 42.7898 38.2759 42.5151 38.7367 42.0377C39.1975 41.5603 39.4498 40.9194 39.4381 40.256C39.4264 39.5926 39.1516 38.961 38.6742 38.5002C36.3445 36.2547 33.2349 35.0001 29.9992 35.0002ZM29.9992 22.5002C26.9797 22.5021 23.9915 23.1119 21.2127 24.293C18.4338 25.4741 15.9211 27.2025 13.8242 29.3752C13.596 29.6165 13.4176 29.9003 13.2992 30.2106C13.1807 30.5209 13.1245 30.8514 13.1338 31.1834C13.1431 31.5153 13.2177 31.8422 13.3533 32.1454C13.4889 32.4485 13.6829 32.722 13.9242 32.9502C14.4115 33.411 15.062 33.6593 15.7324 33.6406C16.0644 33.6313 16.3913 33.5567 16.6944 33.4211C16.9976 33.2855 17.271 33.0915 17.4992 32.8502C19.1317 31.1565 21.0888 29.8093 23.2538 28.8891C25.4187 27.969 27.7469 27.4947 30.0992 27.4947C32.4516 27.4947 34.7798 27.969 36.9447 28.8891C39.1096 29.8093 41.0667 31.1565 42.6992 32.8502C42.9307 33.0864 43.2069 33.2743 43.5115 33.403C43.8162 33.5318 44.1434 33.5988 44.4742 33.6002C44.9628 33.5983 45.4401 33.4533 45.8471 33.1832C46.2542 32.913 46.5732 32.5295 46.7647 32.08C46.9562 31.6306 47.0118 31.1349 46.9246 30.6541C46.8374 30.1734 46.6113 29.7288 46.2742 29.3752C44.1657 27.1904 41.6367 25.4549 38.8397 24.2734C36.0427 23.0919 33.0355 22.4887 29.9992 22.5002Z"
                        fill="#181A18" />
                    <path
                        d="M54.2997 19.8252C47.7758 13.5316 39.0645 10.0146 29.9997 10.0146C20.9349 10.0146 12.2237 13.5316 5.69973 19.8252C5.27783 20.2943 5.04891 20.9056 5.05891 21.5365C5.0689 22.1674 5.31707 22.7711 5.75362 23.2266C6.19018 23.6822 6.78283 23.9558 7.41271 23.9926C8.04258 24.0294 8.66308 23.8267 9.14973 23.4252C14.7437 18.018 22.2196 14.9955 29.9997 14.9955C37.7799 14.9955 45.2557 18.018 50.8497 23.4252C51.3132 23.8719 51.9311 24.1226 52.5747 24.1252C52.9115 24.1239 53.2445 24.0546 53.5538 23.9214C53.8632 23.7882 54.1424 23.5939 54.3747 23.3502C54.8305 22.8719 55.0785 22.2327 55.0644 21.5722C55.0504 20.9117 54.7755 20.2836 54.2997 19.8252Z"
                        fill="#181A18" />
                </svg>
            </div>
            <h4>High-speed Wi-Fi</h4>
            <p>Best in class internet speeds suitable for working
                from home</p>
        </div>

        <!-- strength4 -->
        <div class="strength-block">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                    <path
                        d="M47.6746 12.3248C43.5726 8.19606 38.1587 5.62784 32.3661 5.06292C26.5736 4.49799 20.7654 5.97176 15.943 9.23014C11.1206 12.4885 7.58615 17.3273 5.94897 22.9123C4.31179 28.4973 4.6745 34.4786 6.97456 39.8248C7.21429 40.3217 7.29295 40.8811 7.19956 41.4248L4.99956 51.9998C4.9148 52.4053 4.93211 52.8254 5.04993 53.2225C5.16775 53.6196 5.38239 53.9812 5.67456 54.2748C5.91407 54.5126 6.19925 54.6994 6.5129 54.824C6.82655 54.9486 7.16218 55.0084 7.49956 54.9998H7.99956L18.6996 52.8498C19.2434 52.7844 19.7949 52.862 20.2996 53.0748C25.6458 55.3749 31.627 55.7376 37.212 54.1004C42.797 52.4632 47.6358 48.9288 50.8942 44.1063C54.1526 39.2839 55.6264 33.4758 55.0615 27.6833C54.4965 21.8907 51.9283 16.4768 47.7996 12.3748L47.6746 12.3248ZM19.9996 32.4998C19.5051 32.4998 19.0218 32.3532 18.6106 32.0785C18.1995 31.8038 17.8791 31.4133 17.6899 30.9565C17.5006 30.4997 17.4511 29.997 17.5476 29.5121C17.6441 29.0271 17.8822 28.5817 18.2318 28.232C18.5814 27.8824 19.0269 27.6443 19.5118 27.5478C19.9968 27.4514 20.4995 27.5009 20.9563 27.6901C21.4131 27.8793 21.8035 28.1998 22.0782 28.6109C22.3529 29.022 22.4996 29.5054 22.4996 29.9998C22.4996 30.6629 22.2362 31.2987 21.7673 31.7676C21.2985 32.2364 20.6626 32.4998 19.9996 32.4998ZM29.9996 32.4998C29.5051 32.4998 29.0218 32.3532 28.6106 32.0785C28.1995 31.8038 27.8791 31.4133 27.6899 30.9565C27.5006 30.4997 27.4511 29.997 27.5476 29.5121C27.6441 29.0271 27.8822 28.5817 28.2318 28.232C28.5814 27.8824 29.0269 27.6443 29.5118 27.5478C29.9968 27.4514 30.4995 27.5009 30.9563 27.6901C31.4131 27.8793 31.8035 28.1998 32.0782 28.6109C32.3529 29.022 32.4996 29.5054 32.4996 29.9998C32.4996 30.6629 32.2362 31.2987 31.7673 31.7676C31.2985 32.2364 30.6626 32.4998 29.9996 32.4998ZM39.9996 32.4998C39.5051 32.4998 39.0218 32.3532 38.6106 32.0785C38.1995 31.8038 37.8791 31.4133 37.6899 30.9565C37.5006 30.4997 37.4511 29.997 37.5476 29.5121C37.6441 29.0271 37.8822 28.5817 38.2318 28.232C38.5814 27.8824 39.0269 27.6443 39.5118 27.5478C39.9968 27.4514 40.4995 27.5009 40.9563 27.6901C41.4131 27.8793 41.8035 28.1998 42.0782 28.6109C42.3529 29.022 42.4996 29.5054 42.4996 29.9998C42.4996 30.6629 42.2362 31.2987 41.7673 31.7676C41.2985 32.2364 40.6626 32.4998 39.9996 32.4998Z"
                        fill="#181A18" />
                </svg>
            </div>
            <h4>24/7 support</h4>
            <p>On hand team for any issues you have</p>
        </div>


    </div>
</div>

<div class="location-container">
    <h1>Choose your location</h1>
    <div class="location-choices">
        <!-- block1 -->
        <div class="location-block">
            <h4>District 1</h4>
            <a href="{{URL::to('/bookingPage')}}"><img class="location-img" src="{{ ('/Frontend/Image/Location/Distrit1.png') }}" alt=""></a>
        </div>

        <!-- block2 -->
        <div class="location-block">
            <h4>Binh Thanh District</h4>
            <a href="{{URL::to('/bookingPage')}}"><img class="location-img" src="{{ ('/Frontend/Image/Location/Binh Thanh.png') }}" alt=""></a>
        </div>

        <!-- block3 -->
        <div class="location-block">
            <h4>Thu Duc City</h4>
            <a href="{{URL::to('/bookingPage')}}"><img class="location-img" src="{{ ('/Frontend/Image/Location/Thu Duc.jfif') }}" alt=""></a>
        </div>

        <!-- block4 -->
        <div class="location-block">
            <h4>Go Vap District</h4>
            <a href="{{URL::to('/bookingPage')}}"><img class="location-img" src="{{ ('/Frontend/Image/Location/Go Vap.jfif') }}" alt=""></a>
        </div>

        <!-- block5 -->
        <div class="location-block">
            <h4>District 2</h4>
            <a href="{{URL::to('/bookingPage')}}"><img class="location-img" src="{{ ('/Frontend/Image/Location/District-2.jfif') }}" alt=""></a>
        </div>

        <!-- block6 -->
        <div class="location-block">
            <h4>District 7</h4>
            <a href="{{URL::to('/bookingPage')}}"><img class="location-img" src="{{ ('/Frontend/Image/Location/District-7.jfif') }}" alt=""></a>
        </div>
    </div>

    <div>
        <a class="location-btn" href="{{URL::to('/bookingPage')}}">View all spaces</a>
    </div>
</div>

<div class="bespoke-container">
    <div class="bespoke-content">
        <div class="bespoke-text">
            <h1>Bespoke spaces</h1>
            <p>Expertly designed to create extraordinary spaces with the flexible renter in mind</p>
        </div>

        <div>
            <a class="bespoke-btn" href="{{URL::to('/bookingPage')}}">Start booking</a>
        </div>
    </div>
</div>

<div class="partnership-container">
    <div class="partnership-content">
        <div class="partnership-text">
            <h1>Corporate Partnerships</h1>
            <p>
                We work with 100+ companies to meet accommodation needs in London. Offer a dedicated
                booking manager that can help to find properties for your needs.
            </p>
        </div>

        <div class="partnership-features">
            <div class="feature-block">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                    <path d="M51.775 48.225L43.275 39.75C46.0175 36.2561 47.5055 31.9416 47.5 27.5C47.5 23.5444 46.327 19.6776 44.1294 16.3886C41.9318 13.0996 38.8082 10.5362 35.1537 9.02242C31.4992 7.50867 27.4778 7.1126 23.5982 7.8843C19.7186 8.65601 16.1549 10.5608 13.3579 13.3579C10.5608 16.1549 8.65601 19.7186 7.8843 23.5982C7.1126 27.4778 7.50867 31.4992 9.02242 35.1537C10.5362 38.8082 13.0996 41.9318 16.3886 44.1294C19.6776 46.327 23.5444 47.5 27.5 47.5C31.9416 47.5055 36.2561 46.0175 39.75 43.275L48.225 51.775C48.4574 52.0093 48.7339 52.1953 49.0386 52.3222C49.3432 52.4492 49.67 52.5145 50 52.5145C50.33 52.5145 50.6568 52.4492 50.9615 52.3222C51.2661 52.1953 51.5426 52.0093 51.775 51.775C52.0093 51.5426 52.1953 51.2661 52.3222 50.9615C52.4492 50.6568 52.5145 50.33 52.5145 50C52.5145 49.67 52.4492 49.3432 52.3222 49.0386C52.1953 48.7339 52.0093 48.4574 51.775 48.225ZM12.5 27.5C12.5 24.5333 13.3797 21.6332 15.028 19.1665C16.6762 16.6997 19.0189 14.7771 21.7598 13.6418C24.5007 12.5065 27.5166 12.2095 30.4264 12.7882C33.3361 13.367 36.0088 14.7956 38.1066 16.8934C40.2044 18.9912 41.633 21.6639 42.2118 24.5737C42.7906 27.4834 42.4935 30.4994 41.3582 33.2403C40.2229 35.9812 38.3003 38.3238 35.8336 39.9721C33.3668 41.6203 30.4667 42.5 27.5 42.5C23.5218 42.5 19.7065 40.9197 16.8934 38.1066C14.0804 35.2936 12.5 31.4783 12.5 27.5Z" fill="black" />
                </svg>
                <h4>
                    Booking manager
                </h4>
                <p>We do the searching for you</p>
            </div>

            <div class="feature-block">
                <svg xmlns="http://www.w3.org/2000/svg" width="61" height="60" viewBox="0 0 61 60" fill="none">
                    <path d="M30.3335 27.5C32.3113 27.5 34.2447 26.9135 35.8892 25.8147C37.5337 24.7159 38.8154 23.1541 39.5723 21.3268C40.3292 19.4996 40.5272 17.4889 40.1413 15.5491C39.7555 13.6093 38.8031 11.8275 37.4046 10.4289C36.006 9.03041 34.2242 8.078 32.2844 7.69215C30.3446 7.3063 28.3339 7.50433 26.5067 8.26121C24.6794 9.01809 23.1176 10.2998 22.0188 11.9443C20.92 13.5888 20.3335 15.5222 20.3335 17.5C20.3335 20.1522 21.3871 22.6957 23.2624 24.5711C25.1378 26.4464 27.6813 27.5 30.3335 27.5ZM45.3335 52.5C45.9965 52.5 46.6324 52.2366 47.1013 51.7678C47.5701 51.2989 47.8335 50.663 47.8335 50C47.8335 45.3587 45.9897 40.9075 42.7079 37.6256C39.426 34.3438 34.9748 32.5 30.3335 32.5C25.6922 32.5 21.241 34.3438 17.9591 37.6256C14.6772 40.9075 12.8335 45.3587 12.8335 50C12.8335 50.663 13.0969 51.2989 13.5657 51.7678C14.0346 52.2366 14.6705 52.5 15.3335 52.5H45.3335Z" fill="black" />
                </svg>
                <h4>
                    Account manager
                </h4>
                <p>Preferred partner rates</p>
            </div>

            <div class="feature-block">
                <svg xmlns="http://www.w3.org/2000/svg" width="61" height="60" viewBox="0 0 61 60" fill="none">
                    <path d="M50.0165 18.3255L38.9165 5.82545C38.6828 5.56647 38.3974 5.35927 38.0788 5.21719C37.7602 5.0751 37.4154 5.00127 37.0665 5.00045H17.0665C16.2359 4.99054 15.4114 5.14435 14.6403 5.45309C13.8691 5.76183 13.1663 6.21946 12.572 6.79983C11.9777 7.38021 11.5035 8.07197 11.1765 8.83562C10.8496 9.59926 10.6763 10.4198 10.6665 11.2505V48.7505C10.6763 49.5811 10.8496 50.4016 11.1765 51.1653C11.5035 51.9289 11.9777 52.6207 12.572 53.2011C13.1663 53.7814 13.8691 54.2391 14.6403 54.5478C15.4114 54.8566 16.2359 55.0104 17.0665 55.0005H44.2665C45.0971 55.0104 45.9216 54.8566 46.6928 54.5478C47.4639 54.2391 48.1667 53.7814 48.761 53.2011C49.3554 52.6207 49.8295 51.9289 50.1565 51.1653C50.4834 50.4016 50.6567 49.5811 50.6665 48.7505V20.0005C50.6649 19.3809 50.4332 18.7839 50.0165 18.3255ZM23.1665 30.0005H30.6665C31.3295 30.0005 31.9654 30.2638 32.4343 30.7327C32.9031 31.2015 33.1665 31.8374 33.1665 32.5005C33.1665 33.1635 32.9031 33.7994 32.4343 34.2682C31.9654 34.7371 31.3295 35.0005 30.6665 35.0005H23.1665C22.5035 35.0005 21.8676 34.7371 21.3987 34.2682C20.9299 33.7994 20.6665 33.1635 20.6665 32.5005C20.6665 31.8374 20.9299 31.2015 21.3987 30.7327C21.8676 30.2638 22.5035 30.0005 23.1665 30.0005ZM38.1665 45.0005H23.1665C22.5035 45.0005 21.8676 44.7371 21.3987 44.2682C20.9299 43.7994 20.6665 43.1635 20.6665 42.5005C20.6665 41.8374 20.9299 41.2015 21.3987 40.7327C21.8676 40.2638 22.5035 40.0005 23.1665 40.0005H38.1665C38.8295 40.0005 39.4654 40.2638 39.9343 40.7327C40.4031 41.2015 40.6665 41.8374 40.6665 42.5005C40.6665 43.1635 40.4031 43.7994 39.9343 44.2682C39.4654 44.7371 38.8295 45.0005 38.1665 45.0005ZM37.4415 20.0005C36.9261 19.9497 36.4513 19.6985 36.1193 19.3011C35.7873 18.9036 35.6247 18.3916 35.6665 17.8755V10.0005L45.0165 20.0005H37.4415Z" fill="#181A18" />
                </svg>
                <h4>
                    Flexible terms
                </h4>
                <p>Extend on short notice</p>
            </div>
        </div>
    </div>
</div>





<!-- carousel -->
<div class="carousel">
    <!-- list item -->
    <div class="list">
        <div class="item">
            <img src="\Frontend\Image\house\house2.jpeg">
            <div class="content">
                <div class="author">BEVERLY HILLS, CALIFORNIA, USA</div>
                <div class="title">SUBURBS MODERN</div>
                <div class="topic">HOUSE</div>
                <div class="des">
                    <!-- lorem 50 -->
                    Known for its luxury real estate, Beverly Hills and its surrounding suburbs have many famous rental homes. These properties often feature sprawling lawns, large pools, and celebrity appeal.
                </div>
                <div class="buttons">
                    <a href="{{URL::to('/CheckoutPageA')}}"><button>RENT NOW</button></a>
                    <a href="{{URL::to('/PropertyDetails')}}"><button>SEE MORE</button></a>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="\Frontend\Image\house\house3.jpg">
            <div class="content">
                <div class="author">BINH THANH, HCMC, VN</div>
                <div class="title">CENTRAL MODERN</div>
                <div class="topic">APARTMENT</div>
                <div class="des">
                    Prime location with modern apartments with swimming pools, fitness centers, and 24/7 security.Landmark 81, the tallest building in Vietnam, is also part of the development, offering high-end retail and dining options, enhancing the luxurious lifestyle available at Vinhomes Central Park.
                </div>
                <div class="buttons">
                    <a href="{{URL::to('/CheckoutPageA')}}"><button>RENT NOW</button></a>
                    <a href="{{URL::to('/PropertyDetails')}}"><button>SEE MORE</button></a>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="\Frontend\Image\house\house4.jpg">
            <div class="content">
                <div class="author">MALIBU, CALIFORNIA, USA</div>
                <div class="title">LUXURY BEACHFRONT</div>
                <div class="topic">VILLA</div>
                <div class="des">

                    Malibu, California, is renowned for its luxurious beachfront rentals that offer stunning ocean views and private beach access. The area features a diverse range of properties, from modern villas to classic estates, catering to those seeking an upscale lifestyle. Residents and visitors enjoy proximity to beautiful beaches like Zuma Beach and El Matador State Beach, perfect for sunbathing and surfing. Many of these rentals boast upscale amenities, including infinity pools, outdoor entertainment spaces, and spa facilities, making Malibu an ideal destination for luxury living by the coast.
                </div>
                <div class="buttons">
                    <a href="{{URL::to('/CheckoutPageA')}}"><button>RENT NOW</button></a>
                    <a href="{{URL::to('/PropertyDetails')}}"><button>SEE MORE</button></a>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="\Frontend\Image\house\house5.webp">
            <div class="content">
                <div class="author">MARAIS, PARIS, FRANCE</div>
                <div class="title">CENTRAL MODERN</div>
                <div class="topic">HOUSE</div>
                <div class="des">

                    The Marais district in Paris, France, is a famous rental location known for its historic charm and vibrant atmosphere. Characterized by narrow streets, beautiful architecture, and trendy boutiques, it is home to attractions like the Picasso Museum and Hôtel de Ville. The area features lively cafes, bistros, and the Marché des Enfants Rouges, one of the oldest covered markets in Paris. Centrally located, the Marais offers easy access to iconic landmarks such as Notre-Dame Cathedral and the Louvre Museum, making it an ideal choice for those seeking an authentic Parisian experience.
                </div>
                <div class="buttons">
                    <a href="{{URL::to('/CheckoutPageA')}}"><button>RENT NOW</button></a>
                    <a href="{{URL::to('/PropertyDetails')}}"><button>SEE MORE</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- list thumnail -->
    <div class="thumbnail">
        <div class="item">
            <img src="\Frontend\Image\house\house2.jpeg">
            <div class="content">
                <div class="title">
                    Suburbs house
                </div>
                <div class="description">
                    Beverly Hills, USA
                </div>
            </div>
        </div>
        <div class="item">
            <img src="\Frontend\Image\house\house3.jpg">
            <div class="content">
                <div class="title">
                    Central apartment
                </div>
                <div class="description">
                    Binh Thanh, VN
                </div>
            </div>
        </div>
        <div class="item">
            <img src="\Frontend\Image\house\house4.jpg">
            <div class="content">
                <div class="title">
                    Luxury Villa
                </div>
                <div class="description">
                    Malibu, USA
                </div>
            </div>
        </div>
        <div class="item">
            <img src="\Frontend\Image\house\house5.webp">
            <div class="content">
                <div class="title">
                    Central House
                </div>
                <div class="description">
                    Marais, France
                </div>
            </div>
        </div>
    </div>
    <!-- next prev -->


    <!-- time running -->
    <div class="time"></div>
    <div class="arrows">
        <button id="prev">
            <
                </button>
                <button id="next">></button>
    </div>
</div>


<script src="\Frontend\js\houseSlider.js"></script>

<div class="partner-container">
    <div class="partner-text">
        <h1>What our partners think</h1>
        <p>See what our partners say about us</p>
    </div>
    <div class="swiper partnerSwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="profile">

                    <img class="profile-picture" src="\Frontend\Image\Homepage Profile\profile1.jpg" alt="">

                    <div class="profile-content">
                        <h4>Annie</h4>
                        <p>Landlord in SE1</p>
                    </div>
                </div>

                <div class="comment">
                    Nascetur urna, fusce consectetur massa nulla viverra aenean semper. Dignissim nibh sed condimentum
                    eget ac suspendisse eget amet integer. Mattis etiam sagittis fermentum fames habitasse. Vulputate
                    volutpat sit est, elementum. Accumsan nunc nunc arcu faucibus aliquam.
                </div>
            </div>
            <div class="swiper-slide">
                <div class="profile">

                    <img class="profile-picture" src="\Frontend\Image\Homepage Profile\profile1.jpg" alt="">

                    <div class="profile-content">
                        <h4>Annie</h4>
                        <p>Landlord in SE1</p>
                    </div>
                </div>

                <div class="comment">
                    Nascetur urna, fusce consectetur massa nulla viverra aenean semper. Dignissim nibh sed condimentum
                    eget ac suspendisse eget amet integer. Mattis etiam sagittis fermentum fames habitasse. Vulputate
                    volutpat sit est, elementum. Accumsan nunc nunc arcu faucibus aliquam.
                </div>
            </div>
            <div class="swiper-slide">
                <div class="profile">

                    <img class="profile-picture" src="\Frontend\Image\Homepage Profile\profile1.jpg" alt="">

                    <div class="profile-content">
                        <h4>Annie</h4>
                        <p>Landlord in SE1</p>
                    </div>
                </div>

                <div class="comment">
                    Nascetur urna, fusce consectetur massa nulla viverra aenean semper. Dignissim nibh sed condimentum
                    eget ac suspendisse eget amet integer. Mattis etiam sagittis fermentum fames habitasse. Vulputate
                    volutpat sit est, elementum. Accumsan nunc nunc arcu faucibus aliquam.
                </div>
            </div>
            <div class="swiper-slide">
                <div class="profile">

                    <img class="profile-picture" src="\Frontend\Image\Homepage Profile\profile1.jpg" alt="">

                    <div class="profile-content">
                        <h4>Annie</h4>
                        <p>Landlord in SE1</p>
                    </div>
                </div>

                <div class="comment">
                    Nascetur urna, fusce consectetur massa nulla viverra aenean semper. Dignissim nibh sed condimentum
                    eget ac suspendisse eget amet integer. Mattis etiam sagittis fermentum fames habitasse. Vulputate
                    volutpat sit est, elementum. Accumsan nunc nunc arcu faucibus aliquam.
                </div>
            </div>
            <div class="swiper-slide">
                <div class="profile">

                    <img class="profile-picture" src="\Frontend\Image\Homepage Profile\profile1.jpg" alt="">

                    <div class="profile-content">
                        <h4>Annie</h4>
                        <p>Landlord in SE1</p>
                    </div>
                </div>

                <div class="comment">
                    Nascetur urna, fusce consectetur massa nulla viverra aenean semper. Dignissim nibh sed condimentum
                    eget ac suspendisse eget amet integer. Mattis etiam sagittis fermentum fames habitasse. Vulputate
                    volutpat sit est, elementum. Accumsan nunc nunc arcu faucibus aliquam.
                </div>
            </div>
            <div class="swiper-slide">
                <div class="profile">

                    <img class="profile-picture" src="\Frontend\Image\Homepage Profile\profile1.jpg" alt="">

                    <div class="profile-content">
                        <h4>Annie</h4>
                        <p>Landlord in SE1</p>
                    </div>
                </div>

                <div class="comment">
                    Nascetur urna, fusce consectetur massa nulla viverra aenean semper. Dignissim nibh sed condimentum
                    eget ac suspendisse eget amet integer. Mattis etiam sagittis fermentum fames habitasse. Vulputate
                    volutpat sit est, elementum. Accumsan nunc nunc arcu faucibus aliquam.
                </div>
            </div>
            <div class="swiper-slide">
                <div class="profile">

                    <img class="profile-picture" src="\Frontend\Image\Homepage Profile\profile1.jpg" alt="">

                    <div class="profile-content">
                        <h4>Annie</h4>
                        <p>Landlord in SE1</p>
                    </div>
                </div>

                <div class="comment">
                    Nascetur urna, fusce consectetur massa nulla viverra aenean semper. Dignissim nibh sed condimentum
                    eget ac suspendisse eget amet integer. Mattis etiam sagittis fermentum fames habitasse. Vulputate
                    volutpat sit est, elementum. Accumsan nunc nunc arcu faucibus aliquam.
                </div>
            </div>
            <div class="swiper-slide">
                <div class="profile">

                    <img class="profile-picture" src="\Frontend\Image\Homepage Profile\profile1.jpg" alt="">

                    <div class="profile-content">
                        <h4>Annie</h4>
                        <p>Landlord in SE1</p>
                    </div>
                </div>

                <div class="comment">
                    Nascetur urna, fusce consectetur massa nulla viverra aenean semper. Dignissim nibh sed condimentum
                    eget ac suspendisse eget amet integer. Mattis etiam sagittis fermentum fames habitasse. Vulputate
                    volutpat sit est, elementum. Accumsan nunc nunc arcu faucibus aliquam.
                </div>
            </div>
        </div>

    </div>


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="\Frontend\js\commentSlider.js"></script>
    <!-- Initialize Swiper -->
</div>

<div class="blog-container">
    <h2>Read our blog</h2>

    <div class="swiper blogSwiper">
        <div class="swiper-wrapper">
            <a href="{{URL::to('/Blog')}}" class="swiper-slide">
                <img class="slide-picture" src="https://s3-alpha-sig.figma.com/img/d51e/0114/6015144e93b4f0a379b9355fbb99cca1?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=a4RQxwm2vIpfdVF8G7Eeyn5IasYN7eZy7jljin8cv5v2CI7x8k0gTrYYsVNSflX-qozrn4a9qUcA0FllUWdkXsYvegNilEcHbOj841wlZSw-9pWXRgvmCNHIQbo8mVBcoyMT-FIglKaYSJqavo4zEFiDd4yTn1~IBTGQaxc~V-Y2K9wmUzOyHtgQL~NOE-6nVbiYeo3QfF44FrxXIB4pW537Q8uTn7C8d4PNVRee7VEqSU0iA7T8SDzGAMzSyjreMLZFy-A1wljQu0YBCw8lebOkjJLIQEiczm821zACuU7i4KUqezuUIvyduN9dOS6zPF5qb5ASOy6MJtLPCkFt6g__" alt="">

                <div class="text">
                    <div class="slide-content">
                        <h2>Faucibus egestas ut sit purus ultricies at eu</h2>
                        <p>Viverra tellus risus lacus commodo urna fringilla cursus nulla amet.</p>
                    </div>
                    <div class="time-to-read">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2C10.0222 2 8.08879 2.58649 6.4443 3.6853C4.79981 4.78412 3.51809 6.3459 2.76121 8.17317C2.00433 10.0004 1.8063 12.0111 2.19215 13.9509C2.578 15.8907 3.53041 17.6725 4.92894 19.0711C6.32746 20.4696 8.10929 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 10.6868 21.7413 9.38642 21.2388 8.17317C20.7363 6.95991 19.9997 5.85752 19.0711 4.92893C18.1425 4.00035 17.0401 3.26375 15.8268 2.7612C14.6136 2.25866 13.3132 2 12 2ZM16 13H12C11.7348 13 11.4804 12.8946 11.2929 12.7071C11.1054 12.5196 11 12.2652 11 12V8C11 7.73478 11.1054 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7C12.2652 7 12.5196 7.10536 12.7071 7.29289C12.8946 7.48043 13 7.73478 13 8V11H16C16.2652 11 16.5196 11.1054 16.7071 11.2929C16.8946 11.4804 17 11.7348 17 12C17 12.2652 16.8946 12.5196 16.7071 12.7071C16.5196 12.8946 16.2652 13 16 13Z" fill="#181A18" />
                        </svg>
                        <p>3 min read</p>
                    </div>
                </div>
            </a>

            <a href="{{URL::to('/Blog')}}" class="swiper-slide">
                <img class="slide-picture" src="https://s3-alpha-sig.figma.com/img/816a/26dc/ca23d8635be9f936f7b906928bffa8f3?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=fOwYl7AHgp~ecYqAcgKjBtuQtLhCBlgDAYJ6XGDd8jEBrL1yaHWHXM7TvUhhTwZW3koC0UUHlICyh1Ds9g4BTREM77mCYteLqixcj0ZDIpzg7t~rMiU~YFdkfjV9LXU5uV3W4-oUgHsM-Pk3M~IkL0oe7OfmwZVKZs9J6lyu18rLQcOsqWhR~-E1TepfDiavr2Ck4OKoFGQliZzjsQkSvTEA8WND4ubbL3zTRIrRmz7cCCOFZUhcavXIBVNak0gVVZspOaQqfVe0fqGm0usMudrDQMhnrhzeQS3Y2Hh95GVIv4EFw4I2sC4wtqbAYdj3KVj9p2g00WCMqrLEVGwO5Q__" alt="">

                <div class="text">
                    <div class="slide-content">
                        <h2>Turpis elit in dictum eget eget</h2>
                        <p>Neque faucibus pharetra condimentum tincidunt commodo velit.</p>
                    </div>
                    <div class="time-to-read">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2C10.0222 2 8.08879 2.58649 6.4443 3.6853C4.79981 4.78412 3.51809 6.3459 2.76121 8.17317C2.00433 10.0004 1.8063 12.0111 2.19215 13.9509C2.578 15.8907 3.53041 17.6725 4.92894 19.0711C6.32746 20.4696 8.10929 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 10.6868 21.7413 9.38642 21.2388 8.17317C20.7363 6.95991 19.9997 5.85752 19.0711 4.92893C18.1425 4.00035 17.0401 3.26375 15.8268 2.7612C14.6136 2.25866 13.3132 2 12 2ZM16 13H12C11.7348 13 11.4804 12.8946 11.2929 12.7071C11.1054 12.5196 11 12.2652 11 12V8C11 7.73478 11.1054 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7C12.2652 7 12.5196 7.10536 12.7071 7.29289C12.8946 7.48043 13 7.73478 13 8V11H16C16.2652 11 16.5196 11.1054 16.7071 11.2929C16.8946 11.4804 17 11.7348 17 12C17 12.2652 16.8946 12.5196 16.7071 12.7071C16.5196 12.8946 16.2652 13 16 13Z" fill="#181A18" />
                        </svg>
                        <p>3 min read</p>
                    </div>
                </div>
            </a>

            <a href="{{URL::to('/Blog')}}" class="swiper-slide">
                <img class="slide-picture" src="https://s3-alpha-sig.figma.com/img/a210/8b5b/70676d8adf7169e0cfb368a3f5e68b8c?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=mXO9Llg78hhxoOBnTnfvOvVhsrdan8IxJHLgZvECQ-HhrQmZgsunKCKc2-cX3obdNGUYqpsSalTn1OnjnRXhR~N~N56336ExXmVdhLi4Ny3tN-cQQbohd0bqm5pPfaLuRgNGlt4VEhafyFVjdpbN8pJGLXAujl6r-kgaciPBBE82jLK-vlKciU7FntgZhhq8iXihcwdTAi9FmlQoZSVVG0RGwPNwq27bUFc8sMINSgVI3SmvOBfcoGX9qZ~FxVpjELQxjuxBBbAI8H0FkNDTMgspHVwe~~JcfjVNvaWQZtXobY~vqKYTPEg1hSEOVOZRwvrDL~52pqPLyybvTtiDew__" alt="">

                <div class="text">
                    <div class="slide-content">
                        <h2>Turpis elit in dictum eget eget</h2>
                        <p>Convallis eu vel fames feugiat et venenatis nulla ipsum.</p>
                    </div>
                    <div class="time-to-read">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2C10.0222 2 8.08879 2.58649 6.4443 3.6853C4.79981 4.78412 3.51809 6.3459 2.76121 8.17317C2.00433 10.0004 1.8063 12.0111 2.19215 13.9509C2.578 15.8907 3.53041 17.6725 4.92894 19.0711C6.32746 20.4696 8.10929 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 10.6868 21.7413 9.38642 21.2388 8.17317C20.7363 6.95991 19.9997 5.85752 19.0711 4.92893C18.1425 4.00035 17.0401 3.26375 15.8268 2.7612C14.6136 2.25866 13.3132 2 12 2ZM16 13H12C11.7348 13 11.4804 12.8946 11.2929 12.7071C11.1054 12.5196 11 12.2652 11 12V8C11 7.73478 11.1054 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7C12.2652 7 12.5196 7.10536 12.7071 7.29289C12.8946 7.48043 13 7.73478 13 8V11H16C16.2652 11 16.5196 11.1054 16.7071 11.2929C16.8946 11.4804 17 11.7348 17 12C17 12.2652 16.8946 12.5196 16.7071 12.7071C16.5196 12.8946 16.2652 13 16 13Z" fill="#181A18" />
                        </svg>
                        <p>1 min read</p>
                    </div>
                </div>
            </a>

            <a href="{{URL::to('/Blog')}}" class="swiper-slide">
                <img class="slide-picture" src="https://s3-alpha-sig.figma.com/img/7734/04fa/8d452f77369d5bdb11b8bac3b9352168?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=lJCJqBBBlTvlxcQfzYIjaeHOG-f8Iu7sSPtyKBnxuvPG5NJtJJrOtUJw~hSyVbilbDIEPovt6Dz5W9WF6oT-pDJQU-OOqazG~IT4wVoIdv07BJ~khStjchs-ZjYNgZsk-N5vS634Q~wpXWrTe1dsumfWw~zWwXK24A9o2X~SpwO3DHzcaoWMJAyfQkuTWcx0Uv1U2fZI0XForJhp5FcwdxHLBt3yIOrqgsuFAt6ZytKx0-uY8l1CeooFJIU5Hw7yw25kRkcvamf2oQKdmwXInAcF6PaiB~Nj~sOl4KXD5lR0HkpYQFUiebJBrx9Q~fGnozN4gtMOrRBubUp4oOKU1Q__" alt="">

                <div class="text">
                    <div class="slide-content">
                        <h2>Feugiat gravida sed sit lacus sagittis</h2>
                        <p>Pellentesque ultrices hendrerit lacus lectus.</p>
                    </div>
                    <div class="time-to-read">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2C10.0222 2 8.08879 2.58649 6.4443 3.6853C4.79981 4.78412 3.51809 6.3459 2.76121 8.17317C2.00433 10.0004 1.8063 12.0111 2.19215 13.9509C2.578 15.8907 3.53041 17.6725 4.92894 19.0711C6.32746 20.4696 8.10929 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 10.6868 21.7413 9.38642 21.2388 8.17317C20.7363 6.95991 19.9997 5.85752 19.0711 4.92893C18.1425 4.00035 17.0401 3.26375 15.8268 2.7612C14.6136 2.25866 13.3132 2 12 2ZM16 13H12C11.7348 13 11.4804 12.8946 11.2929 12.7071C11.1054 12.5196 11 12.2652 11 12V8C11 7.73478 11.1054 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7C12.2652 7 12.5196 7.10536 12.7071 7.29289C12.8946 7.48043 13 7.73478 13 8V11H16C16.2652 11 16.5196 11.1054 16.7071 11.2929C16.8946 11.4804 17 11.7348 17 12C17 12.2652 16.8946 12.5196 16.7071 12.7071C16.5196 12.8946 16.2652 13 16 13Z" fill="#181A18" />
                        </svg>
                        <p>3 min read</p>
                    </div>
                </div>
            </a>

            <a href="{{URL::to('/Blog')}}" class="swiper-slide">
                <img class="slide-picture" src="https://s3-alpha-sig.figma.com/img/d51e/0114/6015144e93b4f0a379b9355fbb99cca1?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=a4RQxwm2vIpfdVF8G7Eeyn5IasYN7eZy7jljin8cv5v2CI7x8k0gTrYYsVNSflX-qozrn4a9qUcA0FllUWdkXsYvegNilEcHbOj841wlZSw-9pWXRgvmCNHIQbo8mVBcoyMT-FIglKaYSJqavo4zEFiDd4yTn1~IBTGQaxc~V-Y2K9wmUzOyHtgQL~NOE-6nVbiYeo3QfF44FrxXIB4pW537Q8uTn7C8d4PNVRee7VEqSU0iA7T8SDzGAMzSyjreMLZFy-A1wljQu0YBCw8lebOkjJLIQEiczm821zACuU7i4KUqezuUIvyduN9dOS6zPF5qb5ASOy6MJtLPCkFt6g__" alt="">

                <div class="text">
                    <div class="slide-content">
                        <h2>Faucibus egestas ut sit purus ultricies at eu</h2>
                        <p>Viverra tellus risus lacus commodo urna fringilla cursus nulla amet.</p>
                    </div>
                    <div class="time-to-read">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2C10.0222 2 8.08879 2.58649 6.4443 3.6853C4.79981 4.78412 3.51809 6.3459 2.76121 8.17317C2.00433 10.0004 1.8063 12.0111 2.19215 13.9509C2.578 15.8907 3.53041 17.6725 4.92894 19.0711C6.32746 20.4696 8.10929 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 10.6868 21.7413 9.38642 21.2388 8.17317C20.7363 6.95991 19.9997 5.85752 19.0711 4.92893C18.1425 4.00035 17.0401 3.26375 15.8268 2.7612C14.6136 2.25866 13.3132 2 12 2ZM16 13H12C11.7348 13 11.4804 12.8946 11.2929 12.7071C11.1054 12.5196 11 12.2652 11 12V8C11 7.73478 11.1054 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7C12.2652 7 12.5196 7.10536 12.7071 7.29289C12.8946 7.48043 13 7.73478 13 8V11H16C16.2652 11 16.5196 11.1054 16.7071 11.2929C16.8946 11.4804 17 11.7348 17 12C17 12.2652 16.8946 12.5196 16.7071 12.7071C16.5196 12.8946 16.2652 13 16 13Z" fill="#181A18" />
                        </svg>
                        <p>3 min read</p>
                    </div>
                </div>
            </a>

            <a href="{{URL::to('/Blog')}}" class="swiper-slide">
                <img class="slide-picture" src="https://s3-alpha-sig.figma.com/img/33a9/12db/06ff8628ba5031c7a86a8dcff57e3e80?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=J44uSGpohbwMUvBDuBc7SnvQmbaTxAgGSJItZ~DJ0z~YhGsPnyyb~tsgkU3XzBzCR~Q6S9zGVkJJKhlraCYB9778Wn832AEyN8APiJYXhCVlMxy~-5acSoFrOqF7SV5lvHE~ZfipsgOwPca1xPq3mUq1Qd1QRWtz~SJ65Eqd2LDlausU27TkCXEb97XEWumIijlnd8TauvTbA4oLhv9Frb-UVaMKfoR6Tb3qG6KHczL1rATKocpuvpuQ9vW4uEfM4n355YIQMzbUfrBFjTf8uB~Hvgpsit8dIzTDuVq1-tOS5WOXHbky7cwse~NTrK49Ku~TRW3yvXw-z~uNpWoSZg__" alt="">

                <div class="text">
                    <div class="slide-content">
                        <h2>Feugiat gravida sed sit lacus sagittis</h2>
                        <p>Dolor elit viverra facilisis aliquam, aliquet arcu nec.</p>
                    </div>
                    <div class="time-to-read">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2C10.0222 2 8.08879 2.58649 6.4443 3.6853C4.79981 4.78412 3.51809 6.3459 2.76121 8.17317C2.00433 10.0004 1.8063 12.0111 2.19215 13.9509C2.578 15.8907 3.53041 17.6725 4.92894 19.0711C6.32746 20.4696 8.10929 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 10.6868 21.7413 9.38642 21.2388 8.17317C20.7363 6.95991 19.9997 5.85752 19.0711 4.92893C18.1425 4.00035 17.0401 3.26375 15.8268 2.7612C14.6136 2.25866 13.3132 2 12 2ZM16 13H12C11.7348 13 11.4804 12.8946 11.2929 12.7071C11.1054 12.5196 11 12.2652 11 12V8C11 7.73478 11.1054 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7C12.2652 7 12.5196 7.10536 12.7071 7.29289C12.8946 7.48043 13 7.73478 13 8V11H16C16.2652 11 16.5196 11.1054 16.7071 11.2929C16.8946 11.4804 17 11.7348 17 12C17 12.2652 16.8946 12.5196 16.7071 12.7071C16.5196 12.8946 16.2652 13 16 13Z" fill="#181A18" />
                        </svg>
                        <p>3 min read</p>
                    </div>
                </div>
            </a>

            <a href="{{URL::to('/Blog')}}" class="swiper-slide">
                <img class="slide-picture" src="https://s3-alpha-sig.figma.com/img/d51e/0114/6015144e93b4f0a379b9355fbb99cca1?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=a4RQxwm2vIpfdVF8G7Eeyn5IasYN7eZy7jljin8cv5v2CI7x8k0gTrYYsVNSflX-qozrn4a9qUcA0FllUWdkXsYvegNilEcHbOj841wlZSw-9pWXRgvmCNHIQbo8mVBcoyMT-FIglKaYSJqavo4zEFiDd4yTn1~IBTGQaxc~V-Y2K9wmUzOyHtgQL~NOE-6nVbiYeo3QfF44FrxXIB4pW537Q8uTn7C8d4PNVRee7VEqSU0iA7T8SDzGAMzSyjreMLZFy-A1wljQu0YBCw8lebOkjJLIQEiczm821zACuU7i4KUqezuUIvyduN9dOS6zPF5qb5ASOy6MJtLPCkFt6g__" alt="">

                <div class="text">
                    <div class="slide-content">
                        <h2>Faucibus egestas ut sit purus ultricies at eu</h2>
                        <p>Viverra tellus risus lacus commodo urna fringilla cursus nulla amet.</p>
                    </div>
                    <div class="time-to-read">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2C10.0222 2 8.08879 2.58649 6.4443 3.6853C4.79981 4.78412 3.51809 6.3459 2.76121 8.17317C2.00433 10.0004 1.8063 12.0111 2.19215 13.9509C2.578 15.8907 3.53041 17.6725 4.92894 19.0711C6.32746 20.4696 8.10929 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 10.6868 21.7413 9.38642 21.2388 8.17317C20.7363 6.95991 19.9997 5.85752 19.0711 4.92893C18.1425 4.00035 17.0401 3.26375 15.8268 2.7612C14.6136 2.25866 13.3132 2 12 2ZM16 13H12C11.7348 13 11.4804 12.8946 11.2929 12.7071C11.1054 12.5196 11 12.2652 11 12V8C11 7.73478 11.1054 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7C12.2652 7 12.5196 7.10536 12.7071 7.29289C12.8946 7.48043 13 7.73478 13 8V11H16C16.2652 11 16.5196 11.1054 16.7071 11.2929C16.8946 11.4804 17 11.7348 17 12C17 12.2652 16.8946 12.5196 16.7071 12.7071C16.5196 12.8946 16.2652 13 16 13Z" fill="#181A18" />
                        </svg>
                        <p>3 min read</p>
                    </div>
                </div>
            </a>

            <a href="{{URL::to('/Blog')}}" class="swiper-slide">
                <img class="slide-picture" src="https://s3-alpha-sig.figma.com/img/816a/26dc/ca23d8635be9f936f7b906928bffa8f3?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=fOwYl7AHgp~ecYqAcgKjBtuQtLhCBlgDAYJ6XGDd8jEBrL1yaHWHXM7TvUhhTwZW3koC0UUHlICyh1Ds9g4BTREM77mCYteLqixcj0ZDIpzg7t~rMiU~YFdkfjV9LXU5uV3W4-oUgHsM-Pk3M~IkL0oe7OfmwZVKZs9J6lyu18rLQcOsqWhR~-E1TepfDiavr2Ck4OKoFGQliZzjsQkSvTEA8WND4ubbL3zTRIrRmz7cCCOFZUhcavXIBVNak0gVVZspOaQqfVe0fqGm0usMudrDQMhnrhzeQS3Y2Hh95GVIv4EFw4I2sC4wtqbAYdj3KVj9p2g00WCMqrLEVGwO5Q__" alt="">

                <div class="text">
                    <div class="slide-content">
                        <h2>Turpis elit in dictum eget eget</h2>
                        <p>Neque faucibus pharetra condimentum tincidunt commodo velit.</p>
                    </div>
                    <div class="time-to-read">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2C10.0222 2 8.08879 2.58649 6.4443 3.6853C4.79981 4.78412 3.51809 6.3459 2.76121 8.17317C2.00433 10.0004 1.8063 12.0111 2.19215 13.9509C2.578 15.8907 3.53041 17.6725 4.92894 19.0711C6.32746 20.4696 8.10929 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 10.6868 21.7413 9.38642 21.2388 8.17317C20.7363 6.95991 19.9997 5.85752 19.0711 4.92893C18.1425 4.00035 17.0401 3.26375 15.8268 2.7612C14.6136 2.25866 13.3132 2 12 2ZM16 13H12C11.7348 13 11.4804 12.8946 11.2929 12.7071C11.1054 12.5196 11 12.2652 11 12V8C11 7.73478 11.1054 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7C12.2652 7 12.5196 7.10536 12.7071 7.29289C12.8946 7.48043 13 7.73478 13 8V11H16C16.2652 11 16.5196 11.1054 16.7071 11.2929C16.8946 11.4804 17 11.7348 17 12C17 12.2652 16.8946 12.5196 16.7071 12.7071C16.5196 12.8946 16.2652 13 16 13Z" fill="#181A18" />
                        </svg>
                        <p>3 min read</p>
                    </div>
                </div>
            </a>

            <a href="{{URL::to('/Blog')}}" class="swiper-slide">
                <img class="slide-picture" src="https://s3-alpha-sig.figma.com/img/a210/8b5b/70676d8adf7169e0cfb368a3f5e68b8c?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=mXO9Llg78hhxoOBnTnfvOvVhsrdan8IxJHLgZvECQ-HhrQmZgsunKCKc2-cX3obdNGUYqpsSalTn1OnjnRXhR~N~N56336ExXmVdhLi4Ny3tN-cQQbohd0bqm5pPfaLuRgNGlt4VEhafyFVjdpbN8pJGLXAujl6r-kgaciPBBE82jLK-vlKciU7FntgZhhq8iXihcwdTAi9FmlQoZSVVG0RGwPNwq27bUFc8sMINSgVI3SmvOBfcoGX9qZ~FxVpjELQxjuxBBbAI8H0FkNDTMgspHVwe~~JcfjVNvaWQZtXobY~vqKYTPEg1hSEOVOZRwvrDL~52pqPLyybvTtiDew__" alt="">

                <div class="text">
                    <div class="slide-content">
                        <h2>Turpis elit in dictum eget eget</h2>
                        <p>Convallis eu vel fames feugiat et venenatis nulla ipsum.</p>
                    </div>
                    <div class="time-to-read">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2C10.0222 2 8.08879 2.58649 6.4443 3.6853C4.79981 4.78412 3.51809 6.3459 2.76121 8.17317C2.00433 10.0004 1.8063 12.0111 2.19215 13.9509C2.578 15.8907 3.53041 17.6725 4.92894 19.0711C6.32746 20.4696 8.10929 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 10.6868 21.7413 9.38642 21.2388 8.17317C20.7363 6.95991 19.9997 5.85752 19.0711 4.92893C18.1425 4.00035 17.0401 3.26375 15.8268 2.7612C14.6136 2.25866 13.3132 2 12 2ZM16 13H12C11.7348 13 11.4804 12.8946 11.2929 12.7071C11.1054 12.5196 11 12.2652 11 12V8C11 7.73478 11.1054 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7C12.2652 7 12.5196 7.10536 12.7071 7.29289C12.8946 7.48043 13 7.73478 13 8V11H16C16.2652 11 16.5196 11.1054 16.7071 11.2929C16.8946 11.4804 17 11.7348 17 12C17 12.2652 16.8946 12.5196 16.7071 12.7071C16.5196 12.8946 16.2652 13 16 13Z" fill="#181A18" />
                        </svg>
                        <p>1 min read</p>
                    </div>
                </div>
            </a>



            <a href="{{URL::to('/Blog')}}" class="swiper-slide">
                <img class="slide-picture" src="https://s3-alpha-sig.figma.com/img/d51e/0114/6015144e93b4f0a379b9355fbb99cca1?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=a4RQxwm2vIpfdVF8G7Eeyn5IasYN7eZy7jljin8cv5v2CI7x8k0gTrYYsVNSflX-qozrn4a9qUcA0FllUWdkXsYvegNilEcHbOj841wlZSw-9pWXRgvmCNHIQbo8mVBcoyMT-FIglKaYSJqavo4zEFiDd4yTn1~IBTGQaxc~V-Y2K9wmUzOyHtgQL~NOE-6nVbiYeo3QfF44FrxXIB4pW537Q8uTn7C8d4PNVRee7VEqSU0iA7T8SDzGAMzSyjreMLZFy-A1wljQu0YBCw8lebOkjJLIQEiczm821zACuU7i4KUqezuUIvyduN9dOS6zPF5qb5ASOy6MJtLPCkFt6g__" alt="">

                <div class="text">
                    <div class="slide-content">
                        <h2>Faucibus egestas ut sit purus ultricies at eu</h2>
                        <p>Viverra tellus risus lacus commodo urna fringilla cursus nulla amet.</p>
                    </div>
                    <div class="time-to-read">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2C10.0222 2 8.08879 2.58649 6.4443 3.6853C4.79981 4.78412 3.51809 6.3459 2.76121 8.17317C2.00433 10.0004 1.8063 12.0111 2.19215 13.9509C2.578 15.8907 3.53041 17.6725 4.92894 19.0711C6.32746 20.4696 8.10929 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 10.6868 21.7413 9.38642 21.2388 8.17317C20.7363 6.95991 19.9997 5.85752 19.0711 4.92893C18.1425 4.00035 17.0401 3.26375 15.8268 2.7612C14.6136 2.25866 13.3132 2 12 2ZM16 13H12C11.7348 13 11.4804 12.8946 11.2929 12.7071C11.1054 12.5196 11 12.2652 11 12V8C11 7.73478 11.1054 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7C12.2652 7 12.5196 7.10536 12.7071 7.29289C12.8946 7.48043 13 7.73478 13 8V11H16C16.2652 11 16.5196 11.1054 16.7071 11.2929C16.8946 11.4804 17 11.7348 17 12C17 12.2652 16.8946 12.5196 16.7071 12.7071C16.5196 12.8946 16.2652 13 16 13Z" fill="#181A18" />
                        </svg>
                        <p>3 min read</p>
                    </div>
                </div>
            </a>

            <a href="{{URL::to('/Blog')}}" class="swiper-slide">
                <img class="slide-picture" src="https://s3-alpha-sig.figma.com/img/33a9/12db/06ff8628ba5031c7a86a8dcff57e3e80?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=J44uSGpohbwMUvBDuBc7SnvQmbaTxAgGSJItZ~DJ0z~YhGsPnyyb~tsgkU3XzBzCR~Q6S9zGVkJJKhlraCYB9778Wn832AEyN8APiJYXhCVlMxy~-5acSoFrOqF7SV5lvHE~ZfipsgOwPca1xPq3mUq1Qd1QRWtz~SJ65Eqd2LDlausU27TkCXEb97XEWumIijlnd8TauvTbA4oLhv9Frb-UVaMKfoR6Tb3qG6KHczL1rATKocpuvpuQ9vW4uEfM4n355YIQMzbUfrBFjTf8uB~Hvgpsit8dIzTDuVq1-tOS5WOXHbky7cwse~NTrK49Ku~TRW3yvXw-z~uNpWoSZg__" alt="">

                <div class="text">
                    <div class="slide-content">
                        <h2>Feugiat gravida sed sit lacus sagittis</h2>
                        <p>Dolor elit viverra facilisis aliquam, aliquet arcu nec.</p>
                    </div>
                    <div class="time-to-read">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2C10.0222 2 8.08879 2.58649 6.4443 3.6853C4.79981 4.78412 3.51809 6.3459 2.76121 8.17317C2.00433 10.0004 1.8063 12.0111 2.19215 13.9509C2.578 15.8907 3.53041 17.6725 4.92894 19.0711C6.32746 20.4696 8.10929 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 10.6868 21.7413 9.38642 21.2388 8.17317C20.7363 6.95991 19.9997 5.85752 19.0711 4.92893C18.1425 4.00035 17.0401 3.26375 15.8268 2.7612C14.6136 2.25866 13.3132 2 12 2ZM16 13H12C11.7348 13 11.4804 12.8946 11.2929 12.7071C11.1054 12.5196 11 12.2652 11 12V8C11 7.73478 11.1054 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7C12.2652 7 12.5196 7.10536 12.7071 7.29289C12.8946 7.48043 13 7.73478 13 8V11H16C16.2652 11 16.5196 11.1054 16.7071 11.2929C16.8946 11.4804 17 11.7348 17 12C17 12.2652 16.8946 12.5196 16.7071 12.7071C16.5196 12.8946 16.2652 13 16 13Z" fill="#181A18" />
                        </svg>
                        <p>3 min read</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="\Frontend\js\homeBlogSlider.js"></script>


    <a class="readBtn" href="{{URL::to('/Blog')}}">Read more</a>
</div>


<div class="link-container">

    <h1>Useful Links</h1>
    <div class="link-block-container">
        <div class="link-block">
            <a href="">
                <p>West London Apartments</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M4.16683 10.8334H14.0502L11.0252 14.4668C10.9551 14.551 10.9024 14.6482 10.8699 14.7529C10.8374 14.8576 10.8259 14.9676 10.836 15.0767C10.8563 15.297 10.9633 15.5003 11.1335 15.6418C11.3037 15.7832 11.5231 15.8513 11.7434 15.8309C11.9638 15.8106 12.167 15.7036 12.3085 15.5334L16.4752 10.5334C16.5032 10.4936 16.5283 10.4519 16.5502 10.4084C16.5502 10.3668 16.5918 10.3418 16.6085 10.3001C16.6463 10.2045 16.666 10.1028 16.6668 10.0001C16.666 9.89734 16.6463 9.79563 16.6085 9.70008C16.6085 9.65842 16.5668 9.63342 16.5502 9.59175C16.5283 9.5483 16.5032 9.50652 16.4752 9.46675L12.3085 4.46675C12.2301 4.37268 12.132 4.29703 12.0211 4.24518C11.9102 4.19333 11.7893 4.16655 11.6668 4.16675C11.4721 4.16637 11.2834 4.23418 11.1335 4.35842C11.0491 4.42837 10.9794 4.51429 10.9282 4.61125C10.8771 4.7082 10.8456 4.81429 10.8355 4.92344C10.8255 5.03259 10.8371 5.14265 10.8696 5.24732C10.9021 5.35199 10.955 5.44921 11.0252 5.53342L14.0502 9.16675H4.16683C3.94582 9.16675 3.73385 9.25455 3.57757 9.41083C3.42129 9.56711 3.3335 9.77907 3.3335 10.0001C3.3335 10.2211 3.42129 10.4331 3.57757 10.5893C3.73385 10.7456 3.94582 10.8334 4.16683 10.8334Z" fill="#181A18" />
                </svg>
            </a>
            <a href="">
                <p>Riverside Apartments</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M4.16683 10.8334H14.0502L11.0252 14.4668C10.9551 14.551 10.9024 14.6482 10.8699 14.7529C10.8374 14.8576 10.8259 14.9676 10.836 15.0767C10.8563 15.297 10.9633 15.5003 11.1335 15.6418C11.3037 15.7832 11.5231 15.8513 11.7434 15.8309C11.9638 15.8106 12.167 15.7036 12.3085 15.5334L16.4752 10.5334C16.5032 10.4936 16.5283 10.4519 16.5502 10.4084C16.5502 10.3668 16.5918 10.3418 16.6085 10.3001C16.6463 10.2045 16.666 10.1028 16.6668 10.0001C16.666 9.89734 16.6463 9.79563 16.6085 9.70008C16.6085 9.65842 16.5668 9.63342 16.5502 9.59175C16.5283 9.5483 16.5032 9.50652 16.4752 9.46675L12.3085 4.46675C12.2301 4.37268 12.132 4.29703 12.0211 4.24518C11.9102 4.19333 11.7893 4.16655 11.6668 4.16675C11.4721 4.16637 11.2834 4.23418 11.1335 4.35842C11.0491 4.42837 10.9794 4.51429 10.9282 4.61125C10.8771 4.7082 10.8456 4.81429 10.8355 4.92344C10.8255 5.03259 10.8371 5.14265 10.8696 5.24732C10.9021 5.35199 10.955 5.44921 11.0252 5.53342L14.0502 9.16675H4.16683C3.94582 9.16675 3.73385 9.25455 3.57757 9.41083C3.42129 9.56711 3.3335 9.77907 3.3335 10.0001C3.3335 10.2211 3.42129 10.4331 3.57757 10.5893C3.73385 10.7456 3.94582 10.8334 4.16683 10.8334Z" fill="#181A18" />
                </svg>
            </a>
            <a href="">
                <p>Apartments in Finance Sector City of London</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M4.16683 10.8334H14.0502L11.0252 14.4668C10.9551 14.551 10.9024 14.6482 10.8699 14.7529C10.8374 14.8576 10.8259 14.9676 10.836 15.0767C10.8563 15.297 10.9633 15.5003 11.1335 15.6418C11.3037 15.7832 11.5231 15.8513 11.7434 15.8309C11.9638 15.8106 12.167 15.7036 12.3085 15.5334L16.4752 10.5334C16.5032 10.4936 16.5283 10.4519 16.5502 10.4084C16.5502 10.3668 16.5918 10.3418 16.6085 10.3001C16.6463 10.2045 16.666 10.1028 16.6668 10.0001C16.666 9.89734 16.6463 9.79563 16.6085 9.70008C16.6085 9.65842 16.5668 9.63342 16.5502 9.59175C16.5283 9.5483 16.5032 9.50652 16.4752 9.46675L12.3085 4.46675C12.2301 4.37268 12.132 4.29703 12.0211 4.24518C11.9102 4.19333 11.7893 4.16655 11.6668 4.16675C11.4721 4.16637 11.2834 4.23418 11.1335 4.35842C11.0491 4.42837 10.9794 4.51429 10.9282 4.61125C10.8771 4.7082 10.8456 4.81429 10.8355 4.92344C10.8255 5.03259 10.8371 5.14265 10.8696 5.24732C10.9021 5.35199 10.955 5.44921 11.0252 5.53342L14.0502 9.16675H4.16683C3.94582 9.16675 3.73385 9.25455 3.57757 9.41083C3.42129 9.56711 3.3335 9.77907 3.3335 10.0001C3.3335 10.2211 3.42129 10.4331 3.57757 10.5893C3.73385 10.7456 3.94582 10.8334 4.16683 10.8334Z" fill="#181A18" />
                </svg>
            </a>
            <a href="">
                <p>Apartments in Soho, Fitrovia</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M4.16683 10.8334H14.0502L11.0252 14.4668C10.9551 14.551 10.9024 14.6482 10.8699 14.7529C10.8374 14.8576 10.8259 14.9676 10.836 15.0767C10.8563 15.297 10.9633 15.5003 11.1335 15.6418C11.3037 15.7832 11.5231 15.8513 11.7434 15.8309C11.9638 15.8106 12.167 15.7036 12.3085 15.5334L16.4752 10.5334C16.5032 10.4936 16.5283 10.4519 16.5502 10.4084C16.5502 10.3668 16.5918 10.3418 16.6085 10.3001C16.6463 10.2045 16.666 10.1028 16.6668 10.0001C16.666 9.89734 16.6463 9.79563 16.6085 9.70008C16.6085 9.65842 16.5668 9.63342 16.5502 9.59175C16.5283 9.5483 16.5032 9.50652 16.4752 9.46675L12.3085 4.46675C12.2301 4.37268 12.132 4.29703 12.0211 4.24518C11.9102 4.19333 11.7893 4.16655 11.6668 4.16675C11.4721 4.16637 11.2834 4.23418 11.1335 4.35842C11.0491 4.42837 10.9794 4.51429 10.9282 4.61125C10.8771 4.7082 10.8456 4.81429 10.8355 4.92344C10.8255 5.03259 10.8371 5.14265 10.8696 5.24732C10.9021 5.35199 10.955 5.44921 11.0252 5.53342L14.0502 9.16675H4.16683C3.94582 9.16675 3.73385 9.25455 3.57757 9.41083C3.42129 9.56711 3.3335 9.77907 3.3335 10.0001C3.3335 10.2211 3.42129 10.4331 3.57757 10.5893C3.73385 10.7456 3.94582 10.8334 4.16683 10.8334Z" fill="#181A18" />
                </svg>
            </a>
            <a href="">
                <p>East London Aaprtments</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M4.16683 10.8334H14.0502L11.0252 14.4668C10.9551 14.551 10.9024 14.6482 10.8699 14.7529C10.8374 14.8576 10.8259 14.9676 10.836 15.0767C10.8563 15.297 10.9633 15.5003 11.1335 15.6418C11.3037 15.7832 11.5231 15.8513 11.7434 15.8309C11.9638 15.8106 12.167 15.7036 12.3085 15.5334L16.4752 10.5334C16.5032 10.4936 16.5283 10.4519 16.5502 10.4084C16.5502 10.3668 16.5918 10.3418 16.6085 10.3001C16.6463 10.2045 16.666 10.1028 16.6668 10.0001C16.666 9.89734 16.6463 9.79563 16.6085 9.70008C16.6085 9.65842 16.5668 9.63342 16.5502 9.59175C16.5283 9.5483 16.5032 9.50652 16.4752 9.46675L12.3085 4.46675C12.2301 4.37268 12.132 4.29703 12.0211 4.24518C11.9102 4.19333 11.7893 4.16655 11.6668 4.16675C11.4721 4.16637 11.2834 4.23418 11.1335 4.35842C11.0491 4.42837 10.9794 4.51429 10.9282 4.61125C10.8771 4.7082 10.8456 4.81429 10.8355 4.92344C10.8255 5.03259 10.8371 5.14265 10.8696 5.24732C10.9021 5.35199 10.955 5.44921 11.0252 5.53342L14.0502 9.16675H4.16683C3.94582 9.16675 3.73385 9.25455 3.57757 9.41083C3.42129 9.56711 3.3335 9.77907 3.3335 10.0001C3.3335 10.2211 3.42129 10.4331 3.57757 10.5893C3.73385 10.7456 3.94582 10.8334 4.16683 10.8334Z" fill="#181A18" />
                </svg>
            </a>
        </div>

        <div class="link-block">
            <a href="">
                <p>Suitable for Families or Groups</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M4.16683 10.8334H14.0502L11.0252 14.4668C10.9551 14.551 10.9024 14.6482 10.8699 14.7529C10.8374 14.8576 10.8259 14.9676 10.836 15.0767C10.8563 15.297 10.9633 15.5003 11.1335 15.6418C11.3037 15.7832 11.5231 15.8513 11.7434 15.8309C11.9638 15.8106 12.167 15.7036 12.3085 15.5334L16.4752 10.5334C16.5032 10.4936 16.5283 10.4519 16.5502 10.4084C16.5502 10.3668 16.5918 10.3418 16.6085 10.3001C16.6463 10.2045 16.666 10.1028 16.6668 10.0001C16.666 9.89734 16.6463 9.79563 16.6085 9.70008C16.6085 9.65842 16.5668 9.63342 16.5502 9.59175C16.5283 9.5483 16.5032 9.50652 16.4752 9.46675L12.3085 4.46675C12.2301 4.37268 12.132 4.29703 12.0211 4.24518C11.9102 4.19333 11.7893 4.16655 11.6668 4.16675C11.4721 4.16637 11.2834 4.23418 11.1335 4.35842C11.0491 4.42837 10.9794 4.51429 10.9282 4.61125C10.8771 4.7082 10.8456 4.81429 10.8355 4.92344C10.8255 5.03259 10.8371 5.14265 10.8696 5.24732C10.9021 5.35199 10.955 5.44921 11.0252 5.53342L14.0502 9.16675H4.16683C3.94582 9.16675 3.73385 9.25455 3.57757 9.41083C3.42129 9.56711 3.3335 9.77907 3.3335 10.0001C3.3335 10.2211 3.42129 10.4331 3.57757 10.5893C3.73385 10.7456 3.94582 10.8334 4.16683 10.8334Z" fill="#181A18" />
                </svg>
            </a>
            <a href="">
                <p>Apartments with Parking</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M4.16683 10.8334H14.0502L11.0252 14.4668C10.9551 14.551 10.9024 14.6482 10.8699 14.7529C10.8374 14.8576 10.8259 14.9676 10.836 15.0767C10.8563 15.297 10.9633 15.5003 11.1335 15.6418C11.3037 15.7832 11.5231 15.8513 11.7434 15.8309C11.9638 15.8106 12.167 15.7036 12.3085 15.5334L16.4752 10.5334C16.5032 10.4936 16.5283 10.4519 16.5502 10.4084C16.5502 10.3668 16.5918 10.3418 16.6085 10.3001C16.6463 10.2045 16.666 10.1028 16.6668 10.0001C16.666 9.89734 16.6463 9.79563 16.6085 9.70008C16.6085 9.65842 16.5668 9.63342 16.5502 9.59175C16.5283 9.5483 16.5032 9.50652 16.4752 9.46675L12.3085 4.46675C12.2301 4.37268 12.132 4.29703 12.0211 4.24518C11.9102 4.19333 11.7893 4.16655 11.6668 4.16675C11.4721 4.16637 11.2834 4.23418 11.1335 4.35842C11.0491 4.42837 10.9794 4.51429 10.9282 4.61125C10.8771 4.7082 10.8456 4.81429 10.8355 4.92344C10.8255 5.03259 10.8371 5.14265 10.8696 5.24732C10.9021 5.35199 10.955 5.44921 11.0252 5.53342L14.0502 9.16675H4.16683C3.94582 9.16675 3.73385 9.25455 3.57757 9.41083C3.42129 9.56711 3.3335 9.77907 3.3335 10.0001C3.3335 10.2211 3.42129 10.4331 3.57757 10.5893C3.73385 10.7456 3.94582 10.8334 4.16683 10.8334Z" fill="#181A18" />
                </svg>
            </a>
            <a href="">
                <p>Apartments with Elevator</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M4.16683 10.8334H14.0502L11.0252 14.4668C10.9551 14.551 10.9024 14.6482 10.8699 14.7529C10.8374 14.8576 10.8259 14.9676 10.836 15.0767C10.8563 15.297 10.9633 15.5003 11.1335 15.6418C11.3037 15.7832 11.5231 15.8513 11.7434 15.8309C11.9638 15.8106 12.167 15.7036 12.3085 15.5334L16.4752 10.5334C16.5032 10.4936 16.5283 10.4519 16.5502 10.4084C16.5502 10.3668 16.5918 10.3418 16.6085 10.3001C16.6463 10.2045 16.666 10.1028 16.6668 10.0001C16.666 9.89734 16.6463 9.79563 16.6085 9.70008C16.6085 9.65842 16.5668 9.63342 16.5502 9.59175C16.5283 9.5483 16.5032 9.50652 16.4752 9.46675L12.3085 4.46675C12.2301 4.37268 12.132 4.29703 12.0211 4.24518C11.9102 4.19333 11.7893 4.16655 11.6668 4.16675C11.4721 4.16637 11.2834 4.23418 11.1335 4.35842C11.0491 4.42837 10.9794 4.51429 10.9282 4.61125C10.8771 4.7082 10.8456 4.81429 10.8355 4.92344C10.8255 5.03259 10.8371 5.14265 10.8696 5.24732C10.9021 5.35199 10.955 5.44921 11.0252 5.53342L14.0502 9.16675H4.16683C3.94582 9.16675 3.73385 9.25455 3.57757 9.41083C3.42129 9.56711 3.3335 9.77907 3.3335 10.0001C3.3335 10.2211 3.42129 10.4331 3.57757 10.5893C3.73385 10.7456 3.94582 10.8334 4.16683 10.8334Z" fill="#181A18" />
                </svg>
            </a>
            <a href="">
                <p>Apartments suitable for physical disabilities</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M4.16683 10.8334H14.0502L11.0252 14.4668C10.9551 14.551 10.9024 14.6482 10.8699 14.7529C10.8374 14.8576 10.8259 14.9676 10.836 15.0767C10.8563 15.297 10.9633 15.5003 11.1335 15.6418C11.3037 15.7832 11.5231 15.8513 11.7434 15.8309C11.9638 15.8106 12.167 15.7036 12.3085 15.5334L16.4752 10.5334C16.5032 10.4936 16.5283 10.4519 16.5502 10.4084C16.5502 10.3668 16.5918 10.3418 16.6085 10.3001C16.6463 10.2045 16.666 10.1028 16.6668 10.0001C16.666 9.89734 16.6463 9.79563 16.6085 9.70008C16.6085 9.65842 16.5668 9.63342 16.5502 9.59175C16.5283 9.5483 16.5032 9.50652 16.4752 9.46675L12.3085 4.46675C12.2301 4.37268 12.132 4.29703 12.0211 4.24518C11.9102 4.19333 11.7893 4.16655 11.6668 4.16675C11.4721 4.16637 11.2834 4.23418 11.1335 4.35842C11.0491 4.42837 10.9794 4.51429 10.9282 4.61125C10.8771 4.7082 10.8456 4.81429 10.8355 4.92344C10.8255 5.03259 10.8371 5.14265 10.8696 5.24732C10.9021 5.35199 10.955 5.44921 11.0252 5.53342L14.0502 9.16675H4.16683C3.94582 9.16675 3.73385 9.25455 3.57757 9.41083C3.42129 9.56711 3.3335 9.77907 3.3335 10.0001C3.3335 10.2211 3.42129 10.4331 3.57757 10.5893C3.73385 10.7456 3.94582 10.8334 4.16683 10.8334Z" fill="#181A18" />
                </svg>
            </a>
        </div>

    </div>

</div>

<!-- call to action (cta) -->
<div class="cta-container">
    <div class="background">
        <div class="cta-content-container">
            <div class="text-container">
                <h2>Dictum nunc</h2>
                <p>Vel mattis integer pulvinar morbi quis amet eu. In nunc facilisis proin fermentum, consectetur cursus.</p>
            </div>

            <div class="dropdown-city">
                <button class="dropbtn">Choose city <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M10 14.1667C9.78725 14.1657 9.57742 14.1173 9.38571 14.025C9.19401 13.9328 9.02524 13.799 8.89166 13.6334L5.38333 9.38341C5.17833 9.12755 5.04932 8.81925 5.01101 8.49364C4.9727 8.16803 5.02664 7.8382 5.16666 7.54175C5.28023 7.2841 5.46556 7.06459 5.70051 6.90943C5.93547 6.75427 6.21012 6.67003 6.49166 6.66675H13.5083C13.7899 6.67003 14.0645 6.75427 14.2995 6.90943C14.5344 7.06459 14.7198 7.2841 14.8333 7.54175C14.9734 7.8382 15.0273 8.16803 14.989 8.49364C14.9507 8.81925 14.8217 9.12755 14.6167 9.38341L11.1083 13.6334C10.9747 13.799 10.806 13.9328 10.6143 14.025C10.4226 14.1173 10.2127 14.1657 10 14.1667Z" fill="white" />
                    </svg></button>
                <div class="dropdown-content">
                    <a href="{{URL::to('/bookingPage')}}">City 1</a>
                    <a href="{{URL::to('/bookingPage')}}">City 2</a>
                    <a href="{{URL::to('/bookingPage')}}">City 3</a>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection