<?php
include("../assets/template/owner/topNav.php");
?>
<br>
<div class="container large">
	<h5 class="black-text">Workorders <span class="right">6/30/2016 &bull; 23:38</span></h5>
	<br>
	<br>
	<div class="row">
		<!--tasks-->
		<div class="col s12 m12 l10">
			<p><span class="black-text">Tenant's Workorders</span> filtered by <span class="black-text">None <i class="fa fa-angle-down" aria-hidden="true"></i></span></p>
			<br>
			<style>
				.modalItem{
					transition: all .4s ease;
					-webkit-filter: grayscale(40%); /* Safari */
					filter: grayscale(40%);
				}
				.modalItem:hover{
					-webkit-filter: grayscale(0%); /* Safari */
					filter: grayscale(0%);
				}
			</style>

			<ul class="collapsible" data-collapsible="accordion">
				<li>
					<div class="collapsibleHeader">
						<table class="hide-on-small-only">
							<tbody>
								<tr>
									<td>
										<h5 class="responsive-text">
											<span class="black-text" title="Tenant Name">Nicholas Sanjeev Vaishampayan</span>
											<span style="font-size:80%;" title="unit number">#12</span>
										</h5>
										<p class="responsive-text" style="font-size:100%;" title="Date Submitted">9/19/2017 &bull;
											<span class="primary" title="Phone Number">
												<a href="tel:1-510-570-5088" style="white-space: nowrap"><i class="fa fa-phone" aria-hidden="true"></i> 510-570-5088</a>
											</span>
										</p>
									</td>
									<td>
										<a href="./workorder"><h5 class="primary responsive-text" title="Work Order">Poop is on my walls</h5></a>
									</td>
								</tr>

								<!--add this stuff-->
							</tbody>
						</table>
						<div class="hide-on-med-and-up">
							<div class="row" style="margin:0;">
								<div class="col s12 m4 l3" style="padding-left:0;">
									<h5 class="responsive-text">
										<span class="black-text">Nicholas Vaishampayan</span>
										<span style="font-size:80%;">#12</span>
									</h5>
								</div>
								<div class="col s12 m8 l9" style="padding-left:0;">
									<h5 class="primary responsive-text">Poop is on my walls</h5>
								</div>
							</div>
							<div class="col s12" style="padding-left:0;">
								<p class="responsive-text" style="font-size:100%;">9/19/2017 &bull;
									<span class="primary" style="white-space:nowrap">
										<i class="fa fa-phone" aria-hidden="true"></i> 510-570-5088
									</span>
								</p>
							</div>

							<br>
						</div>
					</div>
					<div class="collapsible-body" id="container">
						<div class="row">
							<a href="#!" class="modalToggle" data-toggle="myModal">
								<div class="col s3">
									<img class="modalItem hoverable" src="https://3.bp.blogspot.com/-W__wiaHUjwI/Vt3Grd8df0I/AAAAAAAAA78/7xqUNj8ujtY/s1600/image02.png">
								</div>
							</a>
							<a href="#!" class="modalToggle" data-toggle="myModal">
								<div class="col s3">
									<img class="modalItem hoverable" src="https://3.bp.blogspot.com/-W__wiaHUjwI/Vt3Grd8df0I/AAAAAAAAA78/7xqUNj8ujtY/s1600/image02.png">
								</div>
							</a>
							<a href="#!" class="modalToggle" data-toggle="myModal">
								<div class="col s3">
									<img class="modalItem hoverable" src="https://3.bp.blogspot.com/-W__wiaHUjwI/Vt3Grd8df0I/AAAAAAAAA78/7xqUNj8ujtY/s1600/image02.png">
								</div>
							</a>
							<a href="#!" class="modalToggle" data-toggle="myModal">
								<div class="col s3">
									<img class="modalItem hoverable" src="https://3.bp.blogspot.com/-W__wiaHUjwI/Vt3Grd8df0I/AAAAAAAAA78/7xqUNj8ujtY/s1600/image02.png">
								</div>
							</a>
						</div>
						<!--image stuff-->

						<div id="myModal" class="modal z-depth-2">
							<div class="modalHeader">
								<img src="https://3.bp.blogspot.com/-W__wiaHUjwI/Vt3Grd8df0I/AAAAAAAAA78/7xqUNj8ujtY/s1600/image02.png">
							</div>
							<div class="modalBody">
								Image Description
							</div>
							<div class="modalFooter">
								<ul>
									<li><a class="dismiss">Close</a></li>
								</ul>
							</div>
						</div>
						<h5 class="black-text">Description</h5>
						<p class="black-text">Paragraphs are the building blocks of papers. Many students define paragraphs in terms of length: a paragraph is a group of at least five sentences, a paragraph is half a page long, etc. In reality, though, the unity and coherence of ideas among sentences is what constitutes a paragraph. A paragraph is defined as “a group of sentences or a single sentence that forms a unit” (Lunsford and Connors 116). Length and appearance do not determine whether a section in a paper is a paragraph. For instance, in some styles of writing, particularly journalistic styles, a paragraph can be just one sentence long. Ultimately, a paragraph is a sentence or group of sentences that support one main idea. In this handout, we will refer to this as the “controlling idea,” because it controls what happens in the rest of the paragraph.</p>

						<br>
						<textarea onkeyup="auto_grow(this)" placeholder="Enter your response here" required></textarea>
						<div style="margin-bottom: 40px;">
							<div class="right">
								<div class="button large raised errorButton" title="Deny"><i class="fa fa-times white-text" aria-hidden="true"></i></div>
								<div class="button large raised warningButton" title="In Progress"><i class="fa fa-hourglass white-text" aria-hidden="true"></i></div>
								<div class="button large raised successButton" title="Complete" id="cube"><i class="fa fa-check white-text" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="collapsibleHeader">
						<table class="hide-on-small-only">
							<tbody>
								<tr>
									<td>
										<h5 class="responsive-text">
											<span class="black-text" title="Tenant Name">Nicholas Sanjeev Vaishampayan</span>
											<span style="font-size:80%;" title="unit number">#12</span>
										</h5>
										<p class="responsive-text" style="font-size:100%;" title="Date Submitted">9/19/2017 &bull;
											<span class="primary" title="Phone Number">
												<a href="tel:1-510-570-5088" style="white-space: nowrap"><i class="fa fa-phone" aria-hidden="true"></i> 510-570-5088</a>
											</span>
										</p>
									</td>
									<td>
										<a href="./workorder"><h5 class="primary responsive-text" title="Work Order">Poop is on my walls</h5></a>
									</td>
								</tr>

								<!--add this stuff-->
							</tbody>
						</table>
						<div class="hide-on-med-and-up">
							<div class="row" style="margin:0;">
								<div class="col s12 m4 l3" style="padding-left:0;">
									<h5 class="responsive-text">
										<span class="black-text">Nicholas Vaishampayan</span>
										<span style="font-size:80%;">#12</span>
									</h5>
								</div>
								<div class="col s12 m8 l9" style="padding-left:0;">
									<h5 class="primary responsive-text">Poop is on my walls</h5>
								</div>
							</div>
							<div class="col s12" style="padding-left:0;">
								<p class="responsive-text" style="font-size:100%;">9/19/2017 &bull;
									<span class="primary" style="white-space:nowrap">
										<i class="fa fa-phone" aria-hidden="true"></i> 510-570-5088
									</span>
								</p>
							</div>

							<br>
						</div>
					</div>
					<div class="collapsible-body">
						<div class="row">
							<a href="#!" class="modalToggle" data-toggle="myModal">
								<div class="col s3">
									<img class="modalItem hoverable" src="https://3.bp.blogspot.com/-W__wiaHUjwI/Vt3Grd8df0I/AAAAAAAAA78/7xqUNj8ujtY/s1600/image02.png">
								</div>
							</a>
							<a href="#!" class="modalToggle" data-toggle="myModal">
								<div class="col s3">
									<img class="modalItem hoverable" src="https://3.bp.blogspot.com/-W__wiaHUjwI/Vt3Grd8df0I/AAAAAAAAA78/7xqUNj8ujtY/s1600/image02.png">
								</div>
							</a>
							<a href="#!" class="modalToggle" data-toggle="myModal">
								<div class="col s3">
									<img class="modalItem hoverable" src="https://3.bp.blogspot.com/-W__wiaHUjwI/Vt3Grd8df0I/AAAAAAAAA78/7xqUNj8ujtY/s1600/image02.png">
								</div>
							</a>
							<a href="#!" class="modalToggle" data-toggle="myModal">
								<div class="col s3">
									<img class="modalItem hoverable" src="https://3.bp.blogspot.com/-W__wiaHUjwI/Vt3Grd8df0I/AAAAAAAAA78/7xqUNj8ujtY/s1600/image02.png">
								</div>
							</a>
						</div>
						<!--image stuff-->

						<div id="myModal" class="modal z-depth-2">
							<div class="modalHeader">
								<img src="https://3.bp.blogspot.com/-W__wiaHUjwI/Vt3Grd8df0I/AAAAAAAAA78/7xqUNj8ujtY/s1600/image02.png">
							</div>
							<div class="modalBody">
								Image Description
							</div>
							<div class="modalFooter">
								<ul>
									<li><a class="dismiss">Close</a></li>
								</ul>
							</div>
						</div>
						<h5 class="black-text">Description</h5>
						<p class="black-text">Paragraphs are the building blocks of papers. Many students define paragraphs in terms of length: a paragraph is a group of at least five sentences, a paragraph is half a page long, etc. In reality, though, the unity and coherence of ideas among sentences is what constitutes a paragraph. A paragraph is defined as “a group of sentences or a single sentence that forms a unit” (Lunsford and Connors 116). Length and appearance do not determine whether a section in a paper is a paragraph. For instance, in some styles of writing, particularly journalistic styles, a paragraph can be just one sentence long. Ultimately, a paragraph is a sentence or group of sentences that support one main idea. In this handout, we will refer to this as the “controlling idea,” because it controls what happens in the rest of the paragraph.</p>

						<br>
						<div style="margin-bottom: 40px;">
							<div class="right">
								<div class="button large raised errorButton" title="Deny"><i class="fa fa-times white-text" aria-hidden="true"></i></div>
								<div class="button large raised warningButton" title="In Progress"><i class="fa fa-hourglass white-text" aria-hidden="true"></i></div>
								<div class="button large raised successButton" title="Complete"><i class="fa fa-check white-text" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="collapsibleHeader">
						<table class="hide-on-small-only">
							<tbody>
								<tr>
									<td>
										<h5 class="responsive-text">
											<span class="black-text" title="Tenant Name">Nicholas Sanjeev Vaishampayan</span>
											<span style="font-size:80%;" title="unit number">#12</span>
										</h5>
										<p class="responsive-text" style="font-size:100%;" title="Date Submitted">9/19/2017 &bull;
											<span class="primary" title="Phone Number">
												<a href="tel:1-510-570-5088" style="white-space: nowrap"><i class="fa fa-phone" aria-hidden="true"></i> 510-570-5088</a>
											</span>
										</p>
									</td>
									<td>
										<a href="./workorder"><h5 class="primary responsive-text" title="Work Order">Poop is on my walls</h5></a>
									</td>
								</tr>

								<!--add this stuff-->
							</tbody>
						</table>
						<div class="hide-on-med-and-up">
							<div class="row" style="margin:0;">
								<div class="col s12 m4 l3" style="padding-left:0;">
									<h5 class="responsive-text">
										<span class="black-text">Nicholas Vaishampayan</span>
										<span style="font-size:80%;">#12</span>
									</h5>
								</div>
								<div class="col s12 m8 l9" style="padding-left:0;">
									<h5 class="primary responsive-text">Poop is on my walls</h5>
								</div>
							</div>
							<div class="col s12" style="padding-left:0;">
								<p class="responsive-text" style="font-size:100%;">9/19/2017 &bull;
									<span class="primary" style="white-space:nowrap">
										<i class="fa fa-phone" aria-hidden="true"></i> 510-570-5088
									</span>
								</p>
							</div>

							<br>
						</div>
					</div>
					<div class="collapsible-body">
						<div class="row">
							<a href="#!" class="modalToggle" data-toggle="myModal">
								<div class="col s3">
									<img class="modalItem hoverable" src="https://3.bp.blogspot.com/-W__wiaHUjwI/Vt3Grd8df0I/AAAAAAAAA78/7xqUNj8ujtY/s1600/image02.png">
								</div>
							</a>
							<a href="#!" class="modalToggle" data-toggle="myModal">
								<div class="col s3">
									<img class="modalItem hoverable" src="https://3.bp.blogspot.com/-W__wiaHUjwI/Vt3Grd8df0I/AAAAAAAAA78/7xqUNj8ujtY/s1600/image02.png">
								</div>
							</a>
							<a href="#!" class="modalToggle" data-toggle="myModal">
								<div class="col s3">
									<img class="modalItem hoverable" src="https://3.bp.blogspot.com/-W__wiaHUjwI/Vt3Grd8df0I/AAAAAAAAA78/7xqUNj8ujtY/s1600/image02.png">
								</div>
							</a>
							<a href="#!" class="modalToggle" data-toggle="myModal">
								<div class="col s3">
									<img class="modalItem hoverable" src="https://3.bp.blogspot.com/-W__wiaHUjwI/Vt3Grd8df0I/AAAAAAAAA78/7xqUNj8ujtY/s1600/image02.png">
								</div>
							</a>
						</div>
						<!--image stuff-->

						<div id="myModal" class="modal z-depth-2">
							<div class="modalHeader">
								<img src="https://3.bp.blogspot.com/-W__wiaHUjwI/Vt3Grd8df0I/AAAAAAAAA78/7xqUNj8ujtY/s1600/image02.png">
							</div>
							<div class="modalBody">
								Image Description
							</div>
							<div class="modalFooter">
								<ul>
									<li><a class="dismiss">Close</a></li>
								</ul>
							</div>
						</div>
						<h5 class="black-text">Description</h5>
						<p class="black-text">Paragraphs are the building blocks of papers. Many students define paragraphs in terms of length: a paragraph is a group of at least five sentences, a paragraph is half a page long, etc. In reality, though, the unity and coherence of ideas among sentences is what constitutes a paragraph. A paragraph is defined as “a group of sentences or a single sentence that forms a unit” (Lunsford and Connors 116). Length and appearance do not determine whether a section in a paper is a paragraph. For instance, in some styles of writing, particularly journalistic styles, a paragraph can be just one sentence long. Ultimately, a paragraph is a sentence or group of sentences that support one main idea. In this handout, we will refer to this as the “controlling idea,” because it controls what happens in the rest of the paragraph.</p>

						<br>
						<div style="margin-bottom: 40px;">
							<div class="right">
								<div class="button large raised errorButton" title="Deny"><i class="fa fa-times white-text" aria-hidden="true"></i></div>
								<div class="button large raised warningButton" title="In Progress"><i class="fa fa-hourglass white-text" aria-hidden="true"></i></div>
								<div class="button large raised successButton" title="Complete"><i class="fa fa-check white-text" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</li>
			</ul>

		</div>


		<div class="col s12 m12 l2">
			<p class="black-text">Vendors</p>
			<br>
			<p style="font-size:100%;"><span class="primary" style="white-space:nowrap">Fertilizer Specilist</span> - <span class="primary" style="white-space:nowrap">510-656-9196</span><br> Armando Hussein - Company Name
				<br><span class="error">M-F 9am - 5pm</span></p><br>
			<p style="font-size:100%;"><span class="primary" style="white-space:nowrap">Resident Sleeper</span> - <span class="primary" style="white-space:nowrap">510-656-9196</span><br> Kelvin Lewin
				<br><span class="error">M-F 9am - 5pm</span></p><br>
			<p style="font-size:100%;"><span class="primary" style="white-space:nowrap">Ganja Warrior</span> - <span class="primary" style="white-space:nowrap">510-656-9196</span><br> Bob Marley
				<br><span class="">M-Su 9am - 2am</span></p><br>
			<p style="font-size:100%;"><span class="primary" style="white-space:nowrap">Fertilizer Specilist</span> - <span class="primary" style="white-space:nowrap">510-656-9196</span><br> Armando Hussein
				<br><span class="error">M-F 9am - 5pm</span></p><br>
			<p style="font-size:100%;"><span class="primary" style="white-space:nowrap">Fertilizer Specilist</span> - <span class="primary" style="white-space:nowrap">510-656-9196</span><br> Armando Hussein
				<br><span class="error">M-F 9am - 5pm</span></p><br>
		</div>
	</div>
</div>




<?php
include("../assets/template/owner/botNav.php");
?>
