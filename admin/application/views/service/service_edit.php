<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <div class="content-wrapper">

    <!-- Main content -->

    <section class="content">

      <div class="card card-default color-palette-bo">

        <div class="card-header">

          <div class="d-inline-block">

              <h3 class="card-title"> <i class="fa fa-plus"></i>

              Edit Facilities </h3>

          </div>

          <div class="d-inline-block float-right">

            <a href="<?= base_url('service'); ?>" class="btn btn-success"><i class="fa fa-list"></i>  Facilities List</a>

          </div>

        </div>

        <div class="card-body">   

           <!-- For Messages -->

            <?php $this->load->view('includes/_messages.php') ?>
            <?php echo form_open_multipart(base_url('service/edit/'.$service['id']), 'class="form-horizontal" id="serviceForm"');  ?> 
                           
              <div class="form-group row"> 
                <div class="col-sm-6">
                <label for="name" class="col-sm-6 control-label">Name <span class="red">*</span></label>  
                  <input type="text" name="name" class="form-control" id="name" placeholder="" value="<?= set_value('name',$service['name']); ?>">
                </div>
                <div class="col-sm-6">
                <label for="sort_description" class="col-sm-6 control-label">Sort Description<span class="red">*</span></label>  
                  <input type="text" name="sort_description" class="form-control" id="sort_description" placeholder="" value="<?= set_value('sort_description',$service['sort_description']); ?>">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-sm-6">
                <label for="meta_title" class="col-sm-6 control-label">Meta Title </label>  
                  <input type="text" name="meta_title" class="form-control" id="meta_title" placeholder="" value="<?= set_value('meta_title',$service['meta_title']); ?>">
                </div>
                <div class="col-sm-6">
                  <label for="meta_keyword " class="col-sm-6 control-label">Meta Keyword </label>
                  <input type="text" name="meta_keyword" class="form-control" id="meta_keyword" placeholder="" value="<?= set_value('meta_keyword',$service['meta_keyword']); ?>">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-sm-6">
                <label for="meta_description" class="col-sm-6 control-label">Meta Description </label>  
                  <input type="text" name="meta_description" class="form-control" id="meta_description" placeholder="" value="<?= set_value('meta_description',$service['meta_description']); ?>">
                </div> 
                <div class="col-sm-6">
                  <label for="sort_order " class="col-sm-6 control-label">Sort Order <span class="red">*</span></label>
                  <input type="text" name="sort_order" class="form-control" id="sort_order" placeholder="" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g, '')" value="<?= set_value('sort_order',$service['sort_order']); ?>">
                </div> 
              </div>

              <div class="form-group row">
              <div class="col-md-6">
                  <label for="status" class="col-sm-6 control-label">Select Status <span class="red">*</span></label>                  
                  <select name="status" class="form-control">
                    <option value="">Select Status</option>
                    <option value="1" <?= (set_value('status', $service['is_active']) == '1')?'selected': '' ?>>Active</option>
                    <option value="0" <?= (set_value('status', $service['is_active']) == '0')?'selected': '' ?>>Deactive</option>
                  </select>
                </div>
                  <div class="col-md-6">
                <label class="control-label">Brochure</label><br/>
                  <?php if(!empty($service['brochure'])): ?>
                    <p><a style="font-size: 21px;" target="_blank" href="<?= base_url($service['brochure']); ?>">Download Brochure: <i class="fa fa-file-pdf-o"></i></a></p>
                 <?php endif; ?>
                 <input type="file" name="brochure" id="brochure">
                 <p><small class="text-success">Allowed Types: pdf only</small></p>
                 <input type="hidden" name="old_brochure" value="<?php echo html_escape(@$service['brochure']); ?>">
               </div>
              </div>

              <div class="form-group row">               
                <div class="col-sm-12">
                   <label for="description" class="col-sm-6 control-label">Description </label>
                   <textarea name="description" class="form-control textarea" id="description" placeholder="" ><?= set_value('description',$service['description']); ?></textarea> 
                </div>  
              </div>
               
              <div class="form-group row"> 
                <div class="col-md-6">
                <label class="control-label">Icon</label><br/>
                  <?php if(!empty($service['icon'])): ?>
                     <p><img src="<?= base_url($service['icon']); ?>" class="icon logosmallimg"></p>
                 <?php endif; ?>
                 <input type="file" name="icon" id="icon">
                 <p><small class="text-success">Allowed Types: gif, jpg, png, jpeg</small></p>
                 <input type="hidden" name="old_icon" value="<?php echo html_escape(@$service['icon']); ?>">
               </div>

                <div class="col-md-6">
                <label class="control-label">Icon 2</label><br/>
                  <?php if(!empty($service['icon2'])): ?>
                     <p><img src="<?= base_url($service['icon2']); ?>" class="icon logosmallimg"></p>
                 <?php endif; ?>
                 <input type="file" name="icon2" id=".icon2">
                 <p><small class="text-success">Allowed Types: gif, jpg, png, jpeg</small></p>
                 <input type="hidden" name="old_icon2" value="<?php echo html_escape(@$service['icon2']); ?>">
               </div>
              </div>
              <div class="form-group row"> 
                <div class="col-sm-6">
                  <label for="slug" class="col-sm-6 control-label">SEO URL <span class="red">*("space, special character doesn't allowed")</span></label>
                  <input type="text" name="slug" class="form-control" id="slug" placeholder="" value="<?= set_value('slug',$service['slug']); ?>"> 
                </div>
                <div class="col-md-6">
                <label class="control-label">Image</label><br/>
                  <?php if(!empty($service['image'])): ?>
                     <p><img src="<?= base_url($service['image']); ?>" class="image logosmallimg"></p>
                 <?php endif; ?>
                 <input type="file" name="image"id="image" >
                 <p><small class="text-success">Allowed Types: gif, jpg, png, jpeg</small></p>
                 <input type="hidden" name="old_image" value="<?php echo html_escape(@$service['image']); ?>">
               </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <input type="submit" name="submit" value="Update Service" class="btn btn-info pull-right">
                </div>
              </div>
            <?php echo form_close( ); ?>
          <!-- /.box-body -->
        </div>
    </section> 
  </div> 
