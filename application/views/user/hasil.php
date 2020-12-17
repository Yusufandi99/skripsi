<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('partials/head'); ?>
	
</head>
<body>
	<?php $this->load->view('partials/header'); ?>
	 <!-- ##### Breadcrumb Area Start ##### -->
   <!-- ##### Breadcrumb Area Start ##### -->
   <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(../assets_user/img/bg-img/jst.jpg);">
             <h2>Hasil Diagnosa</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Hasil Diagnosa</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->
    
 <section class="alazea-portfolio-area portfolio-page section-padding-0-100">
                    <!-- Section Heading -->
                <form action="hasil" method="post" >
                    <div class="section-heading text-center">
                        <h2>Hasil Diagnosa</h2>
                        <p>Hasil Diagnosa Anda</p>
                        <div class="form-group">
                        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_details_tab clearfix">
                        <!-- Tabs -->
                        <!-- Tab Content -->
                        <div class="tab-content">
                   <div role="tabpanel" class="tab-pane fade show active" id="description">
    <table id="example2" class="table table-bordered table-striped">
      <thead>
      <?php
      
      $no = 1;
      if (isset($_POST['simpan'])){
        foreach ($_POST['kondisi'] as $value) { ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $value ?></td>
      </tr>
    <?php }} ?>
    </table>
    <div class="col-12">
        <input type="submit" class="btn alazea-btn mt-15" name="simpan" value="Diagnosa"></input>     
    </div>    
    </div>	
</body>
<?php $this->load->view('partials/script'); ?>
</html>