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
<?php echo form_open('Cart/cart_update'); ?>

   <div class="container">
      <div class="row">

             <?php if($this->session->flashdata('succMsg')){ ?>
                <div class="alert alert-success ">
                    <?php echo $this->session->flashdata('succMsg'); ?>
                </div>
             <?php } ?>   
             <?php if($this->session->flashdata('errMsg')){ ?>
                <div class="alert alert-danger ">
                    <?php echo $this->session->flashdata('errMsg'); ?>
                </div>
             <?php } ?> 
            <?php if(!empty($cart) ): ?>

           <div class="col-xl-9 col-lg-8">
            <div class="tp-cart-list mb-25 mr-30">
               <table class="table">
                  <thead>
                    <tr>
                      <th colspan="2" class="tp-cart-header-product">Product</th>
                      <th class="tp-cart-header-price">Price</th>
                      <th class="tp-cart-header-quantity">Quantity</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                    foreach($cart as $arr):?>
                     <tr>
                        <!-- img -->
                        <td class="tp-cart-img"><a href="product-details.html"> <img src="uploads/<?php echo $arr->pro_main_image ;?>" alt=""></a></td>
                        <!-- title -->
                        <td class="tp-cart-title"><a href="product-details.html"><?php echo $arr->pro_name ;?></a></td>
                        <!-- price -->
                        <td class="tp-cart-price"><span>₹<?php echo $arr->mrp;?></span></td>
                        <!-- quantity -->
                        <td class="tp-cart-quantity">
                           <div class="tp-product-quantity mt-10 mb-10">
                              <span class="tp-cart-minus">
                                 <svg width="10" height="2" viewBox="0 0 10 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1H9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg>                                                             
                              </span>
                              <input class="tp-cart-input" type="text" name="up_qty[]" value="<?php echo $arr->pro_qty ;?>">

                              <span class="tp-cart-plus">
                                 <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 1V9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M1 5H9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg>
                              </span>
                           </div>
                        </td>
                        <!-- action -->
                        <td class="tp-cart-action">
                           <a href="Cart/delete_product/<?php echo $arr->pro_id ;?>" class="tp-cart-action-btn">
                              <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M9.53033 1.53033C9.82322 1.23744 9.82322 0.762563 9.53033 0.46967C9.23744 0.176777 8.76256 0.176777 8.46967 0.46967L5 3.93934L1.53033 0.46967C1.23744 0.176777 0.762563 0.176777 0.46967 0.46967C0.176777 0.762563 0.176777 1.23744 0.46967 1.53033L3.93934 5L0.46967 8.46967C0.176777 8.76256 0.176777 9.23744 0.46967 9.53033C0.762563 9.82322 1.23744 9.82322 1.53033 9.53033L5 6.06066L8.46967 9.53033C8.76256 9.82322 9.23744 9.82322 9.53033 9.53033C9.82322 9.23744 9.82322 8.76256 9.53033 8.46967L6.06066 5L9.53033 1.53033Z" fill="currentColor"/>
                              </svg>
                              <span>Remove</span>
                           </a>

                        </td>
                     <input type="hidden" name="up_pro_id[]" value="<?php echo $arr->pro_id ;?>">

                     </tr>

                    <?php endforeach; ?>
                  </tbody>
                </table>
            </div>
            <div class="tp-cart-bottom">
               <div class="row align-items-end">
                  
                  <div class="col-xl-10 col-md-12">
                     <div class="tp-cart-update text-md-end">
                        <button type="submit" class="tp-cart-update-btn">Update Cart</button>
                     </div>
                  </div>
                  <?php echo form_close(); ?>
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
                  <a href="checkout" class="tp-cart-checkout-btn w-100">Proceed to Checkout</a>
               </div>
            </div>
         </div>
       <?php else: ?>
                <div class="row">
                    <div class="col-md-6">
                         <h4>No Product In Cart</h4><a href="" class="btn btn-outline-primary w-25 mt-5">Shop Now</a>
                    </div>
                </div> 
 
                        
                     <?php endif; ?>  
      </div>
   </div>
</section>
<!-- cart area end -->

</main>
<?php $this->load->view('front/footer'); ?>

</body>
</html>