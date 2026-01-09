<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>My Favorite Articles - MaBagnole</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
                        "DEFAULT": "0.375rem", // rounded-md is approx 6px
                        "md": "0.375rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white font-display min-h-screen flex flex-col">
    <!-- Top Navigation -->
    <header class="sticky top-0 z-50 w-full bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800">
        <div class="px-4 md:px-10 py-3 flex items-center justify-between mx-auto max-w-[1440px]">
            <div class="flex items-center gap-8">
                <a class="flex items-center gap-3 text-slate-900 dark:text-white" href="../cars.php">
                    <div class="size-8 text-primary">
                        <svg class="h-full w-full" fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.57829 8.57829C5.52816 11.6284 3.451 15.5145 2.60947 19.7452C1.76794 23.9758 2.19984 28.361 3.85056 32.3462C5.50128 36.3314 8.29667 39.7376 11.8832 42.134C15.4698 44.5305 19.6865 45.8096 24 45.8096C28.3135 45.8096 32.5302 44.5305 36.1168 42.134C39.7033 39.7375 42.4987 36.3314 44.1494 32.3462C45.8002 28.361 46.2321 23.9758 45.3905 19.7452C44.549 15.5145 42.4718 11.6284 39.4217 8.57829L24 24L8.57829 8.57829Z" fill="currentColor"></path>
                        </svg>
                    </div>
                    <h2 class="text-xl font-bold tracking-tight">MaBagnole</h2>
                </a>
                <nav class="hidden md:flex items-center gap-6">
                    <a class="text-slate-600 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="../cars.php">Rentals</a>
                    <a class="text-slate-600 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="ArticlesList.php">Blog</a>
                    <a class="text-primary text-sm font-medium hover:text-primary transition-colors" href="favoris.php">My Favorites</a>
                    <a class="text-slate-600 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="../dashboard.php">Profile</a>
                </nav>
            </div>
            <div class="flex items-center gap-4">
                <div class="hidden md:block relative w-64">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-slate-400">
                        <span class="material-symbols-outlined text-xl">search</span>
                    </div>
                    <input class="block w-full p-2.5 pl-10 text-sm text-slate-900 border border-slate-200 rounded-lg bg-slate-50 focus:ring-primary focus:border-primary dark:bg-slate-800 dark:border-slate-700 dark:placeholder-slate-400 dark:text-white" placeholder="Search articles..." type="text" />
                </div>
                <button class="bg-center bg-no-repeat bg-cover rounded-full size-10 border border-slate-200 dark:border-slate-700" data-alt="User profile picture placeholder" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD7yrZqmGYD2pNaC3PgsIlATPX-xilO8UAbkqQnNlpX4HzwYjDWLZ-P3HQdowJIzeDoo2JrhgGHUDS6ypJyy6yL7jE9dVaPOV1lIaIiPpHBKKjbNwsJm2g6nljmhom4fxfI1dw3Olsu-FoYs_XKUH0hbC387yyHNm42wg7tzYwJXIGgezI5ceiUVqCPYvqwWWLp3-KoTM75ScGC4FIftnFgS-5boKgRPT11mqPAgqj1GRNzcVVH1X5zYfcm_IYKaNYSzlRHiZaOpxM");'></button>
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <main class="flex-grow w-full max-w-[1120px] mx-auto px-4 md:px-10 py-8">
        <!-- Page Heading -->
        <div class="mb-8">
            <h1 class="text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white tracking-tight mb-2">My Saved Articles</h1>
            <p class="text-slate-500 dark:text-slate-400">You have 12 saved articles in your library.</p>
        </div>
        <!-- Filters and Controls Toolbar -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
            <!-- Category Chips -->
            <div class="flex flex-wrap gap-2">
                <button class="px-4 py-2 rounded-lg bg-primary text-white text-sm font-medium transition-colors">All</button>
                <button class="px-4 py-2 rounded-lg bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-700 text-sm font-medium transition-colors">Road Trips</button>
                <button class="px-4 py-2 rounded-lg bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-700 text-sm font-medium transition-colors">Maintenance</button>
                <button class="px-4 py-2 rounded-lg bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-700 text-sm font-medium transition-colors">News</button>
            </div>
            <!-- View Toggle & Sort -->
            <div class="flex items-center gap-4 ml-auto">
                <div class="hidden sm:flex items-center bg-slate-100 dark:bg-slate-800 rounded-lg p-1">
                    <button class="p-1.5 rounded-md bg-white dark:bg-slate-700 shadow-sm text-primary">
                        <span class="material-symbols-outlined text-xl block">grid_view</span>
                    </button>
                    <button class="p-1.5 rounded-md text-slate-500 dark:text-slate-400 hover:text-slate-700 dark:hover:text-slate-200">
                        <span class="material-symbols-outlined text-xl block">view_list</span>
                    </button>
                </div>
                <select class="form-select bg-transparent border-0 border-b border-slate-200 dark:border-slate-700 text-sm font-medium text-slate-600 dark:text-slate-300 focus:ring-0 cursor-pointer py-2 pr-8 pl-0">
                    <option>Sort by: Date Added</option>
                    <option>Sort by: Newest</option>
                    <option>Sort by: Oldest</option>
                </select>
            </div>
        </div>
        <!-- Articles Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            <!-- Card 1 -->
            <article class="group bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-slate-100 dark:border-slate-700 overflow-hidden flex flex-col hover:-translate-y-1 hover:shadow-md transition-all duration-300">
                <div class="relative h-48 overflow-hidden">
                    <div class="absolute top-3 right-3 z-10">
                        <button class="bg-white/90 dark:bg-slate-900/90 p-2 rounded-full shadow-sm text-primary hover:bg-red-50 hover:text-red-500 transition-colors" title="Remove from favorites">
                            <span class="material-symbols-outlined text-[20px] font-variation-settings-'FILL'1 block">favorite</span>
                        </button>
                    </div>
                    <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Scenic winding road through mountains in France" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB_D44jwN96ic2mGEsLyXP0_5OfDy8cte-vxsfOnm56n2hkVO3TS4XhZcHztU9oqBJ_TWAcGKnoLzUFP5Gc9Snc--ANYE5ol3WSDEosbabEFbYEZOgQZtuLfgFpa_zhwykVi-VUXuUYNAAUhOCsbmBJcWDR0HD9SSB2kR5w2fJr-OlgWtrAj0z7oo6fLPpx4UyCIa8iN0CV6R-wtIgnv938SQlRGXX43PhhCddKz4oueysJX8PzysYcLcIQH5m3K0CYr6xf3eEHih0");'></div>
                </div>
                <div class="p-5 flex flex-col flex-grow">
                    <div class="mb-3">
                        <span class="inline-block px-2.5 py-1 rounded-md bg-primary/10 text-primary text-xs font-semibold tracking-wide">
                            Travel
                        </span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2 line-clamp-2 group-hover:text-primary transition-colors">
                        Top 10 Road Trips in France
                    </h3>
                    <p class="text-slate-500 dark:text-slate-400 text-sm line-clamp-3 mb-4 flex-grow">
                        Explore the most scenic routes through the French countryside, from the Lavender fields of Provence to the cliffs of Normandy. Discover hidden gems along the way.
                    </p>
                    <div class="pt-4 border-t border-slate-100 dark:border-slate-700 flex items-center justify-between mt-auto">
                        <span class="text-xs text-slate-400 font-medium">Added 2 days ago</span>
                        <a class="text-sm font-bold text-primary hover:underline flex items-center gap-1" href="#">
                            Read More <span class="material-symbols-outlined text-base">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </article>
            <!-- Card 2 -->
            <article class="group bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-slate-100 dark:border-slate-700 overflow-hidden flex flex-col hover:-translate-y-1 hover:shadow-md transition-all duration-300">
                <div class="relative h-48 overflow-hidden">
                    <div class="absolute top-3 right-3 z-10">
                        <button class="bg-white/90 dark:bg-slate-900/90 p-2 rounded-full shadow-sm text-primary hover:bg-red-50 hover:text-red-500 transition-colors" title="Remove from favorites">
                            <span class="material-symbols-outlined text-[20px] font-variation-settings-'FILL'1 block">favorite</span>
                        </button>
                    </div>
                    <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Mechanic checking car oil level with dipstick" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCfLz53re3L8qW1O2A1Z8kpG61syayM2rXTGIGzcEByCyuBr_1d3oxYwFrXX-yWqIz6SBTQV_S3VVm7dOsh8sxXV59IQ2aYxXNvMaXKv6UDp3af2n-KeG-rqp2wzh3y2Jmd32ZJ61jaVUmG8dSiL3dAAG3esN_mT6A6Cam0BJehVUVJa8Rxq5kR9RBhjS7DYKeRI4GtQpq4a2O0na5hFVQXpDtzfxQcI8Ivkg7-PNEvtwO4NqjnDNwFOS6mrOJMs97lInIA8cr8wxY");'></div>
                </div>
                <div class="p-5 flex flex-col flex-grow">
                    <div class="mb-3">
                        <span class="inline-block px-2.5 py-1 rounded-md bg-primary/10 text-primary text-xs font-semibold tracking-wide">
                            Maintenance
                        </span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2 line-clamp-2 group-hover:text-primary transition-colors">
                        How to Check Your Oil Level
                    </h3>
                    <p class="text-slate-500 dark:text-slate-400 text-sm line-clamp-3 mb-4 flex-grow">
                        Regular maintenance keeps your rental running smoothly. Learn the simple steps to check your oil level and ensure a safe journey for you and your passengers.
                    </p>
                    <div class="pt-4 border-t border-slate-100 dark:border-slate-700 flex items-center justify-between mt-auto">
                        <span class="text-xs text-slate-400 font-medium">Added 5 days ago</span>
                        <a class="text-sm font-bold text-primary hover:underline flex items-center gap-1" href="#">
                            Read More <span class="material-symbols-outlined text-base">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </article>
            <!-- Card 3 -->
            <article class="group bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-slate-100 dark:border-slate-700 overflow-hidden flex flex-col hover:-translate-y-1 hover:shadow-md transition-all duration-300">
                <div class="relative h-48 overflow-hidden">
                    <div class="absolute top-3 right-3 z-10">
                        <button class="bg-white/90 dark:bg-slate-900/90 p-2 rounded-full shadow-sm text-primary hover:bg-red-50 hover:text-red-500 transition-colors" title="Remove from favorites">
                            <span class="material-symbols-outlined text-[20px] font-variation-settings-'FILL'1 block">favorite</span>
                        </button>
                    </div>
                    <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Modern electric cars charging at station" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBh_gNzc-wF8c0UY6hD-GDT_kJXqmaADBYJK6Oa_csOi9gZOaxtrDQtIsDDz00zsiJ_-058O7y8Cpk2QHM9i3IObD1CJpuFB0PVwcXRGAojhLKTmtHfvtbYHCUXN1XKFPuQrGLOKZYDlFqQ7Ko53IA5HGK9QDiGvl0S-8pehYVDfM4VdgB-ZM2r-KebN0tp6JL_ZcstkSLeGdd_WuaYOGXSFVsTBxreYPR2YTzqF5CsinoqqzItGmRvQS-PtLJOgOO1iZDdH5Bjq1o");'></div>
                </div>
                <div class="p-5 flex flex-col flex-grow">
                    <div class="mb-3">
                        <span class="inline-block px-2.5 py-1 rounded-md bg-primary/10 text-primary text-xs font-semibold tracking-wide">
                            News
                        </span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2 line-clamp-2 group-hover:text-primary transition-colors">
                        The New Electric Fleet Arrives
                    </h3>
                    <p class="text-slate-500 dark:text-slate-400 text-sm line-clamp-3 mb-4 flex-grow">
                        MaBagnole is going green! We are excited to announce the arrival of 500 new electric vehicles to our fleet. Experience quiet, eco-friendly driving today.
                    </p>
                    <div class="pt-4 border-t border-slate-100 dark:border-slate-700 flex items-center justify-between mt-auto">
                        <span class="text-xs text-slate-400 font-medium">Added 1 week ago</span>
                        <a class="text-sm font-bold text-primary hover:underline flex items-center gap-1" href="#">
                            Read More <span class="material-symbols-outlined text-base">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </article>
            <!-- Card 4 -->
            <article class="group bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-slate-100 dark:border-slate-700 overflow-hidden flex flex-col hover:-translate-y-1 hover:shadow-md transition-all duration-300">
                <div class="relative h-48 overflow-hidden">
                    <div class="absolute top-3 right-3 z-10">
                        <button class="bg-white/90 dark:bg-slate-900/90 p-2 rounded-full shadow-sm text-primary hover:bg-red-50 hover:text-red-500 transition-colors" title="Remove from favorites">
                            <span class="material-symbols-outlined text-[20px] font-variation-settings-'FILL'1 block">favorite</span>
                        </button>
                    </div>
                    <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Family packing luggage into a rental car trunk" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBgCp3xMcq3ew58h7y3ASIASszNczElHnwf-8jlasbNgwqS_pIXwBeyIxgxF08bk9nYb0z2hNEFe58kVQjNpeUNlHhX5rHLtIxPTnQ9UvKKPUK_R0xZHFgPQsOFarOF7GfBgIswr_WWSeuRLSukbOL3jaEdI7KGz7s_thnzzfaYeO3n0jMamnm3j6kxx_Utek0HnuQzoV7-bLUHfB4Ybik5o60WpyY280vUytKuDzjfiFk9HIGa-ilknc7bTXd9lIfe_gBeWQw1z6c");'></div>
                </div>
                <div class="p-5 flex flex-col flex-grow">
                    <div class="mb-3">
                        <span class="inline-block px-2.5 py-1 rounded-md bg-primary/10 text-primary text-xs font-semibold tracking-wide">
                            Car Tips
                        </span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2 line-clamp-2 group-hover:text-primary transition-colors">
                        Packing Like a Pro: Trunk Tetris
                    </h3>
                    <p class="text-slate-500 dark:text-slate-400 text-sm line-clamp-3 mb-4 flex-grow">
                        Traveling with the whole family? Learn how to maximize your trunk space and ensure safe weight distribution for your next big adventure.
                    </p>
                    <div class="pt-4 border-t border-slate-100 dark:border-slate-700 flex items-center justify-between mt-auto">
                        <span class="text-xs text-slate-400 font-medium">Added 2 weeks ago</span>
                        <a class="text-sm font-bold text-primary hover:underline flex items-center gap-1" href="#">
                            Read More <span class="material-symbols-outlined text-base">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </article>
            <!-- Card 5 -->
            <article class="group bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-slate-100 dark:border-slate-700 overflow-hidden flex flex-col hover:-translate-y-1 hover:shadow-md transition-all duration-300">
                <div class="relative h-48 overflow-hidden">
                    <div class="absolute top-3 right-3 z-10">
                        <button class="bg-white/90 dark:bg-slate-900/90 p-2 rounded-full shadow-sm text-primary hover:bg-red-50 hover:text-red-500 transition-colors" title="Remove from favorites">
                            <span class="material-symbols-outlined text-[20px] font-variation-settings-'FILL'1 block">favorite</span>
                        </button>
                    </div>
                    <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Close up of tire tread pattern" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAydobAy362iAZkjwL-VcKaGQbGfoxwN29s2wqshDIvYGL3vQ5_SDW1ctXvPofIZSq1vZHW6ru6XIWnKIjI67rdP6JoJZ1_UIOFtA4RYlMLsHdeioArOrpWguXf4bNYgdOAsTlU6qiK7QeStynZ6LmNy5Od6wrw8yVOZ4Dhqj1DnoWfiuwvyadYVE31S7mKIPzHrY01AvQF7IZ2xKshooYpLiJ9MB6lgVxg4rmjtU47yOdOIPyjZzJ1PDDqpnMNelIk6yqmDOjAPwA");'></div>
                </div>
                <div class="p-5 flex flex-col flex-grow">
                    <div class="mb-3">
                        <span class="inline-block px-2.5 py-1 rounded-md bg-primary/10 text-primary text-xs font-semibold tracking-wide">
                            Safety
                        </span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2 line-clamp-2 group-hover:text-primary transition-colors">
                        Understanding Tire Safety Ratings
                    </h3>
                    <p class="text-slate-500 dark:text-slate-400 text-sm line-clamp-3 mb-4 flex-grow">
                        Don't ignore your tires. We break down what those numbers on the sidewall mean and how they affect your rental car's handling in rain or snow.
                    </p>
                    <div class="pt-4 border-t border-slate-100 dark:border-slate-700 flex items-center justify-between mt-auto">
                        <span class="text-xs text-slate-400 font-medium">Added 3 weeks ago</span>
                        <a class="text-sm font-bold text-primary hover:underline flex items-center gap-1" href="#">
                            Read More <span class="material-symbols-outlined text-base">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </article>
            <!-- Card 6 -->
            <article class="group bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-slate-100 dark:border-slate-700 overflow-hidden flex flex-col hover:-translate-y-1 hover:shadow-md transition-all duration-300">
                <div class="relative h-48 overflow-hidden">
                    <div class="absolute top-3 right-3 z-10">
                        <button class="bg-white/90 dark:bg-slate-900/90 p-2 rounded-full shadow-sm text-primary hover:bg-red-50 hover:text-red-500 transition-colors" title="Remove from favorites">
                            <span class="material-symbols-outlined text-[20px] font-variation-settings-'FILL'1 block">favorite</span>
                        </button>
                    </div>
                    <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Luxury convertible driving along the coast at sunset" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBrNpiKNKii9rgGb2BmARycv35qKHK_4Queam8kBpJHtQsicypRzdmvd5K4wX7XLo2T2oXV17zhP_cu_dC7JQ6Jt-617BXQhOvMtsKOCXwBIvwvqzryNYZa4j1obbqnARbgby4xIcwjbrGAT1ZSS8kCHu3XlEDYxhXXVMrV600LRv-V0J0znXyzosdDIS3CGVQKAg5-yBNNcTeMgaJFt66HFhBIM14Dr-aONvhzMIfo28t9ddVjVNegh5v30t0g5wV2cuDC0vOtf_4");'></div>
                </div>
                <div class="p-5 flex flex-col flex-grow">
                    <div class="mb-3">
                        <span class="inline-block px-2.5 py-1 rounded-md bg-primary/10 text-primary text-xs font-semibold tracking-wide">
                            Luxury
                        </span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2 line-clamp-2 group-hover:text-primary transition-colors">
                        Best Weekend Getaways in a Convertible
                    </h3>
                    <p class="text-slate-500 dark:text-slate-400 text-sm line-clamp-3 mb-4 flex-grow">
                        Feel the wind in your hair. We've curated a list of the best routes near major cities perfect for renting a convertible this summer.
                    </p>
                    <div class="pt-4 border-t border-slate-100 dark:border-slate-700 flex items-center justify-between mt-auto">
                        <span class="text-xs text-slate-400 font-medium">Added 1 month ago</span>
                        <a class="text-sm font-bold text-primary hover:underline flex items-center gap-1" href="#">
                            Read More <span class="material-symbols-outlined text-base">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </article>
        </div>
        <!-- Pagination -->
        <div class="flex justify-center items-center gap-2">
            <button class="flex items-center justify-center w-10 h-10 rounded-lg text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors disabled:opacity-50 disabled:cursor-not-allowed">
                <span class="material-symbols-outlined">chevron_left</span>
            </button>
            <button class="flex items-center justify-center w-10 h-10 rounded-lg bg-primary text-white font-medium shadow-md shadow-primary/30">1</button>
            <button class="flex items-center justify-center w-10 h-10 rounded-lg text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors font-medium">2</button>
            <button class="flex items-center justify-center w-10 h-10 rounded-lg text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors font-medium">3</button>
            <span class="text-slate-400 px-1">...</span>
            <button class="flex items-center justify-center w-10 h-10 rounded-lg text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors font-medium">8</button>
            <button class="flex items-center justify-center w-10 h-10 rounded-lg text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                <span class="material-symbols-outlined">chevron_right</span>
            </button>
        </div>
    </main>
    <!-- Footer -->
    <footer class="bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800 py-10">
        <div class="max-w-[1440px] mx-auto px-4 md:px-10 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="flex items-center gap-2 text-slate-900 dark:text-white">
                <div class="size-6 text-primary">
                    <svg class="h-full w-full" fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.57829 8.57829C5.52816 11.6284 3.451 15.5145 2.60947 19.7452C1.76794 23.9758 2.19984 28.361 3.85056 32.3462C5.50128 36.3314 8.29667 39.7376 11.8832 42.134C15.4698 44.5305 19.6865 45.8096 24 45.8096C28.3135 45.8096 32.5302 44.5305 36.1168 42.134C39.7033 39.7375 42.4987 36.3314 44.1494 32.3462C45.8002 28.361 46.2321 23.9758 45.3905 19.7452C44.549 15.5145 42.4718 11.6284 39.4217 8.57829L24 24L8.57829 8.57829Z" fill="currentColor"></path>
                    </svg>
                </div>
                <span class="font-bold text-lg">MaBagnole</span>
            </div>
            <div class="text-sm text-slate-500 dark:text-slate-400">
                © 2024 MaBagnole. All rights reserved.
            </div>
            <div class="flex gap-6">
                <a class="text-slate-500 hover:text-primary transition-colors" href="#">Privacy Policy</a>
                <a class="text-slate-500 hover:text-primary transition-colors" href="#">Terms of Service</a>
                <a class="text-slate-500 hover:text-primary transition-colors" href="#">Contact Support</a>
            </div>
        </div>
    </footer>
</body>

</html>