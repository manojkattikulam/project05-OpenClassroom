<div class="home-inner container">

  <div class="row">

      <div class="col-md-6 mx-auto">

      <!-- ALERT MESSAGE -->       
        <?php if($this->session->flashdata('class')): ?>
          <div class="alert <?php echo $this->session->flashdata('class');?> alert-dismissible fade show text-center" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button> 
            <?php echo $this->session->flashdata('message');?>
          </div>
        <?php endif; ?>
      <!--END ALERT MESSAGE -->  


        <div class="card bg-dark-transparent text-light cardform banner-heading">
          <div class="card-body">

          
            <h3 class="text-center"><i class="fas fa-lock orange mr-2"></i>Espace Administrator</h3>
            <p class="text-center text-muted">Connectez-vous à votre espace administrator</p>

            

          <!-- Login form begin here -->

          <?php $attr_register = array('id'=>'form_register');?>

          <?php echo form_open('Admin_Dashbd/admin_login', $attr_register) ?>

         
            
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Votre nom" value="<?php echo set_value('name'); ?>">
              <div class="alert alert-register"><?php echo form_error('name'); ?></div>     
            </div>
           
            <div class="form-group">
              <input type="password" name ="password" class="form-control" placeholder="Mot de passe" value="<?php echo set_value('password'); ?>"> 
              <div class="alert alert-register"><?php echo form_error('password'); ?></div>    
            </div>
            
            <button type="submit" name="btn_login" class="btn btn-outline-danger btn-block">Valider</button>
            </form>
          
          </div>
        </div>
      </div>


  </div><!--end of row-->
</div><!--end of home-inner-->

    <!-- end of banner -->
  </header>
  <!-- end of header -->
