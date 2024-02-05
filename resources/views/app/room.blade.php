<x-app-layout>
    <!-- Banner -->
    <section class="section-banner">
        <div
            class="banner-image flex flex-wrap w-full justify-center sm:h-[400px] h-[300px] m-0 bg-[url('assets/img/about/about-banner.png')] bg-cover bg-bottom">
            <div class="w-full sm:h-[400px] h-[300px] absolute bg-[#000000bf]"></div>
            <div class="flex items-center justify-center text-center z-2">
                <div class="mt-[65px]">
                    <h2
                        class="mb-[12px] 2xl:text-[40px] xl:text-[38px] lg:text-[36px] md:text-[34px] sm:text-[30px] text-[28px] font-bold">
                        Chambre</h2>
                    <h5 class="text-[16px]">
                        <span>
                            <a href="/" class="text-[#fff] hover:text-[#fff]">Accueil</a>
                        </span>
                        <span class="font-bold"> / </span>
                        <span>
                            <a href="javascript:void(0)" class="text-[#fff] hover:text-[#fff]">Chambre</a>
                        </span>
                    </h5>
                </div>
            </div>
        </div>
    </section>

    <!-- Room -->
    <section class="section-room relative xl:py-[100px] py-[70px]" data-aos="fade-up" data-aos-duration="2000"
        id="rooms">
        <div
            class="2xl:before:w-[150px] xl:before:w-[130px] before:w-[80px] 2xl:before:h-[150px] dark-opicity-5 xl:before:h-[130px] before:h-[80px] bg-size-full before:absolute 2xl:before:top-[100px] before:top-0 2xl:before:right-[180px] xl:before:right-[50px] before:right-0 before:z-[-1] before:bg-[url('assets/img/theme/1.png')]">
        </div>
        <div
            class="flex flex-wrap justify-between items-center mx-auto 2xl:max-w-[1320px] xl:max-w-[1140px] lg:max-w-[960px] md:max-w-[720px] sm:max-w-[540px] px-[12px]">
            <div class="text-center w-full mb-[30px]">
                <h2
                    class="text-[#000] font-medium leading-[1.2] 2xl:text-[40px] xl:text-[35px] xl:pb-0 lg:text-[30px] md:text-[28px] sm:text-[26px] text-[22px]">
                    Choisissez Votre Luxueuse <span class="text-[#ed5b31]">Chambre</span></h2>
            </div>
            <nav>
                <div class="nav nav-tabs rooms lh-room border-0" id="nav-tab" role="tablist">
                    <button
                        class="mb-0 text-[20px] leading-[28px] text-[#000] focus:text-[#000] w-1/4 border-0 text-center nav-link active"
                        id="nav-Deluxe-tab" data-bs-toggle="tab" data-bs-target="#nav-Deluxe" type="button"
                        role="tab" aria-controls="nav-Deluxe" aria-selected="true">
                        <img src="assets/img/room/1.png" alt="1" class="w-full mb-[15px] rounded-[15px]">
                        Deluxe Room
                    </button>
                    <button
                        class="mb-0 text-[20px] leading-[28px] text-[#000] focus:text-[#000] w-1/4 border-0 text-center nav-link"
                        id="nav-Single-tab" data-bs-toggle="tab" data-bs-target="#nav-Single" type="button"
                        role="tab" aria-controls="nav-Single" aria-selected="false">
                        <img src="assets/img/room/2.png" alt="2" class="w-full mb-[15px] rounded-[15px]">
                        Single Room
                    </button>
                    <button
                        class="mb-0 text-[20px] leading-[28px] text-[#000] focus:text-[#000] w-1/4 border-0 text-center nav-link"
                        id="nav-Super-tab" data-bs-toggle="tab" data-bs-target="#nav-Super" type="button"
                        role="tab" aria-controls="nav-Super" aria-selected="false">
                        <img src="assets/img/room/3.png" alt="3" class="w-full mb-[15px] rounded-[15px]">
                        Super Room
                    </button>
                    <button
                        class="mb-0 text-[20px] leading-[28px] text-[#000] focus:text-[#000] w-1/4 border-0 text-center nav-link"
                        id="nav-Presidential-tab" data-bs-toggle="tab" data-bs-target="#nav-Presidential" type="button"
                        role="tab" aria-controls="nav-Presidential" aria-selected="false">
                        <img src="assets/img/room/4.png" alt="4" class="w-full mb-[15px] rounded-[15px]">
                        Presidential Room
                    </button>
                </div>
            </nav>
            <div
                class="tab-content border border-solid border-[#e3e1e1] rounded-[15px] bg-[#fff] relative p-0 mt-[25px] overflow-hidden"id="nav-tabContent">
                <div class="tab-pane fade active show" id="nav-Deluxe" role="tabpanel" aria-labelledby="nav-Deluxe-tab">
                    <div
                        class="flex flex-wrap justify-between mx-auto 2xl:max-w-[1320px] xl:max-w-[1140px] lg:max-w-[960px] md:max-w-[720px] sm:max-w-[540px]">
                        <div class="xl:w-1/2 w-full px-[12px]">
                            <div class="lh-room-contain relative px-[12px] py-[24px]">
                                <div class="lh-contain-heading pb-[15px] flex justify-between">
                                    <h4
                                        class="xl:text-[22px] text-[18px] leading-[1.2] font-bold text-[#000] text-left">
                                        Deluxe Room</h4>
                                    <div class="lh-room-price">
                                        <h4 class="xl:text-[22px] text-[18px] text-[#ed5b31] font-bold leading-[22px]">
                                            $30 /<span class="ml-[5px] text-[14px] font-normal text-[#777]">Per
                                                night</span></h4>
                                    </div>
                                </div>
                                <div class="lh-room-size d-flex flex-wrap">
                                    <p class="pb-[15px] text-[14px] text-[#777] leading-[1.2]">1100 sq.ft <span
                                            class="px-[15px]">|</span></p>
                                    <p class="pb-[15px] text-[14px] text-[#777] leading-[1.2]">1 king Bed <span
                                            class="px-[15px]">|</span></p>
                                    <p class="pb-[15px] text-[14px] text-[#777] leading-[1.2]">Up to 4 Guest</p>
                                </div>
                                <p>This is the dolor sit amet consectetur adipisicing elit. Culpa necessitatibus
                                    consequatur nostrum iure? Similique voluptatibus totam nobis exercitationem
                                    perferendis id, cupiditate at et praesentium quas? Quae amet, magni suscipit
                                    sequi.</p>
                                <div
                                    class="lh-main-features border-t border-solid border-[#e3e1e1] pt-[30px] mt-[30px]">
                                    <div class="lh-contain-heading pb-[15px] flex justify-between">
                                        <h4
                                            class="xl:text-[22px] text-[18px] leading-[1.2] font-bold text-[#000] text-left">
                                            Room Features</h4>
                                    </div>
                                    <div class="lh-room-features flex">
                                        <div class="lh-cols-room">
                                            <ul class="pl-[16px] mb-0">
                                                <li class="text-[15px] text-[#777] leading-[1.2]">42 Inch flat screen TV
                                                </li>
                                                <li class="text-[15px] text-[#777] leading-[1.2]">In-room Safe</li>
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Mini-refrigerator</li>
                                            </ul>
                                        </div>
                                        <div class="lh-cols-room">
                                            <ul class="pl-[16px] mb-0">
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Mini-refrigerator</li>
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Breakfast</li>
                                                <li class="text-[15px] text-[#777] leading-[1.2]">complimeatary bottled
                                                    water</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:w-1/2 w-full">
                            <div class="room-img h-full w-full relative">
                                <img src="assets/img/room/room-1.png" alt="room-img"
                                    class="room-image h-full w-full">
                                <a href="room-details.html"
                                    class="link w-[200px] h-[200px] absolute bottom-[-200px] right-[-200px] bg-[#000000cc] rounded-[50%]">
                                    <i
                                        class="ri-arrow-right-line absolute bottom-[100px] right-[100px] text-[#fff] text-[25px]"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-Single" role="tabpanel" aria-labelledby="nav-Single-tab">
                    <div
                        class="flex flex-wrap justify-between mx-auto 2xl:max-w-[1320px] xl:max-w-[1140px] lg:max-w-[960px] md:max-w-[720px] sm:max-w-[540px]">
                        <div class="xl:w-1/2 w-full px-[12px]">
                            <div class="lh-room-contain relative px-[12px] py-[24px]">
                                <div class="lh-contain-heading pb-[15px] flex justify-between">
                                    <h4
                                        class="xl:text-[22px] text-[18px] leading-[1.2] font-bold text-[#000] text-left">
                                        Single Room</h4>
                                    <div class="lh-room-price">
                                        <h4 class="xl:text-[22px] text-[18px] text-[#ed5b31] font-bold leading-[22px]">
                                            $40 /<span class="ml-[5px] text-[14px] font-normal text-[#777]">Per
                                                night</span></h4>
                                    </div>
                                </div>
                                <div class="lh-room-size d-flex flex-wrap">
                                    <p class="pb-[15px] text-[14px] text-[#777] leading-[1.2]">1200 sq.ft <span
                                            class="px-[15px]">|</span></p>
                                    <p class="pb-[15px] text-[14px] text-[#777] leading-[1.2]">1 king Bed <span
                                            class="px-[15px]">|</span></p>
                                    <p class="pb-[15px] text-[14px] text-[#777] leading-[1.2]">Up to 6 Guest</p>
                                </div>
                                <p>This is the dolor sit amet consectetur adipisicing elit. Culpa necessitatibus
                                    consequatur nostrum iure? Similique voluptatibus totam nobis exercitationem
                                    perferendis id, cupiditate at et praesentium quas? Quae amet, magni suscipit
                                    sequi.</p>
                                <div
                                    class="lh-main-features border-t border-solid border-[#e3e1e1] pt-[30px] mt-[30px]">
                                    <div class="lh-contain-heading pb-[15px] flex justify-between">
                                        <h4
                                            class="xl:text-[22px] text-[18px] leading-[1.2] font-bold text-[#000] text-left">
                                            Room Features</h4>
                                    </div>
                                    <div class="lh-room-features flex">
                                        <div class="lh-cols-room">
                                            <ul class="pl-[16px] mb-0">
                                                <li class="text-[15px] text-[#777] leading-[1.2]">42 Inch flat screen
                                                    TV</li>
                                                <li class="text-[15px] text-[#777] leading-[1.2]">In-room Safe</li>
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Mini-refrigerator
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="lh-cols-room">
                                            <ul class="pl-[16px] mb-0">
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Mini-refrigerator
                                                </li>
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Breakfast</li>
                                                <li class="text-[15px] text-[#777] leading-[1.2]">complimeatary bottled
                                                    water</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:w-1/2 w-full">
                            <div class="room-img h-full w-full relative">
                                <img src="assets/img/room/room-2.png" alt="room-img"
                                    class="room-image h-full w-full">
                                <a href="room-details.html"
                                    class="link w-[200px] h-[200px] absolute bottom-[-200px] right-[-200px] bg-[#000000cc] rounded-[50%]">
                                    <i
                                        class="ri-arrow-right-line absolute bottom-[100px] right-[100px] text-[#fff] text-[25px]"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-Super" role="tabpanel" aria-labelledby="nav-Super-tab">
                    <div
                        class="flex flex-wrap justify-between mx-auto 2xl:max-w-[1320px] xl:max-w-[1140px] lg:max-w-[960px] md:max-w-[720px] sm:max-w-[540px]">
                        <div class="xl:w-1/2 w-full px-[12px]">
                            <div class="lh-room-contain relative px-[12px] py-[24px]">
                                <div class="lh-contain-heading pb-[15px] flex justify-between">
                                    <h4
                                        class="xl:text-[22px] text-[18px] leading-[1.2] font-bold text-[#000] text-left">
                                        Super Room</h4>
                                    <div class="lh-room-price">
                                        <h4 class="xl:text-[22px] text-[18px] text-[#ed5b31] font-bold leading-[22px]">
                                            $50 /
                                            <span class="ml-[5px] text-[14px] font-normal text-[#777]">Per night</span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="lh-room-size d-flex flex-wrap">
                                    <p class="pb-[15px] text-[14px] text-[#777] leading-[1.2]">1350 sq.ft <span
                                            class="px-[15px]">|</span></p>
                                    <p class="pb-[15px] text-[14px] text-[#777] leading-[1.2]">2 king Bed <span
                                            class="px-[15px]">|</span></p>
                                    <p class="pb-[15px] text-[14px] text-[#777] leading-[1.2]">Up to 8 Guest</p>
                                </div>
                                <p>This is the dolor sit amet consectetur adipisicing elit. Culpa necessitatibus
                                    consequatur nostrum iure? Similique voluptatibus totam nobis exercitationem
                                    perferendis id, cupiditate at et praesentium quas? Quae amet, magni suscipit
                                    sequi.</p>
                                <div
                                    class="lh-main-features border-t border-solid border-[#e3e1e1] pt-[30px] mt-[30px]">
                                    <div class="lh-contain-heading pb-[15px] flex justify-between">
                                        <h4
                                            class="xl:text-[22px] text-[18px] leading-[1.2] font-bold text-[#000] text-left">
                                            Room
                                            Features
                                        </h4>
                                    </div>
                                    <div class="lh-room-features flex">
                                        <div class="lh-cols-room">
                                            <ul class="pl-[16px] mb-0">
                                                <li class="text-[15px] text-[#777] leading-[1.2]">42 Inch flat screen
                                                    TV</li>
                                                <li class="text-[15px] text-[#777] leading-[1.2]">In-room Safe</li>
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Mini-refrigerator
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="lh-cols-room">
                                            <ul class="pl-[16px] mb-0">
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Mini-refrigerator
                                                </li>
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Breakfast</li>
                                                <li class="text-[15px] text-[#777] leading-[1.2]">complimeatary bottled
                                                    water</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:w-1/2 w-full">
                            <div class="room-img h-full w-full relative">
                                <img src="assets/img/room/room-3.png" alt="room-img"
                                    class="room-image h-full w-full">
                                <a href="room-details.html"
                                    class="link w-[200px] h-[200px] absolute bottom-[-200px] right-[-200px] bg-[#000000cc] rounded-[50%]">
                                    <i
                                        class="ri-arrow-right-line absolute bottom-[100px] right-[100px] text-[#fff] text-[25px]"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-Presidential" role="tabpanel"
                    aria-labelledby="nav-Presidential-tab">
                    <div
                        class="flex flex-wrap justify-between mx-auto 2xl:max-w-[1320px] xl:max-w-[1140px] lg:max-w-[960px] md:max-w-[720px] sm:max-w-[540px]">
                        <div class="xl:w-1/2 w-full px-[12px]">
                            <div class="lh-room-contain relative px-[12px] py-[24px]">
                                <div class="lh-contain-heading pb-[15px] flex justify-between">
                                    <h4
                                        class="xl:text-[22px] text-[18px] leading-[1.2] font-bold text-[#000] text-left">
                                        Presidential Room</h4>
                                    <div class="lh-room-price">
                                        <h4 class="xl:text-[22px] text-[18px] text-[#ed5b31] font-bold leading-[22px]">
                                            $100 /
                                            <span class="ml-[5px] text-[14px] font-normal text-[#777]">Per night</span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="lh-room-size d-flex flex-wrap">
                                    <p class="pb-[15px] text-[14px] text-[#777] leading-[1.2]">1500 sq.ft <span
                                            class="px-[15px]">|</span></p>
                                    <p class="pb-[15px] text-[14px] text-[#777] leading-[1.2]">2 king Bed <span
                                            class="px-[15px]">|</span></p>
                                    <p class="pb-[15px] text-[14px] text-[#777] leading-[1.2]">Up to 8 Guest</p>
                                </div>
                                <p>This is the dolor sit amet consectetur adipisicing elit. Culpa necessitatibus
                                    consequatur nostrum iure? Similique voluptatibus totam nobis exercitationem
                                    perferendis id, cupiditate at et praesentium quas? Quae amet, magni suscipit
                                    sequi.</p>
                                <div
                                    class="lh-main-features border-t border-solid border-[#e3e1e1] pt-[30px] mt-[30px]">
                                    <div class="lh-contain-heading pb-[15px] flex justify-between">
                                        <h4
                                            class="xl:text-[22px] text-[18px] leading-[1.2] font-bold text-[#000] text-left">
                                            Room
                                            Features
                                        </h4>
                                    </div>
                                    <div class="lh-room-features flex">
                                        <div class="lh-cols-room">
                                            <ul class="pl-[16px] mb-0">
                                                <li class="text-[15px] text-[#777] leading-[1.2]">42 Inch flat screen
                                                    TV</li>
                                                <li class="text-[15px] text-[#777] leading-[1.2]">In-room Safe</li>
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Mini-refrigerator
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="lh-cols-room">
                                            <ul class="pl-[16px] mb-0">
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Mini-refrigerator
                                                </li>
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Breakfast</li>
                                                <li class="text-[15px] text-[#777] leading-[1.2]">complimeatary bottled
                                                    water</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:w-1/2 w-full">
                            <div class="room-img h-full w-full relative">
                                <img src="assets/img/room/room-4.png" alt="room-img"
                                    class="room-image h-full w-full">
                                <a href="room-details.html"
                                    class="link w-[200px] h-[200px] absolute bottom-[-200px] right-[-200px] bg-[#000000cc] rounded-[50%]">
                                    <i
                                        class="ri-arrow-right-line absolute bottom-[100px] right-[100px] text-[#fff] text-[25px]"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="2xl:after:w-[500px] lg:after:w-[400px] after:w-[300px] dark-opicity-1 2xl:after:h-[500px] xl:after:h-[400px] after:h-[300px] bg-size-full after:absolute 2xl:after:top-[100px] after:top-[75px] after:left-[-180px] after:z-[-1] after:bg-[url('assets/img/theme/2.png')]">
        </div>
    </section>
</x-app-layout>