<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<main class="w-full">

  <section role="history" class="flex flex-col md:flex-col bg-zinc-100 text-black py-2">
    <div class="flex flex-col md:flex-row">
      <div class=" flex justify-center items-center w-full md:w-2/5">
        <div class=" flex justify-center items-center w-full md:w-4/5">
          <img class="w-3/5 md:w-1/2" src="<?= base_url("assets/images/SquareLogo.jpg"); ?>" alt="image" srcset="">
        </div>
      </div>
      <div class="flex flex-col justify-around items-center md:items-start gap-4 md:gap-0 w-full md:w-1/2 px-8">
        <div class=" flex flex-col gap-4 items-center md:items-start py-3 md:p-0">
          <span class=" font-extrabold text-4xl text-myPrimary"><?php echo $title ?></span>
          <span class=" text-black mt-2"><?= esc($heading) ?? env('app.name'); ?></span>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="flex flex-col items-center py-6">
      <div>
        <h2 class="card-title align-middle">Subscriptions & Pricing</h2>
      </div>
      <form action="">
        <h2>Price Table</h2>
      </form>
    </div>
  
</main>
<?= $this->endSection(); ?>