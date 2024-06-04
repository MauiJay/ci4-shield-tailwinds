<!doctype html>
<html lang="en">
<?= $this->include('partials/front/_head') ?>

<body class="flex items-center justify-center" style="background: #edf2f7;">
  <script src="https://unpkg.com/alpinejs" defer></script>

  <main>
    <section class="bg-white dark:bg-gray-900">
      <!--  Navbar  -->
      <?= $this->include('partials/front/_navbar') ?>      
    </section>

    

    <?= $this->renderSection('content') ?>
    <?= $this->include('partials/front/_footer') ?>
    <?= $this->renderSection('modals') ?>
    <?= $this->include('modals/logout') ?>
    <?= $this->include('partials/front/_js') ?>
    <?= $this->renderSection('pageScripts') ?>
    <?= $this->include('partials/front/_notifications.php') ?>


  </main>
</body>

</html>