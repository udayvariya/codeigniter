<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <!-- <?php echo validation_errors();?> -->
                <?php echo form_open('homecontroller/my_func',['id'=>'my_form','class'=>'my_form']);?>

                <input type="text" name="username" id="" class="form-control" placeholder="username">
                <?php echo form_error('username');?>

                <?php  echo form_submit('submit','login',['class'=>'form-control wd-25 mt-5 btn btn-success']);?>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</body>
</html>