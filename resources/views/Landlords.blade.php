
@extends('Layout/header_footer')
@section('content')

<script>
    // Create a link element
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = '/Frontend/css/Landlords.css'; // Your CSS file path
    // Append it to the head
    document.head.appendChild(link);


</script>


            <!-- Form và image -->
            <div class="container2">
        <img src="\Frontend\Image\Landlords\business.png" alt="Background Image" class="background-image">

        <!-- Form Container -->
        <div class="form-container">

            <!-- Title -->
            <div>
                <h1>Earn more from your property, do less</h1>
                <p>Find out if your property meets our criteria</p>
            </div>

            <!-- Input details in here -->
            <div class="section-2">
                <input type="text" placeholder="Name *" required>
                <input type="email" placeholder="Email *" required>
                <input type="tel" placeholder="Phone number *" required>

                <div>
                    <p2>Property details</p2>
                    <div class="property-details">
                        <select required>
                            <option value="" disabled selected>City *</option>
                            <option value="city1">Ho Chi Minh city</option>
                            <option value="city2">Ha Noi</option>
                        </select>
                        <select required>
                            <option value="" disabled selected>Area *</option>
                            <option value="area1">Thu Duc</option>
                            <option value="area2">Tan Binh</option>
                        </select>
                    </div>

                    <select required>
                        <option value="" disabled selected># of bedrooms *</option>
                        <option value="1">1 Bedroom</option>
                        <option value="2">2 Bedrooms</option>
                        <option value="3">3 Bedrooms</option>
                    </select>
                </div>
            </div>
      
            <!-- Submit button -->
            <div class="section-3">
                <button type="submit">Submit</button>
            </div>
        </div>
    
    </div>

    <!-- Information Section -->
    <div class="boxes-container">
        <div class="boxes-header">
            <h1>Better than Property Management</h1>
            <p>We work with 100+ companies to meet accommodation needs in London. Offer a dedicated<br> booking manager that can help to find properties for your needs.</p>
        </div>
        <div class="boxes-features">
            <div class="boxes-feature">
                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
  <path d="M30 40C31.3807 40 32.5 38.8807 32.5 37.5C32.5 36.1193 31.3807 35 30 35C28.6193 35 27.5 36.1193 27.5 37.5C27.5 38.8807 28.6193 40 30 40Z" fill="black"/>
  <path d="M42.5 19.9999H40V15.2749C40 12.6227 38.9464 10.0792 37.0711 8.20383C35.1957 6.32847 32.6522 5.2749 30 5.2749C27.3478 5.2749 24.8043 6.32847 22.9289 8.20383C21.0536 10.0792 20 12.6227 20 15.2749V19.9999H17.5C15.5109 19.9999 13.6032 20.7901 12.1967 22.1966C10.7902 23.6031 10 25.5108 10 27.4999V47.4999C10 49.489 10.7902 51.3967 12.1967 52.8032C13.6032 54.2097 15.5109 54.9999 17.5 54.9999H42.5C44.4891 54.9999 46.3968 54.2097 47.8033 52.8032C49.2098 51.3967 50 49.489 50 47.4999V27.4999C50 25.5108 49.2098 23.6031 47.8033 22.1966C46.3968 20.7901 44.4891 19.9999 42.5 19.9999ZM25 15.2749C24.9664 13.9131 25.4736 12.5935 26.4107 11.6049C27.3478 10.6163 28.6384 10.0392 30 9.9999C31.3616 10.0392 32.6522 10.6163 33.5893 11.6049C34.5264 12.5935 35.0336 13.9131 35 15.2749V19.9999H25V15.2749ZM30 44.9999C28.5166 44.9999 27.0666 44.56 25.8332 43.7359C24.5999 42.9118 23.6386 41.7405 23.0709 40.37C22.5032 38.9996 22.3547 37.4916 22.6441 36.0367C22.9335 34.5819 23.6478 33.2455 24.6967 32.1966C25.7456 31.1477 27.082 30.4334 28.5368 30.144C29.9917 29.8546 31.4997 30.0031 32.8701 30.5708C34.2406 31.1385 35.4119 32.0998 36.236 33.3331C37.0601 34.5665 37.5 36.0165 37.5 37.4999C37.5 39.489 36.7098 41.3967 35.3033 42.8032C33.8968 44.2097 31.9891 44.9999 30 44.9999Z" fill="black"/>
