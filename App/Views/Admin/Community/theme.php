<?php

use App\Classes\Theme;

require_once './../../../../vendor/autoload.php';
session_start();

$themes = Theme::getAllThemes();

?>

<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Admin Theme Management - MaBagnole</title>
    <!-- Google Fonts & Material Symbols -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Tailwind Configuration -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#277bf1",
                        "primary-dark": "#1d5eb8",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101722",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 overflow-hidden h-screen flex">
    <!-- Sidebar -->
    <aside class="w-64 bg-white dark:bg-slate-900 border-r border-slate-200 dark:border-slate-800 flex-col hidden md:flex h-full z-10">
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
                    <a class="px-3 py-1.5 text-sm font-bold text-primary dark:text-blue-400" href="./theme.php">Themes</a>
                    <a class="px-3 py-1.5 text-sm font-medium text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-blue-400" href="./Comments.php">Commentaires</a>
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
    <main class="flex-1 flex flex-col relative min-w-0 overflow-hidden">

        <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 px-8 py-3 shrink-0">
            <div class="flex items-center gap-4 text-slate-900 dark:text-white md:hidden">
                <button class="text-slate-500 hover:text-slate-700 dark:hover:text-slate-300">
                    <span class="material-symbols-outlined">menu</span>
                </button>
            </div>
            <div class="hidden md:flex flex-wrap gap-2 items-center">
                <a class="text-slate-500 hover:text-primary text-sm font-medium leading-normal transition-colors" href="#">Dashboard</a>
                <span class="material-symbols-outlined text-slate-400 text-sm">chevron_right</span>
                <a class="text-slate-500 hover:text-primary text-sm font-medium leading-normal transition-colors" href="#">Blog</a>
                <span class="material-symbols-outlined text-slate-400 text-sm">chevron_right</span>
                <span class="text-slate-900 dark:text-white text-sm font-medium leading-normal">Themes</span>
            </div>
        </header>

        <div class="flex-1 overflow-y-auto bg-background-light dark:bg-background-dark p-6 md:p-10 scroll-smooth">
            <div class="max-w-6xl mx-auto w-full flex flex-col gap-6">

                <div class="flex flex-col md:flex-row md:items-start justify-between gap-6">
                    <div class="flex flex-col gap-2 max-w-2xl">
                        <h2 class="text-slate-900 dark:text-white text-3xl font-black leading-tight tracking-tight">Blog Themes</h2>
                        <p class="text-slate-500 dark:text-slate-400 text-base font-normal leading-normal">Manage the categories and topics for the MaBagnole blog. Organize your content to help customers find relevant articles.</p>
                    </div>
                    <button onclick="showForm();" class="flex shrink-0 items-center justify-center gap-2 rounded-lg bg-primary hover:bg-primary-dark text-white px-5 py-2.5 text-sm font-bold leading-normal transition-all shadow-sm hover:shadow-md">
                        <span class="material-symbols-outlined text-[20px]">add</span>
                        <span>Add New Theme</span>
                    </button>

                </div>

                <div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-50 dark:bg-slate-800/50 border-b border-slate-200 dark:border-slate-800">
                                    <th class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400 w-1/4">Image</th>
                                    <th class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400 w-1/4">Theme Name</th>
                                    <th class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400 text-right w-24">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                                <?php if (empty($themes)): ?>
                                    <tr>
                                        <td colspan="3" class="py-12 px-6 text-center">
                                            <div class="flex flex-col items-center gap-3">
                                                <span class="material-symbols-outlined text-slate-300 dark:text-slate-600 text-5xl">bookmark_add</span>
                                                <p class="text-slate-500 dark:text-slate-400 text-base font-medium">No themes found</p>
                                                <p class="text-slate-400 dark:text-slate-500 text-sm">Create your first theme to get started</p>
                                            </div>
                                        </td>
                                    </tr>
                                <?php else: ?>
                                    <?php foreach ($themes as $theme): ?>
                                        <tr class="group hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                                            <td class="py-4 px-6">
                                                <div class="flex items-center gap-3">
                                                    <div class="size-10 rounded bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 flex items-center justify-center">
                                                        <img src="<?= $theme->image ?>" alt="">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-4 px-6">
                                                <code class="px-2 py-1 rounded bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-xs "><?= $theme->titre ?></code>
                                            </td>
                                            <td class="py-4 px-6 text-right">
                                                <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                                    <button onclick="updateTheme(this);" data-theme-id="<?= $theme->id ?>" data-theme-title="<?= htmlspecialchars($theme->titre) ?>" data-theme-image="<?= htmlspecialchars($theme->image) ?>" class="p-1.5 text-slate-400 hover:text-primary hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-lg transition-colors" title="Edit">
                                                        <span class="material-symbols-outlined text-[18px]">edit</span>
                                                    </button>
                                                    <a href="./../../../Controllers/ThemeController.php?id=<?= $theme->id_theme ?>&action=delete" class="p-1.5 text-slate-400 hover:text-red-500 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg transition-colors" title="Delete">
                                                        <span class="material-symbols-outlined text-[18px]">delete</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="h-10"></div>
        </div>
        <!-- Slide-over Drawer / Modal for Add Theme (Demonstration) -->
        <!-- In a real app, this would be conditionally rendered or have transform classes to slide in -->
        <div id="formAdd" class="absolute hidden  inset-0 z-20 overflow-hidden pointer-events-none">
            <!-- Backdrop -->
            <div class="absolute inset-0 bg-slate-900/20 backdrop-blur-sm pointer-events-auto transition-opacity"></div>
            <!-- Drawer Panel -->
            <style>
                @keyframes shows {
                    from {
                        right: -300px;
                    }

                    to {
                        right: 0px;
                    }
                }

                #formAdd {
                    animation: shows;
                    animation-duration: 0.7s;
                }
            </style>
            <div class="pointer-events-auto absolute inset-y-0 right-0 flex max-w-full pl-10">
                <form action="./../../../Controllers/ThemeController.php?action=add" method="POST"
                    class=" flex h-full w-screen max-w-md flex-col bg-white dark:bg-slate-900 shadow-2xl border-l border-slate-200 dark:border-slate-800">

                    <div class="flex items-center justify-between px-6 py-5 border-b border-slate-200 dark:border-slate-800">
                        <h2 class="text-lg font-bold text-slate-900 dark:text-white">Add New Theme</h2>
                        <button onclick="closeForm();" class="text-slate-400 hover:text-slate-600 dark:hover:text-slate-300 transition-colors">
                            <span class="material-symbols-outlined">close</span>
                        </button>
                    </div>
                    <div class="flex-1 overflow-y-auto p-6 flex flex-col gap-6">
                        <!-- Theme Name -->
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-medium text-slate-700 dark:text-slate-300" for="theme-name">Theme Name</label>
                            <input name="titre" class="w-full rounded-lg border-slate-300 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white p-2.5 text-sm focus:ring-primary focus:border-primary placeholder:text-slate-400" id="theme-name" placeholder="e.g. Eco-Friendly Travel" type="text" />
                            <p class="text-xs text-slate-500">The name is how it appears on your site.</p>
                        </div>


                        <!-- Status -->
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-medium text-slate-700 dark:text-slate-300" for="description">Image</label>
                            <input name="image" class="w-full rounded-lg border-slate-300 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white p-2.5 text-sm focus:ring-primary focus:border-primary placeholder:text-slate-400" id="" placeholder="image url" type="text" />
                        </div>
                    </div>
                    <!-- Drawer Footer -->
                    <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-900">
                        <button onclick="closeForm();" class="px-4 py-2 text-sm font-medium text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white transition-colors">Cancel</button>
                        <button type="submit" class="px-4 py-2 text-sm font-bold text-white bg-primary hover:bg-primary-dark rounded-lg shadow-sm transition-colors">Save Theme</button>
                    </div>
                </form>
                <script>
                    let form = document.getElementById('formAdd');

                    function closeForm() {
                        form.classList.contains('hidden') ? form.classList.remove('hidden') : form.classList.add('hidden');

                    }

                    function showForm() {
                        form.classList.contains('hidden') ? form.classList.remove('hidden') : form.classList.add('hidden');
                    }
                </script>
            </div>
        </div>
        <!-- Slide-over Drawer / Modal for Update Theme -->
        <div id="formUpdate" class="absolute hidden inset-0 z-20 overflow-hidden pointer-events-none">
            <!-- Backdrop -->
            <div class="absolute inset-0 bg-slate-900/20 backdrop-blur-sm pointer-events-auto transition-opacity"></div>
            <!-- Drawer Panel -->
            <style>
                @keyframes slidesUpdate {
                    from {
                        right: -300px;
                    }

                    to {
                        right: 0px;
                    }
                }

                #formUpdate {
                    animation: slidesUpdate;
                    animation-duration: 0.7s;
                }
            </style>
            <div class="pointer-events-auto absolute inset-y-0 right-0 flex max-w-full pl-10">
                <form action="./../../../Controllers/ThemeController.php?action=update" method="POST"
                    class=" flex h-full w-screen max-w-md flex-col bg-white dark:bg-slate-900 shadow-2xl border-l border-slate-200 dark:border-slate-800">

                    <div class="flex items-center justify-between px-6 py-5 border-b border-slate-200 dark:border-slate-800">
                        <h2 class="text-lg font-bold text-slate-900 dark:text-white">Update Theme</h2>
                        <button type="button" onclick="closeUpdateForm();" class="text-slate-400 hover:text-slate-600 dark:hover:text-slate-300 transition-colors">
                            <span class="material-symbols-outlined">close</span>
                        </button>
                    </div>
                    <div class="flex-1 overflow-y-auto p-6 flex flex-col gap-6">
                        <input type="hidden" name="id" id="update-theme-id" />

                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-medium text-slate-700 dark:text-slate-300" for="update-theme-name">Theme Name</label>
                            <input id="update-theme-name" name="titre" class="w-full rounded-lg border-slate-300 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white p-2.5 text-sm focus:ring-primary focus:border-primary placeholder:text-slate-400" placeholder="e.g. Eco-Friendly Travel" type="text" />
                            <p class="text-xs text-slate-500">The name is how it appears on your site.</p>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-medium text-slate-700 dark:text-slate-300" for="update-theme-image">Image</label>
                            <input id="update-theme-image" name="image" class="w-full rounded-lg border-slate-300 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white p-2.5 text-sm focus:ring-primary focus:border-primary placeholder:text-slate-400" placeholder="image url" type="text" />
                        </div>
                    </div>
                    <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-900">
                        <button type="button" onclick="closeUpdateForm();" class="px-4 py-2 text-sm font-medium text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white transition-colors">Cancel</button>
                        <button type="submit" class="px-4 py-2 text-sm font-bold text-white bg-primary hover:bg-primary-dark rounded-lg shadow-sm transition-colors">Update Theme</button>
                    </div>
                </form>
            </div>
        </div>
        <script>
            function updateTheme(button) {
                let themeId = button.getAttribute('data-theme-id');
                let themeTitle = button.getAttribute('data-theme-title');
                let themeImage = button.getAttribute('data-theme-image');

                document.getElementById('update-theme-id').value = themeId;
                document.getElementById('update-theme-name').value = themeTitle;
                document.getElementById('update-theme-image').value = themeImage;

                let updateForm = document.getElementById('formUpdate');
                updateForm.classList.add('hidden');
                updateForm.classList.remove('hidden');
            }

            function closeUpdateForm() {
                let updateForm = document.getElementById('formUpdate');
                updateForm.classList.add('hidden');
            }
        </script>
    </main>
    </main>
</body>

</html>