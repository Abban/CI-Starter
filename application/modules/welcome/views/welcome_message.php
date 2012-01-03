<div id="main" class="clearfix">
	<div id="page">
		<section>
			<h1>Header 1</h1>
			<h2>Header 2</h2>
			<h3>Header 3</h3>
			<h4>Header 4</h4>
			<h5>Header 5</h5>
			<h6>Header 6</h6>

			<hr>

			<h3>Paragraphs</h3>
			<p><a class="modal" href="<?=site_url('home/modal');?>">Donec</a> id elit non mi <strong>porta gravida</strong> at eget metus. Sed posuere <span class="label dark">consectetur</span> est at lobortis. <span class="label green">Maecenas</span> sed diam eget risus varius blandit sit amet non magna. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vestibulum id <span class="label red">ligula</span> porta felis euismod semper. <span class="label blue">Donec</span> id elit non mi porta gravida at eget metus. </p>
			<blockquote>Donec id elit non mi porta gravida at eget metus. Sed posuere consectetur est at lobortis.</blockquote>
			<p>Donec id elit non mi porta gravida at eget metus. Sed posuere <span class="label yellow">consectetur</span> est at lobortis. Maecenas sed diam eget risus varius blandit <em>sit amet non magna</em>. Praesent commodo cursus magna, vel <span class="label">scelerisque</span> nisl consectetur et. Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida at eget metus. </p>

			<h3>Unordered List</h3>
			<ul>
				<li>List Item 1</li>
				<li>
					List Item 2
					<ul>
						<li>Sub list Item 1</li>
						<li>Sub list Item 2</li>
						<li>Sub list Item 3</li>
					</ul>
				</li>
				<li>List Item 3</li>
				<li>List Item 4</li>
				<li>List Item 5</li>
				<li>List Item 6</li>
			</ul>

			<h3>Ordered List</h3>
			<ol>
				<li>List Item 1</li>
				<li>
					List Item 2
					<ol>
						<li>Sub list Item 1</li>
						<li>Sub list Item 2</li>
						<li>Sub list Item 3</li>
					</ol>
				</li>
				<li>List Item 3</li>
				<li>List Item 4</li>
				<li>List Item 5</li>
				<li>List Item 6</li>
			</ol>

			<h3>Definition List</h3>
			<dl>
				<dt>List Item 1</dt>
				<dd>Definition 1</dd>
				<dt>List Item 2</dt>
				<dd>Definition 2</dd>
			</dl>

			<h3>Alert Boxes</h3>

			<div class="alert red">
				<a class="close" href="#">Close</a>
				<p>Donec id elit non mi porta gravida at eget metus. Sed posuere consectetur est at lobortis.</p>
			</div>

			<div class="alert yellow">
				<a class="close" href="#">Close</a>
				<p>Donec id elit non mi porta gravida at eget metus. Sed posuere consectetur est at lobortis.</p>
			</div>

			<div class="alert blue">
				<a class="close" href="#">Close</a>
				<p>Donec id elit non mi porta gravida at eget metus. Sed posuere consectetur est at lobortis.</p>
			</div>

			<div class="alert green">
				<a class="close" href="#">Close</a>
				<p>Donec id elit non mi porta gravida at eget metus. Sed posuere consectetur est at lobortis.</p>
			</div>

			<h3>Forms</h3>

			<ul class="site_form">
				<li class="clearfix">
					<label for="">Label 1</label>
					<div class="input_holder full_width">
						<input type="text" placeholder="This input has placeholder text..">
						<div class="form_tip">
							This is a form tip.
						</div>
					</div>
				</li>
				<li class="clearfix">
					<label for="">Label 2</label>
					<div class="input_holder mid_width">
						<input type="text" class="error">
						<div class="error">
							This is a form error.
						</div>
					</div>
				</li>
				<li class="clearfix">
					<label for="">Label 3</label>
					<div class="input_holder small_width">
						<input type="text">
					</div>
				</li>
				<li class="clearfix">
					<label for="">Label 3</label>
					<div class="input_holder tiny_width">
						<input type="text">
					</div>
				</li>
				<li class="clearfix">
					<label for="">Label 4</label>
					<div class="input_holder full_width">
						<textarea class="valid"></textarea>
						<div class="form_tip">
							This is a successful field!
						</div>
					</div>
				</li>
				<li class="clearfix">
					<label for="">Label 5</label>
					<div class="input_holder mid_width">
						<textarea></textarea>
					</div>
				</li>
				<li class="clearfix">
					<label for="">Label 6</label>
					<div class="input_holder small_width">
						<textarea></textarea>
					</div>
				</li>
				<li class="clearfix">
					<label for="">Label 7</label>
					<div class="input_holder full_width">
						<select>
							<option value="">Option 1</option>
							<option value="">Option 2</option>
							<option value="">Option 3</option>
							<option value="">Option 4</option>
							<option value="">Option 5</option>
							<option value="">Option 6</option>
						</select>
					</div>
				</li>
				<li class="clearfix">
					<label for="">Label 8</label>
					<div class="input_holder mid_width">
						<select>
							<option value="">Option 1</option>
							<option value="">Option 2</option>
							<option value="">Option 3</option>
							<option value="">Option 4</option>
							<option value="">Option 5</option>
							<option value="">Option 6</option>
						</select>
					</div>
				</li>
				<li class="clearfix">
					<label for="">Label 9</label>
					<div class="input_holder small_width">
						<select>
							<option value="">Option 1</option>
							<option value="">Option 2</option>
							<option value="">Option 3</option>
							<option value="">Option 4</option>
							<option value="">Option 5</option>
							<option value="">Option 6</option>
						</select>
					</div>
				</li>
				<li class="clearfix">
					<label for="">Label 10</label>
					<div class="input_holder full_width">
						<span class="radio_check">
							<input type="checkbox"> <label for="">Blah</label>
						</span>
						<span class="radio_check">
							<input type="checkbox"> <label for="">Blah</label>
						</span>
						<span class="radio_check">
							<input type="checkbox"> <label for="">Blah</label>
						</span>
					</div>
				</li>
				<li class="clearfix">
					<label for="">Label 11</label>
					<div class="input_holder full_width">
						<span class="radio_check"><input type="radio"> <label for="">Blah</label></span>
						<span class="radio_check"><input type="radio"> <label for="">Blah</label></span>
						<span class="radio_check"><input type="radio"> <label for="">Blah</label></span>
					</div>
				</li>
				<li class="clearfix">
					<input type="submit" value="This is a submit button made in pure CSS">
				</li>
			</ul>
		</section>
		<aside>
			<header></header>
			<div>
				<p>Donec id elit non mi porta gravida at eget metus. Sed posuere consectetur est at lobortis. Maecenas sed diam eget risus varius blandit sit amet non magna. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida at eget metus. </p>

				<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Aenean lacinia bibendum nulla sed consectetur. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam quis risus eget urna mollis ornare vel eu leo. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. </p>

				<p>Cras mattis consectetur purus sit amet fermentum. Donec ullamcorper nulla non metus auctor fringilla. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vestibulum id ligula porta felis euismod semper. </p>

				<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id dolor id nibh ultricies vehicula ut id elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis risus eget urna mollis ornare vel eu leo. </p>
			</div>
			<footer></footer>
		</aside>
	</div>
</div>