</svg></div>
                <h2>Guaranteed rent</h2>
                <p>We do the searching for you</p>
            </div>
            <div class="boxes-feature">
                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
  <path d="M53.675 28.9498L37.625 12.9248C37.2161 12.5135 36.677 12.2573 36.1 12.1998L12.725 9.99977C12.3588 9.96609 11.9897 10.0136 11.644 10.1389C11.2983 10.2642 10.9845 10.4643 10.725 10.7248C10.4645 10.9843 10.2645 11.2981 10.1392 11.6438C10.0138 11.9895 9.96633 12.3586 10 12.7248L12.2 36.0998C12.2575 36.6768 12.5138 37.2159 12.925 37.6248L28.95 53.6748C29.8095 54.5225 30.9678 54.9984 32.175 54.9998C33.3746 54.9972 34.5247 54.521 35.375 53.6748L53.675 35.3748C54.5253 34.5219 55.0028 33.3666 55.0028 32.1623C55.0028 30.9579 54.5253 29.8027 53.675 28.9498ZM28.9 28.9498C28.3757 29.4747 27.7076 29.8323 26.98 29.9774C26.2525 30.1224 25.4982 30.0485 24.8127 29.7648C24.1272 29.4811 23.5413 29.0004 23.129 28.3836C22.7168 27.7668 22.4967 27.0416 22.4967 26.2998C22.4967 25.5579 22.7168 24.8327 23.129 24.2159C23.5413 23.5991 24.1272 23.1185 24.8127 22.8348C25.4982 22.5511 26.2525 22.4771 26.98 22.6222C27.7076 22.7672 28.3757 23.1249 28.9 23.6498C29.5931 24.3476 29.9821 25.2912 29.9821 26.2748C29.9821 27.2583 29.5931 28.2019 28.9 28.8998V28.9498Z" fill="black"/>
</svg></div>
                <h2>No fees</h2>
                <p>Preferred partner rates</p>
            </div>
            <div class="boxes-feature">
                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
  <path d="M42.5 27.5V12.5C42.5 9.75 40.25 7.5 37.5 7.5H22.5C19.75 7.5 17.5 9.75 17.5 12.5V17.5H12.5C9.75 17.5 7.5 19.75 7.5 22.5V47.5C7.5 50.25 9.75 52.5 12.5 52.5H25C26.375 52.5 27.5 51.375 27.5 50V42.5H32.5V50C32.5 51.375 33.625 52.5 35 52.5H47.5C50.25 52.5 52.5 50.25 52.5 47.5V32.5C52.5 29.75 50.25 27.5 47.5 27.5H42.5ZM17.5 47.5H12.5V42.5H17.5V47.5ZM17.5 37.5H12.5V32.5H17.5V37.5ZM17.5 27.5H12.5V22.5H17.5V27.5ZM27.5 37.5H22.5V32.5H27.5V37.5ZM27.5 27.5H22.5V22.5H27.5V27.5ZM27.5 17.5H22.5V12.5H27.5V17.5ZM37.5 37.5H32.5V32.5H37.5V37.5ZM37.5 27.5H32.5V22.5H37.5V27.5ZM37.5 17.5H32.5V12.5H37.5V17.5ZM47.5 47.5H42.5V42.5H47.5V47.5ZM47.5 37.5H42.5V32.5H47.5V37.5Z" fill="black"/>
</svg></div>
                <h2>No voids</h2>
                <p>Preferred partner rates</p>
            </div>
            <div class="boxes-feature">
                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
  <path d="M55 30C55 16.1925 43.8075 5 30 5C16.1925 5 5 16.1925 5 30C5 43.8075 16.1925 55 30 55C43.8075 55 55 43.8075 55 30ZM18.75 21.86C19.6175 20.905 21.0375 20 23.125 20C26.005 20 27.86 21.98 28.5125 24.1525C29.145 26.27 28.7625 28.89 26.9625 30.6975C26.3382 31.2977 25.676 31.8572 24.98 32.3725L24.88 32.45C24.18 32.99 23.555 33.48 23.005 34.025C22.3675 34.665 21.845 35.3625 21.5425 36.25H26.875C27.3723 36.25 27.8492 36.4475 28.2008 36.7992C28.5525 37.1508 28.75 37.6277 28.75 38.125C28.75 38.6223 28.5525 39.0992 28.2008 39.4508C27.8492 39.8025 27.3723 40 26.875 40H19.375C18.8777 40 18.4008 39.8025 18.0492 39.4508C17.6975 39.0992 17.5 38.6223 17.5 38.125C17.5 35.0075 18.81 32.9175 20.36 31.3725C21.1 30.6325 21.905 30.01 22.585 29.4825L22.5925 29.4775C23.3075 28.925 23.8625 28.495 24.305 28.0525C24.985 27.3675 25.2225 26.24 24.92 25.2275C24.6325 24.275 23.995 23.75 23.125 23.75C22.2425 23.75 21.7875 24.0925 21.525 24.3825C21.3714 24.552 21.2465 24.7454 21.155 24.955V24.9625C21.0018 25.4359 20.6669 25.8291 20.2238 26.0555C19.7808 26.282 19.2659 26.3232 18.7925 26.17C18.3191 26.0168 17.9259 25.6819 17.6995 25.2388C17.473 24.7958 17.4318 24.2809 17.585 23.8075L17.6725 23.5675C17.9294 22.9404 18.2931 22.3627 18.7475 21.86H18.75ZM33.125 20C33.6223 20 34.0992 20.1975 34.4508 20.5492C34.8025 20.9008 35 21.3777 35 21.875V28.75H38.75V21.875C38.75 21.3777 38.9475 20.9008 39.2992 20.5492C39.6508 20.1975 40.1277 20 40.625 20C41.1223 20 41.5992 20.1975 41.9508 20.5492C42.3025 20.9008 42.5 21.3777 42.5 21.875V38.05C42.5 38.5473 42.3025 39.0242 41.9508 39.3758C41.5992 39.7275 41.1223 39.925 40.625 39.925C40.1277 39.925 39.6508 39.7275 39.2992 39.3758C38.9475 39.0242 38.75 38.5473 38.75 38.05V32.5H33.125C32.6277 32.5 32.1508 32.3025 31.7992 31.9508C31.4475 31.5992 31.25 31.1223 31.25 30.625V21.875C31.25 21.3777 31.4475 20.9008 31.7992 20.5492C32.1508 20.1975 32.6277 20 33.125 20Z" fill="black"/>
