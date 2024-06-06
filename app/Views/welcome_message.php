<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Welcome to CodeIgniter 4!</title>
  <meta name="description" content="The small framework with powerful features">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/png" href="/favicon.ico">
  <!-- STYLES -->
  <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">

</head>

<body>
  <section class="bg-slate-600">
    <div class="container xl:max-w-6xl mx-auto px-6 py-10">
      <h1 class="text-center text-3xl font-semibold capitalize text-gray-800 dark:text-white lg:text-8xl text-4xl">Hello World</h1>
      <div class="mx-auto mt-6 flex justify-center">
      <span class="inline-block h-1 w-40 rounded-full bg-blue-500"></span>
      <span class="mx-1 inline-block h-1 w-3 rounded-full bg-blue-500"></span>
      <span class="inline-block h-1 w-1 rounded-full bg-blue-500"></span>
    </div>
      <p class="mt-4 text-center text-gray-200 dark:text-gray-300">The page you are looking at is being generated dynamically by CodeIgniter.</p>

      <p class="mt-10 text-center text-slate-gray">If you would like to edit this page you will find it located at:</p>

      <pre class="mt-2 text-center"><code>app/Views/welcome_message.php</code></pre>

      <p class="mt-10 text-center">The corresponding controller for this page can be found at:</p>

      <pre class="mt-2 text-center"><code>app/Controllers/Home.php</code></pre>
    </div>
  </section>
  <footer>
    <div class="mt-2 text-center">

      <p>Page rendered in {elapsed_time} seconds using {memory_usage} MB of memory.</p>

      <p>Environment: <?= ENVIRONMENT ?></p>

    </div>

    <div class="mt-2 text-center">

      <p>&copy; <?= date('Y') ?> CodeIgniter Foundation. CodeIgniter is open source project released under the MIT
        open source licence.</p>

    </div>

  </footer>
</body>

</html>