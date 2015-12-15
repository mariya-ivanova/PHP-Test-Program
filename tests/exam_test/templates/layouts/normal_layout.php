<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $data['title']; /* for php 5.4 or higher you may use: <?= $data['title']; ?> */ ?>		
		</title>
        <meta charset="UTF-8">       		
	
		<link href="../css/bootstrap.css" rel="stylesheet" media="screen">			
		<link href="../css/styles.css" rel="stylesheet" media="screen">
		
    </head>
    <body>

	<div class="container-fluid">
	
		<div class="row-fluid clearfix modal-header">			
			<div class="span10 offset1">
				<?php
				include $data['header'];
				?>
			</div>
			<div class="span1">
				<span id="countdown"></span>
			</div>
		</div>
		
		<div class="row-fluid clearfix modal-main">			 
			<div class="span10 offset1">
				<br/><br/>
				<?php
					include $data['content'];
				?>
			</div>
		</div>
				
		<div class="row-fluid clearfix">				
			<div class="span10 offset1">		
				<?php
					include $data['bottom'];
				?>
			</div>			
		</div>							
    		
		<div class="row-fluid clearfix modal-footer">			
			<div class="span10 offset1 ">			
				<?php
				include $data['footer'];
				?>
			</div>				
		</div>
		
	</div>	
	
    </body>
</html>
