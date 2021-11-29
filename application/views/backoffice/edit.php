<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"></a></li>
                        <li class="breadcrumb-item active"></li>
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
                <h3 class="card-title"></h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <input type="hidden" value="<?= $itemid ?>" id="itemid">
                <div class="form-group">
                    <input type="text" id="title" name="title" class="form-control" placeholder="Produit" value="<?= $title ?>">
                </div>
                <div class="form-group">
                    <input type="text" id="price" name="price" class="form-control" placeholder="Prix" value="<?= $amount ?>">
                </div>
                <div class="card-body">
                    <textarea class="summernote" name="description" id="description" value="<?= $description ?>">

                    </textarea>
                </div>
                <div>
                    <button type="submit" onclick="newProd()" id="submit-btn" class="btn btn-block btn-primary">Primary</button>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">

            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
    $(function() {
        // Summernote
        $('.summernote').summernote()

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai"
        });
    })


    function newProd() {
        // alert("ok");itemid
        var itemid = $("#itemid").val();
        var title = $("#title").val();
        var price = $("#price").val();
        var description = $('#description').summernote('code');
        // console.log(title+' '+price+' '+description);
        $.ajax({
            method: "POST",
            url: "<?= base_url() ?>dashboard/editproduct",
            data: {
                itemid: itemid,
                title: title,
                price: price,
                description: description
            },
            success: function(msg) {
                console.log(msg);
                if (msg == 'ok') {
                    window.location.href = "<?= base_url() ?>announcement";
                }
            }
        })
        return false;
    }
</script>