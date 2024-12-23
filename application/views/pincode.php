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
                        <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header border-0 align-items-center d-flex pb-0">
                                                    <h4 class="card-title mb-0 flex-grow-1">Category</h4>
                                                    <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a>

                                            </div>
                                            <div class="card-body">
                                        <h5 class="card-title">Floating labels</h5>
                                        <p class="card-title-desc">Create beautifully simple form labels that float over your input fields.</p>

                                        <?php echo form_open(); ?>
                                            <div class="row">
                                            
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="Number" class="form-control" id="" name="pincode">
                                                        <label for="floatingFirstnameInput">Pincode</label>
                                                    </div>
                                                    <?php echo form_error('pincode'); ?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="Number" class="form-control" id="" name="delivery_charge">
                                                        <label for="floatingFirstnameInput">Delivery Charges</label>
                                                    </div>
                                                    <?php echo form_error('delivery_charge'); ?>
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