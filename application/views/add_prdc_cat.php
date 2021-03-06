<?php
if ($id !== '') {
    $title = "Update Product Category";
    $prdc_cat_name = $prdc_catdet[0]->prdc_cat_name;
   
} else {
    $title = "Add Product Category";
    $id='';
    $prdc_cat_name = '';
   // $level = $desc = '';
}
?>
<link href="<?=base_url()?>css/bootstrap-colorpicker.css" rel="stylesheet" type="text/css" />
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
              <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Product Category
        <small>Management panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Product Category</li>
		        <li class="active"><?=$title?></li>

      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
                    <div class="col-lg-12">
                        <h4><?=$title?></h4>
                        <form  name="myform" class="form-horizontal" role="form" action='<?=base_url();?>master/prc_save' method="post">
                             <input type="hidden" name="id" value="<?=$id?>" />
                              <?php if(isset($message)){?>
                                     <div class="col-sm-12"><div class="alert alert-success"><?=$message?></div></div>
                                <?php }else if(isset($error)) {?>
                                     <span class="col-sm-12">
                                         <div class="alert alert-danger"><?=$error?></div>
                                     </span>
                                <?php } ?>
                            <p><label class="text-danger">Required fields are marked with *</label></p>
                            <div class="form-group">
                                      <label for="firstName" class="col-lg-3 control-label"><label class="text-danger">*&nbsp;&nbsp;</label>Name</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control" name="txt_prdc_cat_name" id="txt_prdc_cat_name" autofocus  required maxlength="80" value="<?=$prdc_cat_name?>" onkeypress="return inputLimiter(event,'NameCharactersAndNumbers')"/>
				      </div>
				  </div>
                           
                           
                            
                             <div class="form-group">
				    <div class="col-lg-offset-3 col-lg-10">
				      <button type="submit" class="btn btn-success">Save</button> <a href="<?= base_url();?>master/prdc_category" class="btn btn-primary">Cancel</a>
				    </div>
				  </div>
                        </form>
               
                    </div>
                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
 <script src="<?php echo base_url();?>js/general.js"></script>
 
