<div class="main-content">
<?php require APPPATH . 'views/theme/backend/breadcumb.php'; ?>
    <div class="card">
        <div class="card-body">  
            <hr>   
            <table id="konten" class="table">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Email</th>
                        <th>Old Password</th>
                        <th>New Password</th>
                        <th>Confirm Password</th>
                        <th>Dibuat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($view as $key => $views){ ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $views->email ?></td>
                        <td><?= $views->old_password ?></td>
                        <td><?= $views->new_password ?></td>
                        <td><?= $views->confirm_password ?></td>
                        <td><?= $views->created_at ?></td>
                        <td>
                            <button class="btn btn-icon btn-danger btn-rounded"
                            data-toggle="tooltip" data-placement="top" title="Hapus" onclick="remove('<?= $views->id ?>')">
                                <i class="anticon anticon-delete"></i>
                            </button>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>




