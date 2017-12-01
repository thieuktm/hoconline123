<noscript>
	<div class="alert alert-block span10">
		<h4 class="alert-heading">Warning!</h4>
		<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
	</div>
</noscript>

<!-- start: Content -->
<div id="content" class="span10">


	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="<?=base_url('admin')?>">Home</a>
			<i class="icon-angle-right"></i> 
		</li>
		<li>
			<a href="<?=base_url('admin/quantri')?>">Admin</a>
			<i class="icon-angle-right"></i> 
		</li>
		<li>
			<a href="#">Chỉnh sửa</a>
		</li>
	</ul>

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white edit"></i><span class="break"></span>Form Elements</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<form class="form-horizontal">
					<fieldset>
					  <div class="control-group">
						<label class="control-label" for="focusedInput">Focused input</label>
						<div class="controls">
						  <input class="input-xlarge focused" id="focusedInput" type="text" value="This is focused…">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label">Uneditable input</label>
						<div class="controls">
						  <span class="input-xlarge uneditable-input">Some value here</span>
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="disabledInput">Disabled input</label>
						<div class="controls">
						  <input class="input-xlarge disabled" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="optionsCheckbox2">Disabled checkbox</label>
						<div class="controls">
						  <label class="checkbox">
							<input type="checkbox" id="optionsCheckbox2" value="option1" disabled="">
							This is a disabled checkbox
						  </label>
						</div>
					  </div>
					  <div class="control-group warning">
						<label class="control-label" for="inputWarning">Input with warning</label>
						<div class="controls">
						  <input type="text" id="inputWarning">
						  <span class="help-inline">Something may have gone wrong</span>
						</div>
					  </div>
					  <div class="control-group error">
						<label class="control-label" for="inputError">Input with error</label>
						<div class="controls">
						  <input type="text" id="inputError">
						  <span class="help-inline">Please correct the error</span>
						</div>
					  </div>
					  <div class="control-group success">
						<label class="control-label" for="inputSuccess">Input with success</label>
						<div class="controls">
						  <input type="text" id="inputSuccess">
						  <span class="help-inline">Woohoo!</span>
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="selectError3">Plain Select</label>
						<div class="controls">
						  <select id="selectError3">
							<option>Option 1</option>
							<option>Option 2</option>
							<option>Option 3</option>
							<option>Option 4</option>
							<option>Option 5</option>
						  </select>
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="selectError">Modern Select</label>
						<div class="controls">
						  <select id="selectError" data-rel="chosen">
							<option>Option 1</option>
							<option>Option 2</option>
							<option>Option 3</option>
							<option>Option 4</option>
							<option>Option 5</option>
						  </select>
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="selectError1">Multiple Select / Tags</label>
						<div class="controls">
						  <select id="selectError1" multiple data-rel="chosen">
							<option>Option 1</option>
							<option selected>Option 2</option>
							<option>Option 3</option>
							<option>Option 4</option>
							<option>Option 5</option>
						  </select>
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="selectError2">Group Select</label>
						<div class="controls">
							<select data-placeholder="Your Favorite Football Team" id="selectError2" data-rel="chosen">
								<option value=""></option>
								<optgroup label="NFC EAST">
								  <option>Dallas Cowboys</option>
								  <option>New York Giants</option>
								  <option>Philadelphia Eagles</option>
								  <option>Washington Redskins</option>
								</optgroup>
								<optgroup label="NFC NORTH">
								  <option>Chicago Bears</option>
								  <option>Detroit Lions</option>
								  <option>Green Bay Packers</option>
								  <option>Minnesota Vikings</option>
								</optgroup>
								<optgroup label="NFC SOUTH">
								  <option>Atlanta Falcons</option>
								  <option>Carolina Panthers</option>
								  <option>New Orleans Saints</option>
								  <option>Tampa Bay Buccaneers</option>
								</optgroup>
								<optgroup label="NFC WEST">
								  <option>Arizona Cardinals</option>
								  <option>St. Louis Rams</option>
								  <option>San Francisco 49ers</option>
								  <option>Seattle Seahawks</option>
								</optgroup>
								<optgroup label="AFC EAST">
								  <option>Buffalo Dennis Jis</option>
								  <option>Miami Dolphins</option>
								  <option>New England Patriots</option>
								  <option>New York Jets</option>
								</optgroup>
								<optgroup label="AFC NORTH">
								  <option>Baltimore Ravens</option>
								  <option>Cincinnati Bengals</option>
								  <option>Cleveland Browns</option>
								  <option>Pittsburgh Steelers</option>
								</optgroup>
								<optgroup label="AFC SOUTH">
								  <option>Houston Texans</option>
								  <option>Indianapolis Colts</option>
								  <option>Jacksonville Jaguars</option>
								  <option>Tennessee Titans</option>
								</optgroup>
								<optgroup label="AFC WEST">
								  <option>Denver Broncos</option>
								  <option>Kansas City Chiefs</option>
								  <option>Oakland Raiders</option>
								  <option>San Diego Chargers</option>
								</optgroup>
						  </select>
						</div>
					  </div>
					  <div class="form-actions">
						<button type="submit" class="btn btn-primary">Save changes</button>
						<button class="btn">Cancel</button>
					  </div>
					</fieldset>
				  </form>

			</div>
		</div><!--/span-->
	</div><!--/row-->
</div><!--/.fluid-container-->

<!-- end: Content -->

