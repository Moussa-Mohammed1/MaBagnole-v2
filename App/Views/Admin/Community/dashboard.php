<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MaBagnole - Tag Management</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" />
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
        /* Custom scrollbar for better aesthetics in admin panels */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
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

        .dark ::-webkit-scrollbar-thumb:hover {
            background: #475569;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-white antialiased overflow-hidden">
    <div class="flex h-screen w-full">
        <!-- Sidebar -->
        <aside class="hidden w-64 flex-col border-r border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 md:flex">
            <div class="flex h-full flex-col justify-between p-4">
                <div class="flex flex-col gap-6">
                    <!-- Brand -->
                    <div class="flex items-center gap-3 px-2">
                        <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" data-alt="MaBagnole Logo - Abstract car wheel" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAz55WO_iF8h2RJMGXrrYx8ZBezldpnRU8Gj311ugHPVz1-BOTWvDQD4qvztBrX03UvPkPRGsESpCxBbha9wabG1wFVMXdUHIM0s8ACIpCAxk8ZGjX9Ktb866sc0ftExkRYiG1AP_O07J_rjsuhZZ0GcEMk04R7ySFfvT3P7uLO312ladSzpneQYXKmlYRlJ8BgX-5eBr31QXmWvCVFp7bRMDohT3FSjJ005D-8zwE7cNL-72ZvMPAPMahVbnU6xmeNUUsF9DUS7_o");'></div>
                        <div class="flex flex-col">
                            <h1 class="text-slate-900 dark:text-white text-base font-bold leading-normal">MaBagnole</h1>
                            <p class="text-slate-500 dark:text-slate-400 text-xs font-normal leading-normal">Admin Console</p>
                        </div>
                    </div>
                    
                    <nav class="flex flex-col gap-1">
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors" href="#">
                            <span class="material-symbols-outlined text-[20px]">dashboard</span>
                            <span class="text-sm font-medium">Dashboard</span>
                        </a>
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors" href="#">
                            <span class="material-symbols-outlined text-[20px]">directions_car</span>
                            <span class="text-sm font-medium">Fleet</span>
                        </a>
                        <!-- Active State -->
                        <div class="flex flex-col gap-1">
                            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-primary/10 text-primary dark:text-blue-400" href="#">
                                <span class="material-symbols-outlined text-[20px] fill-1">menu_book</span>
                                <span class="text-sm font-bold">Blog</span>
                            </a>
                            <!-- Submenu -->
                            <div class="ml-9 flex flex-col border-l border-slate-200 dark:border-slate-700 pl-3 gap-1">
                                <a class="px-3 py-1.5 text-sm font-medium text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-blue-400" href="#">Posts</a>
                                <a class="px-3 py-1.5 text-sm font-bold text-primary dark:text-blue-400" href="#">Tags</a>
                                <a class="px-3 py-1.5 text-sm font-medium text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-blue-400" href="#">Categories</a>
                            </div>
                        </div>
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors" href="#">
                            <span class="material-symbols-outlined text-[20px]">group</span>
                            <span class="text-sm font-medium">Users</span>
                        </a>
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors" href="#">
                            <span class="material-symbols-outlined text-[20px]">settings</span>
                            <span class="text-sm font-medium">Settings</span>
                        </a>
                    </nav>
                </div>
                <!-- User Profile -->
                <div class="flex items-center gap-3 px-3 py-3 border-t border-slate-200 dark:border-slate-800 mt-4">
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-8" data-alt="User avatar" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCIi658vRr4RGpiwoqblP1vMwUyYf0uWC_vwSUcSF7ozPJ7TE7UJy_aw-jlnwHyMxcCSYsqnoRenCeXrbeRVFgswKUSIjxcIObhocz-afJFs-Opdb3hJGwOT3p-_uhhD3S5LRa8Oal9qrTf3iIjlvzf_tz5uJgRuXa-fQRB6JgcDVW78HAsXHzoozHqbAGW0jvianmcJP4q7GwY7uxSJy83tuatMqmJTENojsbk9tBqJQtT3talKAEe0fcBMHoSmJopVB6pD_bSvUI");'></div>
                    <div class="flex flex-col flex-1 min-w-0">
                        <p class="text-slate-900 dark:text-white text-sm font-medium truncate">Alex Admin</p>
                        <p class="text-slate-500 dark:text-slate-400 text-xs truncate">alex@mabagnole.com</p>
                    </div>
                    <button class="text-slate-400 hover:text-slate-600 dark:hover:text-slate-200">
                        <span class="material-symbols-outlined text-[20px]">logout</span>
                    </button>
                </div>
            </div>
        </aside>
        <!-- Main Content Area -->
        <main class="flex flex-1 flex-col h-full overflow-hidden relative">
            <!-- Top Header -->
            <header class="flex items-center justify-between border-b border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 px-6 py-3 h-16 shrink-0 z-20">
                <div class="flex items-center gap-4 md:hidden">
                    <button class="text-slate-600 dark:text-slate-300">
                        <span class="material-symbols-outlined">menu</span>
                    </button>
                    <div class="h-6 w-px bg-slate-200 dark:bg-slate-700"></div>
                </div>
                <!-- Search -->
                <div class="relative hidden md:block w-96">
                    <span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 material-symbols-outlined text-[20px]">search</span>
                    <input class="w-full h-10 pl-10 pr-4 rounded-lg bg-slate-100 dark:bg-slate-800 border-none text-sm text-slate-900 dark:text-white placeholder-slate-500 focus:ring-2 focus:ring-primary/50" placeholder="Search across admin..." type="text" />
                </div>
                <!-- Actions -->
                <div class="flex items-center gap-3 ml-auto">
                    <button class="flex items-center justify-center size-10 rounded-full hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-300 transition-colors relative">
                        <span class="material-symbols-outlined text-[22px]">notifications</span>
                        <span class="absolute top-2 right-2 size-2 bg-red-500 rounded-full border-2 border-white dark:border-slate-900"></span>
                    </button>
                    <button class="flex items-center justify-center size-10 rounded-full hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-300 transition-colors">
                        <span class="material-symbols-outlined text-[22px]">help</span>
                    </button>
                </div>
            </header>
            <!-- Scrollable Page Content -->
            <div class="flex-1 overflow-y-auto p-4 md:p-8 scroll-smooth">
                <div class="max-w-7xl mx-auto flex flex-col gap-8">
                    <!-- Breadcrumbs -->
                    <nav class="flex items-center text-sm font-medium text-slate-500 dark:text-slate-400">
                        <a class="hover:text-primary transition-colors" href="#">Dashboard</a>
                        <span class="mx-2 text-slate-300 dark:text-slate-600">/</span>
                        <a class="hover:text-primary transition-colors" href="#">Blog</a>
                        <span class="mx-2 text-slate-300 dark:text-slate-600">/</span>
                        <span class="text-slate-900 dark:text-white">Tags</span>
                    </nav>
                    <!-- Page Heading & Actions -->
                    <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4">
                        <div class="flex flex-col gap-1">
                            <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight text-slate-900 dark:text-white">Tag Management</h2>
                            <p class="text-slate-500 dark:text-slate-400 text-base">Organize your blog content by managing the taxonomy tags.</p>
                        </div>
                        <div class="flex gap-3">
                            <button class="flex items-center gap-2 px-4 py-2.5 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg text-sm font-semibold text-slate-700 dark:text-slate-200 hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors shadow-sm">
                                <span class="material-symbols-outlined text-[20px]">download</span>
                                Export
                            </button>
                            <button class="flex items-center gap-2 px-4 py-2.5 bg-primary hover:bg-blue-600 text-white rounded-lg text-sm font-bold transition-colors shadow-md shadow-blue-500/20">
                                <span class="material-symbols-outlined text-[20px]">add</span>
                                Create Tag
                            </button>
                        </div>
                    </div>
                    <!-- Stats Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="bg-white dark:bg-slate-800 rounded-xl p-5 border border-slate-200 dark:border-slate-700 shadow-sm flex items-center justify-between">
                            <div>
                                <p class="text-slate-500 dark:text-slate-400 text-sm font-medium mb-1">Total Tags</p>
                                <p class="text-2xl font-bold text-slate-900 dark:text-white">124</p>
                            </div>
                            <div class="size-10 rounded-lg bg-blue-50 dark:bg-blue-900/20 flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined">label</span>
                            </div>
                        </div>
                        <div class="bg-white dark:bg-slate-800 rounded-xl p-5 border border-slate-200 dark:border-slate-700 shadow-sm flex items-center justify-between">
                            <div>
                                <p class="text-slate-500 dark:text-slate-400 text-sm font-medium mb-1">Most Used Tag</p>
                                <p class="text-2xl font-bold text-slate-900 dark:text-white">Road Trip</p>
                            </div>
                            <div class="size-10 rounded-lg bg-green-50 dark:bg-green-900/20 flex items-center justify-center text-green-600 dark:text-green-400">
                                <span class="material-symbols-outlined">trending_up</span>
                            </div>
                        </div>
                        <div class="bg-white dark:bg-slate-800 rounded-xl p-5 border border-slate-200 dark:border-slate-700 shadow-sm flex items-center justify-between">
                            <div>
                                <p class="text-slate-500 dark:text-slate-400 text-sm font-medium mb-1">Unused Tags</p>
                                <p class="text-2xl font-bold text-slate-900 dark:text-white">15</p>
                            </div>
                            <div class="size-10 rounded-lg bg-orange-50 dark:bg-orange-900/20 flex items-center justify-center text-orange-600 dark:text-orange-400">
                                <span class="material-symbols-outlined">warning</span>
                            </div>
                        </div>
                    </div>
                    <!-- Main Content Grid -->
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
                        <!-- Left Column: Tag List (Takes up 2/3 on large screens) -->
                        <div class="lg:col-span-2 flex flex-col gap-4">
                            <!-- Toolbar -->
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 bg-white dark:bg-slate-800 p-4 rounded-t-xl border-b border-slate-200 dark:border-slate-700 shadow-sm">
                                <div class="relative flex-1 max-w-md">
                                    <span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 material-symbols-outlined text-[18px]">search</span>
                                    <input class="w-full h-9 pl-9 pr-4 rounded-lg bg-slate-50 dark:bg-slate-900 border-slate-200 dark:border-slate-700 text-sm focus:border-primary focus:ring-primary" placeholder="Search tags..." type="text" />
                                </div>
                                <div class="flex items-center gap-2">
                                    <button class="flex items-center gap-2 px-3 py-2 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg text-sm font-medium text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700">
                                        <span class="material-symbols-outlined text-[18px]">filter_list</span>
                                        Filter
                                    </button>
                                    <select class="px-3 py-2 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg text-sm font-medium text-slate-600 dark:text-slate-300 focus:border-primary focus:ring-primary">
                                        <option>Sort by Name</option>
                                        <option>Sort by Count</option>
                                        <option>Sort by Date</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Table Container -->
                            <div class="bg-white dark:bg-slate-800 rounded-b-xl shadow-sm border border-slate-200 dark:border-slate-700 overflow-hidden -mt-4">
                                <div class="overflow-x-auto">
                                    <table class="w-full text-left text-sm text-slate-600 dark:text-slate-400">
                                        <thead class="bg-slate-50 dark:bg-slate-900/50 text-xs uppercase font-semibold text-slate-500 dark:text-slate-400">
                                            <tr>
                                                <th class="px-6 py-4 w-10">
                                                    <input class="rounded border-slate-300 text-primary focus:ring-primary" type="checkbox" />
                                                </th>
                                                <th class="px-6 py-4">Tag Name</th>
                                                <th class="px-6 py-4">Slug</th>
                                                <th class="px-6 py-4 text-center">Posts</th>
                                                <th class="px-6 py-4 text-right">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                                            <!-- Row 1 -->
                                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors group">
                                                <td class="px-6 py-4">
                                                    <input class="rounded border-slate-300 text-primary focus:ring-primary" type="checkbox" />
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div class="font-medium text-slate-900 dark:text-white">Road Trip</div>
                                                </td>
                                                <td class="px-6 py-4 font-mono text-xs text-slate-500">road-trip</td>
                                                <td class="px-6 py-4 text-center">
                                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900/50 dark:text-blue-300">
                                                        42
                                                    </span>
                                                </td>
                                                <td class="px-6 py-4 text-right">
                                                    <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                                        <button class="text-slate-400 hover:text-primary transition-colors" title="Edit">
                                                            <span class="material-symbols-outlined text-[18px]">edit</span>
                                                        </button>
                                                        <button class="text-slate-400 hover:text-red-500 transition-colors" title="Delete">
                                                            <span class="material-symbols-outlined text-[18px]">delete</span>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Row 2 -->
                                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors group">
                                                <td class="px-6 py-4">
                                                    <input class="rounded border-slate-300 text-primary focus:ring-primary" type="checkbox" />
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div class="font-medium text-slate-900 dark:text-white">Electric Vehicle</div>
                                                </td>
                                                <td class="px-6 py-4 font-mono text-xs text-slate-500">electric-vehicle</td>
                                                <td class="px-6 py-4 text-center">
                                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900/50 dark:text-blue-300">
                                                        28
                                                    </span>
                                                </td>
                                                <td class="px-6 py-4 text-right">
                                                    <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                                        <button class="text-slate-400 hover:text-primary transition-colors" title="Edit">
                                                            <span class="material-symbols-outlined text-[18px]">edit</span>
                                                        </button>
                                                        <button class="text-slate-400 hover:text-red-500 transition-colors" title="Delete">
                                                            <span class="material-symbols-outlined text-[18px]">delete</span>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Row 3 -->
                                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors group">
                                                <td class="px-6 py-4">
                                                    <input class="rounded border-slate-300 text-primary focus:ring-primary" type="checkbox" />
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div class="font-medium text-slate-900 dark:text-white">Family Travel</div>
                                                </td>
                                                <td class="px-6 py-4 font-mono text-xs text-slate-500">family-travel</td>
                                                <td class="px-6 py-4 text-center">
                                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-800 dark:bg-slate-700 dark:text-slate-300">
                                                        12
                                                    </span>
                                                </td>
                                                <td class="px-6 py-4 text-right">
                                                    <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                                        <button class="text-slate-400 hover:text-primary transition-colors" title="Edit">
                                                            <span class="material-symbols-outlined text-[18px]">edit</span>
                                                        </button>
                                                        <button class="text-slate-400 hover:text-red-500 transition-colors" title="Delete">
                                                            <span class="material-symbols-outlined text-[18px]">delete</span>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Row 4 -->
                                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors group">
                                                <td class="px-6 py-4">
                                                    <input class="rounded border-slate-300 text-primary focus:ring-primary" type="checkbox" />
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div class="font-medium text-slate-900 dark:text-white">Maintenance Tips</div>
                                                </td>
                                                <td class="px-6 py-4 font-mono text-xs text-slate-500">maintenance-tips</td>
                                                <td class="px-6 py-4 text-center">
                                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-800 dark:bg-slate-700 dark:text-slate-300">
                                                        8
                                                    </span>
                                                </td>
                                                <td class="px-6 py-4 text-right">
                                                    <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                                        <button class="text-slate-400 hover:text-primary transition-colors" title="Edit">
                                                            <span class="material-symbols-outlined text-[18px]">edit</span>
                                                        </button>
                                                        <button class="text-slate-400 hover:text-red-500 transition-colors" title="Delete">
                                                            <span class="material-symbols-outlined text-[18px]">delete</span>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Row 5 -->
                                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors group">
                                                <td class="px-6 py-4">
                                                    <input class="rounded border-slate-300 text-primary focus:ring-primary" type="checkbox" />
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div class="font-medium text-slate-900 dark:text-white">Budget Friendly</div>
                                                </td>
                                                <td class="px-6 py-4 font-mono text-xs text-slate-500">budget-friendly</td>
                                                <td class="px-6 py-4 text-center">
                                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-800 dark:bg-slate-700 dark:text-slate-300">
                                                        0
                                                    </span>
                                                </td>
                                                <td class="px-6 py-4 text-right">
                                                    <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                                        <button class="text-slate-400 hover:text-primary transition-colors" title="Edit">
                                                            <span class="material-symbols-outlined text-[18px]">edit</span>
                                                        </button>
                                                        <button class="text-slate-400 hover:text-red-500 transition-colors" title="Delete">
                                                            <span class="material-symbols-outlined text-[18px]">delete</span>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Pagination -->
                                <div class="flex items-center justify-between px-6 py-4 bg-white dark:bg-slate-800 border-t border-slate-200 dark:border-slate-700">
                                    <p class="text-sm text-slate-500 dark:text-slate-400">
                                        Showing <span class="font-medium text-slate-900 dark:text-white">1</span> to <span class="font-medium text-slate-900 dark:text-white">10</span> of <span class="font-medium text-slate-900 dark:text-white">124</span> results
                                    </p>
                                    <div class="flex gap-2">
                                        <button class="px-3 py-1 text-sm font-medium text-slate-600 bg-white border border-slate-300 rounded-md hover:bg-slate-50 disabled:opacity-50 dark:bg-slate-800 dark:text-slate-300 dark:border-slate-600 dark:hover:bg-slate-700" disabled="">
                                            Previous
                                        </button>
                                        <button class="px-3 py-1 text-sm font-medium text-slate-600 bg-white border border-slate-300 rounded-md hover:bg-slate-50 dark:bg-slate-800 dark:text-slate-300 dark:border-slate-600 dark:hover:bg-slate-700">
                                            Next
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Right Column: Quick Add (Takes up 1/3) -->
                        <div class="lg:col-span-1">
                            <div class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-slate-200 dark:border-slate-700 sticky top-8">
                                <div class="p-6 border-b border-slate-200 dark:border-slate-700">
                                    <h3 class="text-lg font-bold text-slate-900 dark:text-white">Quick Add</h3>
                                    <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">Add new tags to the system individually or in bulk.</p>
                                </div>
                                <div class="p-6 flex flex-col gap-6">
                                    <!-- Tabs -->
                                    <div class="flex p-1 bg-slate-100 dark:bg-slate-700/50 rounded-lg">
                                        <button class="flex-1 py-1.5 text-sm font-medium rounded-md shadow bg-white dark:bg-slate-600 text-slate-900 dark:text-white transition-all">Single</button>
                                        <button class="flex-1 py-1.5 text-sm font-medium rounded-md text-slate-500 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white transition-all">Bulk</button>
                                    </div>
                                    <!-- Single Form (Active) -->
                                    <div class="flex flex-col gap-4">
                                        <div class="flex flex-col gap-2">
                                            <label class="text-sm font-semibold text-slate-700 dark:text-slate-200">Tag Name</label>
                                            <input class="rounded-lg border-slate-200 dark:border-slate-600 bg-slate-50 dark:bg-slate-900 text-sm focus:ring-primary focus:border-primary" placeholder="e.g. Vintage Cars" type="text" />
                                        </div>
                                        <div class="flex flex-col gap-2">
                                            <label class="text-sm font-semibold text-slate-700 dark:text-slate-200">Slug (Optional)</label>
                                            <input class="rounded-lg border-slate-200 dark:border-slate-600 bg-slate-50 dark:bg-slate-900 text-sm focus:ring-primary focus:border-primary" placeholder="auto-generated" type="text" />
                                            <p class="text-xs text-slate-400">If left empty, the slug will be automatically generated from the name.</p>
                                        </div>
                                        <button class="w-full py-2.5 bg-primary hover:bg-blue-600 text-white font-semibold rounded-lg shadow-md shadow-blue-500/20 transition-all flex justify-center items-center gap-2">
                                            <span class="material-symbols-outlined text-[18px]">add</span>
                                            Add Tag
                                        </button>
                                    </div>
                                    <!-- Separator for preview (Alternative Bulk View mockup) -->
                                    <div class="relative py-2">
                                        <div class="absolute inset-0 flex items-center">
                                            <div class="w-full border-t border-slate-200 dark:border-slate-700"></div>
                                        </div>
                                        <div class="relative flex justify-center">
                                            <span class="px-2 bg-white dark:bg-slate-800 text-xs text-slate-400 font-medium">OR BULK UPLOAD</span>
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-200">CSV or List</label>
                                        <textarea class="rounded-lg border-slate-200 dark:border-slate-600 bg-slate-50 dark:bg-slate-900 text-sm focus:ring-primary focus:border-primary resize-none" placeholder="Enter tags separated by commas or new lines..." rows="4"></textarea>
                                        <button class="w-full py-2 bg-white dark:bg-slate-700 border border-slate-200 dark:border-slate-600 text-slate-700 dark:text-white font-medium rounded-lg hover:bg-slate-50 dark:hover:bg-slate-600 transition-all text-sm">
                                            Process Bulk List
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>