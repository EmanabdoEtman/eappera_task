  <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Update user data</h2>
            </div>
          </div>  <div class="span8">
            <ul class="breadcrumb">
              <li><a href="<?php echo base_url(); ?>"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="<?php echo base_url(); ?>users">Users</a> </li> <i class="icon-angle-right"></i></li>
              <li><a href="#">Update user data</a> </li>  
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content"> 

      <div class="container">
        <div class="row">
          <div class="span12">
            <h4>Add user  </h4>
 
            <form class="contactForm" action="<?php echo base_url();?>users/save_edit/<?php echo $user_data->id;?>" method="post">
               
              <div  style="color: red ">
                <?php
                if (isset($error)&& $error!=''){
                  echo $error;}
                  ?>
                    
              </div> 
              <div class="row">
                <div class="span6 form-group">
                  <input placeholder="First name" type="text" name="f_name" value="<?php echo $user_data->f_name;?>" required> 
                </div>
                <div class="span6 form-group">
                  <input placeholder="Last name" type="text" name="l_name" value="<?php echo $user_data->l_name;?>" required>
                </div>
                <div class="span6 form-group">
                  <input placeholder="E-mail" name="email" type="email" value="<?php echo $user_data->email;?>" required> 
                </div>
                <div class="span6 form-group">
                   <input placeholder="Password" name="password" type="password" required> 
                </div>
                <div class="span6 form-group">
                  <input placeholder="Phone" class="form-control" type="text" name="phone" value="<?php echo $user_data->phone;?>" required>  
                </div>
                <div class="span12 margintop10 form-group">  
                  <p class="text-center">
                    <button class="btn btn-large btn-theme margintop10" type="submit">Submit message</button>
                  </p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section> 