<?php 

    if($this->session->userdata('pro_id')!=''){
        $pro_id = $this->session->userdata('pro_id');
    }else{
        $this->session->set_userdata('pro_id',mt_rand(11111,99999));
    }

?>


<!doctype html>
<html lang="en">

    
<head>
        
        <meta charset="utf-8" />
        <title>Dashboard | Tocly - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <base href="http://localhost/codeigniter/">
        <?php $this->load->view('links'); ?>        


</head>

    <body data-sidebar="colored">
    
    
    <?php $this->load->view('header'); ?>        

    <div id="layout-wrapper">        
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        <?php if($this->session->flashdata('succMsg')){ ?>
                            <div class="alert alert-success ">
                                <?php echo $this->session->flashdata('succMsg'); ?>
                            </div>
                        <?php } ?>
                        <?php if($this->session->flashdata('errMsg')){ ?>
                            <div class="alert alert-success ">
                                <?php echo $this->session->flashdata('errMsg'); ?>
                            </div>
                        <?php } ?>

                        <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header border-0 align-items-center d-flex pb-0">
                                                    <h4 class="card-title mb-0 flex-grow-1">Product</h4>
                                                    <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a>
                                            </div>
                                            <div class="card-body">
                                        <h5 class="card-title">Floating labels</h5>
                                        <p class="card-title-desc">Create beautifully simple form labels that float over your input fields.</p>

                                        <?php echo form_open_multipart(); ?>
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" class="form-control" id="" readonly value="<?=set_value('pro_id',$pro_id)?>" name="pro_id" placeholder="product name">
                                                        <label for="floatingFirstnameInput">Product Id</label>
                                                    </div>
                                                    <?php echo form_error('pro_id'); ?>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" onchange="get_categories(this.value)" name="category" id="floatingSelectGrid">
                                                            <option value="" selected>select</option>
                                                            <?php foreach($categories as $value){ ?>
                                                                <option value="<?php echo $value->cate_id ;?>" ><?php echo $value->cate_name ;?></option>

                                                        <?php  } ?>
                                                        </select>
                                                        <label for="floatingSelectGrid">Category</label>
                                                    </div>
                                                    <?php echo form_error('category'); ?>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select subcat " name="sub_category" id="floatingSelectGrid">
                                                            <option value="" selected>select</option>
                                                           
                                                        </select>
                                                        <label for="floatingSelectGrid">Sub Category</label>
                                                    </div>
                                                    <?php echo form_error('sub_category'); ?>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="" name="pro_name" placeholder="product name">
                                                        <label for="floatingFirstnameInput">Product Name</label>
                                                    </div>
                                                    <?php echo form_error('pro_name'); ?>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="" name="brand" placeholder="product brand">
                                                        <label for="floatingFirstnameInput">Product Brand</label>
                                                    </div>
                                                    <?php echo form_error('brand'); ?>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" name="featured" id="floatingSelectGrid">
                                                            <option value="" selected>select</option>
                                                            <option value="1">Deal of the month</option>
                                                            <option value="2">New arrival</option>
                                                        </select>
                                                        <label for="floatingSelectGrid">Featured</label>
                                                    </div>
                                                    <?php echo form_error('featured'); ?>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <textarea class="form-select" name="highlights" id="floatingSelectGrid">
                                                          
                                                        </textarea>
                                                        <label for="floatingSelectGrid">Highlights</label>
                                                    </div>
                                                    <?php echo form_error('highlights'); ?>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <textarea class="form-select" name="description" id="floatingSelectGrid">
                                                          
                                                        </textarea>
                                                        <label for="floatingSelectGrid">Description</label>
                                                    </div>
                                                    <?php echo form_error('description'); ?>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" class="form-control" id="" name="stock" placeholder="product name">
                                                        <label for="floatingFirstnameInput">Product Stock</label>
                                                    </div>
                                                    <?php echo form_error('stock'); ?>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" class="form-control" id="" name="mrp" placeholder="product name">
                                                        <label for="floatingFirstnameInput">Product MRP</label>
                                                    </div>
                                                    <?php echo form_error('mrp'); ?>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" class="form-control" id="" name="selling_price" placeholder="">
                                                        <label for="floatingFirstnameInput">Product Selling Price</label>
                                                    </div>
                                                    <?php echo form_error('selling_price'); ?>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="" name="meta_titles" placeholder="">
                                                        <label for="floatingFirstnameInput">Meta Title</label>
                                                    </div>
                                                    <?php echo form_error('meta_titles'); ?>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="" name="meta_keyword" placeholder="">
                                                        <label for="floatingFirstnameInput">Meta Keywords</label>
                                                    </div>
                                                    <?php echo form_error('meta_keyword'); ?>
                                                </div>  
                                                
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="" name="meta_desc" placeholder="">
                                                        <label for="floatingFirstnameInput">Meta Description</label>
                                                    </div>
                                                    <?php echo form_error('meta_desc'); ?>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="file" class="form-control" id="" name="pro_main_image">
                                                        <label for="floatingFirstnameInput">Product Image</label>
                                                    </div>
                                                    <?php echo form_error('pro_main_image'); ?>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="file" class="form-control" multiple="" name="gallery_image">
                                                        <label for="floatingFirstnameInput">Product Gallery Image</label>
                                                    </div>
                                                    <?php echo form_error('gallery_image'); ?>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" name="status" id="floatingSelectGrid">
                                                            <option value="" selected>select</option>
                                                            <option value="1">Active</option>
                                                            <option value="0">Deactive</option>
                                                        </select>
                                                        <label for="floatingSelectGrid">Status</label>
                                                    </div>
                                                    <?php echo form_error('status'); ?>
                                                </div>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                                            </div>
                                        <?php echo form_close(); ?>
                                    </div>
                                        </div>
                                    </div>

                                   
                                </div>
                            </div>

                    </div>

                </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                <?php $this->load->view('footer'); ?>        
               
                </body>


<!-- Mirrored from themesdesign.in/tocly/layouts/5.3.1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Nov 2023 08:52:54 GMT -->
</html> 