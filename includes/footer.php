<footer>
    <div class="container">
        <Div class="col-md-4">
		
			<h4>Team Members / Contact Details</h4><hr />
			
			<p>FOUNDER & C.E.O :<br>E.Pavan kumar<br>Contact : 8520872771<br>
			To Chat With Me <a href="https://www.facebook.com/profile.php?id=100005175935690&amp;fref=ts">Click Here</a><br>
			Mail Us At : en.pavankumar@gmail.com</p>
			<br>
					
		    <p>Marketing Head :<br>H.Bharath<br>Contact : 9848859049<br>
			To Chat With Me <a href="https://www.facebook.com/profile.php?id=100005524032225&amp;fref=ts">Click Here</a><br>
			Mail Us At : bharath.hari143@gmail.com</p>
			<br>
			
			<p>Designer :<br>Y.Venu Ravind<br>Contact : 8106999889<br>
			To Chat With Me <a href="https://www.facebook.com/venuyadav.yarraboina?fref=ts">Click Here</a><br>
			Mail Us At : venuyarraboina@gmail.com</p>
			<br>
		
        </Div>
		
        <Div class="col-md-4">
		    <h4>About us</h4><hr />
                In OurMedia, We take a holistic view of diversity that looks beyond the usual measurements. A view that includes the varied perspectives of our users, students,startups and anyone who aspires to showcase their work to the world. Our Media is an online platform where a user gets all the updates on news, events,startups and varied topics which are highly captivating and fully entertained.<br />
                <br />
                It is the great platform to showcase your work to the world. Many people wish to write articles,but don't know how to create blogs and showcase their work. There are also situations that several products and talents don't get quality exposure easily. <br />
                <br />
				Our media helps you solve all such problems and help you create better exposure for your work and yourself. The best part of Our Media is it is easy to use,and everyone who has enthusiasm and talent to spread the word can use this platform, and it is free and open to everyone.<br />
                <br />
        </Div>

		<Div class="col-md-4">
            <h4>Feedback</h4><hr />
              
			    <form method="post" action="#">

                    <strong>Your Name :<br></strong>
                    <div class="form-group"><input type="text" name="feedback_name" placeholder="Your Name :" class="form-control" required="required"></div>
							
                    <strong>Your Email :<br></strong>
                    <div class="form-group"><input type="email" name="feedback_email" placeholder="Your Email :" class="form-control" required="required"></div>
							
                    <strong>Your Feedback :<br></strong>
                    <div class="form-group"><textarea name="feedback" cols="5" rows="5" required="required" placeholder="Your Feedback"class="form-control"></textarea></div>
							 
                    <div class="form-group" align="right"><input type="submit" name="feedback" value="Submit" class="btn btn-default" /></div>

                </form>
							
				<?php
                include("connect.php");
											
                if(isset($_POST['feedback']))
                { 
	                $feedback_name = $_POST['feedback_name'];
	                $feedback_email = $_POST['feedback_email'];
	                $feedback = $_POST['feedback'];
	
	                            
	                $query_feedback = "insert into feedback (feedback_name,feedback_email,feedback,feedback_date) values('$feedback_name','$feedback_email','$feedback',NOW())";
        
                    $run_query = mysqli_query($mysqli,$query_feedback);

                    if($run_query)
		            {
                        echo "<script>alert('Thankyou For Your Valuable Feedback!')</script>";
						echo "<script>window.open('#','_self')</script>";                                    		   
                    }
                                
                }
                ?>
        </Div>
		
<div class="col-md-12"><hr /><p>Web Application Developer : <a href="https://www.facebook.com/profile.php?id=100005175935690&amp;fref=ts">E.Pavan Kumar </a> | &copy; 2017 Our Media All Right Reserved.</p></div>
</div>
</footer>
<a href="javascript:void(0);" onclick="$('html, body').animate({ scrollTop: 0 }, 500);" class="topbtn"><i class="fa fa-angle-up"></i></a>
<script>
$(document).ready(function() {
$(window).scroll(function() {    
    var scrolls = $(window).scrollTop();   
	if (scrolls > 50) {
        $(".catebar").slideUp();
    }else{
		$(".catebar").slideDown();
	}
}
});
</script>

<script>
  CKEDITOR.replace( 'comment' );
</script>
</body>
</html>