</svg></div>
                <h2>24/7 maintenance</h2>
                <p>Extend on short notice</p>
            </div>
        </div>
    </div>

    <!--Timeline, how it works-->
    <div class="how-it-works">
        <h1>How it Works</h1>
        <div class="timeline">
            <div class="block left">
                <div class="timeline-item">
                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none">
                        <path d="M63.3334 13.3335H16.6667C14.0146 13.3335 11.471 14.3871 9.59568 16.2624C7.72032 18.1378 6.66675 20.6813 6.66675 23.3335V56.6668C6.66675 59.319 7.72032 61.8625 9.59568 63.7379C11.471 65.6133 14.0146 66.6668 16.6667 66.6668H63.3334C65.9856 66.6668 68.5291 65.6133 70.4045 63.7379C72.2799 61.8625 73.3334 59.319 73.3334 56.6668V23.3335C73.3334 20.6813 72.2799 18.1378 70.4045 16.2624C68.5291 14.3871 65.9856 13.3335 63.3334 13.3335ZM63.3334 20.0002L41.6667 34.9002C41.16 35.1927 40.5852 35.3467 40.0001 35.3467C39.415 35.3467 38.8401 35.1927 38.3334 34.9002L16.6667 20.0002H63.3334Z" fill="black"/>
                    </svg></div>
                    <h2>Get in touch</h2>
                    <p>Ut id cras malesuada dolor. Consectetur eget malesuada enim massa viverra mauris.</p>
                </div>
                <div class="timeline-item">
                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none">
  <path d="M40 45C42.7614 45 45 42.7614 45 40C45 37.2386 42.7614 35 40 35C37.2386 35 35 37.2386 35 40C35 42.7614 37.2386 45 40 45Z" fill="black"/>
  <path d="M72.8999 38.3332C70.7666 34.6332 59.0332 16.0666 39.0999 16.6666C20.6666 17.1332 9.9999 33.3332 7.0999 38.3332C6.80734 38.84 6.65332 39.4148 6.65332 39.9999C6.65332 40.585 6.80734 41.1598 7.0999 41.6666C9.1999 45.2999 20.4332 63.3332 40.0666 63.3332H40.8999C59.3332 62.8666 70.0332 46.6666 72.8999 41.6666C73.1925 41.1598 73.3465 40.585 73.3465 39.9999C73.3465 39.4148 73.1925 38.84 72.8999 38.3332ZM39.9999 51.6666C37.6925 51.6666 35.4368 50.9823 33.5183 49.7004C31.5997 48.4184 30.1043 46.5963 29.2213 44.4645C28.3383 42.3327 28.1072 39.987 28.5574 37.7238C29.0076 35.4607 30.1187 33.3819 31.7503 31.7503C33.3819 30.1187 35.4607 29.0076 37.7239 28.5574C39.987 28.1072 42.3327 28.3383 44.4645 29.2213C46.5963 30.1043 48.4184 31.5997 49.7004 33.5182C50.9823 35.4368 51.6666 37.6924 51.6666 39.9999C51.6666 43.0941 50.4374 46.0615 48.2495 48.2495C46.0616 50.4374 43.0941 51.6666 39.9999 51.6666Z" fill="black"/>
