<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title><?= $title ?></title>
    <link rel="icon" type="image/x-icon" href="https://s.yimg.com/wm/mbr/images/yahoo-favicon-img-v0.0.2.ico">
        <link rel="shortcut icon" type="image/x-icon" href="https://s.yimg.com/wm/mbr/images/yahoo-favicon-img-v0.0.2.ico">
        <link rel="apple-touch-icon" href="https://s.yimg.com/wm/mbr/images/yahoo-apple-touch-v0.0.2.png">
        <link rel="apple-touch-icon-precomposed" href="https://s.yimg.com/wm/mbr/images/yahoo-apple-touch-v0.0.2.png">
    <link href="<?= base_url() ?>assets/css/app.min.css" rel="stylesheet">
    <!-- page css -->
    <link href="<?= base_url() ?>assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">   

</head>
<body >
<div class="app">
    <div class="layout">
    <?php 
        echo $header; 
        echo $navbar; 
    ?>
    <div class="page-container">
    <?php
         echo $_config_content;  
         echo $footer; 
    ?>
    </div>   
    </div>
</div>
    <!-- Core Vendors JS -->
    <script src="<?= base_url() ?>assets/js/vendors.min.js"></script>
    <script src="//cdn.ckeditor.com/4.14.1/full/ckeditor.js"></script>
    

    <!-- page js -->
<script src="<?= base_url() ?>assets/vendors/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/vendors/datatables/dataTables.bootstrap.min.js"></script>

    <!-- Core JS -->
    
    <script src="<?= base_url() ?>assets/js/app.min.js"></script>
    <script src="<?= base_url() ?>assets/js/sweetalert.min.js"></script>
    <?php require APPPATH . 'views/ajax/'.$this->uri->segment(1).'.php'; ?>
    <script>
        $(document).on('click', '.resetPassword', function () {
            var key = $(this).attr('key');
            $("#modalResetPassword").modal({backdrop: 'static', keyboard: false},'show');
            $("#r-id").val(key);
        });

        function checkResetPass(){
            var newPass = $('#r-newpass').val(); 
            var confirmPass = $('#r-confirm').val(); 
            if(newPass == confirmPass && newPass != "" && confirmPass != "" && newPass.length >= 8 ){
                $('#btnSimpan').attr('type','submit');
                $('#btnSimpan').attr('class','btn btn-primary');
                    $('#msg-alert').attr('style','display:block;');
                    $('#msg-alert').attr('class','alert alert-success');
                    $('#msg-alert span').html('Password sesuai');
            }else{
                $('#msg-alert').attr('style','display:block;');
                $('#msg-alert').attr('class','alert alert-danger');
                if(newPass != confirmPass){
                    $('#msg-alert span').html('Password tidak sama');
                }else if(newPass.length < 8){
                    $('#msg-alert span').html('Panjang password kurang dari 8');
                }
                $('#btnSimpan').attr('type','button');
                $('#btnSimpan').attr('class','btn disbled');
            }
        }

        //reset pass
var resetPassword = $('#form_reset_pass').on('submit', function(e){
      var key = $('#r-id').val(); 
          //alert(newPass);
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url : "<?php echo base_url('auth/resetPassword'); ?>",
                method: 'post',
                data: new FormData(this),
                dataType: "json",
                contentType: false,
                cache: false,
                processData: false,
                success: function(r){
                    $('#modalResetPassword').modal('hide');
                    swal({
                        title: r.icon,
                        text: r.msg,
                        icon: r.icon
                    });
                }
            }); 
});
    </script>
</body>
</html