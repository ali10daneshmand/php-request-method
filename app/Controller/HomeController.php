<?php
namespace App\Controller;

class HomeController
{
    /**
     * نمایش صفحه اصلی
     */
    public function index()
    {
        // مسیر فایل view رو دقیق مشخص می‌کنیم
        include __DIR__ . '/../Views/home.php';
    }
}