</svg>️</div>
                    <h2>Property viewing</h2>
                    <p>Sit lectus parturient diam ac congue elementum praesent blandit. Tristique ut et venenatis tortor, id elementum.</p>
                </div>
                <div class="timeline-item">
                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none">
  <path d="M23.3334 70H56.6668V23.3333H53.3334V18.3333C53.3334 16.1232 52.4554 14.0036 50.8926 12.4408C49.3298 10.878 47.2102 10 45.0001 10H35.0001C32.7899 10 30.6703 10.878 29.1075 12.4408C27.5447 14.0036 26.6667 16.1232 26.6667 18.3333V23.3333H23.3334V70ZM33.3334 18.3333C33.3334 17.8913 33.509 17.4674 33.8216 17.1548C34.1341 16.8423 34.5581 16.6667 35.0001 16.6667H45.0001C45.4421 16.6667 45.866 16.8423 46.1786 17.1548C46.4912 17.4674 46.6667 17.8913 46.6667 18.3333V23.3333H33.3334V18.3333ZM63.3334 23.3333V70C65.9856 70 68.5291 68.9464 70.4045 67.0711C72.2799 65.1957 73.3334 62.6522 73.3334 60V33.3333C73.3334 30.6812 72.2799 28.1376 70.4045 26.2623C68.5291 24.3869 65.9856 23.3333 63.3334 23.3333ZM16.6667 23.3333C14.0146 23.3333 11.471 24.3869 9.59568 26.2623C7.72032 28.1376 6.66675 30.6812 6.66675 33.3333V60C6.66675 62.6522 7.72032 65.1957 9.59568 67.0711C11.471 68.9464 14.0146 70 16.6667 70V23.3333Z" fill="black"/>
</svg></div>
                    <h2>Moving in & Moving up!</h2>
                    <p>Sit lectus parturient diam ac congue elementum praesent blandit. Tristique ut et venenatis tortor, id elementum.</p>
                </div>
            </div>

            <div class="vertical-line">
                <div class="icon top-icon"></div>
                <div class="icon top-icon"></div>
                <div class="icon top-icon"></div>
                <div class="icon top-icon"></div>
                <div class="icon top-icon"></div>
                <div class="icon top-icon"></div>
            </div>

            <div class="block right">
                <div class="timeline-item">
                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none">
  <path d="M30.0001 36.6667C32.6372 36.6667 35.215 35.8847 37.4077 34.4196C39.6003 32.9545 41.3093 30.8721 42.3185 28.4358C43.3276 25.9994 43.5917 23.3185 43.0772 20.7321C42.5628 18.1457 41.2929 15.7699 39.4282 13.9052C37.5635 12.0405 35.1877 10.7707 32.6013 10.2562C30.0149 9.74173 27.334 10.0058 24.8976 11.0149C22.4613 12.0241 20.3789 13.7331 18.9138 15.9257C17.4487 18.1184 16.6667 20.6963 16.6667 23.3333C16.6667 26.8696 18.0715 30.2609 20.572 32.7614C23.0725 35.2619 26.4639 36.6667 30.0001 36.6667ZM56.6668 43.3333C58.6446 43.3333 60.578 42.7468 62.2225 41.648C63.8669 40.5492 65.1487 38.9874 65.9055 37.1602C66.6624 35.3329 66.8605 33.3222 66.4746 31.3824C66.0888 29.4426 65.1363 27.6608 63.7378 26.2623C62.3393 24.8637 60.5575 23.9113 58.6177 23.5255C56.6778 23.1396 54.6672 23.3377 52.8399 24.0945C51.0127 24.8514 49.4509 26.1331 48.3521 27.7776C47.2532 29.4221 46.6668 31.3555 46.6667 33.3333C46.6668 35.9855 47.7203 38.529 49.5957 40.4044C51.471 42.2798 54.0146 43.3333 56.6668 43.3333ZM70.0001 66.6667C70.8841 66.6667 71.732 66.3155 72.3571 65.6904C72.9822 65.0652 73.3334 64.2174 73.3334 63.3333C73.3307 60.218 72.455 57.1658 70.8055 54.5229C69.1559 51.8801 66.7987 49.7525 64.0012 48.3816C61.2038 47.0106 58.078 46.4511 54.9787 46.7667C51.8794 47.0822 48.9305 48.2601 46.4667 50.1667C43.2018 46.9145 39.0469 44.702 34.5262 43.8081C30.0054 42.9142 25.3211 43.379 21.0642 45.1438C16.8072 46.9086 13.1681 49.8945 10.6059 53.7248C8.04365 57.5551 6.67298 62.0584 6.66675 66.6667C6.66675 67.5507 7.01794 68.3986 7.64306 69.0237C8.26818 69.6488 9.11603 70 10.0001 70H50.0001C50.8841 70 51.732 69.6488 52.3571 69.0237C52.9822 68.3986 53.3334 67.5507 53.3334 66.6667" fill="black"/>
