<?php require_once 'connect.php'; ?>

<link href='chatting_list.css' rel='stylesheet' type='text/css'>

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>


<div id="chatbox">
    <!-------------=======================All User Chat List========================-------------------------->
    <div id="friendslist">
        <div id="topmenu">
            <span class="friends"></span>            
        </div> 
        <div id="friends">
         <?php                               
                $loginemail=$_SESSION['user_email'];
                $get_members = "SELECT t1.*, t2.status as user_status, t2.time
                FROM users t1
                LEFT JOIN online_users t2 ON t1.user_email=t2.user_email where t1.user_email!='$loginemail'"; 
                $run_user = mysqli_query($mysqli,$get_members);                
                while($row = mysqli_fetch_array($run_user))
                {                    
                $reciever_email=$row['user_email'];
                $user_id = $row['user_id'];
                $user_name = $row['user_name'];
                $user_contact = $row['user_contact'];
                $user_image = $row['user_image'];
                $user_status = $row['user_status'];
                $user_time = $row['time'];                               
                ?>
                    <div class="friend" id="<?php echo $reciever_email ?>">            
                        <img src="user_images/<?php echo $user_image; ?>"  height="10px" width="20px;"/>
                        <p>
                            <span id="name"><?php echo $user_name; ?></span><br/>
                            
                            <span><?php if(empty($user_time)  && $user_time == ''){ echo "Not Avialable";}else{ echo $user_time; } ?></span> 
                        </p>
                    <div class="<?php if($user_status == 1){echo 'status available'; } ?>"></div>                    
                    </div>
                
                <?php } ?>
        </div>      
    </div>  
    <!-------------=======================Finish All User Chat List ========================-------------------------->
    <!-------------=======================Single User Chat Panel ========================-------------------------->
    <?php $sql_get_theme="select * from chat_theme where user_email='$loginemail'";
            $query_get_theme=mysqli_query($mysqli, $sql_get_theme);
            $row_get_theme=mysqli_fetch_array($query_get_theme);
            @extract($row_get_theme);
            ?>
    <div id="chatview" class="p1" <?php echo (!empty($theme) && $theme != '')?'style="background:url('.$theme.')"':''; ?> >           
        <?php                   
            $get_members2 = "select * from users'";
            $run_user2 = mysqli_query($mysqli,$get_members2);
            $row2 = mysqli_fetch_array($run_user2);
            $user_id2 = $row2['user_id'];
            $user_image2 = $row2['user_image'];
            $user_email2 = $row2['user_email'];
            $user_name2 = $row2['user_name'];
        ?>
        <div id="profile">
            <div id="close">
                <div class="cy"></div>
                <div class="cx"></div>
            </div> 
           <div class="dropdown">
            <i class="fa fa-cog dropdown-toggle" aria-hidden="true" data-toggle="dropdown" style="cursor:pointer;font-size:20px;margin-top: 70px; margin-left: 320px;"></i>
            <ul class="dropdown-menu" style="left: 314px;position:absolute !important;">              
              <li><a href="#" id="clear_chat" data-id="<?php echo $user_email2; ?>">Clear Chat</a></li>
              <li class="divider"></li> 
              <li><a href="#" id="user_block" data-id="<?php echo $user_email2; ?>">Block</a></li>
              <li class="divider"></li> 
              <li><a href="#" id="wallpaper" data-id="<?php echo $user_email2; ?>"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="background-color:#fff;border-color:#fff;padding:0px;font-size:14px;color:#333">Wallpaper</button></a></li>
              <li class="divider"></li>               
              <li><a href="#" id="user_search" data-id="<?php echo $user_email2; ?>">Search </a></li>
              <li class="divider"></li> 
            </ul>
          </div>
            
                <p style="color: white;margin-top: 2px;"><?php echo $user_name2; ?></p>
                <span style="color: black; "><?php echo $user_email2; ?>            
                         
                </span>
        </div>
        
        
              <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:#000">Select Wellpaper</h4>
        </div>
        <div class="modal-body">
          
          
          <div class="col-md-12">
              
       <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQmtbakxXjy8br4VpjZoElWoSV91LEyVEjqXVAaxewCPYn4bQO" class="img-responsive" id="image_background">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                <img src="http://images.all-free-download.com/images/graphicthumb/61_hd_picture_of_the_japanese_style_color_background_169997.jpg" class="img-responsive" id="image_background">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQK9LfIXTSPrvAH4bsSBJJI4ugJiAh3c56YYf-Ym7t6R1q6G-mp" class="img-responsive" id="image_background">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_TRKa8gF6DBPlUnHVSidnIEMsKEbijTk2_0ZkcPSDO9_GTie4" class="img-responsive" id="image_background">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9xFxbI8iEgfVxXhPzX54YGkSiRo3r6tqZ4IwOWKCbX81PCJiN2Q" class="img-responsive" id="image_background">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYAqv2n-QzbkxnclljgFbSk1tddT_nZlwNLT7ce6RIFxxt3klGmQ" class="img-responsive" id="image_background">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGqf9RiPtC4kLH2SU2TFrASGuvXKw_DNMkyir8483fjmCeR1xMdQ" class="img-responsive" id="image_background">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMSEhUTExMWFhUXFxYYFRcYGBcVGBkYFRgXFxcYFxgYHSggHRolHRgXITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQGi0mHyUtLS0tLSstLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIALEBHAMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAADBAECBQAGB//EAEIQAAEDAgQEAwYDBQYGAwEAAAEAAhEDIQQSMUEFUWFxIoGREzKhscHwBtHhFEJScvEjM2KCksIVQ1NzsrMWJKIH/8QAGQEAAwEBAQAAAAAAAAAAAAAAAQIDAAQF/8QAJxEAAgIDAAICAQMFAAAAAAAAAAECEQMSIQQxQVEiE2GhFDJCUpH/2gAMAwEAAhEDEQA/APWugxbWJOw1GgHT+qJWIJIDpaHc/j1myEHiQe2vTayq0tgeltNdeq82zlUBgv8AD0bI53MZRGwmfin6R8DQREONwCCW+EFhAEkmel4WW6ppAi0GbomGrNBAgm+m14G5O4B8gqwyUxJKnw1GVc7mlgIYHTsIAaBpbyM7wrVXhsEQGeESRe0C86RAI5RO4QG4x8OeRlMtBdEkkZQbAxoOSpWdmgQAS20Xho/f6SBMm/PmOj9QWh3D18wDnWAgHprdxBgDUczF1xpHP6nQiYyxrYX3PNV4fVJDTUcAxogAWOYxJ12nL8uaG7EONUtBggGAYmbHfUamAO6dT501F20iRAJvG+2WYg+fWympRnw6meliATqCI5X7q7KTpBcST4WzlIgXNnbd0RkAHUTmAFhECb35Widgd05tS+EEUoLpMaggxJiNZ5eq44eCNzsbXgGY5b/BcKwDHOBBIBMGRYwBv3Hqohwbm3IDpgjX93ewEDzWGKV2xHmD3BGsbWMrvbEACdbiOom1/L7ldVzRIIMwR4dLjynr+ipXpkk5tBJnTlIEjolbAGFUefLqdupRXOuOo+/kkRXOp0kGLmJmIi8wpFcgwYFtbzex1WUkAbqH77KhfCgVZHkqbprAxmlUJRc6BRKKERky2ZFYUFXplEZMZarhDY5XBS0WTJClQVIKVjo6FMKQVxSDHKFK4BYxy4LiqmUUjN0XUFQCqOcqKIrkc9yrmUPUI0ScmfPq77woa6yG8zoQuY8RY9ivHHSGWGYHVFe2JFj26deSVpHl+adbEk+GBA1JuALxrf6lFE5IjN4RmiGkbxM7HoBKYbSdlOew/dZeDoQLDcbzJJQGNkwBIsDpoY0MW5T1Rq9SXXMAAwJByg2EA2mP00VovhJovg6vsyXWLgLSQWzIHpG+0KGODnhxAGUAulsySRJAGt51MW8kNtyDpO0mYsDfy7KtKrlLhIMiLzpItrp0HJMpCjVDETEtF3mdLgMLQI5C1xa6YfXzHNptAkEDn23gbgcll03OzAk9RPOPvVc95mBe2umpvYbdFaORUbYfBsNMoIJsTPKSRyH5JjE4skbduURcAgckiyoem2pM281Z7idT8/RZ5FRrHHYi/ODIJ28U2Pkq4jEk7mYI56x5ITZjmrm9jpv/AEU3ks1gqYNo5yb7/fzUh5npHa0q7Ke4m11b2d5PZKpACUqqOy/ZLilHXujMBGiqpgsOzVXzIYeiB3NUjI1kh4RWpdqOArR6PGQxSKuCqNVwUSsS4UqGlSSlaLJktCsqsRCEtDorCiVBKgoJGbLqHKMypUenQsmdKpKE+pFkB9U6JiDkMl4VXOSoepNRYTY+d5yCrcKqZ6bD0jQbW+iHXdDSZOhPoLpT8OVrObyuPOx+nqvFR1M3h97/ADsrsdshNM/eys3l93REaGwx2TMAcoOo5/fzUN5DRNcOxoDDTO+b5folMsfoiK0EmT6fkqOHrzCJTH3C72ZOiybJOIKOsxqrQYtNrmJtPP8AVc2kSQG3m3Qc1ovhjCxvLxHmdAqbCqFitIJkCUOncJljEbFRzAr5VZqkpWMSLKY5rgQrogODVMKQpIVIiM5oUyqrirRFssEw11kuDCs166MY0X0ZbUVxUCVDlIKq0WTHQ8KwcEqxXDklFFIaYVclBY5WzJaKqXCVCglDBKNCuRdxhUe6y4vVC5FISUheoUu+10w9yHUAj+iJJ9ANeUTMpY2N9QVdjIFx9+iWxUfM8Y+Kb+0esD6rM4bV9nUDibaHsfy18k7xV39n0LgPgTp6LHaV46OxntieQsrs7LF4HxDMPZuNx7p5jl5LaZ9/cI0Zl3iR4bO1B5EaGN+yDwis5zXZxD2Pc1w66iOkEJgh0wRB5G3qlsP4Kzmmwe0PE6ktOV3zagSfs0Gnn6BWYD2VQ7lEpXieM9lSc8iSBDRzc4w0epCz4CXDn8RayoWNu7S17nX4fPon6BmBtuev1WJwXh4pNzOOao673byb25BapcQ13YrQfyySv5GqR9PvZMtfyWbwxxdTY6dRPqZC0A7RUvhqGqWiq4oVMkiEHD4nM5zeQY7yfP1aUthrg21Xa5AJXConQrY213qulKscdZVzV9FVCNhi+FwfuhA81AV4oUsXypaqA81ZlRVjwy4FaiNcgOcuBKsmVUhxr0dr0k1yKxyw6Y4HrgUtmV6bktDbBHEoT3Ln1EGrUQNZZz1zSSJSzir0qi10JYct9PvZBaN76GbQpq1fv77pOo/7++ynOdAbQyI53+/0XDLv9PyQWXEkbAa6RaY81PtGCxB8iI+SRSFs+X8bqeFvf6H81mMd8ZTHGKhIb3PySLHrz16OuxilUggjXZeq4HxA1aQcdbztH6fmsPjfCvYOYA7MHNmTa+/lcIXAcZkIGjTZ3qYPl9Siaz2rsbnfDveix0zAanvJ+SV4mcuSr/A4Zv5HeE+QmfJRWo5hBkRcEWIPMFDqiplyHI5pkeKWmOsSD8EjEZosJnVZPFT7SvSpbN/tHDrdrfIeMo3DsU7LkN3MOUmASY913mI85QeDvz1q1U7uyt6BgyCOlnnzQfRG7NbT77KmPrFlJ7v8J/II1WqJ0SePqhz6bCYAIqVNgGsgtB7ujylFoBo4LDllNjI91rW/6QAmWD0WRiONNFmDMeZs0fUpjhbnOGeoZn3RoAOcdfvVMhW0aTHQVn8OI/asQJ0ZR+Lqx+qYbiBus/h1UGviHf8Abb/pDj/uHqtXULsbbmri0oLX+SKyeapFAbCMCs1oQw7b6LmvVooRsMFVynMOaqVQBSVdihrZXApkwIYIVFEiFUHzVVIdMMxGa5LjorAp9iiY1KmUs10booqBaxrJKq9QagQXvndK5JAbJeOSCye11z5UUyd1zSnbE+QpNvL6f0Vmxb7Goj56paTtyCJng5bxcfEqe4UdUq/pz1Q5sJv/AFXPkzrpf6KGuG4WTAz5LxJ3hb3+YlWwPC31GF7S2NBJNyNYshY3xUydwZ9Nfn8FfgfFTTDmyI1E7E6x+qhFL5Osd4zxH2raLibhrmu/mGvwhZOHrHxCdD87/X4IrnB2drf5m+Q8QHlf/Ks8ugg87ed4+qC+hUz2XBsYXukmYYAZvefyha7320WF+E20/HnIJIaY8UDXcb6L1lCo0ANaOnUqUssYumGmzExcs/tmiQBDwNwLg9wfgSp/D/hoNzGDlBcT1E791HHmOZRfmHveEcvGQ36rIxVcnwbNMAbWtKPyQbo3MfxBzRLW2Oj3G0a6duaxjVc9xc4kkxrsB7oj4+ZUV8a+o1rCZAgnqRoDz6/1UtsiwNjWDZmcGxbfsNfvqvRteOXosjg9GxebTYdhr8fkthjuUeqeKEZ0a30SPCKoZSfVcYzPe/yByg+jQfNTxbEFtN0e8fC3+Z1gPUoOLY0CnQboYDp/gZrbkYjzWa6CzXwlXwAusTc9C6TA7THkmG1xa8LOzq7CZEKqQjkaWt1LVn0a0nW2x/VMGoeadAsZDuiI02SjKiK19tE6YLGAeyq4nmhh3zUtI1RTCFDlGZCzbqQVtgjFN6uCgtmUUOAVFLg6CE6qsqhqWVXkpXMNkuchh11doVAoym2YJPy+SjNG6rM2GqjNBNtUjYUEaLHkYk+airIdN4H5x812oPwH1+EwjZxqfsSPhc2TVaHoRcSJdFhA7Tp12KhjxHiseUT80VzpuCORkkAnYf4t+iBJtcXE7HXZL6NR8ocbR3BWTkIkawf6L0eL4gahnIxvZrSfV0pXGOqx4HutrBj0iI7KKbOh39GfRe5pBAIIMiyviqDSC9vu/vAfuGf/ABnQ+WqvVxFam6HVHgiD75P1T/AeLZazX1nOyNkttnIdFrHX5aI/lZPp678J/h2uabXVWin4YDY8RB3I253vdek/+NFrZa+XRaQF5rg/4rxznGo3D1KtHUQw+7OzouexjovXcL/ENLETkJDh79N4LXt7tN1HKsMbckWx94eA4jiqmIrUcOGXFRstFiS0FxsdI+hRcV+FcWy5p5jzbDgJuTEye0L1mEwDGY2rXAHiptj+ZxIefRjf9RWrxDjtOiBmkud7rGjM93YcupslxZ8U5UmK8FK5Hy40shywQd5mZ3Bm4KYwdLOQ2wE3dyW7x2q7F+J2GfRLdKhBGZvJ0gA9OST4c1o8FrPI20sb9YK6NenJJUzRwVEOcKbTzAPYfotGrwpzQXZpgEkaaJmph2NY1zQGkXBFlnjiTphwsufL5SxS1o7MXi7xZk4txfVptMhjAajuVrNuepn/ACqMF43OqmYNmfyi8/5jfsAtzEVBWY5lam4MMQ6R8YMgfmshlQTAMwY6WXRhmsi2RxZ46Ohhvf6qmJqHJlbGZxyt/wBxM7Quc8AEkwNzyCHSGY+0dNxDRybzPU6lXIWHptyANiAB280X2sjf5oLHHyVzCKBZpYCjma4k7GPLQ+oPooa60FZeExzs9RmwDI7kOlNyUsXdlZ60qGRO3NX9mVnVeIsZvJ5C/wAV2HxVSqbHIwbi5PQH6o7r0BI0XNhSxyFTbFhMeqvCGwUGzclyq3Rc0+i2w9F5VJXFQXckrkGi4K7OgiSr5Uuxg7efp3QnN9FenoZ1A7LnR0usNRSk6N9Y++2qpVqZiP3bnyk7qntQHafPVCqVjJgWnbvpa618GSD1ILoadDPIbDzO6Gahtmy6DXlAQAbzENzQSQLXki9gfT6Jiu7NBAbcfvBpPh8OthttZOujUfLWEHb4q+aTDetud0rhT4AefylNUA6Q5rSQCNiRI5qB0E1+DveMwkOOxMz35J78Efhw1cVFdsspgOc11w4mQ1p2IkEkbx1Wr+0NixsfXzT/AOHceGVSXGAQB6X+qlDyI7asVwaVnvqlhbksHjWFY+HHw1WXp1BZ7Tyndp3abFJ8T44cQRRo1MkkNzAgOk27gdrrV4RwfDUhIYHPPvVH+J7o6nTsEmfx3nbcZUVjkXpox6eMdmBJaAQAemvNei4PRa0Et1PvO1J7n6bIzqFM2gQbEagzzXzunjH0arvZucCHOFtCASBI3lQ8TwZYZ7t/8+RvI8iPKR9OrPEEG87G4814CpwyK1bK4AZ/DvbKN1v0OLmrTa8wDcO5Bzdddog+aycgIdVE+Il35W0FgvRzZNY2jkyNToPwykxpzPGZ3W8c46/krcbe0sBpkTmYSSJ8MjMPS3mkRUd7x8I3m3ndBfTaGGo8kTdsk2aNLEm5uedxyXLCUczqURd3jjUTWxfF2tZYRaXdOYXn8NDGgu1cSY3k7Ab8lApGtGrG6iRcxuRsN7pmjSawk3nd7ve7A7Dsu2EVFUvRzTm59kWp0yfE8Afwt5f4nczyGyKCJSWK4k0aAu7aeqQrcTcATpsANTyCbdIm1ZtZ2gxOg9O6FUxjBpftdYmHpHUmXG7rz5dl2LdHgB8brW2B949wJPokeUyiM4LGmX1AI9o7MJv4R4W//kA+aO97ne84kciYHog02AAAWAEfQBGo0nPMDz6d1K2+DP2FweHznoNT9At5thAFtkrh6YYIH9U01wVYxoyCMefJXDkJt9pVw77/ACWbKIID0C4mdbfJVFu65xm6Gwxxhd2Uhqq6yVsxLnQo9sdkMmTdUJhAZIO2oRv5KH1SZ3tbslwbwm6lOJn90CTzvCZKxkgIvB05W311SlQjMTrczGkazP6I73mAAAR233BO/lsqfszpBIyg5tbWBvGa8376I1Y6RFKsctgQAXAGLQQREAXI8XqtKk8AD2ZeG7Q2R10Z8Fm1MNIdAMNe5sGYEAkknTvzEJaphasyxhym4GkToBJnSFSLlH4CfOsP7wpnQm38p+oXq8MQWwNI7QsXhfCP2jNDw0tuLTB1nt+qTxlR7HZKjoFjaQ0ibx16Fc08eyLdNrFAOJLTPb5EoeFBLsp7xOo38ltcJ4NUe0BrMrIsXWB7d+cIdHhBdiWMfbIS54FjlsRcbGwkc1w/07uvgrvyicNh2NLamUS0hwi12mR8lpUOJkk+zIIm4kAtnnO3+LT5LexNajTYXOhjWi+3YAcyvE47G4fElzms9m+mC5pJ97MHNbIFidbTI5wu7FH9OPuzlyxNzEfiHI2GnM/QEe6D3Op7W6rBa6dDfe/3Zaf4Y4AasPqyGataDcjqdgV6+vgaGTJ7NsdAAe4IuD1Ry5owW02COKU/R5PDcDrVaYLXBrXazMxzjrf1Wk/gjxlBcCAdIIHwla2AxGRgY6JZ4R1A9094ieoKtjuK06VN1SoYa31JOjRzJMADqox83DKSin0d+LUbZ5PF18xdTizSRUm+n7oG879DfVIe1a0mXgm/vOzEfygaeSzK/wC0VM1Q0a2UkuOWlUyy4lxMxzJMpKm7OYYx7jvDT9V0RSj6OGVs9dgcbSDheZBI1ue5XcVxbHMOa38IuvJup1W/8p3ckAfBQ72rrlwHaXfEqm3KMnyhqtigNYn5+SJhacnM4idmiIb6bpFuCqNAcd9y0lx+KpVo2lznRv8Auj4fmptAo2sRjmsEAyY0Gw5nkO6U4dSdJeRLndLgG/x19OSQpUst4j+FsTf+J458h5nkm6PEKrbNcf8AS0n5XKVRsz4b9PCG2Yx01KfY4NEAR9/0WJhhiXmS/L3DSfQD6rRpUyNXlx7NA+A+qqqXoVIcY2dESm0pe/8AVGD7XP38lrKKI7TO4sVceSRY4a/NFNcffVLYw2B5/FVLoSwePuUemSUAlxWB/RQ5wK46xae6htJ0rUFJlSLdVQt/RHfTi5IJQxJ308vRah6F4+ym6FbMYMRYyel7aJauTPb71QmvN77c9r9OaaLpjJF34gMILTmI94ZdA3Q7jfXqudimgmTmkgyABaWky0jW0z05JCs8mbEnQEcmxp0EaoLKREHISHWnXvHWD8Qtu/gc2XYol4YQHNzHNlFpI1cARfS2+Uwnv2IG5kHpHxsbjTyWNhGmQ/wxJAcSSbUyA07xBHojvxWlqjrC7BI/8tei6Iv7FZ85wWJazM6SDByjY9D8FfhmLY6uH12GrHu02iczhoIvYXPks5jm5XZs0wMkRAM3zTeInRex/wD5tTpgVX6vlrZOoaRNu5mewXOvo6D0OF/EDne/h69IbFzHFvmRceYAVKmJaagqSPdLQRuCQ4X8j6rT4ljKdKmX1HZWj4k6ADc9F5vhX/3M1RjcrQ7KM1yTAJJAsLEc1w+ZHI2tLLYtf8hlmFGJfnqyabf7unMA/wCN0ak7DlHMrVrcGw9SmW+yYOrWhpmIBkcpKVqcHeG+DEPpkaQ2m4ejmz8QsM/iivhaho4hrag1zt8JIOhA0Pa15urePDIuzJ5NfSNmhgsa+KYqexpMa1uZt31IaJcIggHlIjqmqXD6lG4r1anNtQtc3vcZgexVODcdbU8YMtM67cxG35EJv8Q8Wp0KYcfE53uM0k8zyaOah52HLkX4Pn1wXDOC6zIxGJcXHzt8tu60OE0yXAuMkadO3I9dVX8MYT2lEVX3dUc5xO0BxaAOTQBb13lauI4Ux15LXjR7SWuHmNR0K82PiTctf5OyeeLhxGgyA1eO4qxrXueABmu48yIuT2XY/jNeg4se4OAscwieWVw+srKxVQ1i2QQ0C5JFyTOs6aei9T9SEIaR9r9jzMr3KVeIf9NuYbmDHks7EPBd4dPRejwmEcdHD1B+Nys7i/BXZs3hdOoktHfKAZ81eEnJXRySj+5kHFOdAEujTQNHd2nlc9F1KgS5o95xMDkCbeEf7jfsnIZT/vGkRpdseTWkHyhMM4nh4GVwb5Zbz1CpV+wV9Aq3AnsIDnAA3kSSfJOYXBtYPCO7jqfMrncXpn/mNPUulU/4lS/6jel09xA19DxdHn5epXB5+7eqRPFKP/UaeV0E8Ypmwk+WUeroCDkgpM1GuHdRiMS1l3EATudeQHVZjcU52j2MHRwe78gfVFoUmB0ghzv4iczv07CErbHQ/hcS43y5Z0B1jqNuyNnEpdj9/REa79UBgxTbDoA4dEFrWmDZcwtHXVTk4vjGSa6NEgWP1J9IRi4DT8rJLDVgCRfzsUctc43sE0k9fxHjQWmQbm/JcX3gCUAVcpgC+tgqMxAjxTmv330UpqTSRSLR2MbtqTpGqEymfaBpbe0Wk2N7jf1iDfRM4es6JDTBAkkx13KNXAdUYdwCYcAdiDv2KtsoJBUbKVeGNyGWiZdBkjKBMeE7Tz1WRTwQdIb4nAmMokH+FusAEz4trJqr/a1DncfZtLjAMF0Te877fYNVaz2bixrYuTZ0iziZjUddBKyyxa2XwHXpiYqk8OBAIAi0wbRIgk9RBldXbTnxBxJv4zldcmxHTTyWrXdcMdmpgsB8RLoc5s3ESRcjRLYnBsJ0BsJLX02CRaYe06xNrXWx5FKxZRo+Z4hjmOLXAggwQdjyWp+F+NDD1Dm914AJEmCJgxuLlL4jG+1/vRLtM4gO/wAw0d8O6EMGw6VG+eZp+UfFNtXsfb7Nb8X8YFapTDKmZjGzAmMziZ2v4cvxTX4O/ELKIdSe7K1zszXHQOiCDykAX6LDdg27vZ8T8gVU4amNXE/ytPzeQPgVt1dm3jR9ExHFC4eDxDmCCO5ItC8Xxiv7ar7QmKYaGtd/HlkktGpuTG0RJCzw5rfcaB1d4zHwaPIKjzJkkk8zcrOTYmrux3CcVfSP9nDW/wAJvPU9e0cu9sTjH1nF7ySTadIA0A5BIBnX1P5I9I9vjt3WFaPpPAeLD2FMMMlrGhzRcggQZGsEzfdEx/HMrC8zI91psSdBI5dV85BnU/VM0t4Gv9URHJjVHilR1YOqMLpJkzI0MWi14WmceAJYAD0Pw0hY7JG58rJh9UO94X5ix/VLKKbsm2/gpjeMVhD6TmgyQRBBGnl8ErjeL1arRnL5n91wykRyBVcRw8PMhzgRpv66Sqfsb26w7q2flPyTpiC1ME6tI6mEXJyKOzDtOrwOhaQfjCcoYKnu6fMAJrDZllqu2mY0k8gJW7RoUf3Wg9Tf4FMtqW5dtPRYGxgNwFQ/ux3t8NU7R4R/G7yb+Z/JaQdtKtPn5AIGTAUsDSGjfUZvmU3TpAfkBCF7Qrg6ErGQUETc9t+yNhXNm8nf7uk3Hn9+asHhKOmajyJgQqSWm/qlaFaNviJV6tcG2vmovErsexkBzj4bxvOnVOivAE677zCSwWMht7BGpv8AaXAIbzO/klzba/iPjqwgdcnf8kDFOL2wWc4MiPP0XYjwGTMaHfS/pqjVsUA3WQQYOkmN5SYIzvvopJxG21ibjeYHh0LdgLz+iBQNSoXB4Dd2mxOrtASJvI8t1mjEOAjMZBBIzEBwaBIJaSf0R8VxQ03QGt0ykBxJAeQZBeReZPQ8t+7SMl+QqkTUwcTke4OAtLZB8r+uiSZxB5/5YdElxykgQYdmkRYSb2t5KcFjqZzHM67i0s8V25S5rzldtDpE77C6piMRTYBLpIGWA5gOhNx4g2CLNiLt3KWGKKXOAcm/YxxXGe8NJEtpsOYAmACIBE9Re8Tssp/FC2AWtJj99vive9hzVcZxA2axxkG58LoaQwAB7Y0OzRtryj/hdRwDpD5Eh2dt/wDUZTa/6it37PGb+aIzdcuSs6C40Pb8kMLlywjJ2++itT0K5cgEqEWjqFy5MTkMUvyTmH1C5csRkFHvef1UBcuWJhqfunyUtXLlhWdU0KSxHu/fMLlyJkaPDfdHn8k23ft9QuXIinN37K7Nu65csZEnTzVCpXJWOi9NEb9FK5KUQE+75qrdQuXIDIqtnAf3Tf8AN8ypXJZeh4leL+6e6y/3PP6LlyKM/ZLvoPkEtjPff2f8ioXJzIa4b/dO/nrf+gpfjmje1L/001y5Vf8AYb5FMPrR/nd/tXpqGr/+4/5qVyOIB//Z" class="img-responsive" id="image_background">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
               <img src="http://cs7.pikabu.ru/images/previews_comm/2014-08_3/14079559137098.jpg" class="img-responsive" id="image_background" style="border:1px solid lightgoldenrodyellow;">
            </div>

                 
              
          </div>
          
          
          
          
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!--============================User chat===================================---->        
       <div id="chat-messages" style="opacity:5 !important;">            
       </div>        
        <?php $id=$_REQUEST['cname'];; ?>
        <div id="sendmessage">
        <form action="" method="post">
            <input type="text" name="message" id="message" value=""  style="height:auto;" placeholder="Type message..." />
            <input type="hidden" name="to_id" id="to_id" value="">
            <button type="button" id="send"></button>
        </form>
        </div>
    
    </div>        
