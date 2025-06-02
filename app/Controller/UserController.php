<?php
namespace App\Controller;

require_once __DIR__ . '/../../config/database.php';

class UserController
{
    /**
     * نمایش لیست کاربران
     */
    public function index()
    {
        global $pdo;

        $stmt = $pdo->query("SELECT * FROM users ORDER BY name");
        $users = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        $viewFile = __DIR__ . '/../Views/users.php';
        include __DIR__ . '/../Views/layout.php';
    }
}
