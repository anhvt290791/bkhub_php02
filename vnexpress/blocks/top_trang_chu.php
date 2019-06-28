<div id="slide-left">
<?php
  require "lib/trangchu.php";
  
?>
          
        	<div id="slideleft-main">
                <img src="upload/tintuc/<?php echo $row_hotNew['urlHinh']?>"  /><br/>
                <h2 class="title"><a href="#"><?php echo $row_hotNew['TieuDe']?></a> </h2>
                <div class="des">
                    <?php echo $row_hotNew['TomTat']?> 
                </div>
            	<p class="tlq"><a href="#>">Hàng trăm chuyến bay bị hủy vì Trung Quốc tập trận</a></p>
                
        	</div>
            <div id="slideleft-scroll">
            	
              <div class="content_scoller width_common">
            <ul>
            <?php 
            
            foreach ($data as $key => $value) {
              
            }

            
            ?>
               <li>
                <div class="title_news">
               		<a href="#" class="txt_link"> <?php echo $data['TieuDe']?>  </a> 
                </div>
              </li>
            <?php 
            ?>
 
            </ul>
            </div>			
            
			<div id="gocnhin">
                <img alt="" src="image/logo.gif" width="100%"></a>
                <div class="title_news"></div>
            </div>
                
            </div>
</div>


     
