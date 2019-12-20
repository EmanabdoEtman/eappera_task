    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Posts</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="<?php echo base_url(); ?>"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li> 
              <li class="active">Posts</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container"  style="min-height: 320px;">
        <div class="row marginbot30">
          <div class="span12">
            <h4 class="heading" ><strong>Posts</strong>  <span></span></h4>

		<input name="page" type="hidden"  id="page"  value="0" />
            <div id="posts_data">
              
          </div>
          </div>
        </div>
      </div>
    </section> 


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">
   
   
    var base_url = "<?php echo base_url(); ?>";
    $(document).ready(function () { 
		get_posts();
    });

     function get_posts() { 

        var page =document.getElementById("page").value; 
     	// alert(page);
     	page++;
     	document.getElementById("page").value = page;
   jQuery.post(base_url + "posts/list", {page: page },  function (data) { 
     $.each(data, function(key, value) {

      // $('#posts_data').append('<div class="headings">'+ value.id +'</div>');           
       $('#posts_data').append('<div class="row"><div class="span12"><div class="wrapper">                  <div class="testimonial"> <p class="text">                      <i class="icon-quote-left icon-48"></i> '+ value.title +' </p> <span class="info">'+ value.description +'</span><div class="author">                      <img src="<?php echo base_url(); ?>template/img/dummies/testimonial-author1.png" class="img-circle bordered" alt="" /><p class="name"> <br></p> <span class="info">'+ value.user_name +'</span>              </div>  </div></div></div></div>');           
                }); 
  }, "json");

 }
 

 var lastScrollTop = 0;
$(window).scroll(function(event){

   var st = $(this).scrollTop();
   if (st > lastScrollTop){ 

        var page =document.getElementById("page").value; 
    if ($(document).scrollTop() > 1500*page) {
        get_posts();
    }
   } else {  
   }
   lastScrollTop = st;
});

    </script> 