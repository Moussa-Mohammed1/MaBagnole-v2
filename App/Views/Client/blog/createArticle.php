<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Add New Article - MaBagnole</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&amp;family=Noto+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet" />
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
                        "display": ["Plus Jakarta Sans", "Noto Sans", "sans-serif"]
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
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-white antialiased">
    <div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
        <!-- Header -->
        <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 px-10 py-3 sticky top-0 z-50">
            <div class="flex items-center gap-4 text-slate-900 dark:text-white">
                <div class="size-8 text-primary">
                    <span class="material-symbols-outlined text-3xl">directions_car</span>
                </div>
                <h2 class="text-slate-900 dark:text-white text-lg font-bold leading-tight tracking-[-0.015em]">MaBagnole</h2>
            </div>
            <div class="flex flex-1 justify-end gap-8">
                <div class="hidden md:flex items-center gap-9">
                    <a class="text-slate-900 dark:text-white text-sm font-medium leading-normal hover:text-primary transition-colors" href="../cars.php">Home</a>
                    <a class="text-slate-900 dark:text-white text-sm font-medium leading-normal hover:text-primary transition-colors" href="../cars.php">Fleet</a>
                    <a class="text-primary text-sm font-bold leading-normal" href="ArticlesList.php">Blog</a>
                    <a class="text-slate-900 dark:text-white text-sm font-medium leading-normal hover:text-primary transition-colors" href="../dashboard.php">My Bookings</a>
                </div>
                <div class="flex items-center gap-4">
                    <button class="flex items-center justify-center rounded-full size-10 bg-slate-100 dark:bg-slate-800 text-slate-900 dark:text-white hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">
                        <span class="material-symbols-outlined text-xl">notifications</span>
                    </button>
                    <div class="size-10 bg-slate-200 rounded-full overflow-hidden" data-alt="User profile avatar placeholder with abstract gradient">
                        <div class="w-full h-full bg-gradient-to-tr from-blue-400 to-purple-500"></div>
                    </div>
                </div>
            </div>
        </header>
        <div class="layout-container flex h-full grow flex-col">
            <div class="px-4 md:px-10 lg:px-40 flex flex-1 justify-center py-8">
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1 w-full gap-6">
                    <!-- Breadcrumbs -->
                    <div class="flex flex-wrap gap-2 px-4">
                        <a class="text-slate-500 dark:text-slate-400 text-sm font-medium leading-normal hover:underline" href="../cars.php">Home</a>
                        <span class="text-slate-500 dark:text-slate-400 text-sm font-medium leading-normal">/</span>
                        <a class="text-slate-500 dark:text-slate-400 text-sm font-medium leading-normal hover:underline" href="ArticlesList.php">Blog</a>
                        <span class="text-slate-500 dark:text-slate-400 text-sm font-medium leading-normal">/</span>
                        <span class="text-slate-900 dark:text-white text-sm font-medium leading-normal">Write Article</span>
                    </div>
                    <!-- Page Heading -->
                    <div class="flex flex-wrap justify-between gap-3 px-4">
                        <div class="flex min-w-72 flex-col gap-2">
                            <h1 class="text-slate-900 dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">Create New Post</h1>
                            <p class="text-slate-500 dark:text-slate-400 text-base font-normal leading-normal">Share your road trip experiences with the MaBagnole community.</p>
                        </div>
                    </div>
                    <!-- Main Form Container -->
                    <div class="flex flex-col gap-8 bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 p-6 md:p-10">
                        <!-- Title Input -->
                        <div class="flex flex-col gap-2">
                            <label class="text-slate-900 dark:text-white text-sm font-bold leading-normal">Article Title</label>
                            <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 h-14 placeholder:text-slate-400 px-4 text-xl font-semibold leading-normal" placeholder="Enter a catchy headline..." value="" />
                        </div>
                        <!-- Cover Image Uploader -->
                        <div class="flex flex-col gap-2">
                            <label class="text-slate-900 dark:text-white text-sm font-bold leading-normal">Cover Image</label>
                            <div class="flex flex-col items-center gap-6 rounded-lg border-2 border-dashed border-slate-300 dark:border-slate-700 bg-slate-50 dark:bg-slate-800/50 px-6 py-10 hover:border-primary transition-colors cursor-pointer group">
                                <div class="flex max-w-[480px] flex-col items-center gap-2">
                                    <span class="material-symbols-outlined text-4xl text-slate-400 group-hover:text-primary transition-colors">image</span>
                                    <p class="text-slate-900 dark:text-white text-base font-bold leading-tight text-center">Drag &amp; Drop or Click to Upload</p>
                                    <p class="text-slate-500 dark:text-slate-400 text-sm font-normal text-center">Recommended size: 1200x630px (JPG, PNG)</p>
                                </div>
                                <button class="flex items-center justify-center overflow-hidden rounded-lg h-9 px-4 bg-white dark:bg-slate-700 border border-slate-200 dark:border-slate-600 text-slate-700 dark:text-slate-200 text-sm font-bold shadow-sm hover:bg-slate-50 dark:hover:bg-slate-600">
                                    Browse Files
                                </button>
                            </div>
                        </div>
                        <!-- Rich Text Editor -->
                        <div class="flex flex-col gap-2">
                            <label class="text-slate-900 dark:text-white text-sm font-bold leading-normal">Content</label>
                            <div class="border border-slate-200 dark:border-slate-700 rounded-lg overflow-hidden bg-white dark:bg-slate-900 flex flex-col min-h-[400px]">
                                <!-- Toolbar -->
                                <div class="flex flex-wrap items-center gap-1 border-b border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 p-2">
                                    <div class="flex items-center gap-1 pr-2 border-r border-slate-200 dark:border-slate-700">
                                        <button class="p-1.5 rounded hover:bg-slate-200 dark:hover:bg-slate-700 text-slate-600 dark:text-slate-300 transition-colors" title="Bold">
                                            <span class="material-symbols-outlined text-[20px]">format_bold</span>
                                        </button>
                                        <button class="p-1.5 rounded hover:bg-slate-200 dark:hover:bg-slate-700 text-slate-600 dark:text-slate-300 transition-colors" title="Italic">
                                            <span class="material-symbols-outlined text-[20px]">format_italic</span>
                                        </button>
                                        <button class="p-1.5 rounded hover:bg-slate-200 dark:hover:bg-slate-700 text-slate-600 dark:text-slate-300 transition-colors" title="Underline">
                                            <span class="material-symbols-outlined text-[20px]">format_underlined</span>
                                        </button>
                                    </div>
                                    <div class="flex items-center gap-1 px-2 border-r border-slate-200 dark:border-slate-700">
                                        <button class="p-1.5 rounded hover:bg-slate-200 dark:hover:bg-slate-700 text-slate-600 dark:text-slate-300 transition-colors" title="H1">
                                            <span class="material-symbols-outlined text-[20px]">format_h1</span>
                                        </button>
                                        <button class="p-1.5 rounded hover:bg-slate-200 dark:hover:bg-slate-700 text-slate-600 dark:text-slate-300 transition-colors" title="H2">
                                            <span class="material-symbols-outlined text-[20px]">format_h2</span>
                                        </button>
                                    </div>
                                    <div class="flex items-center gap-1 px-2 border-r border-slate-200 dark:border-slate-700">
                                        <button class="p-1.5 rounded hover:bg-slate-200 dark:hover:bg-slate-700 text-slate-600 dark:text-slate-300 transition-colors" title="Bullet List">
                                            <span class="material-symbols-outlined text-[20px]">format_list_bulleted</span>
                                        </button>
                                        <button class="p-1.5 rounded hover:bg-slate-200 dark:hover:bg-slate-700 text-slate-600 dark:text-slate-300 transition-colors" title="Ordered List">
                                            <span class="material-symbols-outlined text-[20px]">format_list_numbered</span>
                                        </button>
                                    </div>
                                    <div class="flex items-center gap-1 pl-2">
                                        <button class="p-1.5 rounded hover:bg-slate-200 dark:hover:bg-slate-700 text-slate-600 dark:text-slate-300 transition-colors" title="Link">
                                            <span class="material-symbols-outlined text-[20px]">link</span>
                                        </button>
                                        <button class="p-1.5 rounded hover:bg-slate-200 dark:hover:bg-slate-700 text-slate-600 dark:text-slate-300 transition-colors" title="Insert Image">
                                            <span class="material-symbols-outlined text-[20px]">add_photo_alternate</span>
                                        </button>
                                        <button class="p-1.5 rounded hover:bg-slate-200 dark:hover:bg-slate-700 text-slate-600 dark:text-slate-300 transition-colors" title="Insert Video">
                                            <span class="material-symbols-outlined text-[20px]">movie</span>
                                        </button>
                                    </div>
                                </div>
                                <!-- Editor Area -->
                                <textarea class="w-full flex-1 p-4 text-base text-slate-700 dark:text-slate-300 bg-transparent resize-none outline-none leading-relaxed" placeholder="Start telling your story here..."></textarea>
                            </div>
                        </div>
                        <!-- Tags Input -->
                        <div class="flex flex-col gap-3">
                            <label class="text-slate-900 dark:text-white text-sm font-bold leading-normal">Tags</label>
                            <div class="flex flex-col gap-3">
                                <div class="flex flex-wrap gap-2 items-center min-h-[48px] p-2 border border-slate-200 dark:border-slate-700 rounded-lg bg-slate-50 dark:bg-slate-800 focus-within:ring-2 focus-within:ring-primary/50 focus-within:border-primary">
                                    <!-- Chips -->
                                    <div class="flex items-center gap-1 bg-primary/10 dark:bg-primary/20 text-primary px-3 py-1 rounded-full text-sm font-semibold">
                                        #RoadTrip
                                        <button class="hover:text-primary/70 transition-colors flex items-center">
                                            <span class="material-symbols-outlined text-[16px]">close</span>
                                        </button>
                                    </div>
                                    <div class="flex items-center gap-1 bg-primary/10 dark:bg-primary/20 text-primary px-3 py-1 rounded-full text-sm font-semibold">
                                        #Adventure
                                        <button class="hover:text-primary/70 transition-colors flex items-center">
                                            <span class="material-symbols-outlined text-[16px]">close</span>
                                        </button>
                                    </div>
                                    <!-- Input -->
                                    <input class="flex-1 bg-transparent border-none outline-none text-slate-900 dark:text-white text-sm min-w-[120px]" placeholder="Add a tag and press Enter" type="text" />
                                </div>
                                <p class="text-slate-500 dark:text-slate-400 text-xs">Suggested: #Summer, #Family, #Convertible, #OffRoad</p>
                            </div>
                        </div>
                        <!-- Action Bar -->
                        <div class="pt-6 border-t border-slate-100 dark:border-slate-800 flex flex-col-reverse sm:flex-row justify-end gap-4">
                            <button class="flex items-center justify-center h-12 px-6 rounded-lg border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-200 font-bold text-sm bg-transparent hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                                Save Draft
                            </button>
                            <button class="flex items-center justify-center gap-2 h-12 px-8 rounded-lg bg-primary text-white font-bold text-sm shadow-md hover:bg-blue-600 transition-colors">
                                <span class="material-symbols-outlined text-[20px]">send</span>
                                Submit Article
                            </button>
                        </div>
                    </div>
                    <div class="h-12"></div> <!-- Spacer -->
                </div>
            </div>
        </div>
    </div>
</body>

</html>