</svg></div>
                    <h2>Let's chat</h2>
                    <p>Euisod commodo feugiat purus egestas diam. Facilisi sed senectus consequat risus.</p>
                </div>
                <div class="timeline-item">
                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none">
  <path d="M66.6667 43.9333H57.6667L51.4667 50.6L39.6 63.3333L34.9 68.4L33.3333 70H66.6667C67.5507 70 68.3986 69.6488 69.0237 69.0237C69.6488 68.3986 70 67.5507 70 66.6667V47.2667C70 46.3826 69.6488 45.5348 69.0237 44.9096C68.3986 44.2845 67.5507 43.9333 66.6667 43.9333ZM60.6333 31L46.8333 18.1333C46.5267 17.824 46.1556 17.586 45.7466 17.4362C45.3376 17.2864 44.9006 17.2285 44.4667 17.2667C44.0289 17.2772 43.5976 17.3739 43.1972 17.5512C42.7968 17.7285 42.4353 17.9829 42.1333 18.3L39.4 21.2667V56.9667C39.3681 57.6032 39.3013 58.2375 39.2 58.8667L60.8 35.7C61.3992 35.0537 61.7181 34.1964 61.6868 33.3156C61.6556 32.4348 61.2768 31.6022 60.6333 31ZM36.0667 13.3333C36.0667 12.4493 35.7155 11.6014 35.0904 10.9763C34.4652 10.3512 33.6174 10 32.7333 10H13.3333C12.4493 10 11.6014 10.3512 10.9763 10.9763C10.3512 11.6014 10 12.4493 10 13.3333V56.9667C10 60.4233 11.3732 63.7384 13.8174 66.1826C16.2616 68.6269 19.5767 70 23.0333 70C26.49 70 29.8051 68.6269 32.2493 66.1826C34.6935 63.7384 36.0667 60.4233 36.0667 56.9667V13.3333ZM29.4 56.9667C29.4 58.6552 28.7292 60.2746 27.5352 61.4686C26.3413 62.6626 24.7219 63.3333 23.0333 63.3333C21.3448 63.3333 19.7254 62.6626 18.5314 61.4686C17.3374 60.2746 16.6667 58.6552 16.6667 56.9667V50H29.4V56.9667ZM29.4 43.3333H16.6667V33.3333H29.4V43.3333ZM29.4 26.6667H16.6667V16.6667H29.4V26.6667Z" fill="black"/>
