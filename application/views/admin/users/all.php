
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo $this->lang->line('title_admin_users');?>
      <small><?php echo $this->lang->line('desc_admin_home');?></small>
    </h1>
    <?php
      // $this->load->helper('brd');
      echo(create_breadcrumb());
    ?>
    <!-- <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
      <li class="active">Here</li>
    </ol> -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="box">
      <div class="box-header">
        <h3 class="box-title">User List</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="table-users" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Name</th>
            <th>Role</th>
            <th>Email</th>
            <th>Options</th>
          </tr>
          </thead>
          <tbody>
            <?php
            foreach ($users as $key => $value) {
              ?>
              <tr>
                <td><?php echo $value['first_name']." ".$value['last_name'];?></td>
                <td><?php echo $value['role'];?></td>
                <td><?php echo $value['email'];?></td>
                <td>
                  <div class="btn-group">
                    <button type="button" class="btn btn-info">Actions</button>
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Detail</a></li>
                      <li><a href="#">Edit</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Remove</a></li>
                    </ul>
                  </div>
                </td>
              </tr>
              <?php
            }
            ?>
          </tbody>
          <tfoot>
          <tr>
            <th>Name</th>
            <th>Role</th>
            <th>Email</th>
            <th>Options</th>
          </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->