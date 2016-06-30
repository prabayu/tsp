 <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/dist/img/avatar5.png" class="img-circle" alt="User Image" />
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('nama');?></p>
          <a href="#"><i class="fa fa-check-square-o text-success"></i> <?php echo $this->session->userdata('jabatan');?></a>
        </div>
      </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">MAIN NAVIGATION</li>
          <li>
            <a href="<?=base_url('user');?>">
              <i class="fa fa-dashboard"></i> <span> Home</span>
            </a>
          </li>

          <li>
            <a href="<?=base_url('user/laporkan');?>">
              <i class="fa fa-plus-square"></i> <span> Lapor Gangguan</span>
            </a>
          </li>

             <li class="treeview">
              <a href="#">
                <i class="fa fa-file-text"></i>
                <span> Status Laporan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class=""><a href="<?=base_url('user/new_tkt');?>"><i class="fa fa-circle-o"></i> New</a></li>
                <li class=""><a href="<?=base_url('user/inprog');?>"><i class="fa fa-circle-o"></i> InProgress</a></li>
                <li class=""><a href="<?=base_url('user/closed');?>"><i class="fa fa-circle-o"></i> Closed</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

 <div class="content-wrapper">
<section class="content-header">
          <h1><?php echo $judul; ?>
            <small><?php echo $sub_judul; ?></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> <?php echo $judul; ?></a></li>
            <li class="active"><?php echo $sub_judul; ?></li>
          </ol>
        </section>

      <!-- Content Wrapper. Contains page content -->
     
        <!-- Content Header (Page header) -->
        
          <!-- Info boxes -->