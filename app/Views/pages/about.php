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
        <h1 class="card-title align-middle">Meet our staff</h1>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-4 gap-2">
        <div class="card w-96 bg-blue-100">
          <figure class="px-10 pt-10">
            <img class=" block w-6/12" src="<?= base_url('assets/images/logo.png') ?>" alt="image" srcset="">
          </figure>
          <div class="card-body items-center text-center">
            <h2 class="card-title align-middle">Staff 1</h2>
          </div>
        </div>
        <div class="card w-96 bg-blue-100">
          <figure class="px-10 pt-10">
            <img class=" block w-6/12" src="<?= base_url('assets/images/logo.png') ?>" alt="image" srcset="">
          </figure>
          <div class="card-body items-center text-center">
            <h2 class="card-title align-middle">Staff 2</h2>
          </div>
        </div>
        <div class="card w-96 bg-blue-100">
          <figure class="px-10 pt-10">
            <img class=" block w-6/12" src="<?= base_url('assets/images/logo.png') ?>" alt="image" srcset="">
          </figure>
          <div class="card-body items-center text-center">
            <h2 class="card-title align-middle">Staff 3</h2>
          </div>
        </div>
        <div class="card w-96 bg-blue-100">
          <figure class="px-10 pt-10">
            <img class=" block w-6/12" src="<?= base_url('assets/images/logo.png') ?>" alt="image" srcset="">
          </figure>
          <div class="card-body items-center text-center">
            <h2 class="card-title align-middle">Staff 4</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section role="map" class="flex bg-zinc-100 text-black py-2">
    <div class="flex flex-col p-8 w-full">
      <h2> Map (Google Maps)</h2>

    </div>
  </section>
</main>
<?= $this->endSection(); ?>