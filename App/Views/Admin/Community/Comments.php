<?php

use App\Classes\Comment;

session_start();
require_once './../../../../vendor/autoload.php';
$comments = Comment::getAllComments();
?>

<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MaBagnole Admin - Comment Moderation</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
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
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24
        }

        .material-symbols-outlined.fill {
            font-variation-settings:
                'FILL' 1,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24
        }

        /* Custom scrollbar for better look in table container */
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background-color: #cbd5e1;
            border-radius: 20px;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white font-display">
    <div class="flex min-h-screen w-full flex-row overflow-hidden">
        <!-- Side Navigation -->
        <aside class="w-64 flex-shrink-0 border-r border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 hidden lg:flex flex-col">
            <div class="p-6 border-b border-slate-200 dark:border-slate-800">
                <div class="flex gap-3 items-center">
                    <div class="bg-center bg-no-repeat bg-cover rounded-full size-10 border border-slate-200 dark:border-slate-700" data-alt="User profile picture showing a smiling man" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCC3MqzxP3uuCVk6C4sk4fTJsCxAatwAedQrnFNEE81XukbhdewT1yiGX4mS4WCnkXevgNeM-02I1X66JUz42TMMcQ68dq_nAP77phDxymeLjN1tRlGVXQO2efmhDZcD8uZffnh8cN5wZEG7zwql5gr_Bg4IfGiJNwT8KjwJPHUwD-skAppLlzm5TWeD-fG_QWO70n3ryJtDcXk0NAZuahQ7YMC4mEynIfrX5waaxKjWI5n9Rf2p3oBw16vLBEZEwl4jp9SC0DRv5g");'></div>
                    <div class="flex flex-col">
                        <h1 class="text-slate-900 dark:text-white text-base font-bold leading-normal">MaBagnole Admin</h1>
                        <p class="text-primary text-sm font-medium leading-normal">Administrator</p>
                    </div>
                </div>
            </div>
            <nav class="flex-1 overflow-y-auto p-4 flex flex-col gap-2">
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors group" href="../dashboard.php">
                    <span class="material-symbols-outlined text-slate-500 dark:text-slate-400 group-hover:text-primary">dashboard</span>
                    <span class="text-sm font-medium">Dashboard</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors group" href="../car.php">
                    <span class="material-symbols-outlined text-slate-500 dark:text-slate-400 group-hover:text-primary">directions_car</span>
                    <span class="text-sm font-medium">Vehicles</span>
                </a>
                <div class="flex flex-col gap-1">
                    <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-primary/10 text-primary dark:bg-primary/20 dark:text-primary-400 transition-colors group" href="./dashboard.php">
                        <span class="material-symbols-outlined text-[20px] fill-1">menu_book</span>
                        <span class="text-sm font-bold">Blog</span>
                    </a>
                    <!-- Submenu -->
                    <div class="ml-9 flex flex-col border-l border-slate-200 dark:border-slate-700 pl-3 gap-1">
                        <a class="px-3 py-1.5 text-sm font-medium text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-blue-400" href="./articles.php">Articles</a>
                        <a class="px-3 py-1.5 text-sm font-medium text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-blue-400" href="./tags.php">Tags</a>
                        <a class="px-3 py-1.5 text-sm font-medium text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-blue-400" href="./theme.php">Themes</a>
                        <a class="px-3 py-1.5 text-sm font-bold text-primary dark:text-blue-400" href="./Comments.php">Commentaires</a>
                    </div>
                </div>
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors group" href="../category.php">
                    <span class="material-symbols-outlined text-slate-500 dark:text-slate-400 group-hover:text-primary">category</span>
                    <span class="text-sm font-medium">Categories</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors group" href="../reservations.php">
                    <span class="material-symbols-outlined text-slate-500 dark:text-slate-400 group-hover:text-primary">calendar_today</span>
                    <span class="text-sm font-medium">Reservations</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors group" href="#">
                    <span class="material-symbols-outlined text-slate-500 dark:text-slate-400 group-hover:text-primary">star</span>
                    <span class="text-sm font-medium">Reviews</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors group mt-auto" href="./../../../Controllers/AuthController.php?action=logout">
                    <span class="material-symbols-outlined text-slate-500 dark:text-slate-400 group-hover:text-red-500">logout</span>
                    <span class="text-sm font-medium group-hover:text-red-500">Log Out</span>
                </a>
            </nav>
        </aside>
        <!-- Main Content Area -->
        <main class="flex-1 flex flex-col h-screen overflow-hidden relative">
            <!-- Top Header -->
            <!-- <header class="h-16 flex items-center justify-between px-6 border-b border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 shrink-0">
                <div class="flex items-center gap-4 lg:hidden">
                    <button class="text-slate-500 dark:text-slate-400 hover:text-primary transition-colors">
                        <span class="material-symbols-outlined">menu</span>
                    </button>
                    <h2 class="text-lg font-bold">MaBagnole</h2>
                </div>
                <div class="hidden lg:flex flex-1 max-w-md ml-4">
                    <div class="relative w-full">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                        <input class="w-full pl-10 pr-4 py-2 rounded-lg bg-slate-100 dark:bg-slate-800 border-none focus:ring-2 focus:ring-primary/50 text-sm placeholder:text-slate-400 transition-shadow" placeholder="Search comments, authors or articles..." type="text" />
                    </div>
                </div>
                <div class="flex items-center gap-4 ml-auto">
                    <button class="relative p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors text-slate-500 dark:text-slate-400">
                        <span class="material-symbols-outlined">notifications</span>
                        <span class="absolute top-2 right-2 size-2 bg-red-500 rounded-full border-2 border-white dark:border-slate-900"></span>
                    </button>
                    <div class="flex items-center gap-3 pl-4 border-l border-slate-200 dark:border-slate-700">
                        <div class="text-right hidden sm:block">
                            <p class="text-sm font-semibold text-slate-900 dark:text-white">Admin User</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Super Admin</p>
                        </div>
                        <div class="size-9 rounded-full bg-cover bg-center border border-slate-200 dark:border-slate-700" data-alt="User profile picture placeholder" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBLmxH01N9GOuLjnF83tx2kFiZ2Bf_acIpMWrsqVdga3JyW3XCnzq25_lEPiT9pHPPv4frBhIV-CZOp7USr8f21jdP_RRieCS0cP7f7LdnIs1W-yfNXVx0oggAR1VnXJXi2HMRDhEGCTC9OMsi2HzW-YblDWUpMQEfa2GtDN9foKCfHCua-E2v8t4yP7Ng_W7uFyUochWoJU8Jof8Iqp_xDE8fxiyedZ7AyH17YgCOZCxEm7RM7bBreLWedFOQnGBxtc4ZO5KgknK4");'></div>
                    </div>
                </div>
            </header> -->
            <!-- Scrollable Page Content -->
            <div class="flex-1 overflow-y-auto custom-scrollbar p-6 lg:p-10">
                <div class="max-w-[1200px] mx-auto flex flex-col gap-8">
                    <!-- Breadcrumbs -->
                    <nav class="flex text-sm text-slate-500 dark:text-slate-400">
                        <a class="hover:text-primary transition-colors" href="#">Home</a>
                        <span class="mx-2">/</span>
                        <a class="hover:text-primary transition-colors" href="#">Blog</a>
                        <span class="mx-2">/</span>
                        <span class="text-slate-900 dark:text-white font-medium">Comments</span>
                    </nav>
                    <!-- Page Heading -->
                    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4">
                        <div class="flex flex-col gap-1">
                            <h1 class="text-3xl font-bold text-slate-900 dark:text-white tracking-tight">Comment Moderation</h1>
                            <p class="text-slate-500 dark:text-slate-400">Manage and moderate user comments on blog articles.</p>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
                        <!-- <div class="p-4 border-b border-slate-200 dark:border-slate-800 flex flex-col sm:flex-row gap-4 justify-between items-center">
                            <div class="flex gap-2 w-full sm:w-auto overflow-x-auto pb-2 sm:pb-0">
                                <button class="px-4 py-2 text-sm font-semibold rounded-lg bg-slate-100 dark:bg-slate-800 text-slate-900 dark:text-white whitespace-nowrap hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">All Comments</button>
                                <button class="px-4 py-2 text-sm font-medium rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 whitespace-nowrap transition-colors flex items-center gap-2">
                                    <span class="size-2 rounded-full bg-amber-500"></span>
                                    Pending
                                </button>
                                <button class="px-4 py-2 text-sm font-medium rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 whitespace-nowrap transition-colors flex items-center gap-2">
                                    <span class="size-2 rounded-full bg-green-500"></span>
                                    Published
                                </button>
                                <button class="px-4 py-2 text-sm font-medium rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 whitespace-nowrap transition-colors flex items-center gap-2">
                                    <span class="size-2 rounded-full bg-red-500"></span>
                                    Spam
                                </button>
                            </div>
                            <div class="flex items-center gap-2 w-full sm:w-auto">
                                <div class="relative flex-1 sm:flex-none">
                                    <span class="material-symbols-outlined absolute left-2.5 top-1/2 -translate-y-1/2 text-slate-400 text-[20px]">filter_list</span>
                                    <select class="w-full sm:w-40 pl-9 pr-8 py-2 text-sm border-slate-200 dark:border-slate-700 rounded-lg bg-white dark:bg-slate-900 text-slate-700 dark:text-slate-300 focus:ring-primary focus:border-primary">
                                        <option>Newest first</option>
                                        <option>Oldest first</option>
                                    </select>
                                </div>
                            </div>
                        </div> -->
                        <!-- Data Table -->
                        <div class="overflow-x-auto">
                            <table class="w-full text-left text-sm text-slate-600 dark:text-slate-400">
                                <thead class="bg-slate-50 dark:bg-slate-800/50 text-xs uppercase font-semibold text-slate-500 dark:text-slate-400">
                                    <tr>
                                        <th class="px-6 py-4" scope="col">Author</th>
                                        <th class="px-6 py-4 w-1/3" scope="col">Comment</th>
                                        <th class="px-6 py-4" scope="col">Article</th>
                                        <th class="px-6 py-4" scope="col">Date</th>
                                        <th class="px-6 py-4 text-right" scope="col">Actions</th>
                                    </tr>
                                </thead>

                                <?php
                                if (empty($comments)):
                                ?>
                                    <tbody>
                                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
                                            <td colspan="5" class="px-6 py-16 text-center">
                                                <div class="flex flex-col items-center justify-center gap-4">
                                                    <div class="bg-slate-100 dark:bg-slate-800 rounded-full p-4">
                                                        <span class="material-symbols-outlined text-slate-400 dark:text-slate-500 text-[40px]">comment</span>
                                                    </div>
                                                    <div class="flex flex-col gap-2">
                                                        <h3 class="text-slate-900 dark:text-white font-semibold">No comments yet!</h3>
                                                        <p class="text-slate-500 dark:text-slate-400 text-sm">There are no comments to moderate at this time.</p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                <?php else: ?>
                                    <?php foreach ($comments as $comment): ?>
                                        <?php if ($comment->deleted_at == NULL): ?>
                                        <tbody class="divide-y divide-slate-200 dark:divide-slate-800">
                                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors group">

                                                <td class="px-6 py-4">
                                                    <div class="flex items-center gap-3">
                                                        <div class="size-9 rounded-full bg-cover bg-center" data-alt="Avatar of Jean Dupont" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA-h1eY7vbZ8r1JKOZygDMlgLrKHVPFy8Z7-_y0iNn9RLfwPN2H6vf0DLrZoCpYI8aE9jvFnPjGl_b1TOR1TBTOIKX0Bx2oZQ6I7itCnd-jKyDoHO6dzbuIMu60XRmqFWOAGVONsHVI8pgDGfwfceEGljwomRljewNIh50FtTgCHbgxLK9mgFHUUr3mdTdh71BdRM44W0GPJZMF0pNrMKcMwBnFlkMfGxGUBLWpuVgdSaaz8edYPeu5TzYmAX209_Bb2UVEnvK4ujg");'></div>
                                                        <div>
                                                            <p class="font-semibold text-slate-900 dark:text-white"><?= $comment->nom ?></p>
                                                            <p class="text-xs text-slate-500"><?= $comment->email ?></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <p class="line-clamp-2 text-slate-800 dark:text-slate-300">
                                                        <?= $comment->texte ?>
                                                    </p>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <a class="text-primary hover:text-blue-700 hover:underline font-medium" href="#">Top 5 Road Trips</a>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <?php
                                                    $timeAgo = '';
                                                    if ($comment->created_at) {
                                                        $cDate = new DateTime($comment->created_at);
                                                        $now = new DateTime();
                                                        $diff = $now->diff($cDate);
                                                        if ($diff->y > 0) {
                                                            $timeAgo = $diff->y . 'year ago';
                                                        } elseif ($diff->m > 0) {
                                                            $timeAgo = $diff->m . 'month ago';
                                                        } elseif ($diff->d > 0) {
                                                            $timeAgo = $diff->d . 'day ago';
                                                        } else {
                                                            $timeAgo = 'Today';
                                                        }
                                                        echo $timeAgo;
                                                    } ?>
                                                </td>
                                                <td class="px-6 py-4 text-right">
                                                    <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                                        <a href="./../../../Controllers/CommentController.php?id=<?= $comment->id_comment ?>&action=delete" class="p-1.5 text-red-500 hover:bg-red-50 rounded dark:hover:bg-red-900/20 transition-colors" title="Delete">
                                                            <span class="material-symbols-outlined text-[20px]">delete</span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php endif;  ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>