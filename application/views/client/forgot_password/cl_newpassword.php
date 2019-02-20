<div class="home-inner container">

  <!-- MESSAGES -->
  <?php if($this->session->flashdata('message')){
        echo '<div class="alert alert-message my-3 p-3 text-center bg-light"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'. $this->session->flashdata('message'). '</div>';
      } ?>
  <!-- END OF MESSAGES -->

  <div class="row">


      <div class="col-md-6 mx-auto">
        <div class="card bg-dark-transparent text-light cardform banner-heading">
          <div class="card-body">

          
            <h3 class="text-center"><i class="fas fa-lock orange mr-2"></i>Nouveau Mot de passe</h3>
            <p class="text-center text-muted">Crée votre nouveau mot de passe</p>

            

          <!-- Reset New password form begin here -->

          <?php $attr_register = array('id'=>'form_register');?>

          <?php echo form_open('Client_ForgotPassword/newpassword', $attr_register) ?>

          

            
            
            <div class="form-group">
              <input type="password" name ="password" class="form-control" placeholder="Mot de passe" value="<?php echo set_value('password'); ?>">
              <div class="alert alert-register"><?php echo form_error('password'); ?></div>   
            </div>

            <div class="form-group">
              <input type="password" name ="confirm_password" class="form-control" placeholder="Confirmer votre mot de passe" value="<?php echo set_value('confirm_password'); ?>"> 
              <div class="alert alert-register"><?php echo form_error('confirm_password'); ?></div>  
            </div>

            <button type="submit" name="btn_register" class="btn btn-outline-danger btn-block">Valider</button>

            </form>
          </div>
        </div>
      </div>


  </div><!--end of row-->
</div><!--end of home-inner-->

    <!-- end of banner -->
  </header>
  <!-- end of header -->