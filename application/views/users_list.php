 <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Users list</h2>
            </div>
          </div> 

          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="<?php echo base_url(); ?>"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="#">Users</a> </li>  
            </ul>
          </div>
        </div>
      </div>
    </section>
<section id="content">
      <div class="container">
        <!-- Default table -->
        <div class="row" style="min-height: 320px;">
    <table class="table table-striped">
              <thead>
                <tr>
                  <th>
                    #
                  </th>
                  <th>
                    Name
                  </th>
                  <th>
                    Email
                  </th>
                  <th>
                    Phone
                  </th>
                  <th>
                    Operations
                  </th>
                </tr>
              </thead>
              <tbody>
              <?php  foreach ($users_list as $user) { ?>
            <tr>
            	<td><?= $user->id; ?> </td>
            	<td><?= $user->f_name.' '.$user->l_name ?> </td> 
            	<td><?= $user->email; ?> </td> 
            	<td><?= $user->phone; ?> </td> 
            	<td><a title="view" class="btn btn-small btn-info btn-rounded" href="<?php echo base_url(); ?>users/view/<?= $user->id; ?>"><i class="icon-eye-open"></i></a>  
            		<a title="Edit"  class="btn btn-small btn-green btn-rounded" href="<?php echo base_url(); ?>users/edit/<?= $user->id; ?>"><i class="icon-edit"></i></a> 
            		<a title="Delete"  class="btn btn-small btn-danger btn-rounded   delete-btn" id="<?= $user->id; ?>" href="#"><i class="icon-remove"></i></a> </td> 
            </tr>
 	     <?php } ?>
              </tbody>
            </table>
        </div>
        </div>
    </section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">
   
   
    var base_url = "<?php echo base_url(); ?>";
    $(document).ready(function () { 
		delete_action();
    });
    	function delete_action() { 
  $('.delete-btn').each(function () {
    var btn = this; 
    jQuery(btn).off('click');
    jQuery(btn).click(function () {

     delete_item(btn.id);



    });
  });

}

function delete_item(id) {  
 jQuery.post(base_url + "users/delete_item", {id: id }, function (data) {
  if (data.status == 'ok') {
    alert('Removed user Done');
     location.reload(true);
  }
}, "json");

}
    </script>
        
 
                                                 