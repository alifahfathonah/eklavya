<!DOCTYPE html>
<html>

<style>
  td{
    padding:2px 10px !important;
  }
</style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 mt-1">
            <h4>PHOTO GALLERY INFORMATION</h4>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
            <div class="card-header">
              <h3 class="card-title"><i class="fa fa-list"></i> List Photo Gallery Information</h3>
              <div class="card-tools">
                <a href="<?php echo base_url() ?>Admin/gallery" class="btn btn-sm btn-block btn-primary">Add Gallery</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>Gallery No.</th>
                  <th>Gallery Date</th>
                  <th>Gallery Title</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $i = 0;
                  foreach ($gallery_list as $gallery_list) {
                    if($gallery_list->gallery_status=='1'){
                      $status='active';
                    } else{
                      $status='deactive';
                    }
                    $i++; ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $gallery_list->gallery_no; ?></td>
                    <td><?php echo $gallery_list->gallery_date; ?></td>
                    <td><?php echo $gallery_list->gallery_title; ?></td>
                    <td><?php echo $status; ?></td>
                    <td>
                      <a href="<?php echo base_url(); ?>Admin/edit_gallery/<?php echo $gallery_list->gallery_id; ?>"> <i class="fa fa-edit"></i> </a>
                      <a href="<?php echo base_url(); ?>Admin/delete_gallery/<?php echo $gallery_list->gallery_id; ?>" onclick="return confirm('Delete this User');" class="ml-4"> <i class="fa fa-trash"></i> </a>
                    </td>
                  </tr>
                    <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>

</body>
</html>
