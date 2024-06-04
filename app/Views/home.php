<?= $this->extend('layouts/main'); ?>

<?= $this->section('custom-top-js'); // page head custom js ?>
<!-- any extra js that needs to load in the head? -->
<?= $this->endSection() ?>

<?= $this->section('content'); ?>

<main class=" w-full">
  <p>This is it</p>
</main>
<?= $this->endSection(); ?>

<?= $this->section('modals'); // add any modals here ?>
<?= $this->include('/modals/popup') ?>
<?= $this->endSection() ?>

<?= $this->section('pageScripts') // page custom js  ?>
<!-- any extra js for this page? -->
<?= $this->endSection() ?>