
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Doctor Degree
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="http://localhost/nirog/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Degree</li>
      </ol>
    </section>
    
    



 <section class="content">
     <?php $x=$this->Session->flash(); ?>
                    <?php if($x){ ?>
                    <div class="alert success">
                        <span class="icon"></span>
                    <strong></strong><?php echo $x; ?>
                    </div>
                    <?php } ?>
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Degree name</h3>
            </div>
              
              <form action="add" method="post" >
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Add Degree Name</label>
                  <input type="text" class="form-control" name="data[Degree][degree_name]" placeholder="Degree name">
                  <input type="hidden" class="form-control" name="data[Degree][status]" value="1" placeholder="degree name">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
              
              
              
              
              
              
          </div>
        </div>
      </div>
 </section>
</div>