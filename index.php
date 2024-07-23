<?php
include 'koneksi.php';
$no = 1;
$ambilData = mysqli_query($con, "select * from tbl_menu");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dapur Kenay - Rasa Bintang Lima Harga Kaki Lima </title>
    <link rel="stylesheet" href="./assets/css/index/style.css">
    <link rel="shortcut icon" href="./assets/images/icon2.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <!-- nav section -->

    <nav class="navbar sticky-top navbar-expand-md bg-black py-3">
        <div class="container d-flex justify-content-between">
            <a class="navbar-brand">
                <svg width="150" height="50" viewBox="0 0 616 210" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M345.36 110.04L311.88 141.12L341.4 165.96L324.6 191.16L301.32 169.2L301.08 184.44L269.64 188.04L267.72 91.56L302.88 87.36L302.52 109.08L321.84 82.32L345.36 110.04ZM408.689 177.12C403.809 180.64 398.809 183.2 393.689 184.8C388.569 186.32 382.689 187.08 376.049 187.08C370.609 187.08 365.609 186.16 361.049 184.32C356.569 182.4 352.689 179.84 349.409 176.64C346.129 173.44 343.569 169.72 341.729 165.48C339.889 161.16 338.969 156.6 338.969 151.8C338.969 145.8 339.929 140.44 341.849 135.72C343.769 131 346.369 127 349.649 123.72C352.929 120.44 356.729 117.96 361.049 116.28C365.449 114.52 370.129 113.64 375.089 113.64C383.089 113.64 390.009 115.68 395.849 119.76C401.769 123.84 406.169 129.28 409.049 136.08L373.169 163.08C374.049 163.56 375.209 163.88 376.649 164.04C378.089 164.2 379.409 164.28 380.609 164.28C384.289 164.28 387.369 163.64 389.849 162.36C392.409 161 394.729 159.4 396.809 157.56L408.689 177.12ZM383.009 137.76C381.889 136.4 380.649 135.48 379.289 135C378.009 134.52 376.529 134.28 374.849 134.28C373.249 134.28 371.769 134.64 370.409 135.36C369.129 136 368.009 136.92 367.049 138.12C366.089 139.24 365.329 140.52 364.769 141.96C364.289 143.4 364.049 144.88 364.049 146.4C364.049 147.84 364.129 148.88 364.289 149.52C364.529 150.08 364.809 150.68 365.129 151.32L383.009 137.76ZM437.281 124.32H437.761C440.401 120.72 443.081 118.28 445.801 117C448.601 115.72 451.641 115.08 454.921 115.08C458.281 115.08 461.241 115.68 463.801 116.88C466.361 118.08 468.521 119.76 470.281 121.92C472.041 124.08 473.361 126.6 474.241 129.48C475.201 132.36 475.681 135.48 475.681 138.84V185.28L449.761 187.44L450.121 143.76C450.201 142.32 449.641 141.12 448.441 140.16C447.321 139.2 445.961 138.72 444.361 138.72C442.841 138.72 441.441 139.2 440.161 140.16C438.961 141.04 438.361 142.28 438.361 143.88L438.841 187.2L413.281 185.4L412.321 117.12L437.281 115.08V124.32ZM521.739 177.84H521.499C519.339 180.88 516.579 183 513.219 184.2C509.939 185.4 506.379 186 502.539 186C499.339 186 496.299 185.44 493.419 184.32C490.539 183.12 488.019 181.44 485.859 179.28C483.699 177.12 481.979 174.52 480.699 171.48C479.419 168.44 478.779 165.04 478.779 161.28C478.779 158 479.419 155 480.699 152.28C481.979 149.48 483.699 147.08 485.859 145.08C488.099 143 490.699 141.4 493.659 140.28C496.699 139.08 499.979 138.48 503.499 138.48C507.179 138.48 510.259 139.04 512.739 140.16C515.299 141.2 517.459 142.4 519.219 143.76V140.16C519.219 136.48 518.019 134.04 515.619 132.84C513.219 131.64 510.099 131.04 506.259 131.04C502.739 131.04 499.459 131.4 496.419 132.12C493.379 132.84 490.299 133.68 487.179 134.64L491.859 115.56C495.699 114.44 499.699 113.68 503.859 113.28C508.019 112.8 512.259 112.56 516.579 112.56C520.499 112.56 524.339 113.04 528.099 114C531.859 114.88 535.139 116.36 537.939 118.44C540.819 120.52 543.099 123.2 544.779 126.48C546.459 129.76 547.259 133.8 547.179 138.6L545.859 183.96L521.739 186V177.84ZM506.499 155.64C503.779 156.04 501.539 157 499.779 158.52C498.019 159.96 497.259 161.6 497.499 163.44C497.819 165.28 498.939 166.68 500.859 167.64C502.859 168.52 505.419 168.72 508.539 168.24C511.659 167.76 513.979 166.76 515.499 165.24C517.019 163.72 517.619 162.08 517.299 160.32C517.059 158.8 516.019 157.52 514.179 156.48C512.419 155.36 509.859 155.08 506.499 155.64ZM584.804 141.84L590.684 115.44L615.404 117.6L589.724 208.08L562.604 205.92L572.924 177.72L550.364 118.68L576.524 115.44L584.564 141.84H584.804Z"
                        fill="#FF9800" />
                    <path
                        d="M268.032 6.92802C279.616 4.68803 288.16 3.24803 293.664 2.60803C299.232 1.90403 302.016 1.55202 302.016 1.55202C307.392 0.720028 312.16 0.944029 316.32 2.22403C320.48 3.44003 324 5.42403 326.88 8.17603C329.76 10.928 331.968 14.288 333.504 18.256C335.04 22.224 335.904 26.48 336.096 31.024C336.288 35.568 335.776 40.272 334.56 45.136C333.408 49.936 331.488 54.608 328.8 59.152C326.176 63.632 322.784 67.824 318.624 71.728C314.528 75.568 309.664 78.8 304.032 81.424C304.032 81.424 303.456 81.616 302.304 82C301.216 82.32 299.328 82.608 296.64 82.864C294.016 83.184 290.496 83.312 286.08 83.248C281.664 83.184 276.16 82.736 269.568 81.904L268.032 6.92802ZM292.8 60.112C296.448 59.28 299.392 58.032 301.632 56.368C303.936 54.64 305.664 52.88 306.816 51.088C307.968 49.232 308.768 47.408 309.216 45.616C309.728 43.824 309.984 42.416 309.984 41.392C309.984 40.304 309.984 39.728 309.984 39.664C309.984 39.536 309.888 38.928 309.696 37.84C309.504 36.688 309.088 35.344 308.448 33.808C307.808 32.272 306.912 31.024 305.76 30.064C304.608 29.04 303.04 28.624 301.056 28.816C299.072 29.008 296.64 30.256 293.76 32.56L292.8 60.112ZM366.598 75.472H366.406C364.678 77.904 362.47 79.6 359.782 80.56C357.158 81.52 354.31 82 351.238 82C348.678 82 346.246 81.552 343.942 80.656C341.638 79.696 339.622 78.352 337.894 76.624C336.166 74.896 334.79 72.816 333.766 70.384C332.742 67.952 332.23 65.232 332.23 62.224C332.23 59.6 332.742 57.2 333.766 55.024C334.79 52.784 336.166 50.864 337.894 49.264C339.686 47.6 341.766 46.32 344.134 45.424C346.566 44.464 349.19 43.984 352.006 43.984C354.95 43.984 357.414 44.432 359.398 45.328C361.446 46.16 363.174 47.12 364.582 48.208V45.328C364.582 42.384 363.622 40.432 361.702 39.472C359.782 38.512 357.286 38.032 354.214 38.032C351.398 38.032 348.774 38.32 346.342 38.896C343.91 39.472 341.446 40.144 338.95 40.912L342.694 25.648C345.766 24.752 348.966 24.144 352.294 23.824C355.622 23.44 359.014 23.248 362.47 23.248C365.606 23.248 368.678 23.632 371.686 24.4C374.694 25.104 377.318 26.288 379.558 27.952C381.862 29.616 383.686 31.76 385.03 34.384C386.374 37.008 387.014 40.24 386.95 44.08L385.894 80.368L366.598 82V75.472ZM354.406 57.712C352.23 58.032 350.438 58.8 349.03 60.016C347.622 61.168 347.014 62.48 347.206 63.952C347.462 65.424 348.358 66.544 349.894 67.312C351.494 68.016 353.542 68.176 356.038 67.792C358.534 67.408 360.39 66.608 361.606 65.392C362.822 64.176 363.302 62.864 363.046 61.456C362.854 60.24 362.022 59.216 360.55 58.384C359.142 57.488 357.094 57.264 354.406 57.712ZM413.882 24.592V31.12C415.93 28.88 418.042 27.248 420.218 26.224C422.458 25.136 425.114 24.592 428.186 24.592C432.026 24.592 435.514 25.456 438.65 27.184C441.85 28.848 444.538 31.056 446.714 33.808C448.954 36.56 450.682 39.696 451.898 43.216C453.114 46.672 453.722 50.192 453.722 53.776C453.722 57.616 453.082 61.328 451.802 64.912C450.522 68.432 448.698 71.568 446.33 74.32C444.026 77.072 441.242 79.28 437.978 80.944C434.714 82.608 431.13 83.44 427.226 83.44C425.242 83.44 423.098 83.152 420.794 82.576C418.554 82 416.538 80.848 414.746 79.12L415.322 98.224L395.066 99.952L394.01 26.32L413.882 24.592ZM426.938 61.744C429.818 60.4 431.738 58.512 432.698 56.08C433.722 53.648 433.722 51.376 432.698 49.264C431.674 47.088 429.914 45.648 427.418 44.944C424.986 44.176 422.33 44.464 419.45 45.808C416.506 47.216 414.522 49.136 413.498 51.568C412.474 53.936 412.506 56.208 413.594 58.384C414.106 59.472 414.81 60.4 415.706 61.168C416.602 61.872 417.626 62.384 418.778 62.704C419.994 63.024 421.274 63.12 422.618 62.992C424.026 62.864 425.466 62.448 426.938 61.744ZM487.002 73.552H486.81C485.53 77.072 483.514 79.568 480.762 81.04C478.074 82.512 474.906 83.248 471.258 83.248C466.458 83.248 462.554 81.84 459.546 79.024C456.602 76.144 455.13 71.984 455.13 66.544V26.224L476.538 24.496L475.962 60.016C475.898 61.552 476.218 62.672 476.922 63.376C477.69 64.016 478.842 64.336 480.378 64.336C481.658 64.336 482.682 64.016 483.45 63.376C484.282 62.736 484.666 61.648 484.602 60.112L484.026 26.224L506.106 24.496L504.666 81.616L487.002 82.384V73.552ZM531.049 24.592V35.248H531.241C532.905 28.144 537.705 24.592 545.641 24.592C547.369 24.592 549.001 24.688 550.537 24.88L545.545 45.328C545.097 45.264 544.617 45.232 544.105 45.232C543.657 45.232 543.017 45.232 542.185 45.232C539.497 45.232 537.161 46.128 535.177 47.92C533.257 49.648 532.297 52.4 532.297 56.176V80.848L512.137 82.576L511.561 26.32L531.049 24.592Z"
                        fill="#2C7865" />
                    <path
                        d="M209.846 162.316C204.844 166.52 206.295 168.737 208.777 173.429C210.168 176.059 212.858 180.319 214.954 183.555C216.597 186.092 216.981 188 222.564 188H242.727C246.139 188 248 186.024 248 183.555V131.939C248 113.911 240.245 103.291 222.564 99.0931C222.564 99.0931 244.83 16.6073 246.26 11.668C247.69 6.72877 245.518 5.00003 239.625 5.00003C233.731 5.00003 208.359 4.50612 208.359 4.50612C200.008 4.50612 199.304 6.47046 197.458 11.6233L197.442 11.668L179.358 66C179.358 66 178.526 67.4818 176.966 67.4818C175.406 67.4818 175.083 66 175.083 66V11.668C175.083 7.22273 173.307 5.00001 165.862 5.00001L129.685 5C123.482 5 121 7.22271 121 11.668L121 183.555C121 186.518 123.792 188 125.963 188H198.369C203.643 188 202.144 184.88 201.423 183.555L201.241 183.222C197.327 176.032 195.954 173.51 191.545 173.923C178.981 175.701 175.158 167.749 174.016 165.279L147.188 113.911C147.374 110.75 150.065 110.618 151.387 110.947C159.397 125.518 174.979 153.721 175.725 154.907C176.658 156.389 177.753 157.187 179.758 156.389C181.619 155.648 180.704 153.343 180.082 152.437L155.819 108.725C155.431 107.984 155.073 106.156 156.753 104.773C158.432 103.39 160.096 104.691 160.719 105.514L184.514 148.733C185.962 151.449 187.712 151.787 189.18 150.955C190.925 149.968 189.725 147.91 189.18 147.004L164.685 103.291C164.374 102.386 164.125 100.279 165.618 99.0931C167.111 97.9077 168.728 99.0931 169.35 99.834L194.027 143.794C195.267 146.263 197.266 146.234 198.99 145.522C200.785 144.781 200.851 143.053 199.445 140.83L174.016 96.8704C174.016 92.7214 176.816 93.166 178.215 93.9069C187.858 107.49 204.671 137.619 208.777 144.534C213.909 153.178 215.43 157.624 209.846 162.316Z"
                        fill="#FF9800" />
                    <rect x="76" y="5" width="99" height="14" rx="7" fill="#FF9800" />
                    <rect x="40" y="28" width="133" height="16" rx="8" fill="#FF9800" />
                    <rect x="76" y="146" width="66" height="16" rx="8" fill="#FF9800" />
                    <rect x="40" y="146" width="26" height="16" rx="8" fill="#FF9800" />
                    <rect x="90" y="118" width="50" height="16" rx="8" fill="#FF9800" />
                    <rect y="118" width="80" height="16" rx="8" fill="#FF9800" />
                    <rect x="33" y="172" width="109" height="16" rx="8" fill="#FF9800" />
                    <rect y="54" width="173" height="15" rx="7.5" fill="#FF9800" />
                </svg>
            </a>
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false"
                aria-label="Toggle navigation">
                <svg width="30" height="30" xmlns='http://www.w3.org/2000/svg' fill="none" viewBox='0 0 30 30'>
                    <path stroke='#FF9800' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2'
                        d='M4 7h22M4 15h22M4 23h22' />
                </svg>
            </button>
            <div class="collapse navbar-collapse d-lg-flex justify-content-end flex-grow-0" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link btn btn-md px-4" aria-current="page" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-md px-4" aria-current="page" href="#menu">Menu</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link btn btn-md px-4" aria-current="page" href="#order">Order</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link btn-login px-5 btn-sm rounded-pill" aria-current="page"
                            href="view/login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="bg-grunge"></div>
    <!-- end nav section -->

    <!-- about section -->
    <section id="about-1" class="position-relative">
        <div class="container-fluid container-lg">
            <div class="row justify-content-center">
                <div class="row product-strength-1 ">
                    <div class="col-lg-6 d-flex justify-content-center" data-aos="fade-right">
                        <img src="./assets/images/steak.png" alt="steak" class="steak-png" />
                    </div>
                    <div class="mt-4 mt-lg-0 col-lg-6 gap-lg-4 d-flex justify-content-center flex-column align-items-lg-baseline align-items-center"
                        data-aos="fade-left">
                        <h1 class="title">Harga Kaki Lima <br> <span>Rasa Bintang Lima</span> </h1>
                        <p class="desc">
                            Dapur Kenay menyajikan <span>hidangan lezat</span> dengan harga yang terjangkau. Kami
                            menghadirkan berbagai menu, mulai dari masakan tradisional hingga kreasi modern, semuanya
                            dengan <span>kualitas terbaik berstandar hotel</span> untuk memanjakan lidah Anda.

                        </p>
                        <div class="d-flex gap-5 my-3 my-lg-0">
                            <div class="d-flex justify-content-center align-content-center flex-column">
                                <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" fill="#ff9800"
                                    viewBox="0 0 256 256">
                                    <path
                                        d="M72,88V40a8,8,0,0,1,16,0V88a8,8,0,0,1-16,0ZM216,40V224a8,8,0,0,1-16,0V176H152a8,8,0,0,1-8-8,268.75,268.75,0,0,1,7.22-56.88c9.78-40.49,28.32-67.63,53.63-78.47A8,8,0,0,1,216,40ZM200,53.9c-32.17,24.57-38.47,84.42-39.7,106.1H200ZM119.89,38.69a8,8,0,1,0-15.78,2.63L112,88.63a32,32,0,0,1-64,0l7.88-47.31a8,8,0,1,0-15.78-2.63l-8,48A8.17,8.17,0,0,0,32,88a48.07,48.07,0,0,0,40,47.32V224a8,8,0,0,0,16,0V135.32A48.07,48.07,0,0,0,128,88a8.17,8.17,0,0,0-.11-1.31Z">
                                    </path>
                                </svg>
                                <p class="text-center">Enak</p>
                            </div>
                            <div class="d-flex justify-content-center align-content-center flex-column">
                                <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" fill="#ff9800"
                                    viewBox="0 0 256 256">
                                    <path
                                        d="M88,48V16a8,8,0,0,1,16,0V48a8,8,0,0,1-16,0Zm40,8a8,8,0,0,0,8-8V16a8,8,0,0,0-16,0V48A8,8,0,0,0,128,56Zm32,0a8,8,0,0,0,8-8V16a8,8,0,0,0-16,0V48A8,8,0,0,0,160,56Zm92.8,46.4L224,124v60a32,32,0,0,1-32,32H64a32,32,0,0,1-32-32V124L3.2,102.4a8,8,0,0,1,9.6-12.8L32,104V80a8,8,0,0,1,8-8H216a8,8,0,0,1,8,8v24l19.2-14.4a8,8,0,0,1,9.6,12.8ZM208,88H48v96a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16Z">
                                    </path>
                                </svg>
                                <p class="text-center">Fresh</p>
                            </div>
                            <div class="d-flex justify-content-center align-content-center flex-column">
                                <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" fill="#ff9800"
                                    viewBox="0 0 256 256">
                                    <path
                                        d="M232,136.66A104.12,104.12,0,1,1,119.34,24,8,8,0,0,1,120.66,40,88.12,88.12,0,1,0,216,135.34,8,8,0,0,1,232,136.66ZM120,72v56a8,8,0,0,0,8,8h56a8,8,0,0,0,0-16H136V72a8,8,0,0,0-16,0Zm40-24a12,12,0,1,0-12-12A12,12,0,0,0,160,48Zm36,24a12,12,0,1,0-12-12A12,12,0,0,0,196,72Zm24,36a12,12,0,1,0-12-12A12,12,0,0,0,220,108Z">
                                    </path>
                                </svg>
                                <p class="text-center">Cepat</p>
                            </div>

                        </div>

                        <button class="btn btn-md px-5 rounded-pill">Ketahui Lebih Lanjut</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about-2" class="position-relative h-100">
        <div class="container-fluid container-lg position-relative">
            <div class="row justify-content-center">
                <div class="row product-strength-1">
                    <div class="col-lg-6 d-flex justify-content-center order-first order-lg-last" data-aos="fade-left">
                        <img src="./assets/images/rempah.png" alt="steak" class="rempah" />
                    </div>
                    <div class="mt-4 mt-lg-0 col-lg-6 gap-lg-4 d-flex justify-content-center flex-column kiri order-last order-lg-first align-items-lg-baseline"
                        data-aos="fade-right">
                        <h1 class="title">Rempah Berkualitas Dengan <br> <span> Takaran Yang Pas </span></h1>
                        <p class="desc">
                            Kami menggunakan bahan-bahan <span>berkualitas tinggi</span> untuk setiap hidangan,
                            memastikan rasa
                            yang
                            <span>lezat</span> dan <span>konsisten</span> guna <span>pengalaman kuliner yang
                                memuaskan.</span>
                        </p>
                        <button class="btn btn-md px-5 rounded-pill">Ketahui Lebih Lanjut</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about-3" class="position-relative">
        <div class="container-fluid container-lg">
            <div class="row justify-content-center">
                <div class="row product-strength-1 ">
                    <div class="col-lg-6 d-flex justify-content-center" data-aos="fade-right">
                        <img src="./assets/images/delivery.png" alt="steak" class="steak-png" />
                    </div>
                    <div class="mt-4 mt-lg-0 col-lg-6 gap-lg-4 d-flex justify-content-center flex-column align-items-lg-baseline"
                        data-aos="fade-left">
                        <h1 class="title">Pesan Anter<br> <span>Untuk Orang Yang Mager</span> </h1>
                        <p class="desc">
                            Selain menyediakan hidangan kami juga <span>menyediakan jasa antar makanan</span>, ini dapat
                            mempermudah
                            para konsumen yang ingin <span>memesan dengan jarak jauh</span>, serta dengan <span>ongkos
                                kirim yang sangat murah.</span>
                        </p>
                        <div
                            class="d-flex gap-3 my-4 my-lg-0 flex-wrap justify-content-center justify-content-lg-start">
                            <span class="px-4 py-2 bg-gradient rounded-pill ">Area Pamengkang =
                                Gratis</span>
                            <span class="px-4 py-2 bg-gradient rounded-pill ">Area Cirebon Kota =
                                Rp. 5.000</span>
                            <span class="px-4 py-2 bg-gradient rounded-pill ">Area Cirebon Kabupaten =
                                Rp. 10.000</span>
                        </div>
                        <!-- <button class="btn btn-md px-5 rounded-pill">Ketahui Lebih Lanjut</button> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="menu" class="position-relative">
        <div class="container-fluid container-lg">
            <div class="row justify-content-center">
                <div class="col-12 comp" data-aos="fade-up">
                    <h1 class="title">Macam Macam Menu <span>Yang Menarik</span></h3>
                        <p class="desc">
                            Kami memiliki <span>pilihan yang sempurna</span> untuk <span>setiap keinginan.</span>
                            Jelajahi menu kami dan pesan
                            <span>hidangan favorit Anda</span> sekarang untuk pengalaman
                            <span>makan yang memuaskan!</span>
                            <br> <br> *bintang berarti best seller
                        </p>
                </div>
                <div class="d-flex gap-4 my-4 my-lg-4 flex-wrap justify-content-center ">
                    <?php while ($data = mysqli_fetch_array($ambilData)) : ?>
                    <div class="card rounded-4 justify-content-center overflow-hidden border-0">
                        <img class="card-img" src="./view/foto/<?php echo $data['foto'] ?>" alt="">
                        <div class="card-body text-black">
                            <h6 class="card-title mb-1"><?php echo "$data[nama_menu]" ?></h6>

                            <div
                                class="d-flex justify-content-between flex-wrap align-content-center align-items-center">
                                <h6 class="card-subtitle mt-0 text-muted"><?php echo "Rp. $data[harga_makanan]" ?></h6>
                                <?php if ($data['best_seller'] === "Y") : ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#ff9800"
                                    viewBox="0 0 256 256">
                                    <path
                                        d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z">
                                    </path>
                                </svg>
                                <?php
                                    endif
                                    ?>
                            </div>
                        </div>
                    </div>
                    <?php endwhile ?>
                </div>
            </div>
        </div>
    </section>
    <section id="order" class="position-relative">
        <div class="container">
            <h1 class="text-center mt-3">Silahkan Pesan</h1>

            <form class="mt-4" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nm_pelanggan"
                        placeholder="Masukkan nama lengkap Anda">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Pilih Menu</label>
                    <select name="makanan" id="" class="form-control">
                        <option disabled value="">~Pilih Menu~</option>

                        <?php
                        $no = 1;
                        $ambilData = mysqli_query($con, "select * from tbl_menu");
                        while ($data = mysqli_fetch_array($ambilData)) {
                        ?>
                        <option value="<?php echo "$data[id_menu]" ?>"><?php echo "$data[nama_menu]" ?></option>

                        <?php } ?>

                    </select>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Jumlah Menu Yang Dipesan</label>
                    <input type="text" class="form-control" id="nama" name="jml_makanan"
                        placeholder="Masukkan Jumlah Menu Yang Dipesan">
                </div>
                <div class="mb-3">
                    <label for="pesan" class="form-label">Alamat</label>
                    <textarea class="form-control" id="pesan" name="alamat" rows="3"></textarea>
                    <p>Info lebih detail mengenai ongkos kirim bisa klik Whatsap</p>
                </div>
                <button type="submit" class="btn btn-submit w-100">Pesan Melalui Whatsapp</button>
            </form>
        </div>
    </section>
    <!-- end order section -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "koneksi.php";
    $date = date("Y-m-d");
    $data = mysqli_query($con, "SELECT * FROM tbl_menu where id_menu='$_POST[makanan]'");
    $datafood = mysqli_fetch_array($data);
    $harga = $datafood['harga_makanan'];
    $nm_food = $datafood['nama_menu'];
    $qty = $_POST['jml_makanan'];
    $total = $harga * $qty;
    $message = "https://api.whatsapp.com/send?phone=628815205371&text=Halo%2C%20Saya%20$_POST[nm_pelanggan]%20berminat%20untuk%20memesan%20$qty%20$nm_food.%20saya%20berada%20di%20$_POST[alamat]%20kira%20kira%20berapa%20ongkirnya%20ya%3F";
    $query = mysqli_query($con, "insert into tbl_pesanan (nm_pelanggan, tanggal_pesanan, alamat, makanan, jml_makanan, total, status) values ('$_POST[nm_pelanggan]', '$date', '$_POST[alamat]', '$_POST[makanan]', '$qty', '$total', 'Diproses' )");
    echo "<script>
            alert('Silahkan Lanjut Untuk Pemesanan Melalui Whatsapp');
            window.location='$message';
        </script>";
};
?>