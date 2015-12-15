
<form class="form-horizontal" method="POST" >

	<div class="control-group">
		<label class="control-label" for="fn">Факултетен номер</label>
			<div class="controls">	
				<input type="text" name="fn" id="fn" class="input-xlarge" required="true"
				pattern="[0-9]{4,5}" placeholder="четири или пет цифрено число" /> <br/>
				<?php 
					if(isset($data['errors'][0])){
						echo '<span class="help-block helperText">'.$data['errors'][0].'</span>';
					}
				?>					
			</div>	
	</div>

	<div class="control-group">
		<label class="control-label" for="group">Група</label>
			
		<div class="controls">		
			<input type="text" name="group" id="group" class="input-xlarge" required="true" 
			pattern="[0-9]{1,2}" placeholder="едно или дву- цифрено число"/> <br/>	
			<?php 
				if(isset($data['errors'][1])){
					echo '<span class="help-block helperText">'.$data['errors'][1].'</span>';
				}
			?>	
		</div>	
	</div>

	<div class="control-group">
		<!-- Button -->
		<div class="controls">
			<input type="submit" name="start" value="Започни теста" class="btn btn-info" />
		</div>
	</div>
</form>