</svg></div>
                    <h2>Time to decorate</h2>
                    <p>Adipiscing magna ut justo, et. Sem pellentesque eu risus euismod et. Sapien est tellus dapibus.</p>
                </div>
                <div class="timeline-item">
                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none">
  <path d="M40.0001 19.9998C40.8841 19.9998 41.732 19.6486 42.3571 19.0235C42.9822 18.3984 43.3334 17.5506 43.3334 16.6665V9.99984C43.3334 9.11578 42.9822 8.26794 42.3571 7.64281C41.732 7.01769 40.8841 6.6665 40.0001 6.6665C39.116 6.6665 38.2682 7.01769 37.6431 7.64281C37.0179 8.26794 36.6667 9.11578 36.6667 9.99984V16.6665C36.6667 17.5506 37.0179 18.3984 37.6431 19.0235C38.2682 19.6486 39.116 19.9998 40.0001 19.9998ZM70.0001 36.6665H63.3334C62.4494 36.6665 61.6015 37.0177 60.9764 37.6428C60.3513 38.2679 60.0001 39.1158 60.0001 39.9998C60.0001 40.8839 60.3513 41.7317 60.9764 42.3569C61.6015 42.982 62.4494 43.3332 63.3334 43.3332H70.0001C70.8841 43.3332 71.732 42.982 72.3571 42.3569C72.9822 41.7317 73.3334 40.8839 73.3334 39.9998C73.3334 39.1158 72.9822 38.2679 72.3571 37.6428C71.732 37.0177 70.8841 36.6665 70.0001 36.6665ZM20.0001 39.9998C20.0001 39.1158 19.6489 38.2679 19.0238 37.6428C18.3986 37.0177 17.5508 36.6665 16.6667 36.6665H10.0001C9.11603 36.6665 8.26818 37.0177 7.64306 37.6428C7.01794 38.2679 6.66675 39.1158 6.66675 39.9998C6.66675 40.8839 7.01794 41.7317 7.64306 42.3569C8.26818 42.982 9.11603 43.3332 10.0001 43.3332H16.6667C17.5508 43.3332 18.3986 42.982 19.0238 42.3569C19.6489 41.7317 20.0001 40.8839 20.0001 39.9998ZM20.7334 16.6665C20.0836 16.0521 19.2164 15.721 18.3225 15.746C17.4285 15.771 16.5812 16.1501 15.9667 16.7998C15.3523 17.4496 15.0212 18.3169 15.0462 19.2108C15.0712 20.1047 15.4503 20.9521 16.1001 21.5665L20.9001 26.1998C21.2222 26.5109 21.6037 26.7538 22.0218 26.9142C22.4398 27.0745 22.8859 27.149 23.3334 27.1332C23.7824 27.1315 24.2265 27.039 24.6389 26.8615C25.0513 26.6839 25.4236 26.4248 25.7334 26.0998C26.3543 25.4753 26.7027 24.6305 26.7027 23.7498C26.7027 22.8692 26.3543 22.0244 25.7334 21.3998L20.7334 16.6665ZM56.6668 27.1332C57.525 27.1298 58.3488 26.7954 58.9668 26.1998L63.7667 21.5665C64.3523 20.9547 64.683 20.1429 64.6917 19.2961C64.7005 18.4492 64.3865 17.6308 63.8137 17.0071C63.2409 16.3833 62.4521 16.001 61.6076 15.9377C60.763 15.8745 59.9261 16.135 59.2668 16.6665L54.4668 21.3998C53.8459 22.0244 53.4974 22.8692 53.4974 23.7498C53.4974 24.6305 53.8459 25.4753 54.4668 26.0998C55.0439 26.7089 55.8295 27.0779 56.6668 27.1332ZM40.0001 59.9998C39.116 59.9998 38.2682 60.351 37.6431 60.9761C37.0179 61.6013 36.6667 62.4491 36.6667 63.3332V69.9998C36.6667 70.8839 37.0179 71.7317 37.6431 72.3569C38.2682 72.982 39.116 73.3332 40.0001 73.3332C40.8841 73.3332 41.732 72.982 42.3571 72.3569C42.9822 71.7317 43.3334 70.8839 43.3334 69.9998V63.3332C43.3334 62.4491 42.9822 61.6013 42.3571 60.9761C41.732 60.351 40.8841 59.9998 40.0001 59.9998ZM59.1001 53.7998C58.4636 53.1854 57.609 52.849 56.7245 52.8647C55.8399 52.8803 54.9978 53.2467 54.3834 53.8832C53.769 54.5197 53.4326 55.3742 53.4482 56.2588C53.4639 57.1433 53.8302 57.9854 54.4668 58.5998L59.2668 63.3332C59.8847 63.9288 60.7085 64.2631 61.5667 64.2665C62.0134 64.2691 62.456 64.1819 62.8683 64.0102C63.2806 63.8384 63.6541 63.5855 63.9668 63.2665C64.2792 62.9566 64.5272 62.588 64.6964 62.1818C64.8656 61.7756 64.9527 61.3399 64.9527 60.8998C64.9527 60.4598 64.8656 60.0241 64.6964 59.6179C64.5272 59.2117 64.2792 58.843 63.9668 58.5332L59.1001 53.7998ZM20.9001 53.7998L16.1001 58.4332C15.7877 58.7431 15.5397 59.1117 15.3704 59.5179C15.2012 59.9241 15.1141 60.3598 15.1141 60.7998C15.1141 61.2399 15.2012 61.6756 15.3704 62.0818C15.5397 62.488 15.7877 62.8566 16.1001 63.1665C16.4127 63.4855 16.7863 63.7384 17.1986 63.9102C17.6108 64.0819 18.0534 64.1691 18.5001 64.1665C19.3218 64.1735 20.1171 63.8767 20.7334 63.3332L25.5334 58.6998C26.1699 58.0854 26.5363 57.2433 26.5519 56.3588C26.5676 55.4742 26.2312 54.6197 25.6167 53.9832C25.0023 53.3467 24.1602 52.9803 23.2757 52.9647C22.3911 52.949 21.5366 53.2854 20.9001 53.8998V53.7998ZM40.0001 26.6665C37.363 26.6665 34.7851 27.4485 32.5925 28.9136C30.3998 30.3787 28.6909 32.461 27.6817 34.8974C26.6725 37.3337 26.4085 40.0146 26.9229 42.601C27.4374 45.1875 28.7073 47.5632 30.572 49.4279C32.4367 51.2926 34.8125 52.5625 37.3989 53.077C39.9853 53.5914 42.6662 53.3274 45.1025 52.3182C47.5389 51.3091 49.6213 49.6001 51.0863 47.4074C52.5514 45.2148 53.3334 42.6369 53.3334 39.9998C53.3334 36.4636 51.9287 33.0722 49.4282 30.5717C46.9277 28.0713 43.5363 26.6665 40.0001 26.6665Z" fill="black"/>
