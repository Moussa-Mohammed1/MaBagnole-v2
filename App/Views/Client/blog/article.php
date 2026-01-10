<?php

use App\Classes\Article;
use App\Classes\Comment;
use App\Classes\ArticleTags;

session_start();
require_once __DIR__ . '/../../../../vendor/autoload.php';
$logged = $_SESSION['logged'];

$id_article = $_GET['id_article'] ?? null;

if (!$id_article) {
    header('Location: ArticlesList.php');
    exit();
}

$articleData = Article::getArticleById($id_article);

if (!$articleData || empty($articleData)) {
    header('Location: ArticlesList.php');
    exit();
}

$article = $articleData[0];

$comments = Comment::getCommentByArticle($id_article);
$commentCount = $comments ? count($comments) : 0;

$tags = ArticleTags::getArticleTags($id_article);
?>
<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MaBagnole - Article Details</title>

    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Theme Config -->
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
                        "display": ["Plus Jakarta Sans", "sans-serif"],
                        "body": ["Noto Sans", "sans-serif"],
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

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-50 font-display antialiased selection:bg-primary/30 selection:text-primary">
    <!-- Navigation -->
    <header class="sticky top-0 z-50 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md border-b border-slate-200 dark:border-slate-800">
        <div class="px-4 md:px-10 py-3 flex items-center justify-between whitespace-nowrap">
            <div class="flex items-center gap-8">
                <a class="flex items-center gap-3 group" href="../cars.php">
                    <h2 class="text-slate-900 dark:text-white text-xl font-bold tracking-tight">MaBagnole</h2>
                </a>
                <nav class="hidden md:flex items-center gap-6">
                    <a class="text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-primary text-sm font-medium transition-colors" href="../cars.php">Fleet</a>
                    <a class="text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-primary text-sm font-medium transition-colors" href="../dashboard.php">My Bookings</a>
                    <div class="relative group">
                        <button class="flex items-center gap-2 text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-primary text-sm font-medium transition-colors">
                            Community
                            <span class="material-symbols-outlined text-[18px] group-hover:rotate-180 transition-transform duration-200">expand_more</span>
                        </button>
                        <div class="absolute left-0 mt-1 w-48 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 py-2 z-50">
                            <a href="theme.php" class="block px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-primary/10 hover:text-primary dark:hover:bg-primary/20 transition-colors">
                                <span class="material-symbols-outlined text-[18px] inline mr-2 align-middle">palette</span>
                                Themes
                            </a>
                            <a href="favoris.php" class="block px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-primary/10 hover:text-primary dark:hover:bg-primary/20 transition-colors">
                                <span class="material-symbols-outlined text-[18px] inline mr-2 align-middle">favorite</span>
                                Favorites
                            </a>
                            <hr class="border-slate-200 dark:border-slate-700 my-1">
                            <a href="ArticlesList.php#comments" class="block px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-primary/10 hover:text-primary dark:hover:bg-primary/20 transition-colors">
                                <span class="material-symbols-outlined text-[18px] inline mr-2 align-middle">chat_bubble</span>
                                Comments
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="flex items-center gap-4">
                <div class="flex items-center gap-3">
                    <div class="hidden sm:flex flex-col items-end">
                        <span class="text-sm font-bold text-slate-900 dark:text-white"><?= $logged->nom ?></span>
                        <span class="text-xs text-slate-500 dark:text-slate-400"><?= $logged->email ?></span>
                    </div>
                    <div class="size-10 rounded-full bg-gradient-to-br from-primary to-blue-600 flex items-center justify-center text-white font-bold">
                        <?= $logged->nom[0] ?>
                    </div>
                </div>
                <a href="../../auth/login.php" class="flex items-center gap-2 px-4 py-2 rounded-lg text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                    <span class="material-symbols-outlined text-[20px]">logout</span>
                    <span class="hidden sm:inline text-sm font-medium">Logout</span>
                </a>
            </div>
    </header>
    <main class="flex-1 flex justify-center py-8 px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col max-w-[800px] w-full gap-8">
            <!-- Breadcrumbs -->
            <nav class="flex flex-wrap gap-2 text-sm">
                <a class="text-slate-500 hover:text-primary transition-colors" href="../cars.php">Home</a>
                <span class="text-slate-400">/</span>
                <a class="text-slate-500 hover:text-primary transition-colors" href="ArticlesList.php">Blog</a>
                <span class="text-slate-400">/</span>
                <a class="text-slate-500 hover:text-primary transition-colors" href="ArticlesList.php"><?= htmlspecialchars($article->theme_name) ?></a>
                <span class="text-slate-400">/</span>
                <span class="text-slate-900 dark:text-white font-medium line-clamp-1"><?= htmlspecialchars($article->titre) ?></span>
            </nav>
            <article class="flex flex-col gap-6">
                <!-- Title & Tags -->
                <div class="flex flex-col gap-4">
                    <div class="flex gap-2 flex-wrap">
                        <span class="inline-flex items-center rounded-full bg-primary/10 px-3 py-1 text-xs font-medium text-primary ring-1 ring-inset ring-primary/20"><?= htmlspecialchars($article->theme_name) ?></span>
                        <?php if ($tags): ?>
                            <?php foreach ($tags as $tag): ?>
                                <span class="inline-flex items-center rounded-full bg-slate-100 dark:bg-slate-800 px-3 py-1 text-xs font-medium text-slate-600 dark:text-slate-300 ring-1 ring-inset ring-slate-500/10"><?= htmlspecialchars($tag->nom_tag) ?></span>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <h1 class="text-4xl md:text-5xl font-black leading-[1.1] tracking-tight text-slate-900 dark:text-white">
                        <?= htmlspecialchars($article->titre) ?>
                    </h1>
                </div>
                <!-- Author & Actions Bar -->
                <div class="flex flex-col sm:flex-row sm:items-center justify-between border-y border-slate-200 dark:border-slate-800 py-4 gap-4">
                    <div class="flex items-center gap-3">
                        <div class="size-12 rounded-full bg-gradient-to-br from-primary to-blue-600 flex items-center justify-center text-white font-bold text-lg">
                            <?= strtoupper(substr($article->author_name, 0, 1)) ?>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-slate-900 dark:text-white font-bold leading-none"><?= htmlspecialchars($article->author_name) ?></span>
                            <span class="text-slate-500 dark:text-slate-400 text-sm mt-1"><?= date('M d, Y', strtotime($article->created_at)) ?></span>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <a class="flex items-center gap-2 px-4 py-2 rounded-full bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors text-slate-600 dark:text-slate-300" href="#comments">
                            <span class="material-symbols-outlined text-[20px]">chat_bubble</span>
                            <span class="text-sm font-medium"><?= $commentCount ?></span>
                        </a>
                    </div>
                </div>
                <!-- Feature Image -->
                <div class="relative w-full aspect-video rounded-xl overflow-hidden shadow-sm bg-slate-200 dark:bg-slate-800">
                    <?php if (!empty($article->image)): ?>
                        <img src="<?= htmlspecialchars($article->image) ?>" alt="<?= htmlspecialchars($article->titre) ?>" class="absolute inset-0 w-full h-full object-cover">
                    <?php else: ?>
                        <div class="absolute inset-0 flex items-center justify-center text-slate-400">
                            <span class="material-symbols-outlined text-6xl">image</span>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="prose prose-lg prose-slate dark:prose-invert max-w-none mt-4 font-body">
                    <?= htmlspecialchars($article->texte) ?>
                </div>
                <!-- Tags Footer -->
                <div class="flex flex-wrap gap-2 pt-8 border-t border-slate-200 dark:border-slate-800 mt-8">
                    <span class="text-sm text-slate-500 font-medium mr-2">Tags:</span>
                    <?php if ($tags): ?>
                        <?php foreach ($tags as $tag): ?>
                            <a class="text-sm text-slate-600 dark:text-slate-300 hover:text-primary transition-colors" href="ArticlesList.php?tag=<?= $tag->id_tag ?>">#<?= htmlspecialchars($tag->nom_tag) ?></a>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <span class="text-sm text-slate-400">No tags</span>
                    <?php endif; ?>
                </div>
            </article>
            <section class="bg-white dark:bg-slate-900/50 rounded-xl p-6 md:p-8 shadow-sm ring-1 ring-slate-200 dark:ring-slate-800 mt-4" id="comments">
                <div class="flex items-center justify-between mb-8">
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white">Discussion <span class="text-slate-400 font-normal text-lg ml-1">(<?= $commentCount ?>)</span></h3>
                </div>
                <form action="../../../Controllers/CommentController.php?action=add" method="POST" class="flex gap-4 mb-10">
                    <div class="shrink-0 size-10 rounded-full bg-gradient-to-br from-primary to-blue-600 flex items-center justify-center text-white font-bold hidden sm:flex">
                        <?= strtoupper(substr($logged->nom, 0, 1)) ?>
                    </div>
                    <div class="flex-1">
                        <textarea name="texte" required class="w-full rounded-lg bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 text-slate-900 dark:text-white placeholder:text-slate-400 focus:ring-2 focus:ring-primary focus:border-transparent min-h-[100px] p-4 resize-y text-sm" placeholder="Share your thoughts or ask a question..."></textarea>
                        <input type="hidden" name="id_article" value="<?= $id_article ?>">
                        <input type="hidden" name="id_client" value="<?= $logged->id_user ?>">
                        <div class="flex justify-end mt-2">
                            <button type="submit" class="bg-primary hover:bg-blue-600 text-white font-medium px-6 py-2 rounded-lg transition-colors text-sm">Post Comment</button>
                        </div>
                    </div>
                </form>
                <div class="flex flex-col gap-8">
                    <?php if ($comments && count($comments) > 0): ?>
                        <?php foreach ($comments as $comment):
                            $isOwner = ($logged->id_user == $comment->id_client);
                        ?>
                            <!-- Comment -->
                            <div class="flex gap-4 group/comment" data-comment-id="<?= $comment->id_comment ?>">
                                <div class="shrink-0 size-10 rounded-full bg-gradient-to-br from-slate-400 to-slate-600 flex items-center justify-center text-white font-bold">
                                    <?= strtoupper(substr($comment->user_name ?? 'U', 0, 1)) ?>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center justify-between mb-1">
                                        <div class="flex items-center gap-2">
                                            <span class="font-bold text-slate-900 dark:text-white"><?= htmlspecialchars($comment->user_name ?? 'Unknown') ?></span>
                                            <span class="text-xs text-slate-400"><?= date('M d, Y', strtotime($comment->created_at)) ?></span>
                                        </div>
                                        <?php if ($isOwner): ?>
                                            <div class="flex items-center gap-2">
                                                <button onclick="updateComment(<?= $comment->id_comment ?>, '<?= htmlspecialchars($comment->texte) ?>')" class="text-slate-400 hover:text-primary text-xs font-medium transition-colors">
                                                    <span class="material-symbols-outlined text-[16px]">edit</span>
                                                </button>
                                                <a href="./../../../Controllers/CommentController.php?action=delete&id_comment=<?= $comment->id_comment ?>" onclick="deleteComment(<?= $comment->id_comment ?>)" class="text-slate-400 hover:text-red-500 text-xs font-medium transition-colors">
                                                    <span class="material-symbols-outlined text-[16px]">delete</span>
                                        </a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="comment-content" id="comment-content-<?= $comment->id_comment ?>">
                                        <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed">
                                            <?= htmlspecialchars($comment->texte)?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="text-center py-12">
                            <span class="material-symbols-outlined text-6xl text-slate-300 dark:text-slate-700">chat_bubble</span>
                            <p class="text-slate-500 dark:text-slate-400 mt-4">No comments yet. Be the first to share your thoughts!</p>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        </div>
    </main>
    <!-- Simple Footer -->
    <footer class="mt-20 border-t border-slate-200 dark:border-slate-800 bg-white dark:bg-background-dark py-8 px-10">
        <div class="flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="flex items-center gap-2 text-slate-900 dark:text-white">
                <span class="material-symbols-outlined text-xl text-primary">directions_car</span>
                <span class="font-bold text-lg">MaBagnole</span>
            </div>
            <div class="text-slate-500 text-sm">
                © 2024 MaBagnole Inc. All rights reserved.
            </div>
        </div>
    </footer>

    <script>
        function updateComment(commentId, commentText) {
            const commentContent = document.getElementById(`comment-content-${commentId}`);

            commentContent.innerHTML = `
                <form action="../../../Controllers/CommentController.php?action=update" method="POST" class="flex flex-col gap-2">
                    <textarea name="texte" required class="w-full rounded-lg bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 text-slate-900 dark:text-white placeholder:text-slate-400 focus:ring-2 focus:ring-primary focus:border-transparent min-h-[80px] p-3 resize-y text-sm">${commentText}</textarea>
                    <input type="hidden" name="id_comment" value="${commentId}">
                    <input type="hidden" name="id_article" value="<?= $id_article ?>">
                    <div class="flex gap-2 justify-end">
                        <button type="button" onclick="cancelUpdate(${commentId}, '${commentText.replace(/'/g, "\\'").replace(/\n/g, '\\n')}')" class="px-4 py-2 text-sm font-medium text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors">Cancel</button>
                        <button type="submit" class="px-4 py-2 text-sm font-medium bg-primary hover:bg-blue-600 text-white rounded-lg transition-colors">Save</button>
                    </div>
                </form>
            `;
        }
    </script>
</body>

</html>