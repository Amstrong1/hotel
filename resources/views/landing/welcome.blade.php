<x-landing-layout>
    <!-- Hero -->
    <section class="section-hero lg:pb-[50px] pb-[70px]">
        <div
            class="flex flex-wrap flex-col justify-center px-[12px] hero-image md:h-[calc(100vh_-_100px)] sm:h-[80vh] min-[481px]:h-[580px] h-[500px] bg-[url('assets/img/hero/hero-section.png')] w-full bg-cover bg-bottom m-0 bg-blend-overlay bg-[#000000cc]">
            <div class="flex flex-wrap w-full h-full">
                <div class="relative w-full h-full">
                    <div class="particles-bg w-full h-full absolute top-0 left-0 opacity-30" id="particles-js"></div>
                    <div
                        class="max-w-[830px] w-full lg:top-[50%] top-[53%] absolute left-[50%] z-1 text-center flex flex-wrap flex-col justify-center translate-x-[-50%] translate-y-[-50%]">
                        <h4 class="max-w-[250px] m-[auto] font-Roboto relative text-[#fff] text-[16px] font-light"
                            data-aos="fade-up" data-aos-duration="1000">
                            <span
                                class="py-side-border border-[1px] border-solid border-[#ed5b31] w-[50px] absolute top-[9px] left-[-60px] z-[0]"></span>
                            Hotel Cosma
                            <span
                                class="py-side-border border-[1px] border-solid border-[#ed5b31] w-[50px] absolute top-[9px] right-[-60px] z-[0]"></span>
                        </h4>
                        <h1 class="my-[30px] font-Cardo wordspac_15 2xl:text-[48px] xl:text-[42px] lg:text-[38px] md:text-[35px] sm:text-[30px] text-[24px] md:leading-[1.2857em] sm:leading-[42px] leading-[36px] font-bold sm:tracking-[2px] tracking-[1px] uppercase text-[#fff]"
                            data-aos="fade-up" data-aos-duration="1500">Votre havre de bonheur vous attend</h1>
                        <a class="m-[auto] duration-[0.3s] ease-in-out border-[1px] border-solid border-[#ed5b31] px-[15px] py-[5px] leading-[28px] bg-[#ed5b31] text-[#fff] relative z-[2] text-[15px] font-medium tracking-[1px] rounded-[10px] hover:bg-inherit hover:text-[#ed5b31]"
                            href="#rooms">
                            Chambres et Suites
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- search-control -->
    <section class="section-search-control absolute bottom-0 z-[1] w-full">
        <div
            class="flex flex-wrap justify-between items-center mx-auto 2xl:max-w-[1320px] xl:max-w-[1140px] lg:max-w-[960px] md:max-w-[720px] sm:max-w-[540px] px-[12px]">
            <div
                class="search-control-boxing shadow-[0_0_50px_0_rgba(0,0,0,0.1)] p-[12px] bg-[#fff] rounded-[15px] flex justify-between">

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
                    Choisissez votre <span class="text-[#ed5b31]">chambre</span> luxueuse</h2>
            </div>
            <nav>
                <div class="nav nav-tabs rooms lh-room border-0" id="nav-tab" role="tablist">
                    <button
                        class="mb-0 text-[20px] leading-[28px] text-[#000] focus:text-[#000] w-1/4 border-0 text-center nav-link active"
                        id="nav-Deluxe-tab" data-bs-toggle="tab" data-bs-target="#nav-Deluxe" type="button"
                        role="tab" aria-controls="nav-Deluxe" aria-selected="true">
                        <img src="assets/img/room/1.png" alt="1" class="w-full mb-[15px] rounded-[15px]">
                        Chambre de luxe
                    </button>
                    <button
                        class="mb-0 text-[20px] leading-[28px] text-[#000] focus:text-[#000] w-1/4 border-0 text-center nav-link"
                        id="nav-Single-tab" data-bs-toggle="tab" data-bs-target="#nav-Single" type="button"
                        role="tab" aria-controls="nav-Single" aria-selected="false">
                        <img src="assets/img/room/2.png" alt="2" class="w-full mb-[15px] rounded-[15px]">
                        Chambre simple
                    </button>
                    <button
                        class="mb-0 text-[20px] leading-[28px] text-[#000] focus:text-[#000] w-1/4 border-0 text-center nav-link"
                        id="nav-Super-tab" data-bs-toggle="tab" data-bs-target="#nav-Super" type="button"
                        role="tab" aria-controls="nav-Super" aria-selected="false">
                        <img src="assets/img/room/3.png" alt="3" class="w-full mb-[15px] rounded-[15px]">
                        Super Chambre
                    </button>
                    <button
                        class="mb-0 text-[20px] leading-[28px] text-[#000] focus:text-[#000] w-1/4 border-0 text-center nav-link"
                        id="nav-Presidential-tab" data-bs-toggle="tab" data-bs-target="#nav-Presidential" type="button"
                        role="tab" aria-controls="nav-Presidential" aria-selected="false">
                        <img src="assets/img/room/4.png" alt="4" class="w-full mb-[15px] rounded-[15px]">
                        Salle Présidentielle
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
                                        Chambre de luxe</h4>
                                    <div class="lh-room-price">
                                        <h4 class="xl:text-[22px] text-[18px] text-[#ed5b31] font-bold leading-[22px]">
                                            FCFA 3000 /<span class="ml-[5px] text-[14px] font-normal text-[#777]">Par
                                                nuit</span></h4>
                                    </div>
                                </div>
                                <div class="lh-room-size d-flex flex-wrap">
                                    <p class="pb-[15px] text-[14px] text-[#777] leading-[1.2]">335 m²<span
                                            class="px-[15px]">|</span></p>
                                    <p class="pb-[15px] text-[14px] text-[#777] leading-[1.2]">1 très grand lit<span
                                            class="px-[15px]">|</span></p>
                                    <p class="pb-[15px] text-[14px] text-[#777] leading-[1.2]">Jusqu'à 4 invités</p>
                                </div>
                                <p> Plongez dans un lit douillet, drapé de luxueux draps en coton égyptien, et
                                    laissez-vous emporter par une nuit de sommeil réparateur.</p>
                                <div
                                    class="lh-main-features border-t border-solid border-[#e3e1e1] pt-[30px] mt-[30px]">
                                    <div class="lh-contain-heading pb-[15px] flex justify-between">
                                        <h4
                                            class="xl:text-[22px] text-[18px] leading-[1.2] font-bold text-[#000] text-left">
                                            Caractéristiques de la chambre</h4>
                                    </div>
                                    <div class="lh-room-features flex">
                                        <div class="lh-cols-room">
                                            <ul class="pl-[16px] mb-0">
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Télévision à écran
                                                    plat 42 pouces</li>
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Coffre-fort dans la
                                                    chambre</li>
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Mini-réfrigérateur
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="lh-cols-room">
                                            <ul class="pl-[16px] mb-0">
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Mini-réfrigérateur
                                                </li>
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Petit-déjeuner</li>
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Eau en bouteille
                                                    gratuite</li>
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
                                <a href="/room-details"
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
                                        Chambre simple</h4>
                                    <div class="lh-room-price">
                                        <h4 class="xl:text-[22px] text-[18px] text-[#ed5b31] font-bold leading-[22px]">
                                            FCFA 4000 /<span class="ml-[5px] text-[14px] font-normal text-[#777]">Par
                                                nuit</span></h4>
                                    </div>
                                </div>
                                <div class="lh-room-size d-flex flex-wrap">
                                    <p class="pb-[15px] text-[14px] text-[#777] leading-[1.2]">111 m²<span
                                            class="px-[15px]">|</span></p>
                                    <p class="pb-[15px] text-[14px] text-[#777] leading-[1.2]">1 très grand lit<span
                                            class="px-[15px]">|</span></p>
                                    <p class="pb-[15px] text-[14px] text-[#777] leading-[1.2]">Jusqu'à 6 invités</p>
                                </div>
                                <p>La chambre est élégamment décorée dans des tons apaisants, créant une ambiance
                                    chaleureuse et accueillante. Profitez des équipements modernes, tels qu'une
                                    télévision à écran plat, un accès Wi-Fi gratuit et une salle de bains privative
                                    équipée d'articles de toilette de qualité.</p>
                                <div
                                    class="lh-main-features border-t border-solid border-[#e3e1e1] pt-[30px] mt-[30px]">
                                    <div class="lh-contain-heading pb-[15px] flex justify-between">
                                        <h4
                                            class="xl:text-[22px] text-[18px] leading-[1.2] font-bold text-[#000] text-left">
                                            Caractéristiques de la chambre</h4>
                                    </div>
                                    <div class="lh-room-features flex">
                                        <div class="lh-cols-room">
                                            <ul class="pl-[16px] mb-0">
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Télévision à écran
                                                    plat 42 pouces</li>
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Coffre-fort dans la
                                                    chambre</li>
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Mini-réfrigérateur
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="lh-cols-room">
                                            <ul class="pl-[16px] mb-0">
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Mini-réfrigérateur
                                                </li>
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Petit-déjeuner</li>
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Eau en bouteille
                                                    gratuite</li>
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
                                <a href="/room-details"
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
                                        Super Chambre</h4>
                                    <div class="lh-room-price">
                                        <h4 class="xl:text-[22px] text-[18px] text-[#ed5b31] font-bold leading-[22px]">
                                            FCFA 5000 /
                                            <span class="ml-[5px] text-[14px] font-normal text-[#777]">Par nuit</span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="lh-room-size d-flex flex-wrap">
                                    <p class="pb-[15px] text-[14px] text-[#777] leading-[1.2]">125 m²<span
                                            class="px-[15px]">|</span></p>
                                    <p class="pb-[15px] text-[14px] text-[#777] leading-[1.2]">2 très grands lits<span
                                            class="px-[15px]">|</span></p>
                                    <p class="pb-[15px] text-[14px] text-[#777] leading-[1.2]">Jusqu'à 8 invités</p>
                                </div>
                                <p>Pour un réveil en douceur, savourez une tasse de café fraîchement préparé tout en
                                    admirant la vue imprenable depuis votre fenêtre. Que vous voyagiez pour affaires ou
                                    pour le plaisir, notre chambre d'hôtel est l'endroit idéal pour vous détendre et
                                    vous ressourcer</p>
                                <div
                                    class="lh-main-features border-t border-solid border-[#e3e1e1] pt-[30px] mt-[30px]">
                                    <div class="lh-contain-heading pb-[15px] flex justify-between">
                                        <h4
                                            class="xl:text-[22px] text-[18px] leading-[1.2] font-bold text-[#000] text-left">
                                            Caractéristiques de la chambre
                                        </h4>
                                    </div>
                                    <div class="lh-room-features flex">
                                        <div class="lh-cols-room">
                                            <ul class="pl-[16px] mb-0">
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Télévision à écran
                                                    plat 42 pouces</li>
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Coffre-fort dans la
                                                    chambre</li>
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Mini-réfrigérateur
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="lh-cols-room">
                                            <ul class="pl-[16px] mb-0">
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Mini-réfrigérateur
                                                </li>
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Petit-déjeuner</li>
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Eau en bouteille
                                                    gratuite</li>
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
                                <a href="/room-details"
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
                                        Salle Présidentielle</h4>
                                    <div class="lh-room-price">
                                        <h4 class="xl:text-[22px] text-[18px] text-[#ed5b31] font-bold leading-[22px]">
                                            FCFA 10000 /
                                            <span class="ml-[5px] text-[14px] font-normal text-[#777]">Par nuit</span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="lh-room-size d-flex flex-wrap">
                                    <p class="pb-[15px] text-[14px] text-[#777] leading-[1.2]">140 m² <span
                                            class="px-[15px]">|</span></p>
                                    <p class="pb-[15px] text-[14px] text-[#777] leading-[1.2]">2 très grands lits<span
                                            class="px-[15px]">|</span></p>
                                    <p class="pb-[15px] text-[14px] text-[#777] leading-[1.2]">Jusqu'à 8 invités</p>
                                </div>
                                <p>Plongez dans un lit douillet, drapé de luxueux draps en coton égyptien, et
                                    laissez-vous emporter par une nuit de sommeil réparateur. La chambre est élégamment
                                    décorée dans des tons apaisants, créant une ambiance chaleureuse et accueillante.
                                </p>
                                <div
                                    class="lh-main-features border-t border-solid border-[#e3e1e1] pt-[30px] mt-[30px]">
                                    <div class="lh-contain-heading pb-[15px] flex justify-between">
                                        <h4
                                            class="xl:text-[22px] text-[18px] leading-[1.2] font-bold text-[#000] text-left">
                                            Caractéristiques de la chambre
                                        </h4>
                                    </div>
                                    <div class="lh-room-features flex">
                                        <div class="lh-cols-room">
                                            <ul class="pl-[16px] mb-0">
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Télévision à écran plat 42 pouces</li>
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Coffre-fort dans la chambre</li>
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Mini-réfrigérateur
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="lh-cols-room">
                                            <ul class="pl-[16px] mb-0">
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Mini-réfrigérateur
                                                </li>
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Petit-déjeuner</li>
                                                <li class="text-[15px] text-[#777] leading-[1.2]">Eau en bouteille gratuite</li>
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
                                <a href="/room-details"
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

    <!-- Amenities -->
    <section class="section-amenities bg-[#f7f5f1] relative xl:py-[100px] py-[70px]">
        <div
            class="before:bg-[url('assets/img/theme/4.png')] bg-size-full before:bg-no-repeat before:absolute before:lg:left-[-50px] before:md:left-[-6px] before:left-[10px] before:bottom-0 before:z-[-1] before:2xl:w-[260px] before:xl:w-[185px] before:md:w-[138px] before:w-[60px] before:2xl:h-[500px] before:xl:h-[350px] before:md:h-[275px] before:h-[120px]">
        </div>
        <div
            class="flex flex-wrap justify-between items-center mx-auto 2xl:max-w-[1320px] xl:max-w-[1140px] lg:max-w-[960px] md:max-w-[720px] sm:max-w-[540px] relative">
            <div
                class="before:bg-[url('assets/img/theme/6.png')] bg-size-full dark-opicity-5 before:bg-no-repeat before:absolute before:right-0 before:z-[-2] before:top-[-100px] before:w-[200px] before:h-[130px]">
            </div>
            <div class="text-center w-full mb-[30px]" data-aos="fade-up" data-aos-duration="2000">
                <h2
                    class="text-[#000] font-medium leading-[1.2] 2xl:text-[40px] xl:text-[35px] xl:pb-0 lg:text-[30px] md:text-[28px] sm:text-[26px] text-[22px]">
                    <span class="text-[#ed5b31]">Nos Services</span> Hoteliers
                </h2>
            </div>
            <div class="flex flex-wrap mb-[-24px]">
                <div class="md:w-1/2 w-full px-[12px] mb-[24px]">
                    <div class="lh-amenities shadow-[0_0_50px_0_rgba(0,0,0,0.1)] flex rounded-[15px] bg-[#fff] overflow-hidden"
                        data-aos="fade-up" data-aos-duration="1500">
                        <div class="amenities-detail flex flex-wrap xl:flex-row flex-col">
                            <div
                                class="amenities-box xl:w-[50%] xl:p-0 w-[100%] p-[24px] flex items-center justify-center">
                                <img src="assets/img/amenities/1.png" alt="amenities_1"
                                    class="w-full h-full xl:rounded-none rounded-[15px]">
                            </div>
                            <div
                                class="amenities-box xl:w-[50%] xl:p-0 w-[100%] px-[24px] pb-[24px] flex items-center justify-center">
                                <div class="lh-amenities-in relative xl:p-[24px] px-[0]">
                                    <h4
                                        class="side-number absolute xl:top-[24px] xl:right-[24px] top-[0px] right-[0px] text-[55px] font-extrabold leading-[55px] text-[#0000000d]">
                                        01</h4>
                                    <div class="lh-top-dish pb-[15px]">
                                        <img src="assets/img/amenities/amenities-dish-1.svg"
                                            class="svg-img w-[50px] h-[50px]" alt="amenities-dish-1">
                                    </div>
                                    <div class="amenities-contain">
                                        <h4
                                            class="amenities-heading xl:text-[22px] text-[18px] font-bold text-[#000] leading-[1.2]">
                                            Notre Restaurant</h4>
                                        <p class="text-[14px] lg:py-[15px] md:py-[10px] py-[5px]">
                                            Une expérience gastronomique délicieusement différente.</p>
                                        <a href="facilities.html"
                                            class="no-underline uppercase text-[12px] text-[#000] font-bold hover:text-[#000]">VOIR
                                            PLUS
                                            <i
                                                class="ri-arrow-right-line text-[15px] ml-[2px] duration-[0.2s] ease-in-out"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 w-full px-[12px] mb-[24px]">
                    <div class="lh-amenities shadow-[0_0_50px_0_rgba(0,0,0,0.1)] flex rounded-[15px] bg-[#fff] overflow-hidden"
                        data-aos="fade-up" data-aos-duration="2000">
                        <div class="amenities-detail flex flex-wrap xl:flex-row flex-col">
                            <div
                                class="amenities-box xl:w-[50%] xl:p-0 w-[100%] p-[24px] flex items-center justify-center">
                                <img src="assets/img/amenities/2.png" alt="amenities_2"
                                    class="w-full h-full xl:rounded-none rounded-[15px]">
                            </div>
                            <div
                                class="amenities-box xl:w-[50%] xl:p-0 w-[100%] px-[24px] pb-[24px] flex items-center justify-center">
                                <div class="lh-amenities-in relative xl:p-[24px] px-[0]">
                                    <h4
                                        class="side-number absolute xl:top-[24px] xl:right-[24px] top-[0px] right-[0px] text-[55px] font-extrabold leading-[55px] text-[#0000000d]">
                                        02</h4>
                                    <div class="lh-top-dish pb-[15px]">
                                        <img src="assets/img/amenities/amenities-dish-2.svg"
                                            class="svg-img w-[50px] h-[50px]" alt="amenities-dish-2">
                                    </div>
                                    <div class="amenities-contain">
                                        <h4
                                            class="amenities-heading xl:text-[22px] text-[18px] font-bold text-[#000] leading-[1.2]">
                                            Spa & Beauté</h4>
                                        <p class="text-[14px] lg:py-[15px] md:py-[10px] py-[5px]">
                                            Éveillez votre beauté intérieure et extérieure.</p>
                                        <a href="facilities.html"
                                            class="no-underline uppercase text-[12px] text-[#000] font-bold hover:text-[#000]">VOIR
                                            PLUS
                                            <i
                                                class="ri-arrow-right-line text-[15px] ml-[2px] duration-[0.2s] ease-in-out"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 w-full px-[12px] mb-[24px]">
                    <div class="lh-amenities shadow-[0_0_50px_0_rgba(0,0,0,0.1)] flex rounded-[15px] bg-[#fff] overflow-hidden"
                        data-aos="fade-up" data-aos-duration="1500">
                        <div class="amenities-detail flex flex-wrap xl:flex-row flex-col">
                            <div
                                class="amenities-box xl:w-[50%] xl:p-0 w-[100%] px-[24px] pt-[24px] flex items-center justify-center">
                                <div class="lh-amenities-in relative xl:p-[24px] px-[0] lh-amenities-right">
                                    <h4
                                        class="side-number absolute xl:top-[24px] xl:right-[24px] top-[0px] right-[0px] text-[55px] font-extrabold leading-[55px] text-[#0000000d]">
                                        03</h4>
                                    <div class="lh-top-dish pb-[15px]">
                                        <img src="assets/img/amenities/amenities-dish-4.svg"
                                            class="svg-img w-[50px] h-[50px]" alt="amenities-dish-3">
                                    </div>
                                    <div class="amenities-contain">
                                        <h4
                                            class="amenities-heading xl:text-[22px] text-[18px] font-bold text-[#000] leading-[1.2]">
                                            Détente & Promenade</h4>
                                        <p class="text-[14px] lg:py-[15px] md:py-[10px] py-[5px]">
                                            Relaxation au rythme de la nature.</p>
                                        <a href="facilities.html"
                                            class="no-underline uppercase text-[12px] text-[#000] font-bold hover:text-[#000]">VOIR
                                            PLUS
                                            <i
                                                class="ri-arrow-right-line text-[15px] ml-[2px] duration-[0.2s] ease-in-out"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="amenities-box xl:w-[50%] xl:p-0 w-[100%] p-[24px] flex items-center justify-center">
                                <img src="assets/img/amenities/3.png" alt="amenities_3"
                                    class="w-full h-full xl:rounded-none rounded-[15px]">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 w-full px-[12px] mb-[24px]">
                    <div class="lh-amenities shadow-[0_0_50px_0_rgba(0,0,0,0.1)] flex rounded-[15px] bg-[#fff] overflow-hidden"
                        data-aos="fade-up" data-aos-duration="2000">
                        <div class="amenities-detail flex flex-wrap xl:flex-row flex-col">
                            <div
                                class="amenities-box xl:w-[50%] xl:p-0 w-[100%] px-[24px] pt-[24px] flex items-center justify-center">
                                <div class="lh-amenities-in relative xl:p-[24px] px-[0] lh-amenities-right">
                                    <h4
                                        class="side-number absolute xl:top-[24px] xl:right-[24px] top-[0px] right-[0px] text-[55px] font-extrabold leading-[55px] text-[#0000000d]">
                                        04</h4>
                                    <div class="lh-top-dish pb-[15px]">
                                        <img src="assets/img/amenities/amenities-dish-3.svg"
                                            class="svg-img w-[50px] h-[50px]" alt="amenities-dish-4">
                                    </div>
                                    <div class="amenities-contain">
                                        <h4
                                            class="amenities-heading xl:text-[22px] text-[18px] font-bold text-[#000] leading-[1.2]">
                                            Fitness & Gym</h4>
                                        <p class="text-[14px] lg:py-[15px] md:py-[10px] py-[5px]">
                                            L'excellence physique commence par l'engagement.</p>
                                        <a href="facilities.html"
                                            class="no-underline uppercase text-[12px] text-[#000] font-bold hover:text-[#000]">VOIR
                                            PLUS
                                            <i
                                                class="ri-arrow-right-line text-[15px] ml-[2px] duration-[0.2s] ease-in-out"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="amenities-box xl:w-[50%] xl:p-0 w-[100%] p-[24px] flex items-center justify-center">
                                <img src="assets/img/amenities/4.png" alt="amenities_4"
                                    class="w-full h-full xl:rounded-none rounded-[15px]">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="after:bg-[url('assets/img/theme/5.png')] dark-opicity-5 bg-size-full after:bg-no-repeat after:absolute after:right-0 after:bottom-[-60px] after:z-[-1] after:2xl:w-[175px] after:w-[120px] after:2xl:h-[150px] after:h-[120px]">
        </div>
    </section>

    <!-- Prices -->
    <section class="section-prices bg-[#f7f5f1] xl:py-[100px] py-[70px]">
        <div
            class="flex flex-wrap justify-between items-center mx-auto 2xl:max-w-[1320px] xl:max-w-[1140px] lg:max-w-[960px] md:max-w-[720px] sm:max-w-[540px]">
            <div class="text-center w-full mb-[30px]" data-aos="fade-up" data-aos-duration="1000">
                <h2
                    class="text-[#000] font-medium leading-[1.2] 2xl:text-[40px] xl:text-[35px] xl:pb-0 lg:text-[30px] md:text-[28px] sm:text-[26px] text-[22px]">
                    Meilleurs <span class="text-[#ed5b31]">Prix</span>
                </h2>
            </div>
            <div class="lg:flex flex-wrap mb-[-24px] w-full">
                <div class="lg:w-1/3 px-[12px] mb-[24px]">
                    <div class="lh-prices bg-[#fff] rounded-[15px] pb-[24px]" data-aos="fade-up"
                        data-aos-duration="1000">
                        <img src="assets/img/prices/1.png" alt="prices_1" class="prices-image">
                        <div class="lh-prices-out px-[24px]">
                            <div class="lh-prices-in border-b border-solid border-[#e3e1e1]">
                                <h4
                                    class="lh-price-dollar py-[15px] xl:text-[60px] text-[50px] font-bold text-[#ed5b31] leading-[40px]">
                                    <span
                                        class="xl:text-[25px] xl:align-[18px] text-[14px] align-[20px]">FCFA</span>5000<code
                                        class="xl:text-[16px] text-[14px] text-[#808384] leading-[1.2] font-light tracking-[0.01rem]">
                                        / Par nuit</code>
                                </h4>
                                <h4
                                    class="lh-prices-heading xl:pb-[20px] xl:text-[22px] leading-[1.2] font-bold pb-[15px] text-[18px] text-[#000] m-0">
                                    Chambre standard</h4>
                            </div>
                            <div class="lh-prices-viwe xl:pt-[20px] pt-[15px]">
                                <ul class="p-0 mb-[16px]">
                                    <li class="py-[8px] flex justify-between">
                                        <span class="xl:text-[15px] text-[14px]">Lit et Petit-déjeuner</span>
                                        <i
                                            class="ri-arrow-right-line flex justify-end text-[16px] rotate-[-35deg]"></i>
                                    </li>
                                    <li class="py-[8px] flex justify-between">
                                        <span class="xl:text-[15px] text-[14px]">Nourriture faite maison</span>
                                        <i
                                            class="ri-arrow-right-line flex justify-end text-[16px] rotate-[-35deg]"></i>
                                    </li>
                                    <li class="py-[8px] flex justify-between">
                                        <span class="xl:text-[15px] text-[14px]">Guide touristique</span>
                                        <i
                                            class="ri-arrow-right-line flex justify-end text-[16px] rotate-[-35deg]"></i>
                                    </li>
                                    <li class="py-[8px] flex justify-between">
                                        <span class="xl:text-[15px] text-[14px]">Sécurité sûreté</span>
                                        <i
                                            class="ri-arrow-right-line flex justify-end text-[16px] rotate-[-35deg]"></i>
                                    </li>
                                    <li class="py-[8px] flex justify-between">
                                        <span class="xl:text-[15px] text-[14px]">Patrimoine local</span>
                                        <i
                                            class="ri-arrow-right-line flex justify-end text-[16px] rotate-[-35deg]"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="price-buttons flex">
                                <a href="/room-details"
                                    class="duration-[0.3s] ease-in-out border-[1px] border-solid border-[#ed5b31] px-[15px] py-[5px] leading-[28px] bg-[#ed5b31] text-[#fff] relative z-[2] text-[15px] font-medium tracking-[1px] rounded-[10px] hover:bg-inherit hover:text-[#ed5b31]">Reserver
                                    Maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 px-[12px] mb-[24px]">
                    <div class="lh-prices bg-[#fff] rounded-[15px] pb-[24px]" data-aos="fade-up"
                        data-aos-duration="2000">
                        <img src="assets/img/prices/2.png" alt="prices_2" class="prices-image active">
                        <div class="lh-prices-out px-[24px]">
                            <div class="lh-prices-in border-b border-solid border-[#e3e1e1]">
                                <h4
                                    class="lh-price-dollar py-[15px] xl:text-[60px] text-[50px] font-bold text-[#ed5b31] leading-[40px]">
                                    <span
                                        class="xl:text-[25px] xl:align-[18px] text-[14px] align-[20px]">FCFA</span>7500<code
                                        class="xl:text-[16px] text-[14px] text-[#808384] leading-[1.2] font-light tracking-[0.01rem]">
                                        / Par nuit</code>
                                </h4>
                                <h4
                                    class="lh-prices-heading xl:pb-[20px] xl:text-[22px] leading-[1.2] font-bold pb-[15px] text-[18px] text-[#000] m-0">
                                    Chambre de luxe</h4>
                            </div>
                            <div class="lh-prices-viwe xl:pt-[20px] pt-[15px]">
                                <ul class="p-0 mb-[16px]">
                                    <li class="py-[8px] flex justify-between">
                                        <span class="xl:text-[15px] text-[14px]">Lit et Petit-déjeuner</span>
                                        <i
                                            class="ri-arrow-right-line flex justify-end text-[16px] rotate-[-35deg]"></i>
                                    </li>
                                    <li class="py-[8px] flex justify-between">
                                        <span class="xl:text-[15px] text-[14px]">Nourriture faite maison</span>
                                        <i
                                            class="ri-arrow-right-line flex justify-end text-[16px] rotate-[-35deg]"></i>
                                    </li>
                                    <li class="py-[8px] flex justify-between">
                                        <span class="xl:text-[15px] text-[14px]">Guide touristique</span>
                                        <i
                                            class="ri-arrow-right-line flex justify-end text-[16px] rotate-[-35deg]"></i>
                                    </li>
                                    <li class="py-[8px] flex justify-between">
                                        <span class="xl:text-[15px] text-[14px]">Guide touristiqueSûreté et sécurité</span>
                                        <i
                                            class="ri-arrow-right-line flex justify-end text-[16px] rotate-[-35deg]"></i>
                                    </li>
                                    <li class="py-[8px] flex justify-between">
                                        <span class="xl:text-[15px] text-[14px]">Patrimoine local</span>
                                        <i
                                            class="ri-arrow-right-line flex justify-end text-[16px] rotate-[-35deg]"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="price-buttons flex">
                                <a href="/room-details"
                                    class="duration-[0.3s] ease-in-out border-[1px] border-solid border-[#ed5b31] px-[15px] py-[5px] leading-[28px] bg-inherit text-[#ed5b31] relative z-[2] text-[15px] font-medium tracking-[1px] rounded-[10px] hover:bg-[#ed5b31] hover:text-[#fff]">Reserver
                                    Maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 px-[12px] mb-[24px]">
                    <div class="lh-prices bg-[#fff] rounded-[15px] pb-[24px]" data-aos="fade-up"
                        data-aos-duration="3000">
                        <img src="assets/img/prices/3.png" alt="prices_3" class="prices-image">
                        <div class="lh-prices-out px-[24px]">
                            <div class="lh-prices-in border-b border-solid border-[#e3e1e1]">
                                <h4
                                    class="lh-price-dollar py-[15px] xl:text-[60px] font-bold text-[50px] text-[#ed5b31] leading-[40px]">
                                    <span
                                        class="xl:text-[25px] xl:align-[18px] text-[14px] align-[20px]">FCFA</span>9900<code
                                        class="xl:text-[16px] text-[14px] text-[#808384] leading-[1.2] font-light tracking-[0.01rem]">
                                        / Par nuit</code>
                                </h4>
                                <h4
                                    class="lh-prices-heading xl:pb-[20px] xl:text-[22px] leading-[1.2] font-bold pb-[15px] text-[18px] text-[#000] m-0">
                                    Suite Premium</h4>
                            </div>
                            <div class="lh-prices-viwe xl:pt-[20px] pt-[15px]">
                                <ul class="p-0 mb-[16px]">
                                    <li class="py-[8px] flex justify-between">
                                        <span class="xl:text-[15px] text-[14px]">lit et petit-déjeuner</span>
                                        <i
                                            class="ri-arrow-right-line flex justify-end text-[16px] rotate-[-35deg]"></i>
                                    </li>
                                    <li class="py-[8px] flex justify-between">
                                        <span class="xl:text-[15px] text-[14px]">Nourriture faite maison</span>
                                        <i
                                            class="ri-arrow-right-line flex justify-end text-[16px] rotate-[-35deg]"></i>
                                    </li>
                                    <li class="py-[8px] flex justify-between">
                                        <span class="xl:text-[15px] text-[14px]">Guide touristique</span>
                                        <i
                                            class="ri-arrow-right-line flex justify-end text-[16px] rotate-[-35deg]"></i>
                                    </li>
                                    <li class="py-[8px] flex justify-between">
                                        <span class="xl:text-[15px] text-[14px]">Sécurité sûreté</span>
                                        <i
                                            class="ri-arrow-right-line flex justify-end text-[16px] rotate-[-35deg]"></i>
                                    </li>
                                    <li class="py-[8px] flex justify-between">
                                        <span class="xl:text-[15px] text-[14px]">Patrimoine local</span>
                                        <i
                                            class="ri-arrow-right-line flex justify-end text-[16px] rotate-[-35deg]"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="price-buttons flex">
                                <a href="/room-details"
                                    class="duration-[0.3s] ease-in-out border-[1px] border-solid border-[#ed5b31] px-[15px] py-[5px] leading-[28px] bg-[#ed5b31] text-[#fff] relative z-[2] text-[15px] font-medium tracking-[1px] rounded-[10px] hover:bg-inherit hover:text-[#ed5b31]">Reserver
                                    Maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="section-testimonials relative xl:py-[100px] py-[70px]">
        <div
            class="before:bg-[url('assets/img/theme/7.png')] dark-opicity-2 bg-size-full before:bg-no-repeat before:absolute before:z-[0] before:2xl:w-[380px] before:w-[310px] before:h-[162px] before:2xl:left-[-175px] before:left-[-150px] before:top-[25px]">
        </div>
        <div
            class="flex flex-wrap justify-between items-center mx-auto 2xl:max-w-[1320px] xl:max-w-[1140px] lg:max-w-[960px] md:max-w-[720px] sm:max-w-[540px]">
            <div class="lg:flex flex-wrap w-full">
                <div class="w-full px-[12px]" data-aos="fade-up" data-aos-duration="2000">
                    <div class="lh-slider">
                        <div class="lh-slide slide-1">
                            <div
                                class="flex flex-wrap justify-between items-center mx-auto 2xl:max-w-[1320px] xl:max-w-[1140px] lg:max-w-[960px] md:max-w-[720px] sm:max-w-[540px]">
                                <div class="lg:flex flex-wrap w-full">
                                    <div class="lg:w-1/2 m-auto block">
                                        <div class="lg:flex flex-wrap w-full 2xl:p-[0] xl:px-[12px] p-[0]">
                                            <div class="flex justify-between w-full">
                                                <div class="flex">
                                                    <img src="assets/img/businessman/businessman-1.png"
                                                        alt="businessman"
                                                        class="2xl:w-[75px] w-[50px] 2xl:h-[75px] h-[50px] rounded-[40px]">
                                                    <div class="px-[20px] flex justify-center flex-col">
                                                        <h5
                                                            class="text-[#000] mb-[6px] 2xl:text-[22px] font-bold xl:text-[17px] text-[15px]">
                                                            Jenifer Brown</h5>
                                                        <span>Bristol, Uk</span>
                                                    </div>
                                                </div>
                                                <div class="flex justify-end">
                                                    <img src="assets/img/testimonials/quotes.svg"
                                                        class="testimonials w-[70px] h-[70px] opacity-40 svg-img"
                                                        alt="quotes">
                                                </div>
                                            </div>
                                            <p
                                                class="mt-[24px] xl:text-[15px] text-[14px] 2xl:leading-[30px] lending-[26px]">
                                                "Mon séjour dans cet hôtel a dépassé toutes mes attentes. Le service impeccable et le confort de la chambre ont contribué à rendre mon voyage vraiment mémorable."
                                            </p>
                                            <div
                                                class="mt-[24px] bg-[#f7f5f1] p-[15px] rounded-[15px] inline-block flex-col border-[1px] border-solid border-[#e3e1e1]">
                                                <span class="text-[#000]">"Équipements de l'hôtel"</span>
                                                <div class="lh-star">
                                                    <i class="ri-star-fill text-[18px] text-[#ffc107]"></i>
                                                    <i class="ri-star-fill text-[18px] text-[#ffc107]"></i>
                                                    <i class="ri-star-fill text-[18px] text-[#ffc107]"></i>
                                                    <i class="ri-star-fill text-[18px] text-[#ffc107]"></i>
                                                    <i class="ri-star-fill text-[18px] text-[#ffc107]"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lh-slide slide-2">
                            <div
                                class="flex flex-wrap justify-between items-center mx-auto 2xl:max-w-[1320px] xl:max-w-[1140px] lg:max-w-[960px] md:max-w-[720px] sm:max-w-[540px] sm:px-[12px] px-[0]">
                                <div class="lg:flex flex-wrap w-full">
                                    <div class="lg:w-1/2 p-0 m-auto block">
                                        <div class="lg:flex flex-wrap w-full 2xl:p-[0] xl:px-[12px] p-[0]">
                                            <div class="flex justify-between w-full">
                                                <div class="flex">
                                                    <img src="assets/img/businessman/businessman-2.png"
                                                        alt="businessman"
                                                        class="2xl:w-[75px] w-[50px] 2xl:h-[75px] h-[50px] rounded-[40px]">
                                                    <div class="px-[20px] flex justify-center flex-col">
                                                        <h5
                                                            class="text-[#000] mb-[6px] 2xl:text-[22px] font-bold xl:text-[17px] text-[15px]">
                                                            John Doe</h5>
                                                        <span>Bristol, Uk</span>
                                                    </div>
                                                </div>
                                                <div class="flex justify-end">
                                                    <img src="assets/img/testimonials/quotes.svg"
                                                        class="testimonials w-[70px] h-[70px] opacity-40 svg-img"
                                                        alt="quotes">
                                                </div>
                                            </div>
                                            <p class="mt-[24px] text-[14px] 2xl:leading-[30px] lending-[26px]">
                                                "Mon séjour dans cet hôtel a dépassé toutes mes attentes. Le service impeccable et le confort de la chambre ont contribué à rendre mon voyage vraiment mémorable.!"
                                            </p>
                                            <div
                                                class="mt-[24px] bg-[#f7f5f1] p-[15px] rounded-[15px] inline-block flex-col border-[1px] border-solid border-[#e3e1e1]">
                                                <span class="text-[#000]">"Service de chambre"</span>
                                                <div class="lh-star">
                                                    <i class="ri-star-fill text-[18px] text-[#ffc107]"></i>
                                                    <i class="ri-star-fill text-[18px] text-[#ffc107]"></i>
                                                    <i class="ri-star-fill text-[18px] text-[#ffc107]"></i>
                                                    <i class="ri-star-fill text-[18px] text-[#ffc107]"></i>
                                                    <i class="ri-star-fill text-[18px] text-[#ffc107]"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lh-slide slide-3">
                            <div
                                class="flex flex-wrap justify-between items-center mx-auto 2xl:max-w-[1320px] xl:max-w-[1140px] lg:max-w-[960px] md:max-w-[720px] sm:max-w-[540px] sm:px-[12px] px-[0]">
                                <div class="lg:flex flex-wrap w-full">
                                    <div class="lg:w-1/2 p-0 m-auto block">
                                        <div class="lg:flex flex-wrap w-full 2xl:p-[0] xl:px-[12px] p-[0]">
                                            <div class="flex justify-between w-full">
                                                <div class="flex">
                                                    <img src="assets/img/businessman/businessman-3.png"
                                                        alt="businessman"
                                                        class="2xl:w-[75px] w-[50px] 2xl:h-[75px] h-[50px] rounded-[40px]">
                                                    <div class="px-[20px] flex justify-center flex-col">
                                                        <h5
                                                            class="text-[#000] mb-[6px] 2xl:text-[22px] font-bold xl:text-[17px] text-[15px]">
                                                            Moris Selemen</h5>
                                                        <span>Bristol, Uk</span>
                                                    </div>
                                                </div>
                                                <div class="flex justify-end">
                                                    <img src="assets/img/testimonials/quotes.svg"
                                                        class="testimonials w-[70px] h-[70px] opacity-40 svg-img"
                                                        alt="quotes">
                                                </div>
                                            </div>
                                            <p class="mt-[24px] text-[14px] 2xl:leading-[30px] lending-[26px]">
                                                "Mon séjour dans cet hôtel a dépassé toutes mes attentes. Le service impeccable et le confort de la chambre ont contribué à rendre mon voyage vraiment mémorable."
                                            </p>
                                            <div
                                                class="mt-[24px] bg-[#f7f5f1] p-[15px] rounded-[15px] inline-block flex-col border-[1px] border-solid border-[#e3e1e1]">
                                                <span class="text-[#000]">"Restaurants Desserts"</span>
                                                <div class="lh-star">
                                                    <i class="ri-star-fill text-[18px] text-[#ffc107]"></i>
                                                    <i class="ri-star-fill text-[18px] text-[#ffc107]"></i>
                                                    <i class="ri-star-fill text-[18px] text-[#ffc107]"></i>
                                                    <i class="ri-star-fill text-[18px] text-[#ffc107]"></i>
                                                    <i class="ri-star-fill text-[18px] text-[#ffc107]"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="after:bg-[url('assets/img/theme/8.png')] bg-size-full dark-opicity-2 after:bg-no-repeat after:absolute after:z-[-1] 2xl:after:w-[250px] 2xl:after:h-[325px] after:w-[160px] after:h-[210px] after:right-0 after:bottom-0">
        </div>
    </section>

</x-landing-layout>