<!-- Bootstrap WYSIHTML5 -->
<script src="<?= base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<script>
 $(function () { 
    // bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5({
      toolbar: { fa: true, "html": true},
      "html": true,  
      parser: function(html) {
        return html;
      }
    })  
  })
</script>  
<script type="text/javascript">
  $(document).ready(function(){     
     $("#serviceForm").validate({
        rules: {
            name:"required",
            sort_description: "required",
            sort_order: "required",
            status: "required",
            slug: "required",
            brochure:{
                    extension:"pdf",
                    },
            icon:{
                   extension:"jpg|png|gif|jpeg",
                    },
            icon2:{
                    extension:"jpg|png|gif|jpeg",
                    },
            image:{
                    extension:"jpg|png|gif|jpeg",
                    },
         },
        messages: {
            name:"Please Enter Event Name",
            sort_description: "Please Event Sort Description",
            sort_order: "Please Enter Sort Order", 
            status: "Please Select Status",
            slug: "Please Enter SEO URL",
            brochure:{
                    extension:"Please upload file in these format only (jpg, jpeg, png, gif)",
                     },
            icon:{
                    extension:"Please upload file in these format only (jpg, jpeg, png, gif)",
                     },
            icon2:{
                    extension:"Please upload file in these format only (jpg, jpeg, png, gif)",
                     },
            image:{
                    extension:"Please upload file in these format only (jpg, jpeg, png, gif)",
                     },
        }
    });
    $("body").on("click", ".btn-submit", function(e){
        if ($("#serviceForm").valid()){
            $("#serviceForm").submit();
        }
    });
  });  
</script>