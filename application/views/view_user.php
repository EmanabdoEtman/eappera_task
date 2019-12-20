  <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>View user data</h2>
            </div>
          </div>  <div class="span8">
            <ul class="breadcrumb">
              <li><a href="<?php echo base_url(); ?>"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="<?php echo base_url(); ?>users">Users</a> </li> <i class="icon-angle-right"></i></li>
              <li><a href="#">View user data</a> </li>  
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content"> 

      <div class="container">
          <div class="row"  style="min-height: 320px;">
    <table class="table table-striped"> 
              <tbody> 
            <tr>
              <td>Name </td>
              <td><?php echo $user_data->f_name.' '.$user_data->l_name;?> </td>  
             
            </tr>
            <tr>
              <td>E-mail</td>
              <td><?php echo $user_data->email;?> </td>   
             
            </tr>
            <tr> 
              <td>Phone </td> 
              <td><?php echo $user_data->phone;?> </td>  
             
            </tr> 
              </tbody>
            </table>
        </div>

 
      </div>
    </section> 