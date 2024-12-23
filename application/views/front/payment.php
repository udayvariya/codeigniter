<!doctype html>
<html class="no-js" lang="zxx">
   
<!-- Mirrored from html.weblearnbd.net/shofy-prv/shofy/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 08:15:35 GMT -->
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Shofy - Multipurpose eCommerce HTML Template</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">
      <?php $this->load->view('front/links'); ?>

     
   </head>
<body>
<?php $this->load->view('front/header'); ?>

<main>

<!-- breadcrumb area start -->
<section class="breadcrumb__area include-bg pt-95 pb-50">
   <div class="container">
      <div class="row">
         <div class="col-xxl-12">
            <div class="breadcrumb__content p-relative z-index-1">
               <h3 class="breadcrumb__title">Payment</h3>
             
            </div>
         </div>
      </div>
   </div>
</section>
<!-- breadcrumb area end -->

<!-- cart area start -->
<section class="tp-cart-area pb-120">
<?php echo form_open('Payment/sucess'); ?>

   <div class="container">
      <div class="row">

           <div class="col-xl-7 col-lg-5 ml-200">
            <div class="tp-cart-list mb-25 mr-30">
               <div class="tp-login-wrapper">
               <div class="tp-login-top text-center mb-30">
               <h3>Payment Method</h3>
               
            </div>
            <div class="tp-cart-list mb-25 mr-30">
               <div class="tp-login-wrapper">
               <div class="tp-login-top text-center mb-30">
               <h5>Case On Delivery</h5>
            </div>
               <div class="tp-login-option">
             
                
               <div class="tp-cart-checkout-proceed">
                <a href="">
                  <button type="submit" class="tp-product-details-buy-now-btn w-100">Place Order</button>
                </a>
               </div>
                 
                 
               </div>
            </div>

            </div>
            
         </div>
        
 
                        
      </div>
   </div>
<?php echo form_close(); ?>

</section>
<!-- cart area end -->

</main>


<?php $this->load->view('front/footer'); ?>

</body>
</html>
