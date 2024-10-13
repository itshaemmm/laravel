<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0"
    />
    <title>Document</title>
    <!-- tailwind -->
    @vite('resources/css/app.css')
    <link href="{{ asset('front/css/landing_custom.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/logo-head.png') }}">
  </head>
  <body>
    <!-- hero start -->
    <section id="home" class="pb-12 min-h-screen bg-cover bg-center"
        style="background-image: url('{{ url('img/bg-penyewa.png') }}')">
        <header class="bg-transparent top-0 left-0 py-2 w-full flex items-center z-10 lg:py-0">
          <div class="container">
              <div class="flex justify-between relative">
                  <div class="px-4">
                      <a href="#home" class="font-bold text-xl block lg:py-6 text-white">
                          <img src="/img/logo navbar2.png" alt="logo" width="180" />
                      </a>
                  </div>
                  <div class="flex justify-center items-center px-4">
                      <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                          <span class="hamburger-line transition duration-300 origin-top-left"></span>
                          <span class="hamburger-line transition duration-300"></span>
                          <span class="hamburger-line transition duration-300 origin-bottom-left"></span>
                      </button>
                      <nav id="nav-menu"
                          class="bg-[#4e0b0b] hidden absolute py-5 max-w-[250px] w-full shadow-lg right-4 top-full rounded-lg lg:block lg:static lg:max-w-full lg:bg-transparent lg:shadow-none lg:rounded-none">
                          <ul class="block lg:flex">
                              <li class="group">
                                  <a href="{{ url('/.#home') }}"
                                      class="text-base text-white font-semibold py-2 mx-8 flex group-hover:text-red-500">Home</a>
                              </li>
                              <li class="group">
                                  <a href="{{ url('/.#about') }}"
                                      class="text-base text-white font-semibold py-2 mx-8 flex group-hover:text-red-500">About
                                      Us</a>
                              </li>
                              <!-- Services Dropdown Menu -->
                              <li class="group relative">
                                  <a href="#services"
                                      class="text-base text-white font-semibold py-2 mx-8 flex group-hover:text-red-500">
                                      Services
                                  </a>
                                  <ul
                                      class="dropdown-menu absolute opacity-0 pointer-events-fill bg-[#4e0b0b] shadow-lg top-7 left-0 w-[120px] mt-1 rounded-lg transition-all duration-300 ease-in-out group-hover:opacity-100 group-hover:pointer-events-auto transform group-hover:translate-y-2">
                                      <li>
                                          <a href="{{ url('/penyewaan') }}"
                                              class="block px-4 py-3 text-sm font-semibold text-white hover:bg-[#751514]">
                                              Penyewaan Barang
                                          </a>
                                      </li>
                                      <li>
                                          <a href="{{ url('/bantuan_medis') }}"
                                              class="block px-4 py-3 text-sm font-semibold text-white hover:bg-[#751514]">
                                              Bantuan Medis
                                          </a>
                                      </li>
                                  </ul>
                              </li>

                              <li class="group">
                                  <a href="{{ url('/blog') }}"
                                      class="text-base text-white font-semibold py-2 mx-8 flex group-hover:text-red-500">Kegiatan</a>
                              </li>
                              <li class="group">
                                  <a href="#event"
                                      class="text-base text-white font-semibold py-2 mx-8 flex group-hover:text-red-500">Event</a>
                              </li>
                          </ul>
                      </nav>
                  </div>
              </div>
          </div>
      </header>
      <div class="container">
        <div
          class="w-full px-4 text-center flex flex-col justify-center items-center h-screen pb-64"
        >
          <h1
            class="text-5xl font-bold text-white lg:text-7xl"
          >
            PENYEWAAN
          </h1>
          <h2
            class="text-5xl font-bold text-white stroke lg:text-7xl"
          >
            ALAT MEDIS
          </h2>
        </div>
      </div>
    </section>
    <!-- hero end -->
    <!-- price list start -->
    <section
      id="price"
      class="pt-20 pb-12 bg-[url('/img/dotted2.png')] bg-cover bg-center"
    >
      <div class="container">
        <div class="w-full px-4 text-center">
          <h2
            class="text-3xl font-bold text-black mb-5"
          >
            Tim Bantuan Medis Bumi Gora
          </h2>
          <h1
            class="text-4xl font-bold text-black"
          >
            PRICE LIST
          </h1>
        </div>
        <div
          class="flex flex-wrap justify-center items-center lg:justify-between"
        >
          <!-- Gambar Barang -->
          <div
            class="w-full px-4 mb-10 lg:mb-0 lg:w-1/2 flex justify-center"
          >
            <img
              src="img/barang.png"
              alt="barang"
              class="w-3/4 lg:w-1/2"
            />
          </div>

          <!-- Gambar Alat -->
          <div
            class="w-full px-4 lg:w-1/2 flex justify-center"
          >
            <img
              src="img/alat.png"
              alt="alat"
              class="w-3/4 lg:w-1/2"
            />
          </div>
        </div>
      </div>
    </section>
    <!-- price list end -->
    <!-- alur start -->
    <section id="penyewaan" class="pb-12">
      <div class="container">
        <div class="flex flex-wrap">
          <div
            class="w-full px-4 self-center text-center lg:w-1/2 lg:justify-start"
          >
            <h1
              class="text-xl text-black lg:text-5xl mb-4"
            >
              Alur
              <span class="font-bold"
                >Penyewaan</span
              >
            </h1>
            <button
              class="text-base font-bold bg-[#7c0b0d] text-white px-4 py-2 hover:bg-[#4e0b0b] rounded-full transition duration-500 hover:shadow-lg"
            >
              ORDER NOW
            </button>
          </div>
          <div
            class="w-full px-4 mt-10 lg:w-1/2 flex justify-center""
          >
            <img
              src="img/penyewaan.png"
              alt=""
              width="70%"
            />
          </div>
        </div>
      </div>
    </section>
    <!-- alur end -->
      <!-- footer start -->
      <footer class="bg-gradient-to-b from-[#751514] to-black pt-24 pb-12">
        <div class="container flex justify-center items-center text-center">
            <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
                <h2 class="font-bold text-3xl mb-5 text-white">
                    Contact Us
                </h2>
            </div>
        </div>

        <div class="w-full pt-10">
            <div class="flex items-center justify-center mb-5">
                <!-- youtube -->
                <a href="https://www.youtube.com/@tbmbumigora8178" target="_blank"
                    class="w-9 h-9 mr-3 rounded-full flex justify-center text-white items-center border border-slate-500 hover:bg-white hover:text-black">
                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="20"
                        class="fill-current">
                        <title>YouTube</title>
                        <path
                            d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                    </svg>
                </a>
                <a href="https://www.instagram.com/tbm_bumigora/" target="_blank"
                    class="w-9 h-9 mr-3 rounded-full flex justify-center text-white items-center border border-slate-500 hover:bg-white hover:text-black">
                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="fill-current"
                        width="20">
                        <title>Instagram</title>
                        <path
                            d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077" />
                    </svg>
                </a>
                <a href="https://x.com/tbm_bumigora?t=N9W5Vqd-UjgjMmxqPrXLhg&s=08" target="_blank"
                    class="w-9 h-9 mr-3 rounded-full flex justify-center text-white items-center border border-slate-500 hover:bg-white hover:text-black">
                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="20"
                        class="fill-current">
                        <title>X</title>
                        <path
                            d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z" />
                    </svg>
                </a>
                <a href="https://www.tiktok.com/@tbmbumigora?_t=8qTVWc4u2iY&_r=1" target="_blank"
                    class="w-9 h-9 mr-3 rounded-full flex justify-center text-white items-center border border-slate-500 hover:bg-white hover:text-black">
                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="20"
                        class="fill-current">
                        <title>TikTok</title>
                        <path
                            d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
                    </svg>
                </a>
                <a href="mailto:tbm.angkatan16@gmail.com" class="w-9 h-9 mr-3 rounded-full flex justify-center text-white items-center border border-slate-500 hover:bg-white hover:text-black">
                    <svg role="img" viewBox="0 0 8 6" xmlns="http://www.w3.org/2000/svg" width="20" class="fill-current">
                        <title>Email</title>
                        <path d="m0 0h8v6h-8zm.75 .75v4.5h6.5v-4.5zM0 0l4 3 4-3v1l-4 3-4-3z" />
                    </svg>
                </a>
                <a href="https://wa.me/6281918227285" class="w-9 h-9 mr-3 rounded-full flex justify-center text-white items-center border border-slate-500 hover:bg-white hover:text-black">
                    <svg role="img" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" width="20" class="fill-current">
                        <title>Tlp</title>
                        <path d="M128,21q40,75,53,91.5q10,15.5-2,27.5c-10,13-38,32-45,40c-10,9-12,15-3,32q54,105,158,156c18,10,20,5,32-5c8-8,20-27,35-41c10-11,20-12,32-3q14,11,88,51c9,5,11,8,9,27q-7,40-22,51q-67,53-133,29c-180-55-286-195-315-336q-4-62,36-105q10-13,30-17c35-11,42-6,47,2z" />
                    </svg>
                </a>
            </div>
            <p class="text-slate-300 text-sm font-medium text-center">
                Copyright © 2024 TBM Bumi Gora
            </p>
        </div>
        </div>
    </footer>
      <!-- footer end -->
    <script src="src/script/script.js"></script>
    <script src="{{ asset('front/js/scripts.js') }}"></script>
  </body>
</html>
