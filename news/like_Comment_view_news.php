<?php 
			                if(!isset($_SESSION['user_email']))
                            {
								echo "<div class='pull-right action-btn'><b style='color:grey;'>Login To Like</b>&nbsp
								      <i class='fa fa-commenting-o'></i> <span class='hidden-xs hidden-sm'>Comments </span>";?><?php include('includes/newscomment_count.php'); ?>&nbsp
								      <?php echo "<i class='fa fa-eye'></i> <span class='hidden-xs hidden-sm'>Views </span>".$view."</div><hr />";
							}
							else
							{?>
							    <div class="pull-right action-btn">
								
				                <?php
					
					                $post_owner_id 				=	$user_id;
					                $encoded_post_id			=	base64_encode($post_id);
										
					                if($total_like_this_post_by_logged_in_user>0)
					                {
					                    $thump_direction_class	=	'fa fa-thumbs-o-down';
					                    $text		=	'Unlike';
					                }
					                else
					                {
						                $thump_direction_class	=	'fa fa-thumbs-o-up';
						                $text		=	'Like';
					                }
								
				                ?>
								 
								<script type="text/javascript" src="js/functionews.js"></script>
				                    <a href="javascript:void(0)" class="" class="" onclick="like_button('<?php echo $encoded_post_id; ?>');" >
				                        <i id="thumps_icon_<?php echo  $post_id; ?>" class="<?php echo $thump_direction_class; ?>"></i> 
					                    <span id="total_like_post_<?php echo  $post_id; ?>"><span class='hidden-xs hidden-sm'><?php echo $text ?></span> <?php echo $total_like_this_post ?></span>
				                    </a>  
				
				<?php echo "
								<i class='fa fa-commenting-o'></i> <span class='hidden-xs hidden-sm'>Comments </span>";?><?php include('includes/newscomment_count.php'); ?>&nbsp
								<?php echo "<i class='fa fa-eye'></i> <span class='hidden-xs hidden-sm'>Views </span>".$view."<hr />"; ?>
							
				                </div><hr />
								
			                <?php } ?>