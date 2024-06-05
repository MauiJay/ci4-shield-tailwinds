<!-- top right toast notifications -->
<?php if (session()->getFlashdata('msg_success')): ?>
  <script>
    Swal.fire({
      icon: 'success',
      iconColor: '#3d6208',
      color: '#3d6208',
      background: '#e0edcf',
      text: '<?= session()->getFlashdata('msg_success') ?>',
      toast: true,
      position: 'top-right',
      showConfirmButton: false,
      timer: 10000,
      timerProgressBar: true,
    })
  </script>
<?php endif; ?>

<?php if (session()->getFlashdata('msg_error')): ?>
  <script>
    Swal.fire({
      icon: 'error',
      iconColor: '#841717',
      color: '#841717',
      background: '#f8d4d4',
      text: '<?= session()->getFlashdata('msg_error') ?>',
      toast: true,
      position: 'top-right',
      showConfirmButton: false,
      timer: 10000,
      timerProgressBar: true,
    })
  </script>
<?php endif; ?>

<?php if (session()->getFlashdata('msg_warning')): ?>
  <script>
    Swal.fire({
      icon: 'warning',
      iconColor: '#8c3507',
      color: '#8c3507',
      background: '#fbdece',
      text: '<?= session()->getFlashdata('msg_warning') ?>',
      toast: true,
      position: 'top-right',
      showConfirmButton: false,
      timer: 10000,
      timerProgressBar: true,
    })
  </script>
<?php endif; ?>

<?php if (session()->getFlashdata('msg_info')): ?>
  <script>
    Swal.fire({
      icon: 'info',
      iconColor: '#05576b',
      color: '#05576b',
      background: '#cee9f0',
      text: '<?= session()->getFlashdata('msg_info') ?>',
      toast: true,
      position: 'top-right',
      showConfirmButton: false,
      timer: 10000,
      timerProgressBar: true,
    })
  </script>
<?php endif; ?>

<!-- Jay Sweet Alerts -->
<?php if (session()->getFlashdata('save')): ?>
  <script>
    Swal.fire({
      icon: "success",
      title: "Successful Save",
      text: "<?= session()->getFlashdata('save') ?>",
    });
  </script>
<?php endif; ?>

<?php if (session()->getFlashdata('update')): ?>
  <script>
    Swal.fire({
      icon: "info",
      title: "Successful Update",
      text: "<?= session()->getFlashdata('update') ?>",
    });
  </script>
<?php endif; ?>

<?php if (session()->getFlashdata('delete')): ?>
  <script>
    Swal.fire({
      icon: "error",
      title: "Successful Delete",
      text: "<?= session()->getFlashdata('delete') ?>",
    });
  </script>
<?php endif; ?>

<?php if (session()->getFlashdata('error')): ?>
  <script>
    Swal.fire({
      icon: "warning",
      title: "Oh No! Error",
      text: "<?= session()->getFlashdata('error') ?>",
    });
  </script>
<?php endif; ?>

<?php if (session()->getFlashdata('success')): ?>
  <script>
    Swal.fire({
      icon: "success",
      title: "Success",
      text: "<?= session()->getFlashdata('success') ?>",
    });
  </script>
<?php endif; ?>