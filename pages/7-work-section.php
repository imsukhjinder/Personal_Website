<center>
	<div class="work" id="work">
							<h1>- My Work -</h1>
							<div class="selectors">
<!-- Button Credits https://tympanus.net/codrops/2015/02/26/inspiration-button-styles-effects/ -->
											<button class="button button--nina button--border-thin button--round-s" data-text="All" id="all">
												<span>A</span><span>l</span><span>l</span>
											</button>
											<button class="button button--nina button--border-thin button--round-s" data-text="Websites" id="website">
												<span>W</span><span>e</span><span>b</span><span>s</span><span>i</span><span>t</span><span>e</span><span>s</span>
											</button>
											<button class="button button--nina button--border-thin button--round-s" data-text="Photoshop" id="PS">
												<span>P</span><span>h</span><span>o</span><span>t</span><span>o</span><span>S</span><span>h</span><span>o</span><span>p</span>
											</button>
							</div></center>
							<div class="work-thumb">
								<div class="row" style="">
											 <?php		 foreach ($work as $thumb ) { ?>
										   	<div class="col-lg-4 col-sm-6" style="">
													<div class="work-set">
		 										 		<div class="work-img <?php echo $thumb["cat"]; ?>" id="">
		 											 		<img src="<?php echo $thumb["img"]; ?>" alt="">
																<a href="<?php echo $thumb["link"]; ?>" target="_blank"><div class="thumb-overlay">
																	<?php echo $thumb["name"]; ?>
																	<div class="sub-heading">
																		<?php echo $thumb["tag"]; ?>
																</div>
														</div></a>
		 										 	 </div>
		 											</div>
										   	</div>
							 		 <?php		 } ?>
							  </div>
	</div>
</center>
