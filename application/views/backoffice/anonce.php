<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Blank Page</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Annoce</a></li>
                        <li class="breadcrumb-item active">Annonce</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>

            </div>
            <a href="<?= base_url() ?>new_announcement" class="btn btn-block btn-primary">Ajouter</a>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Produit</th>
                            <th>Prix</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $item) : ?>
                            <tr>
                                <td><?= $item->id ?></td>
                                <td><?= $item->proname ?></td>
                                <td><?= $item->amount ?></td>
                                <td>
                                    <a class="btn" data-id="<?= $item->id ?>" onclick="openModal($(this).attr('data-id'))" title="Ajouter image">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                    <a class="btn" href="<?= base_url() ?>edit/<?= $item->id ?>" title="Ajouter image">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a class="btn" href="<?= base_url() ?>delete/<?= $item->id ?>" title="Supprimer">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Produit</th>
                            <th>Prix</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
    <div class="modal fade" id="imgModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Image</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" id="imgForm" enctype="multipart/form-data">
                        <input type="hidden" id="item_id" name="itemid">
                        <div class="form-group">
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="featured" id="">
                                <option value="0"> Pas en avant</option>
                                <option value="1"> Mettre en avant</option>
                            </select>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary" onclick="addImg()">Ajouter</button>
                        </div>
                    </form>
                </div>
                <!-- <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
<!-- /.content-wrapper -->



<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });


    function openModal(item) {
        // alert("ok")
        $("#imgModal").modal('show');
        // console.log(item)
        document.getElementById("item_id").value = item;
    }

    function addImg() {
        var form = $("#imgForm")[0];
        var newForm = new FormData(form);
        console.log(newForm);
        $.ajax({
            type: "POST",
            url: "<?= base_url() ?>dashboard/addimg",
            enctype: 'multipart/form-data',
            data: newForm,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function(msg) {
                console.log(msg);
                if (msg == '1') {
                    $("#imgForm")[0].reset();
                    $("#imgModal").modal('hide');
                }
            }
        })
    }
</script>