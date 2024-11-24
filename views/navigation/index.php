<div class="content-wrapper p-5 d-flex justify-content-center align-items-center">
    <div class="card " style="width: 80rem;">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title">Danh sách menu</h3>
            <a href="<?= _WEB_ROOT; ?>/nav/create" class="btn btn-primary">Thêm menu</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="basic-datatable" class="table" style="width:100%">
                <thead>
                    <tr class="table-dark">
                        <th>STT</th>
                        <th>Tên menu</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data['navs'] as $key => $row) { ?>
                    <tr>
                        <td><?= $key + 1; ?></td>
                        <td><?= $row["name"]; ?></td>
                        <td>
                            <a href="<?= _WEB_ROOT; ?>/nav/update/<?= $row["id"]; ?>"
                                class="btn btn-success action-icon text-white" data-mdb-ripple-init>
                                Sửa
                            </a>
                            <button type="button" data-mdb-ripple-init data-mdb-modal-init
                                data-mdb-target="#exampleModal<?= $row["id"]; ?>" class="btn btn-danger">
                                Xóa
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal<?= $row["id"]; ?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel<?= $row["id"]; ?>" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel<?= $row["id"]; ?>">Bạn có đồng
                                                ý xóa</h5>
                                            <button type="button" class="btn-close" data-mdb-ripple-init
                                                data-mdb-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-mdb-ripple-init
                                                data-mdb-dismiss="modal">Close</button>
                                            <a class="btn btn-primary" data-mdb-ripple-init
                                                href="<?= _WEB_ROOT; ?>/nav/delete/<?= $row["id"]; ?>"
                                                class="action-icon text-white">Xóa</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>
<script>
new DataTable('#basic-datatable', {
    layout: {
        bottomEnd: {
            paging: {
                boundaryNumbers: false
            }
        }
    }
});
</script>