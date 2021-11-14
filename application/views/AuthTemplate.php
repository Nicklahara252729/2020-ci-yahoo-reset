<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title ?></title>

    <link rel="icon" type="image/x-icon" href="https://s.yimg.com/wm/mbr/images/yahoo-favicon-img-v0.0.2.ico">
        <link rel="shortcut icon" type="image/x-icon" href="https://s.yimg.com/wm/mbr/images/yahoo-favicon-img-v0.0.2.ico">
        <link rel="apple-touch-icon" href="https://s.yimg.com/wm/mbr/images/yahoo-apple-touch-v0.0.2.png">
        <link rel="apple-touch-icon-precomposed" href="https://s.yimg.com/wm/mbr/images/yahoo-apple-touch-v0.0.2.png">
    <link href="<?= base_url() ?>assets/css/app.min.css" rel="stylesheet">

</head>

<body>
    <?php echo $_config_content; ?>
	<!-- Core Vendors JS -->
    <script src="<?= base_url() ?>assets/js/vendors.min.js"></script>
    <script src="<?= base_url() ?>assets/js/app.min.js"></script>
    <script src="<?= base_url() ?>assets/js/sweetalert.min.js"></script>
    <script>
var ins = $('#form-data').on('submit', function(e){
      
        e.preventDefault();
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          }
        });
        $.ajax({
          url: "<?php echo base_url('proses-login'); ?>",
          method: 'post',
          data: new FormData(this),
          dataType: "json",
          contentType: false,
          cache: false,
          processData: false,
          success: function(r){
            if(r.icon == 'success'){
                swal({
                    title: "Success",
                    icon: r.icon,
                    text: r.msg,
                    dangerMode: false,
                    buttons: {                        
                        confirm: "Ok",
                    }
                }).then((ok) => {
                  window.location.href = r.link;
                });
              }else{
                swal({
                    title: r.icon,
                    text: r.msg,
                    icon: r.icon
                });
              }
          }
        }); 
      
    });
</script>
</html>