</div>  
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>


<script src="chatting_list.js"></script>

<script type="text/javascript">

function campaign(type)
{
   alert(type);
}

</script>


 <script type="text/javascript">
     
    
       
        
     
     
     /* ========================Single Message send by sender ========================= */
             $(document).on('keypress', '#message', function (event) {                
                if (event.which == 13 && $(this).val() != '') {                     
                    event.preventDefault();
                     var to_id=$('#to_id').val();
                     var profile_pic=$("#user_profile_pic").attr('src'); 
                     var message=$('#message').val();                    
                        $.ajax({
                           type:'POST',
                           url:'ajax/ajax_message.php',
                           data:{"message":message,"to_id":to_id,"check":"insertpayment"},
                           success:function(data)
                           {                              
                               var result_data= JSON.parse(data);                        
                                if(result_data.action=="block")
                                {
                                    alert("Opps!! You have blocked User.");
                                }else
                                {
                                   for(var i=0; i<result_data.length; i++)
                                   {                            
                                    var html_data='<div class="message right right_'+result_data[i].sender_id+'">';
                                       html_data +='<img src="user_images/'+result_data[i].image+'"  height="10px" width="20px;"/>';
                                       html_data += '<div class="bubble">'+result_data[i].message+'<div class="corner"></div>';                   
                                       html_data += '<span>'+result_data[i].message_time+'</span>';
                                       html_data += '</div>';
                                       html_data += '</div>';
                                   }
                                   $('#message').val('');
                                   $("#chat-messages").append(html_data);
                                   $("#chat-messages").scrollTop($("#chat-messages")[0].scrollHeight);
                               }
                            }
                        });    
                    }
                });
       
       
       
       
       
              $('#send').click(function(){
                        var message=$('#message').val();
                        var to_id=$('#to_id').val();
                        var profile_pic=$("#user_profile_pic").attr('src');                       
                 
                 $.ajax({
                    type:'POST',
                    url:'ajax/ajax_message.php',
                    data:{"message":message,"to_id":to_id,"check":"insertpayment"},
                    success:function(data)
                    {
                        console.log(data);
                        
                        var result_data= JSON.parse(data);                        
                         if(result_data.action=="block")
                         {
                             alert("Opps!! You have blocked User.");
                         }else
                         {
                            for(var i=0; i<result_data.length; i++)
                            {                            
                             var html_data='<div class="message right right_'+result_data[i].sender_id+'">';
                                html_data +='<img src="user_images/'+result_data[i].image+'"  height="10px" width="20px;"/>';
                                html_data += '<div class="bubble">'+result_data[i].message+'<div class="corner"></div>';                   
                                html_data += '<span>'+result_data[i].message_time+'</span>';
                                html_data += '</div>';
                                html_data += '</div>';
                            }
                            $('#message').val('');
                            $("#chat-messages").append(html_data);
                            $("#chat-messages").scrollTop($("#chat-messages")[0].scrollHeight);
                        }

                    }
                    });




    
                    
                });
                
                
