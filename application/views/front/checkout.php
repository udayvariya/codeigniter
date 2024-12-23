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
               <h3 class="breadcrumb__title">Shopping Cart</h3>
               <div class="breadcrumb__list">
                  <span><a href="#">Home</a></span>
                  <span>Shopping Cart</span>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- breadcrumb area end -->

<!-- cart area start -->
<section class="tp-cart-area pb-120">
<?php echo form_open(); ?>

   <div class="container">
      <div class="row">

           <div class="col-xl-9 col-lg-8">
            <div class="tp-cart-list mb-25 mr-30">
               <div class="tp-login-wrapper">
               <div class="tp-login-top text-center mb-30">
               <h3>Shipping Address</h3>
            </div>
               <div class="tp-login-option">
             
                
                  <div class="tp-login-input-wrapper">
                    
                     <div class="tp-login-input-box">
                        <div class="tp-login-input">
                           <input id="email" type="email" name="email" placeholder="shofy@mail.com">
                        </div>
                        <?php echo form_error('email'); ?>

                        <div class="tp-login-input-title">
                           <label for="email">Your Email</label>
                        </div>
                     </div>

            

                        

                     <div class="tp-login-input-box">
                        <div class="tp-login-input">
                           <input id="name" type="text" name="name" placeholder="Abc xyz">
                        </div>
                        <?php echo form_error('name'); ?>
                        <div class="tp-login-input-title">
                           <label for="name">Your Name</label>
                        </div>
                     </div>

                     <div class="tp-login-input-box">
                        <div class="tp-login-input">
                           <input id="name" type="text" name="address" placeholder="Address">
                        </div>
                        <?php echo form_error('address'); ?>
                        <div class="tp-login-input-title">
                           <label for="name">Address</label>
                        </div>
                     </div>

                     <div class="tp-login-input-box">
                        <div class="tp-login-input">
                           <input id="name" type="text" name="city" placeholder="Surat">
                        </div>
                        <?php echo form_error('city'); ?>
                        <div class="tp-login-input-title">
                           <label for="name">City</label>
                        </div>
                     </div>

                     <div class="tp-login-input-box">
                        <div class="tp-login-input">
                           <input id="name" type="text" name="country" placeholder="Country">
                        </div>
                        <?php echo form_error('country'); ?>
                        <div class="tp-login-input-title">
                           <label for="name">Country</label>
                        </div>
                     </div>

                     <div class="tp-login-input-box">
                        <div class="tp-login-input">
                           <input id="name" type="text" name="phoneno" placeholder="9938848493">
                        </div>
                        <?php echo form_error('phoneno'); ?>
                        <div class="tp-login-input-title">
                           <label for="name">Phone No</label>
                        </div>
                     </div>
                     
                  </div>
                 
                 
               </div>
            </div>

            </div>
            
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="tp-cart-checkout-wrapper">
               <div class="tp-cart-checkout-top d-flex align-items-center justify-content-between">
                  <span class="tp-cart-checkout-top-title">Subtotal</span>
                  <span class="tp-cart-checkout-top-price">₹ <?php echo $total['subtotal'] ;?></span>
               </div>
               <div class="tp-cart-checkout-shipping">
                  <h4 class="tp-cart-checkout-shipping-title">Shipping</h4>

                  <div class="tp-cart-checkout-total d-flex align-items-center justify-content-between">
                    <?php  if($total['subtotal']>499):?>
                        <p>Free shipping</p>
                    <?php else: ?>
                        <span>shipping Charges : </span>
                        <span>₹ <?php echo $total['delivery'] ;?></span>
                    <?php endif; ?>
                  </div>
               </div>
               <div class="tp-cart-checkout-total d-flex align-items-center justify-content-between">
                  <span>Total</span>
                  <span> ₹ <?php echo $total['grandtotal'] ;?> </span>
               </div>
               <div class="tp-cart-checkout-proceed">
                  <button type="submit" class="tp-cart-checkout-btn w-100">  Next
               </button>
               </div>
               <?php echo form_close(); ?>

            </div>
         </div>
 
                        
      </div>
   </div>
</section>
<!-- cart area end -->

</main>


<?php $this->load->view('front/footer'); ?>

</body>
</html>
