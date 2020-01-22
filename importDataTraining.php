<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <form class="form-horizontal" name="myForm" id="export_excel" action="importDataTrainingAction.php" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <p>Pilih file training:</p>
              <div class="form-group">
                <div class="col-sm-10">
                  <input type="file" id="excel_file" name="excel_file" class="form-control-file"/>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-10">
                  <input type="submit" name="sales_realisasi" value="Import" class="btn btn-primary" />
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
