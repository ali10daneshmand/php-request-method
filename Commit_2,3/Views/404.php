<?php
echo '<div style="width:60%;margin:2rem auto;font-family:sans-serif;">';
echo '<pre style="background:#f5f5f5;padding:1rem;border-radius:8px;">';

echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "\n\n";

if (!empty($_GET)) {
    echo "GET Parameters:\n";
    print_r($_GET);
    echo "\n";
}

if (!empty($_POST)) {
    echo "POST Parameters:\n";
    print_r($_POST);
    echo "\n";
}

echo '</pre>';<?php
include "header.php";
?>
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

<section class="flex flex-col justify-center items-center my-20">
  <div class="flex w-full md:px-5 shadow-lg rounded-xl shadow-blue-200 py-10 px-10 md:w-[28%] space-y-6 flex-col items-center">
    <h1 class="text-6xl font-bold text-blue-500">404</h1>
    <p class="text-center text-lg text-gray-600">Oops! The page you are looking for could not be found.</p>
    <a href="/webprogramming/" class="py-2 px-6 rounded-xl bg-blue-400 text-white border-blue-400 hover:bg-blue-600 duration-300 cursor-pointer border text-center">Back to Home</a>
  </div>
</section>

<?php
include "footer.php";
?>
echo '</div>';
?>
