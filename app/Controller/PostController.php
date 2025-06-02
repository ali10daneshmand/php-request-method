<?php
namespace App\Controller;

require_once __DIR__ . '/../../config/database.php';

class PostController
{
    /**
     * نمایش لیست پست‌ها با صفحه‌بندی
     */
    public function index()
    {
        global $pdo;

        // صفحه جاری از URL یا 1
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $limit = 10; // تعداد پست‌ها در هر صفحه
        $offset = ($page - 1) * $limit;

        // گرفتن تعداد کل پست‌ها
        $countStmt = $pdo->query("SELECT COUNT(*) FROM posts");
        $totalPosts = $countStmt->fetchColumn();
        $totalPages = ceil($totalPosts / $limit);

        // گرفتن پست‌های صفحه جاری
        $stmt = $pdo->prepare("
            SELECT posts.id, posts.title, users.name as author
            FROM posts
            JOIN users ON posts.user_id = users.id
            ORDER BY posts.id DESC
            LIMIT :limit OFFSET :offset
        ");
        $stmt->bindValue(':limit', $limit, \PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, \PDO::PARAM_INT);
        $stmt->execute();
        $posts = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        // فایل ویو اصلی
        $viewFile = __DIR__ . '/../Views/posts.php';
        include __DIR__ . '/../Views/layout.php';
    }
}
