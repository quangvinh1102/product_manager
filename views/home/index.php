<div class="content-wrapper p-5 d-flex justify-content-center align-items-center">
    <div class="card " style="width: 80rem;">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title">Danh sách tài khoản</h3>
            <a href="<?= _WEB_ROOT; ?>/user/createuser" class="btn btn-primary">Thêm tài khoản</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="basic-datatable" class="table" style="width:100%">
                <thead>
                    <tr class="table-dark">
                        <th>STT</th>
                        <th>Tên tài khoản</th>
                        <th>Mật khẩu</th>
                        <th>ip quyền</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data['users'] as $key => $row) { ?>
                    <tr>
                        <td><?= $key + 1; ?></td>
                        <td><?= $row["username"]; ?></td>
                        <td><?= $row["password"]; ?></td>
                        <td><?= $row["role_ip"]; ?></td>
                        <td>
                            <button type="button"
                                class="px-2 py-1 lg:px-4 bg-green  text-white text-sm  rounded hover:bg-green-600 border border-green-500 mb-2">
                                <a href="<?= _WEB_ROOT; ?>/user/update/<?= $row["id"]; ?>"
                                    class="action-icon text-white">Sửa</a>
                            </button>
                            <button type="button" data-mdb-ripple-init data-mdb-modal-init
                                data-mdb-target="#exampleModal"
                                class="px-2 py-1 lg:px-4 bg-red  text-white text-sm  rounded hover:bg-red-600 border border-red-500 mb-2">
                                <!-- <a href="<?= _WEB_ROOT; ?>/user/delete/<?= $row["id"]; ?>"
                                    class="action-icon text-white">Xóa</a> -->
                                Xóa
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Bạn có đồng ý xóa</h5>
                                            <button type="button" class="btn-close" data-mdb-ripple-init
                                                data-mdb-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-mdb-ripple-init
                                                data-mdb-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" data-mdb-ripple-init><a
                                                    href="<?= _WEB_ROOT; ?>/user/delete/<?= $row["id"]; ?>"
                                                    class="action-icon text-white">Xóa</a></button>
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