<script>
$(document).ready(function(){
    var table = $('#konten').DataTable({});
});

function remove(id){
    swal({
                title: "Peringatan",
                icon: "warning",
                text: "Yakin ingin menghapus data ini?",
                dangerMode: true,
                buttons: {
                    cancel: "Batal",
                    confirm: "Hapus",
                }
            }).then((ok) => {
                if (ok) {
                    $.ajax({
                        url : "<?php echo base_url('delete-reset-password'); ?>",
                        type: "POST",
                        dataType: "JSON",
                        data: {
                            id : id ,
                        },
                        success: function (res) {
                            swal({
                                title: "Success",
                                icon: res.icon,
                                text: res.msg,
                                dangerMode: false,
                                buttons: {                        
                                    confirm: "Ok",
                                }
                            }).then((ok) => {
                                window.location.href=res.link
                            });
                        }
                    });
                } else {
                    swal({
                        title: "Oops",
                        text: "Data Batal Dihapus",
                        icon: "info"
                    });
                }
            });
}

</script>