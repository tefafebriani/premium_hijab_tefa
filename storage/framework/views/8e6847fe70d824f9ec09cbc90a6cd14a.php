<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | <?php echo e(env('APP_NAME')); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section class="bg-gradient-to-b from-pink-300/50 to-white py-16 flex min-h-[80vh] items-center">
  <div class="container mx-auto px-6 lg:px-20">
    <div class="flex flex-col lg:flex-row items-center">
      <!-- Image Section -->
      <div class="lg:w-1/2 mb-8 lg:mb-0">
        <img src="<?php echo e($home->about_photo); ?>" alt="Premium Hijab" class="rounded-lg shadow-lg">
      </div>
      <!-- Content Section -->
      <div class="lg:w-1/2 lg:pl-10">
        <h2 class="text-3xl font-extrabold text-gray-800 mb-4">Tentang Kami</h2>
        <p class="text-gray-600 text-lg mb-6">
            <?php echo e($home->about_us); ?>

        </p>
        <a href="/about" class="inline-block px-6 py-3 bg-pink-600 text-white text-sm font-medium rounded-lg shadow hover:bg-pink-700 transition">
          Pelajari Lebih Lanjut
        </a>
      </div>
    </div>
  </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
</html><?php /**PATH /home/ilham/1! Project/SWU/premium_hijab_tefa/resources/views/about.blade.php ENDPATH**/ ?>