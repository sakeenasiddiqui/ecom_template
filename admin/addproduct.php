<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Simpla Admin</title>
<link rel="stylesheet" href="resources/css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="resources/css/invalid.css" type="text/css" media="screen" />
<script type="text/javascript" src="resources/scripts/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="resources/scripts/simpla.jquery.configuration.js"></script>
<script type="text/javascript" src="resources/scripts/facebox.js"></script>
<script type="text/javascript" src="resources/scripts/jquery.wysiwyg.js"></script>
<script type="text/javascript" src="resources/scripts/jquery.datePicker.js"></script>
<script type="text/javascript" src="resources/scripts/jquery.date.js"></script>
</head>
	<body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->

		<?php
		include 'sidebar.php';
		include 'header.php';


		?>



			<div class="clear"></div> <!-- End .clear -->

			<div class="content-box"><!-- Start Content Box -->

				<div class="content-box-header">

					<h3>Content box</h3>

					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Manage</a></li> <!-- href must be unique and match the id of target div -->
						<li><a href="#tab2">Add</a></li>
					</ul>

					<div class="clear"></div>

				</div> <!-- End .content-box-header -->

				<div class="content-box-content">

					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->

						<div class="notification attention png_bg">
							<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
							<div>
								This is a Content Box. You can put whatever you want in it. By the way, you can close this notification with the top-right cross.
							</div>
						</div>

						<table>

							<thead>
								<tr>
								   <th><input class="check-all" type="checkbox" /></th>
								   <th>Column 1</th>
								   <th>Column 2</th>
								   <th>Column 3</th>
								   <th>Column 4</th>
								   <th>Column 5</th>
								</tr>

							</thead>

							<tfoot>
								<tr>
									<td colspan="6">
										<div class="bulk-actions align-left">
											<select name="dropdown">
												<option value="option1">Choose an action...</option>
												<option value="option2">Edit</option>
												<option value="option3">Delete</option>
											</select>
											<a class="button" href="#">Apply to selected</a>
										</div>

										<div class="pagination">
											<a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
											<a href="#" class="number" title="1">1</a>
											<a href="#" class="number" title="2">2</a>
											<a href="#" class="number current" title="3">3</a>
											<a href="#" class="number" title="4">4</a>
											<a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
										</div> <!-- End .pagination -->
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>

							<tbody>
								<tr>
									<td><input type="checkbox" /></td>
									<td>Lorem ipsum dolor</td>
									<td><a href="#" title="title">Sit amet</a></td>
									<td>Consectetur adipiscing</td>
									<td>Donec tortor diam</td>
									<td>
										<!-- Icons -->
										 <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
										 <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a>
										 <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
									</td>
								</tr>

								<tr>
									<td><input type="checkbox" /></td>
									<td>Lorem ipsum dolor</td>
									<td><a href="#" title="title">Sit amet</a></td>
									<td>Consectetur adipiscing</td>
									<td>Donec tortor diam</td>
									<td>
										<!-- Icons -->
										 <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
										 <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a>
										 <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
									</td>
								</tr>

								<tr>
									<td><input type="checkbox" /></td>
									<td>Lorem ipsum dolor</td>
									<td><a href="#" title="title">Sit amet</a></td>
									<td>Consectetur adipiscing</td>
									<td>Donec tortor diam</td>
									<td>
										<!-- Icons -->
										 <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
										 <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a>
										 <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
									</td>
								</tr>

								<tr>
									<td><input type="checkbox" /></td>
									<td>Lorem ipsum dolor</td>
									<td><a href="#" title="title">Sit amet</a></td>
									<td>Consectetur adipiscing</td>
									<td>Donec tortor diam</td>
									<td>
										<!-- Icons -->
										 <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
										 <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a>
										 <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
									</td>
								</tr>

								<tr>
									<td><input type="checkbox" /></td>
									<td>Lorem ipsum dolor</td>
									<td><a href="#" title="title">Sit amet</a></td>
									<td>Consectetur adipiscing</td>
									<td>Donec tortor diam</td>
									<td>
										<!-- Icons -->
										 <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
										 <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a>
										 <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
									</td>
								</tr>

								<tr>
									<td><input type="checkbox" /></td>
									<td>Lorem ipsum dolor</td>
									<td><a href="#" title="title">Sit amet</a></td>
									<td>Consectetur adipiscing</td>
									<td>Donec tortor diam</td>
									<td>
										<!-- Icons -->
										 <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
										 <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a>
										 <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
									</td>
								</tr>

								<tr>
									<td><input type="checkbox" /></td>
									<td>Lorem ipsum dolor</td>
									<td><a href="#" title="title">Sit amet</a></td>
									<td>Consectetur adipiscing</td>
									<td>Donec tortor diam</td>
									<td>
										<!-- Icons -->
										 <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
										 <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a>
										 <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
									</td>
								</tr>

								<tr>
									<td><input type="checkbox" /></td>
									<td>Lorem ipsum dolor</td>
									<td><a href="#" title="title">Sit amet</a></td>
									<td>Consectetur adipiscing</td>
									<td>Donec tortor diam</td>
									<td>
										<!-- Icons -->
										 <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
										 <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a>
										 <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
									</td>
								</tr>
							</tbody>

						</table>

					</div> <!-- End #tab1 -->

					<div class="tab-content" id="tab2">

						<form action="addproquery.php" method="post">

							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->

							<p>
									<label>Name</label>
										<input class="text-input small-input" type="text" id="small-input" name="proname" />  <!-- Classes for input-notification: success, error, information, attention -->
								</p>

								<p>
									<label>Price</label>
									<input class="text-input medium-input datepicker" type="text" id="medium-input" name="price" />
								</p>

								<p>
									<label>Image</label>
										<input class="text-input small-input" type="file" id="small-input" name="image" />
										 <!-- Classes for input-notification: success, error, information, attention -->
								</p>


								<p>
									<label>Tags</label>
									<input type="checkbox" name="tag[]" value="Fashion"/> Fashion
	                                <input type="checkbox" name="tag[]" value="Ecommerce"/> Ecommerce
	                                <input type="checkbox" name="tag[]" value="Shop"/> Shop
	                                <input type="checkbox" name="tag[]" value="handbag"/> Hand Bag
	                                <input type="checkbox" name="tag[]" value="Laptop"/> Laptop
	                                <input type="checkbox" name="tag[]" value="headphone"/> Headphone
								</p>



								<p>
									<label>Category</label>
									<select name="category" class="small-input">
									<option value="1">Men</option>
		                            <option value="2">Women</option>
		                            <option value="3">Kids</option>
		                            <option value="4">Electronics</option>
		                            <option value="5">Sports</option>
									</select>
								</p>

								<p>
									<label>Description</label>
									<textarea class="text-input textarea wysiwyg" id="textarea" name="description" cols="79" rows="15"></textarea>
								</p>

								<p>
									<input class="button" type="submit" value="Submit" />

								</p>

							</fieldset>

							<div class="clear"></div><!-- End .clear -->

						</form>

					</div> <!-- End #tab2 -->

				</div> <!-- End .content-box-content -->

			</div> <!-- End .content-box -->

			<div class="content-box column-left">

				<div class="content-box-header">

					<h3>Content box left</h3>

				</div> <!-- End .content-box-header -->

				<div class="content-box-content">

					<div class="tab-content default-tab">

						<h4>Maecenas dignissim</h4>
						<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus. Maecenas dignissim enim quis ipsum mattis aliquet. Maecenas id velit et elit gravida bibendum. Duis nec rutrum lorem. Donec egestas metus a risus euismod ultricies. Maecenas lacinia orci at neque commodo commodo.
						</p>

					</div> <!-- End #tab3 -->

				</div> <!-- End .content-box-content -->

			</div> <!-- End .content-box -->

			<div class="content-box column-right closed-box">

				<div class="content-box-header"> <!-- Add the class "closed" to the Content box header to have it closed by default -->

					<h3>Content box right</h3>

				</div> <!-- End .content-box-header -->

				<div class="content-box-content">

					<div class="tab-content default-tab">

						<h4>This box is closed by default</h4>
						<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus. Maecenas dignissim enim quis ipsum mattis aliquet. Maecenas id velit et elit gravida bibendum. Duis nec rutrum lorem. Donec egestas metus a risus euismod ultricies. Maecenas lacinia orci at neque commodo commodo.
						</p>

					</div> <!-- End #tab3 -->

				</div> <!-- End .content-box-content -->

			</div> <!-- End .content-box -->
			<div class="clear"></div>


			<!-- Start Notifications -->

			<!-- <div class="notification attention png_bg">
				<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Attention notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
				</div>
			</div>

			<div class="notification information png_bg">
				<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Information notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
				</div>
			</div>

			<div class="notification success png_bg">
				<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Success notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
				</div>
			</div>

			<div class="notification error png_bg">
				<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Error notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
				</div>
			</div> -->

			<!-- End Notifications -->

			<?php
			include 'footer.php';
			?><!-- End #footer -->

		</div> <!-- End #main-content -->
	</div></body>
</html>
