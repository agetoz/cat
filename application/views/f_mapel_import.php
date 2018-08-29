<div class="panel panel-info">
        <div class="panel-heading">Import Data Mapel
        </div>
        <div class="panel-body">
            <form name="f_mapel" action="<?php echo site_url(); ?>/import/mapel" id="f_mapel" enctype="multipart/form-data" method="post">
                <table class="table table-form">
                    <tr><td style="width: 25%">File</td><td style="width: 75%"><input type="file" class="form-control" name="import_excel" required></td></tr>
                    <tr><td></td><td>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Simpan</button>
                        <a href="<?php echo site_url(); ?>/adm/m_mapel" class="btn btn-default"><i class="fa fa-minus-circle"></i> Kembali</a>
                    </td></tr>
                </table>
            </form>
        </div>
    </div>
