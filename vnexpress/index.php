<?php
	require "lib/dbCon.php";
	require "lib/trangchu.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lập trình PHP- Trang tin tức VnExpress</title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			margin: 0px;
			font-family: Arial, sans-serif;
    		font-size: 12px;
			}
		
		#wrap{
			width: 1000px;
			margin: 15px auto;
		}
		#header{
			height: 70px;
		}
		#logo{
			width: 300px;
			float: left;
			margin-top: 10px;
		}
		#menu{
			border-bottom: solid 3px #CCC;
			padding: 0 0 3px 0px;

		}
		#miniheader{
			margin-top: 7px;
			height: 40px;
			float: left;
			width: 1000px;
			margin-left: 0px;
			
		}
		.left{
			width: 35%;
			margin-left: 0px;
			float: left;
		}
		.left ul{
			margin: 0px;
			padding: 0px;
		}

		.left ul li a{
			text-decoration: none;
			font-weight: 700;
			color: #9f224e;
			background-color: #eceeed;
			margin-left: 0px;
			padding: 4px 4px 4px 4px;
			
			border-left: 3px solid #9F224E;
			font: 400 14px/25px arial;
			font-weight: bold;
			position: relative;
			

		}

		
		.left ul li{
			list-style: none;
			float: left;
			height: 26px;
			margin-left: 0px;
			
			
		}
		.left ul li a:after{
			content: "";
			position: absolute;
			top: 0px;
			border-bottom: 12px solid transparent;
			border-top: 12px solid transparent;
			right: -13px;
			border-left: 13px solid #eceeed;
			
		}
		.right{
			width: 65%;
			float: right;
		}
		.clear{
			clear: both;
			height: 5px;
			padding: 0px 0px;
			
		}
		#slide{ 
			margin-top: 7px; 
			border-bottom: 1px solid #CCC; 
			min-height: 425px;
		}
		
		#content-left{
			border-right: solid 1px #E2E2E3;
    		width: 16%;
    		float: left;
    		padding: 5px;
    		min-height: 500px;
		}
		#content-main{
			border-right: solid 1px #E2E2E3;
    		width: 60%;
    		float: left;
    		padding: 5px;
    		min-height: 500px;
    		margin: 0 0 0 5px;
		}
		#content-right{
			width: 20%;
    		float: left;
    		padding: 5px;
    		min-height: 500px;
		}
		#footer{
			margin-top: 10px;
		}
		.footer1{
			width: 23%;
			float: left;
		}
		.footer2{
			width: 30%;
			float: left;
			padding-top: 0px;
		}
		.footer3{
			width: 47%;
			float: left;
			text-align: right;
		}
		.footer3 p a{
			text-decoration: none;
		}
	</style>
</head>
<body>
	<div id="wrap">
		<div id="header">
			<div id="logo"><img src="image/logo.gif" alt="ảnh logo">
			</div>
		</div>
		<div id="menu"></div>
		<div id="miniheader">
			<div class="left">
				<ul>
					<li>
						<a href="">Trang nhất</a>
					</li>
				</ul>
			</div>
			<div class="right">
			<!--blocks/thongtinchung.php-->
			</div>
		</div></br>
		<div class="clear"></div>
		<div id="slide">
		<?php
		require "blocks/top_trang_chu.php";
		?>
    	<!--blocks/top_trang_chu.php-->

        	<div id="slide-right">
        <!--blocks/quangcao_top_phai.php-->
        	</div>
        </div>
        <div id="content">
        	<div id="content-left"></div>
        	<div id="content-main"></div>
        	<div id="content-right"></div>
        </div>
        <div class="clear"></div>
        <div id="footer">
        	<div class="footer1">
        		<img src="image/logo.gif" alt="ảnh logo">
        	</div>
        	<div class="footer2">
        		<p>© Copyright 1997 VnExpress.net, All rights reserved</br>

					® VnExpress giữ bản quyền nội dung trên website này.
				</p>
        	</div>
        	<div class="footer3">
        		<p>
        			<a href="http://fptad.net/qc/V/vnexpress/2014/07/">VnExpress tuyển dụng</a>
        			<a href="http://polyad.net/Polyad/Lien-he.htm">Liên hệ quảng cáo</a>
        			<a href="/contactus">Liên hệ toà soạn</a>
        		</p>
        		<p>
        			<a href="http://vnexpress.net/contact.htm">Thông tin Toà soạn:</a>
        			<span>0123.888.0123 (HN) -</span>
        			<span>0129.233.3555 (TP HCM)</span>
        		</p>
        	</div>
        </div>
    </div>
		
	</div>
</body>
</html>