</svg></div>
                    <h2>Sit back & Relax</h2>
                    <p>Euisod commodo feugiat purus egestas diam. Facilisi sed senectus consequat risus.</p>
                </div>
            </div>
        </div>
    </div>


    
    <!--Corporate Partnerships-->
    <div class="corporate">
        <div class="container">
            <div class="header">
                <h1>Corporate Partnerships</h1>
                <p>We work with 100+ companies to meet accommodation needs in London. Offer a dedicated<br> booking manager that can help to find properties for your needs.</p>
            </div>
            <div class="image-gallery">
                <div class="image-wrapper">
                    <img src="\Frontend\Image\Landlords\bedroom-before.png" alt="Before" />
                    <div class="label">Before</div>
                </div>
                <div class="image-wrapper">
                    <img src="\Frontend\Image\Landlords\bedroom-after.png" alt="After" />
                    <div class="label">After</div>
                </div>
            </div>
            <div class="features">
                <div class="feature">
                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
  <path d="M31.666 5H11.666C10.3399 5 9.06816 5.52678 8.13048 6.46447C7.1928 7.40215 6.66602 8.67392 6.66602 10V30C6.66602 31.3261 7.1928 32.5979 8.13048 33.5355C9.06816 34.4732 10.3399 35 11.666 35H31.666C32.108 35 32.532 34.8244 32.8445 34.5118C33.1571 34.1993 33.3327 33.7754 33.3327 33.3333V6.66667C33.3327 6.22464 33.1571 5.80072 32.8445 5.48816C32.532 5.17559 32.108 5 31.666 5ZM11.666 31.6667C11.224 31.6667 10.8001 31.4911 10.4875 31.1785C10.1749 30.866 9.99935 30.442 9.99935 30C9.99935 29.558 10.1749 29.134 10.4875 28.8215C10.8001 28.5089 11.224 28.3333 11.666 28.3333H29.9993V31.6667H11.666Z" fill="black"/>
</svg></div>
                    <h2>Consequat risus</h2>
                    <p>Euismod commodo feugiat purus egestas diam. Facilisi sed senectus consequat risus. Porta purus nec dui odio vehicula.</p>
                </div>
                <div class="feature">
                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
  <path d="M31.666 34.583L27.816 19.583C29.2394 17.812 30.0103 15.6052 29.9993 13.333C29.9993 10.6808 28.9458 8.1373 27.0704 6.26194C25.195 4.38658 22.6515 3.33301 19.9993 3.33301C17.3472 3.33301 14.8036 4.38658 12.9283 6.26194C11.0529 8.1373 9.99933 10.6808 9.99933 13.333C9.99476 15.6227 10.784 17.8432 12.2327 19.6163L8.33266 34.583C8.24971 34.9029 8.26372 35.2402 8.37292 35.5521C8.48213 35.864 8.68159 36.1364 8.94596 36.3347C9.21034 36.533 9.52769 36.6482 9.8577 36.6657C10.1877 36.6832 10.5155 36.6022 10.7993 36.433L19.6827 31.2163L29.1493 36.4497C29.4051 36.604 29.7008 36.6794 29.9993 36.6663C30.2581 36.6746 30.5153 36.6224 30.7504 36.514C30.9855 36.4056 31.1922 36.2439 31.3539 36.0417C31.5157 35.8395 31.6281 35.6024 31.6823 35.3492C31.7364 35.096 31.7309 34.8337 31.666 34.583ZM19.9993 6.66634C21.3179 6.66634 22.6068 7.05733 23.7031 7.78988C24.7995 8.52242 25.6539 9.56361 26.1585 10.7818C26.6631 12 26.7951 13.3404 26.5379 14.6336C26.2807 15.9268 25.6457 17.1147 24.7134 18.0471C23.781 18.9794 22.5931 19.6143 21.2999 19.8716C20.0067 20.1288 18.6663 19.9968 17.4481 19.4922C16.2299 18.9876 15.1887 18.1331 14.4562 17.0368C13.7237 15.9405 13.3327 14.6515 13.3327 13.333C13.3327 11.5649 14.035 9.8692 15.2853 8.61896C16.5355 7.36872 18.2312 6.66634 19.9993 6.66634Z" fill="#181A18"/>
