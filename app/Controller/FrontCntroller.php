<?php

namespace App\Controller;

use App\Model\User;

class FrontController
{
    /**
     * نمایش صفحه اصلی با اطلاعات کاربر
     */
    public static function home()
    {
        $id = $_GET['id'] ?? null;
        if ($id === null) {
            // اگر id وجود نداشت، می‌توانیم کار خاصی کنیم یا صفحه خطا نمایش دهیم
            echo "User ID not specified.";
            return;
        }

        $user = User::find($id);
        var_dump($user->composite());

        return view('home.php');
    }

    /**
     * نمایش صفحه درباره ما
     */
    public static function about()
    {
        return view('about.php');
    }

    /**
     * نمایش صفحه اطلاعات
     */
    public static function infs()
    {
        return view('infs.php');
    }
}

