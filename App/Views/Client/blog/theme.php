<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MaBagnole - Community &amp; Blog</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&amp;display=swap"
        rel="stylesheet" />
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Tailwind Config -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#277bf1",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101722",
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        /* Custom scrollbar for cleaner look */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        .dark ::-webkit-scrollbar-thumb {
            background: #334155;
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white font-display min-h-screen flex flex-col antialiased selection:bg-primary/30 selection:text-primary">
    <!-- TopNavBar -->
    <header
        class="sticky top-0 z-50 w-full border-b border-slate-200 dark:border-slate-800 bg-white/80 dark:bg-[#101722]/80 backdrop-blur-md">
        <div class="container mx-auto px-4 h-16 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="flex items-center justify-center w-8 h-8 rounded-lg bg-primary text-white">
                    <span class="material-symbols-outlined text-[20px]">directions_car</span>
                </div>
                <h2 class="text-lg font-bold tracking-tight text-slate-900 dark:text-white">MaBagnole</h2>
            </div>
            <nav class="hidden md:flex items-center gap-8">
                <a class="text-sm font-medium text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-primary transition-colors"
                    href="#">Rent a Car</a>
                <a class="text-sm font-medium text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-primary transition-colors"
                    href="#">Locations</a>
                <a class="text-sm font-medium text-primary font-bold" href="#">Community</a>
                <a class="text-sm font-medium text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-primary transition-colors"
                    href="#">Support</a>
            </nav>
            <div class="flex items-center gap-3">
                <button
                    class="hidden sm:flex items-center justify-center h-9 px-4 rounded-lg bg-slate-100 dark:bg-slate-800 text-slate-900 dark:text-white text-sm font-bold hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">
                    Log In
                </button>
                <button
                    class="flex items-center justify-center h-9 px-4 rounded-lg bg-primary text-white text-sm font-bold hover:bg-blue-600 transition-colors shadow-sm shadow-blue-500/20">
                    Sign Up
                </button>
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <main class="flex-1 w-full">
        <!-- HeroSection -->
        <section class="relative w-full py-8 md:py-12">
            <div class="container mx-auto px-4">
                <div class="relative overflow-hidden rounded-2xl bg-slate-900 min-h-[400px] flex flex-col items-center justify-center p-8 text-center"
                    data-alt="Dark blurred background of a car driving on a coastal road"
                    style='background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.7)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuDiw1-1QIUmk1XBID2_RjVi0i3r_KQRCdNOJCZU-AsocLbqPKCttoE_0kNxAu-ryEFhzcKWs6KvgtSuOaJ0ZuII_BKNWd87p6QVilf30gqx8m5ffP3JYJ05vJIGCriyLkGHeIB6wBP7rqgJ7d03sb-YZybmf4Tt-QK3XUw72iqAQA6HzVY4CPJbVxtUIgDFBQtn6SBIEjRLfePnovttZbRZ9I-E7hRjwtHgfg0hSeHzyK_GlGyYMFGotAeWtgQN-xftJetbAOii02Q"); background-size: cover; background-position: center;'>
                    <div class="max-w-3xl flex flex-col items-center gap-6 animate-fade-in-up">
                        <div class="flex flex-col gap-3">
                            <span
                                class="inline-block px-3 py-1 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 text-white text-xs font-bold uppercase tracking-wider mb-2 w-fit mx-auto">
                                Community Hub
                            </span>
                            <h1
                                class="text-white text-4xl md:text-5xl lg:text-6xl font-black leading-tight tracking-tight">
                                Welcome to the MaBagnole Community
                            </h1>
                            <p class="text-slate-200 text-lg md:text-xl font-medium max-w-2xl mx-auto leading-relaxed">
                                Discover expert tips, share your epic road trip stories, and connect with fellow drivers
                                worldwide.
                            </p>
                        </div>
                        <!-- Search Bar -->
                        <div class="w-full max-w-xl mt-4">
                            <div class="relative group">
                                <div
                                    class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-primary transition-colors">
                                    <span class="material-symbols-outlined">search</span>
                                </div>
                                <input
                                    class="w-full h-14 pl-11 pr-32 rounded-xl border-0 bg-white shadow-lg focus:ring-2 focus:ring-primary text-slate-900 placeholder:text-slate-400 text-base font-medium transition-all"
                                    placeholder="Search for tips, routes, or reviews..." type="text" />
                                <button
                                    class="absolute right-2 top-2 bottom-2 bg-primary hover:bg-blue-600 text-white font-bold rounded-lg px-6 text-sm transition-colors">
                                    Search
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Action Buttons -->
        <section class="py-4">
            <div class="container mx-auto px-4 flex justify-center">
                <div class="flex flex-wrap gap-4 w-full max-w-lg">
                    <button
                        class="flex-1 flex items-center justify-center gap-2 h-12 px-6 rounded-xl bg-primary text-white text-base font-bold hover:bg-blue-600 transition-all shadow-md shadow-blue-500/20 hover:shadow-lg hover:shadow-blue-500/30 transform hover:-translate-y-0.5">
                        <span class="material-symbols-outlined text-[20px]">edit_square</span>
                        <span>Write an Article</span>
                    </button>
                    <button
                        class="flex-1 flex items-center justify-center gap-2 h-12 px-6 rounded-xl border-2 border-slate-200 dark:border-slate-700 bg-white dark:bg-transparent text-slate-700 dark:text-slate-200 text-base font-bold hover:border-primary hover:text-primary dark:hover:border-primary dark:hover:text-primary transition-all bg-background-light dark:bg-background-dark">
                        <span class="material-symbols-outlined text-[20px]">article</span>
                        <span>My Articles</span>
                    </button>
                </div>
            </div>
        </section>
        <!-- Themes Section -->
        <section class="py-12">
            <div class="container mx-auto px-4 max-w-6xl">
                <div class="flex items-center justify-between mb-8">
                    <h2 class="text-2xl md:text-3xl font-bold text-slate-900 dark:text-white flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">category</span>
                        Browse by Theme
                    </h2>
                    <a class="text-sm font-bold text-primary hover:text-blue-600 flex items-center gap-1" href="#">
                        View All <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </a>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Theme Card 1 -->
                    <a class="group flex flex-col h-full bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 overflow-hidden hover:shadow-xl hover:shadow-slate-200/50 dark:hover:shadow-black/30 hover:border-primary/50 dark:hover:border-primary/50 transition-all duration-300"
                        href="#">
                        <div class="h-32 bg-slate-200 bg-cover bg-center relative"
                            data-alt="Scenic winding mountain road with autumn trees"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCR1pW3vHaRCSsUWktx4KYdZ4JVrqU6beeiiN3KfgvrMM543NDUoielVaDbmJ37WykHRTmS86Y3a8PN04oEM2mMFGTEHt8Su9XZ3iyZRkRh6D7vTfgp3RrCzZkIe8URaLPJCVNvDO_NRLgtHXz-b8tQPnDR7Miwf3g48sU6vHmriPdxVkm7j6LmSw9LYlYxVt5MoDN_pTVgm-xRg3huFYcAtGTf8jHTS2Ja5g87MASRce5fdFcq81aLoEQVJfspji3xTz1se366IKs");'>
                            <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-colors"></div>
                        </div>
                        <div class="p-5 flex flex-col flex-1">
                            <div class="flex items-center gap-2 mb-2">
                                <div class="p-1.5 rounded-md bg-blue-50 dark:bg-blue-900/30 text-primary">
                                    <span class="material-symbols-outlined text-[20px]">map</span>
                                </div>
                                <span
                                    class="text-xs font-bold uppercase text-slate-500 dark:text-slate-400">Travel</span>
                            </div>
                            <h3
                                class="text-lg font-bold text-slate-900 dark:text-white mb-1 group-hover:text-primary transition-colors">
                                Road Trips</h3>
                            <p class="text-slate-500 dark:text-slate-400 text-sm mb-4">Best routes, scenic drives, and
                                travel guides.</p>
                            <div
                                class="mt-auto pt-4 border-t border-slate-100 dark:border-slate-700 flex justify-between items-center">
                                <span class="text-xs font-semibold text-slate-400">42 Articles</span>
                                <span
                                    class="material-symbols-outlined text-slate-300 group-hover:translate-x-1 transition-transform text-[18px]">arrow_forward</span>
                            </div>
                        </div>
                    </a>
                    <!-- Theme Card 2 -->
                    <a class="group flex flex-col h-full bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 overflow-hidden hover:shadow-xl hover:shadow-slate-200/50 dark:hover:shadow-black/30 hover:border-primary/50 dark:hover:border-primary/50 transition-all duration-300"
                        href="#">
                        <div class="h-32 bg-slate-200 bg-cover bg-center relative"
                            data-alt="Car mechanic working on an engine with tools"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCGzMiUfUN74yX61eGk4DAGA0w-I_ChzBI8gbW_KyhW0O0a9jb8y5iIoNnrNivnJY48kDl6QpgYP8yD0I0HA3vEK-Ta7z_d9oTKp68LGjc8luzPixUsv6MxDOQoMXNRaRMn-nmzmtroLu5sBkFf-csZhYO4rDb_17BziLsYopYdBEBrD59JJ-E4Wk8NLlQegd-fvHHy_C9UnmH7rx1bdQMn_Zxqj4B_yEcSGA5i0xs6hoMMH5lO5wBCt5sTYCNLcjWRpn4EoHuM3HU");'>
                            <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-colors"></div>
                        </div>
                        <div class="p-5 flex flex-col flex-1">
                            <div class="flex items-center gap-2 mb-2">
                                <div
                                    class="p-1.5 rounded-md bg-green-50 dark:bg-green-900/30 text-green-600 dark:text-green-400">
                                    <span class="material-symbols-outlined text-[20px]">build</span>
                                </div>
                                <span
                                    class="text-xs font-bold uppercase text-slate-500 dark:text-slate-400">Technical</span>
                            </div>
                            <h3
                                class="text-lg font-bold text-slate-900 dark:text-white mb-1 group-hover:text-primary transition-colors">
                                Maintenance 101</h3>
                            <p class="text-slate-500 dark:text-slate-400 text-sm mb-4">DIY fixes, service schedules, and
                                safety checks.</p>
                            <div
                                class="mt-auto pt-4 border-t border-slate-100 dark:border-slate-700 flex justify-between items-center">
                                <span class="text-xs font-semibold text-slate-400">15 Articles</span>
                                <span
                                    class="material-symbols-outlined text-slate-300 group-hover:translate-x-1 transition-transform text-[18px]">arrow_forward</span>
                            </div>
                        </div>
                    </a>
                    <!-- Theme Card 3 -->
                    <a class="group flex flex-col h-full bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 overflow-hidden hover:shadow-xl hover:shadow-slate-200/50 dark:hover:shadow-black/30 hover:border-primary/50 dark:hover:border-primary/50 transition-all duration-300"
                        href="#">
                        <div class="h-32 bg-slate-200 bg-cover bg-center relative"
                            data-alt="Electric vehicle charging station plug close up"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCqPyrNarDsDuXEwnIQD0A9xEU1wXJy31CbOq32ZHxruRmRWB-FWjakFDu0PotfDzreYek7D3RxBbx-eUG7jjji5gRZp6Abdgr2ew8quBIhb2GZTk2XqUBWBaw7HwGaA8k3zXiB4SKjcPWm5uEMTIcUAv7u2xTM49mDEjuFALe51jCuMh9fol3yuEwdnaOBm1dxPOUQ2I3jp5b5qaYygGe8dUrje157-US7ZFj0cP8Q7OeQtsNiIYm34kyFVnvu8aFdkrxc5KQawWg");'>
                            <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-colors"></div>
                        </div>
                        <div class="p-5 flex flex-col flex-1">
                            <div class="flex items-center gap-2 mb-2">
                                <div
                                    class="p-1.5 rounded-md bg-yellow-50 dark:bg-yellow-900/30 text-yellow-600 dark:text-yellow-400">
                                    <span class="material-symbols-outlined text-[20px]">electric_bolt</span>
                                </div>
                                <span
                                    class="text-xs font-bold uppercase text-slate-500 dark:text-slate-400">Future</span>
                            </div>
                            <h3
                                class="text-lg font-bold text-slate-900 dark:text-white mb-1 group-hover:text-primary transition-colors">
                                Electric Vehicles</h3>
                            <p class="text-slate-500 dark:text-slate-400 text-sm mb-4">Charging tips, range anxiety, and
                                EV news.</p>
                            <div
                                class="mt-auto pt-4 border-t border-slate-100 dark:border-slate-700 flex justify-between items-center">
                                <span class="text-xs font-semibold text-slate-400">28 Articles</span>
                                <span
                                    class="material-symbols-outlined text-slate-300 group-hover:translate-x-1 transition-transform text-[18px]">arrow_forward</span>
                            </div>
                        </div>
                    </a>
                    <!-- Theme Card 4 -->
                    <a class="group flex flex-col h-full bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 overflow-hidden hover:shadow-xl hover:shadow-slate-200/50 dark:hover:shadow-black/30 hover:border-primary/50 dark:hover:border-primary/50 transition-all duration-300"
                        href="#">
                        <div class="h-32 bg-slate-200 bg-cover bg-center relative"
                            data-alt="Person holding car keys with a car in background"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA_6PzjbA1eIyQxvUZSbDTsMMHg7mHQ7SO4aGhFDk2p3Hzh9d2On4v1CzmpgaJ_vIe43c0dR9qYMOBiV0bXj1GwtV7wXtu6eG5lX8_Xv3cBi91ec9xYaTkjdt9W1FZ2ICH69pzRgSq_qi9jXy_DOhJtsQSTs0l9ZWN_TB-fNb4gvhpIF1NsieCy8GsVgs0WKI3Omk6a36Q0jWd7q0NpUJOG3tEDkdt80Zd6rLZaNHRztJgVuDCx0LgzAtnP30b0MPBHkOGPdMxG_ps");'>
                            <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-colors"></div>
                        </div>
                        <div class="p-5 flex flex-col flex-1">
                            <div class="flex items-center gap-2 mb-2">
                                <div
                                    class="p-1.5 rounded-md bg-purple-50 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400">
                                    <span class="material-symbols-outlined text-[20px]">key</span>
                                </div>
                                <span
                                    class="text-xs font-bold uppercase text-slate-500 dark:text-slate-400">Guides</span>
                            </div>
                            <h3
                                class="text-lg font-bold text-slate-900 dark:text-white mb-1 group-hover:text-primary transition-colors">
                                Rental Hacks</h3>
                            <p class="text-slate-500 dark:text-slate-400 text-sm mb-4">Save money and get the best
                                rental experience.</p>
                            <div
                                class="mt-auto pt-4 border-t border-slate-100 dark:border-slate-700 flex justify-between items-center">
                                <span class="text-xs font-semibold text-slate-400">10 Articles</span>
                                <span
                                    class="material-symbols-outlined text-slate-300 group-hover:translate-x-1 transition-transform text-[18px]">arrow_forward</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- Trending Section -->
        <section class="py-12 bg-white dark:bg-[#0b111a] border-t border-slate-100 dark:border-slate-800">
            <div class="container mx-auto px-4 max-w-6xl">
                <div class="flex items-center justify-between mb-8">
                    <h2 class="text-2xl md:text-3xl font-bold text-slate-900 dark:text-white flex items-center gap-2">
                        <span class="material-symbols-outlined text-red-500">trending_up</span>
                        Trending Now
                    </h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Article Card 1 -->
                    <article class="flex flex-col gap-4 group cursor-pointer">
                        <div class="relative overflow-hidden rounded-xl aspect-[16/9]">
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                                data-alt="Scenic drive along California coast Highway 1"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAcuBEBD_QwnKa_O8sDlReTTDWzRHls70iJDok_yLwifs9s1zrW3ClOXCPyn5_IaaIWgblUmvQ4yqTtd1tsMjU_Y8z-QflOhoNMgc92IFecz0I6LxgF7WPB6FuONXhHwKCX8hkG6dQGd2OqA3_fCXoMD-_nBSz9ttYh8yi4uwd6Kn-cN98t3djOIhswHDvx3uMhQ3H5Q1r_7K8J6Bkm59C5kfB2AS4eRIln8nNyEe0bSbSfaquziE4g5oWNUd_A3Nw4gq5aDhHpXX8");'>
                            </div>
                            <div
                                class="absolute top-3 left-3 bg-white/90 dark:bg-slate-900/90 backdrop-blur text-xs font-bold px-2 py-1 rounded text-slate-900 dark:text-white">
                                Road Trips
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h3
                                class="text-xl font-bold text-slate-900 dark:text-white leading-tight group-hover:text-primary transition-colors">
                                10 Hidden Gems on the Pacific Coast Highway
                            </h3>
                            <p class="text-slate-500 dark:text-slate-400 text-sm line-clamp-2">
                                Stop at these breathtaking overlooks and secret beaches that most tourists miss on their
                                drive down California's coast.
                            </p>
                            <div class="flex items-center gap-3 mt-1">
                                <div class="w-8 h-8 rounded-full bg-slate-200 bg-cover bg-center"
                                    data-alt="Portrait of Sarah Jenkins"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDeEssZgKjJ_4c1U-xohQaZTf50a_PrSZ5nCIXfAmDzpXAalZo7WZ-DwvhXjULurhth8HoRPqIz9XHmaJxXtC9E_YQzgeq_Ley-gtgd4_XWXV-MbZTnFsbY_TLssgodvDz0eLHeRKtM-ZMlpuAz7sfbcM4bIhuhpwW-Kw49VjHWLALe7WcbdF09oofEAR9CoIPWa2r_pU_UXYq396GbRnu7GridzFDPL2hnS-0BpnfWQnOiYnHoUoUSRX3VjWpL2ivVljNiy5cpG2Q")'>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xs font-bold text-slate-900 dark:text-slate-200">Sarah
                                        Jenkins</span>
                                    <span class="text-[10px] text-slate-400">Oct 24 • 5 min read</span>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- Article Card 2 -->
                    <article class="flex flex-col gap-4 group cursor-pointer">
                        <div class="relative overflow-hidden rounded-xl aspect-[16/9]">
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                                data-alt="Dashboard of a modern electric car displaying battery status"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAXBDPFoIwYa7nrG-kohT7ta4Q-TkNzfChmVVfqnwf8lMjF1mYQU_fo4eVBQk9sdhH9Bp43PHCTZZN8w6rVp2TLLh0ovCniy54GiVw-4wcBfFYFzu6ZjmNbDPxbmd6ptDM1sC7TuRA7USHnWrZnSwlj1DHp-VA9NMUwFJE4Tq0G30BKgcDPmb1QMRQ8hJApLJtSlN28NwrTP4KPvmkHu4EHg4Q5Retf3iu0B_6uZ9RpmwTVRB1zSmAqFG6Z-83AD2QRcQnRKMALfRY");'>
                            </div>
                            <div
                                class="absolute top-3 left-3 bg-white/90 dark:bg-slate-900/90 backdrop-blur text-xs font-bold px-2 py-1 rounded text-slate-900 dark:text-white">
                                EV Guide
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h3
                                class="text-xl font-bold text-slate-900 dark:text-white leading-tight group-hover:text-primary transition-colors">
                                Range Anxiety? Here's How to Plan Your EV Trip
                            </h3>
                            <p class="text-slate-500 dark:text-slate-400 text-sm line-clamp-2">
                                Modern apps and simple planning strategies can make driving an electric vehicle across
                                the country stress-free.
                            </p>
                            <div class="flex items-center gap-3 mt-1">
                                <div class="w-8 h-8 rounded-full bg-slate-200 bg-cover bg-center"
                                    data-alt="Portrait of Mike Chen"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCGrOgmyLW0dTyRHiKiR1GCYNW-L_j8XPwYStSf4wggy_boETAr1CIDhJJ3uubP8hemxyLrbiLLW5yUavQ5hkjnINER1EbPdiOrgCoWGMbiJ6dqxiNum6K9ob1zBjZQxlwWbElsQrra9I66oAKvrjeyUilmklpvXZuj7sXCCK12W5gW6U1DmNE00dRXaOc6u-bmLUjNMrAFp2s_2esXvUK4qhCzp4H4l7JfWrW26KjCnsj4PObUjFP3b9J48fRbfDYgcnbe1yuwgwk")'>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xs font-bold text-slate-900 dark:text-slate-200">Mike Chen</span>
                                    <span class="text-[10px] text-slate-400">Oct 22 • 8 min read</span>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- Article Card 3 -->
                    <article class="flex flex-col gap-4 group cursor-pointer">
                        <div class="relative overflow-hidden rounded-xl aspect-[16/9]">
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                                data-alt="Detailed shot of car tire tread"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA5sTQkL6aFKk_5Jy9gYIX6sWYQxpmPqwwTxQ5S4uA1UBQMwIxIAHI4lDzNlmuGbYH5df0zRTFxfQqkH-pL5HNV1RAs4g9gni1yOd5cOYcK-MIKc-rw8MuxdcBnqPA05nCLqdJmOBBJleI4V605vhRuH-RFAw5wZ3QMS4a7YdvFm13ZWLBZBgKdEnGm4XdvZLjuYpagVLuUqeb5J4Wofy_y9OpW4IfzVoX1HDXHkqeQZJ8CfRRMf5mtAzlxyVgjVo9AYsZzaCa-DAc");'>
                            </div>
                            <div
                                class="absolute top-3 left-3 bg-white/90 dark:bg-slate-900/90 backdrop-blur text-xs font-bold px-2 py-1 rounded text-slate-900 dark:text-white">
                                Maintenance
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h3
                                class="text-xl font-bold text-slate-900 dark:text-white leading-tight group-hover:text-primary transition-colors">
                                Winter is Coming: Is Your Car Ready?
                            </h3>
                            <p class="text-slate-500 dark:text-slate-400 text-sm line-clamp-2">
                                A complete checklist for winterizing your vehicle, from tire pressure to checking your
                                antifreeze levels.
                            </p>
                            <div class="flex items-center gap-3 mt-1">
                                <div class="w-8 h-8 rounded-full bg-slate-200 bg-cover bg-center"
                                    data-alt="Portrait of Emily Ross"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDPBZkeW-eSVHn1oQwVaaglLgfHHdRV6Wj1THjlAxCpIHYi2V5usSF79EMS7zex_MmojnBr4ZjbTbCRBoKOSB6AUh2K33Lb489R8QApQxlABrfr2rJmRQNuxYIgvJmEKU9rdXQoMvErzZMwU27LFxMtL1JJoJFJfxjNUf-kH-lMDWp3d55nJ9lSgXWLez6y7ScJxXL84QC-XR3JzIMqTbqKOu0PXK9sJCwy4K9DpeyYF3s1NZpihdb5wkCd2DdsUQAQXlYwR7s_EXo")'>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xs font-bold text-slate-900 dark:text-slate-200">Emily Ross</span>
                                    <span class="text-[10px] text-slate-400">Oct 20 • 4 min read</span>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer class="bg-white dark:bg-[#101722] border-t border-slate-200 dark:border-slate-800 pt-16 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-12">
                <div class="col-span-2 md:col-span-1 flex flex-col gap-4">
                    <div class="flex items-center gap-2 text-slate-900 dark:text-white">
                        <div class="w-6 h-6 rounded bg-primary flex items-center justify-center text-white">
                            <span class="material-symbols-outlined text-[16px]">directions_car</span>
                        </div>
                        <span class="font-bold text-lg">MaBagnole</span>
                    </div>
                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed">
                        Connecting drivers with the perfect ride and a community of passionate travelers.
                    </p>
                </div>
                <div>
                    <h4 class="font-bold text-slate-900 dark:text-white mb-4">Company</h4>
                    <ul class="flex flex-col gap-2 text-sm text-slate-500 dark:text-slate-400">
                        <li><a class="hover:text-primary transition-colors" href="#">About Us</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Careers</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Press</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-slate-900 dark:text-white mb-4">Community</h4>
                    <ul class="flex flex-col gap-2 text-sm text-slate-500 dark:text-slate-400">
                        <li><a class="hover:text-primary transition-colors" href="#">Guidelines</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Discussions</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Events</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Become an Author</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-slate-900 dark:text-white mb-4">Support</h4>
                    <ul class="flex flex-col gap-2 text-sm text-slate-500 dark:text-slate-400">
                        <li><a class="hover:text-primary transition-colors" href="#">Help Center</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Safety</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Cancellation Options</a></li>
                    </ul>
                </div>
            </div>
            <div
                class="border-t border-slate-100 dark:border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-xs text-slate-400">© 2023 MaBagnole Inc. All rights reserved.</p>
                <div class="flex gap-4">
                    <a class="text-slate-400 hover:text-primary transition-colors" href="#">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-5 w-5" fill="currentColor" viewbox="0 0 24 24">
                            <path
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z">
                            </path>
                        </svg>
                    </a>
                    <a class="text-slate-400 hover:text-primary transition-colors" href="#">
                        <span class="sr-only">Twitter</span>
                        <svg class="h-5 w-5" fill="currentColor" viewbox="0 0 24 24">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>