</svg>️</div>
                    <h2>Morbi pulvinar</h2>
                    <p>Eu vulputate mi cras quam lectus. Ut ut dignissim amet dignissim gravida sit ullamcorper lectus.</p>
                </div>
                <div class="feature">
                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
  <path d="M31.666 5H11.666C10.3399 5 9.06816 5.52678 8.13048 6.46447C7.1928 7.40215 6.66602 8.67392 6.66602 10V30C6.66602 31.3261 7.1928 32.5979 8.13048 33.5355C9.06816 34.4732 10.3399 35 11.666 35H31.666C32.108 35 32.532 34.8244 32.8445 34.5118C33.1571 34.1993 33.3327 33.7754 33.3327 33.3333V6.66667C33.3327 6.22464 33.1571 5.80072 32.8445 5.48816C32.532 5.17559 32.108 5 31.666 5ZM11.666 31.6667C11.224 31.6667 10.8001 31.4911 10.4875 31.1785C10.1749 30.866 9.99935 30.442 9.99935 30C9.99935 29.558 10.1749 29.134 10.4875 28.8215C10.8001 28.5089 11.224 28.3333 11.666 28.3333H29.9993V31.6667H11.666Z" fill="black"/>
</svg></div>
                    <h2>Turpis elit</h2>
                    <p>Arcu venenatis id dignissim massa ipsum. Viverra mi habitant urna at elit dignissim cursus ut facilisi.</p>
                </div>
                <div class="feature">
                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
  <path d="M31.666 34.583L27.816 19.583C29.2394 17.812 30.0103 15.6052 29.9993 13.333C29.9993 10.6808 28.9458 8.1373 27.0704 6.26194C25.195 4.38658 22.6515 3.33301 19.9993 3.33301C17.3472 3.33301 14.8036 4.38658 12.9283 6.26194C11.0529 8.1373 9.99933 10.6808 9.99933 13.333C9.99476 15.6227 10.784 17.8432 12.2327 19.6163L8.33266 34.583C8.24971 34.9029 8.26372 35.2402 8.37292 35.5521C8.48213 35.864 8.68159 36.1364 8.94596 36.3347C9.21034 36.533 9.52769 36.6482 9.8577 36.6657C10.1877 36.6832 10.5155 36.6022 10.7993 36.433L19.6827 31.2163L29.1493 36.4497C29.4051 36.604 29.7008 36.6794 29.9993 36.6663C30.2581 36.6746 30.5153 36.6224 30.7504 36.514C30.9855 36.4056 31.1922 36.2439 31.3539 36.0417C31.5157 35.8395 31.6281 35.6024 31.6823 35.3492C31.7364 35.096 31.7309 34.8337 31.666 34.583ZM19.9993 6.66634C21.3179 6.66634 22.6068 7.05733 23.7031 7.78988C24.7995 8.52242 25.6539 9.56361 26.1585 10.7818C26.6631 12 26.7951 13.3404 26.5379 14.6336C26.2807 15.9268 25.6457 17.1147 24.7134 18.0471C23.781 18.9794 22.5931 19.6143 21.2999 19.8716C20.0067 20.1288 18.6663 19.9968 17.4481 19.4922C16.2299 18.9876 15.1887 18.1331 14.4562 17.0368C13.7237 15.9405 13.3327 14.6515 13.3327 13.333C13.3327 11.5649 14.035 9.8692 15.2853 8.61896C16.5355 7.36872 18.2312 6.66634 19.9993 6.66634Z" fill="#181A18"/>
</svg>️</div>
                    <h2>Faucibus egestas</h2>
                    <p>Vehicula arcu, felis, et urna, nunc, ut eget pellentesque scelerisque. Accumsan et velit nibh tempor.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="pricing-container">
        <div class="header">
            <h1>Pricing</h1>
            <p>Compare our pricing model to high street agents</p>
        </div>
        <div class="comparison">
            <div class="agent-card">
                <div class="card-header">
                    <h2>High Street Agents</h2>
                    <div class="price">12%</div>
                    <p>management fee</p>
                </div>
                <div class="features">
                    <div class="feature">6 to 12 months</div>
                    <div class="feature">No maintenance</div>
                    <div class="feature">No weekly cleaning</div>
                    <div class="feature">No interior design</div>
                    <div class="feature">5% void</div>
                    <div class="feature">£24,900</div>
                </div>
                <button class="get-started">Get started</button>
            </div>
            <div class="vs">Vs</div>
            <div class="agent-card">
                <div class="card-header">
                    <h2>Flex Living (guaranteed Rental)</h2>
                    <div class="price">Fixed price</div>
                    <p>monthly</p>
                </div>
                <div class="features">
                    <div class="feature">3 to 5 years</div>
                    <div class="feature">Free maintenance</div>
                    <div class="feature">Weekly cleaning</div>
                    <div class="feature">Interior design</div>
                    <div class="feature">No void</div>
                    <div class="feature">£30,000</div>
                </div>
                <button class="get-started">Get started</button>
            </div>
        </div>
    </div>
    
@endsection