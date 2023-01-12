<div class="content">
 	<div class="col-lg-12">
		<div class="panel panel-primary">
    		<div class="panel-heading"><a href="qrcode.php">Generate QR code</a></div>
    	</div>
	</div>
 	<div class="col-lg-12">
     	<?php
		//load the ar library
		include 'phpqrcode/qrlib.php';

		//data to be stored in qr
		$item ='https://www.techwomteam.com';
		  
		//file path
		$file = "images/qr1.png";
		  
		//other parameters
		$ecc = 'H';
		$pixel_size = 20;
		$frame_size = 5;
		  
		// Generates QR Code and Save as PNG
		QRcode::png($item, $file, $ecc, $pixel_size, $frame_size);
		  
		// Displaying the stored QR code if you want
		echo "<div><img src='".$file."' width='150'></div>";

		?>
	</div>
</div>
 