/*==========================Total==========================*/
          
              $(".friend").click(function(){
                var id=$(this).attr('id');
                $("#to_id").val(id);               
               var sender="<?php $loginemail=$_SESSION['user_email']; echo $loginemail; ?>";
               $.ajax({
                    type:'POST',
                    url:'ajax/ajax_total_chat.php',
                    data:{"sender":sender,"receiver":id},
                    success:function(data)
                    {
                        
                     var result_data=JSON.parse(data);
                     var sender_id="<?php $loginemail=$_SESSION['user_email']; echo $loginemail; ?>";                    
                     var html_data = '<div id="chat-messages" style="opacity:5 !important;">';
                         html_data += '<label>Thursday 02</label>';  
                     for(var i=0; i<result_data.length; i++)
                     {                         
                       if(sender_id == result_data[i].sender_id)
                       {                          
                        html_data += '<div class="message right right_'+result_data[i].sender_id+'">';
                        html_data += '<img src="user_images/'+result_data[i].senserimage+'"  height="10px" width="20px;" id="user_profile_pic"/>';
                        html_data += '<div class="bubble">'+result_data[i].message+'<div class="corner"></div>';
                        html_data += '<span>'+result_data[i].message_time+'</span>';
                        html_data += '</div>';
                        html_data += '</div>';  
                        }if(sender_id == result_data[i].receiver_id)
                        {                            
                        html_data += '<div class="message" id="left'+result_data[i].sender_id+'">';
                        html_data += '<img src="user_images/'+result_data[i].senserimage+'" />';
                        html_data += '<div class="bubble">'+result_data[i].message+'<div class="corner"></div>'; 
                        html_data += '<span>'+result_data[i].message_time+'</span>';
                        html_data += '</div>';
                        html_data += '</div>';                 
                        
                        }
                     }
                     html_data += '</div>';
                    
                     $("#chat-messages").replaceWith(html_data);
                     $("#chat-messages").scrollTop($("#chat-messages")[0].scrollHeight);                    
                    }
                    });
                    
       /* ===================Single Message fetch by sender ============================ */         
                    
                     setInterval(function(){ 
                        var sender='<?php $loginemail=$_SESSION['user_email']; echo $loginemail; ?>';
                        var reciever=id;                        
                        $.ajax({
                            type:'POST',
                            url:'ajax/ajax_fetch_singel_message.php',
                            data:{"sender":sender,"receiver":id},
                            success:function(data)
                            {
                                console.log(data);
                                var result_data= JSON.parse(data);                                        
                                for(var i=0; i<result_data.length; i++)                                {
                                    var html_data = '<div class="message" id="left'+result_data[i].sender_id+'">';
                                    html_data += '<img src="user_images/'+result_data[i].image+'" />';
                                    html_data += '<div class="bubble">'+result_data[i].message+'<div class="corner"></div>'; 
                                    html_data += '<span>'+result_data[i].message_time+'</span>';
                                    html_data += '</div>';
                                    html_data += '</div>'; 
                                }                               
                                $("#chat-messages").append(html_data); 
                                if(result_data.length > 0){
                                    $("#chat-messages").scrollTop($("#chat-messages")[0].scrollHeight);
                                }
                                
                                
                            }
                            });  
                        }, 1000);
                       
                
            });            
    /*==========================Total & Single Message fetch by sender==========================*/   
    
     /*==========================User Online list on click event on page==========================*/   
            $('#all_user_list').click(function(){           
            event.preventDefault();
               $.ajax({
                    type:'POST',
                    url:'ajax/all_user_list.php',                    
                    data:{action:'user_list'},
                    success:function(data)
                    {
                        var result_data= JSON.parse(data);
                        console.log(result_data);   
                        var html_data = '<div id="friends">'; 
                        for(var i=0; i<result_data.length; i++)
                        {   
                            if(result_data[i].user_status==1)
                            {                                        
                                html_data += '<div class="friend" id="'+result_data[i].user_email+'">';
                                html_data += '<img src="user_images/'+result_data[i].user_image+'"  height="10px" width="20px;"/><p>';
                                html_data += '<span id="name">'+result_data[i].user_name+'</span><br/>';
                                html_data += '<span>'+result_data[i].time+'</span>';                               
                                html_data += '</p>';
                                html_data += '<div class="status available"></div>';
                                html_data += '</div>';                                
                            }else{                                      
                                html_data += '<div class="friend" id="'+result_data[i].user_email+'">';
                                html_data += '<img src="user_images/'+result_data[i].user_image+'"  height="10px" width="20px;"/><p>';
                                html_data += '<span id="name">'+result_data[i].user_name+'</span><br/>';
                               if (result_data[i].time !== null && result_data[i].time !== undefined)
                               {
                                   html_data += '<span>'+result_data[i].time+'</span>'; 
                                    
                                }else
                                {
                                   html_data += '<span>Not Avialable</span>';    
                                }
                                html_data += '</p>';
                                html_data += '<div></div>';
                                html_data += '</div>';                               
                            }
                               
                        }
                         html_data += '</div>';
                         $("#friends").replaceWith(html_data);
                    }

            })
            })
            
            
            $("#clear_chat").click(function(){
                var email=$('#to_id').val();
                $.ajax({
                    type:'POST',
                    url:'ajax/clear_chat.php',                    
                    data:{action:'clear_chat', to_id:email },
                    success:function(data)
                    {
                        console.log(data);
                        var res=JSON.parse(data);
                        
                        if(res.action == 'success')
                        {
                            
                         var html_data = '<div id="chat-messages" style="opacity:5 !important;"></div>';
                                                    
                            
                            $("#chat-messages").replaceWith(html_data);
                            $("#chat-messages").scrollTop($("#chat-messages")[0].scrollHeight); 
                           
                        }else
                        {
                           return false; 
                        }
                        
                      
                    }
                });
            })
            
            $("#user_block").click(function(){
                var email=$('#to_id').val();
                $.ajax({
                    type:'POST',
                    url:'ajax/block_user.php',                    
                    data:{action:'block_user', to_id:email },
                    success:function(data)
                    {
                        console.log(data);
                        var res=JSON.parse(data);                        
                        if(res.action=='block')
                        {
                            alert("You have Blocked User");
                            $("#user_block").html("Unblock");
                        }
                        if(res.action=='unblock')                       
                        {
                            alert("You have Unblocked User");
                            $("#user_block").html("Block");
                        }
                    }
            })
             })
             
             
             $(".gallery_product").click(function(){
                var theme= $(this).children("img").attr("src"); 
                var email=$('#to_id').val();                
                $.ajax({
                    type:'POST',
                    url:'ajax/chat_theme.php',                    
                    data:{action:'theme', chat_theme:theme, reciever_id: email},
                    success:function(data)
                    {
                        var res=JSON.parse(data);                        
                        if(res.reciever_id == email)
                        {
                        $('#chatview').css("background", "url('"+res.theme+"')");
                        }
                        
                    }
                
               
                  
               
                  })
             })
        </script> 



