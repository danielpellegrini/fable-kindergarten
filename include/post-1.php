<?php
		global $postType,$postTypeIcon;
?>
		<!-- Post -->
		<div class="template-post">

			<!-- Icon -->
			<div class="template-post-section-icon">
				<div class="template-post-icon template-post-icon-<?php echo $postTypeIcon; ?>"></div>
			</div>

			<!-- Preambule -->
			<div class="template-post-section-preambule">
<?php
		switch($postType)
		{
			case 'audio':
				
				Template::includeFile('audio-1');
				
			break;
		
			case 'image-1':
			case 'quote':
?>
				<!-- Image -->
				<div class="template-component-image template-fancybox template-preloader">
					<a href="media/image/_sample/1050x630/9.jpg">
						<img src="media/image/_sample/690x414/9.jpg" alt="" />
						<span><span><span></span></span></span>
					</a>
				</div>
<?php
			break;
		
			case 'image-2':
?>
				<!-- Image -->
				<div class="template-component-image template-fancybox template-preloader">
					<a href="media/image/_sample/1050x630/9.jpg">
						<img src="media/image/_sample/1050x630/9.jpg" alt="" />
						<span><span><span></span></span></span>
					</a>
				</div>
<?php				
			break;
				
			case 'image-slider':
?>
				<!-- Nivo slider -->
				<div class="template-component-nivo-slider template-component-nivo-slider-style-3 template-preloader">
					<div>
						<img src="media/image/_sample/690x414/7.jpg" data-thumb="media/image/_sample/690x414/7.jpg" alt=""/>
						<img src="media/image/_sample/690x414/2.jpg" data-thumb="media/image/_sample/690x414/2.jpg" alt=""/>
						<img src="media/image/_sample/690x414/9.jpg" data-thumb="media/image/_sample/690x414/9.jpg" alt=""/>
					</div>
				</div>			
<?php
			break;
		
			case 'video-1':
?>
				<!-- Video -->
				<div class="template-component-iframe">
					<div class="template-component-iframe-content">
						<iframe src="https://player.vimeo.com/video/64560430"></iframe>
					</div>
				</div>	
<?php
			break;
		
			case 'video-2':
?>
				<!-- Video -->
				<div class="template-component-iframe">
					<div class="template-component-iframe-content">
						<iframe src="https://www.youtube.com/embed/KBPAI6qLW5o"></iframe>
					</div>
				</div>
<?php
			break;
		}
?>
			</div>

			<!-- Meta -->
			<div class="template-post-section-meta">

				<div class="template-post-meta">

					<!-- Tag -->
					<div class="template-icon-blog template-icon-blog-tag">	
						<ul class="template-reset-list">
							<li><a href="<?php Template::getPageURL('blog-page-tag'); ?>" title="View all posts marked as &quot;Tag #1&quot;">Tag #1</a>,&nbsp;</li>
							<li><a href="<?php Template::getPageURL('blog-page-tag'); ?>" title="View all posts marked as &quot;Tag #2&quot;">Tag #2</a></li>
						</ul>
					</div>

					<!-- Category -->
					<div class="template-icon-blog template-icon-blog-category">
						<ul class="template-reset-list">
							<li><a href="<?php Template::getPageURL('blog-page-category'); ?>" title="View all posts filed under &quot;Events&quot;">Events</a>,&nbsp;</li>
							<li><a href="<?php Template::getPageURL('blog-page-category'); ?>" title="View all posts filed under &quot;Fun&quot;">Fun</a></li>
						</ul>
					</div>

					<!-- Author -->
					<div class="template-icon-blog template-icon-blog-author">
						<a href="<?php Template::getPageURL('blog-page-author'); ?>" title="View all posts from &quot;Anna Brown&quot;">Anna Brown</a>
					</div>

					<!-- Comment -->
					<div class="template-icon-blog template-icon-blog-comment">
						<a href="<?php Template::getPageURL('post-image'); ?>" title="View all comments from post &quot;Drawing and Painting Lessons&quot;">11 Comments</a>
					</div>	

				</div>

			</div>

			<!-- Content -->
			<div class="template-post-section-content">
				<div class="template-post-content">
					
					<p>
						Magna est consectetur interdum modest dictum. Curabitur est faucibus, malesuada esttincidunt etos et mauris, nunc a libero govum est cuprum suspendisse. 
						Bibendum nulla lacus metus, egestas eu sagittis vel, eleifend pretium tellus. Etiam quis orci gravera etos augue. 
						Vestibulum hendrerit sem risus, ut tincidunt tellus at vehicula. Mauris pharetra nibh non quam condimentum, faucibus tristique.
					</p>
					
					<h4 class="template-margin-top-3">Gravida maecenas node</h4>
					<p class="template-padding-reset">
						Maecenas blandit accumsan lacus ut velit fermentum elementum. 
						Morbi ornare, lacus non consequat consectetur, est sem varius elit, eget congue est ligula non nunc. 
						Suspendisse condimentum mattis odio vitae aliquet. Duis ultricies massa. Phasellus in augue, nulla integer pellentesque. 
						In nunc ut maecenas. Aliquam erat volutpat. Vivamus viverra odio sem, eleifend sagittis. Gratio a meteo, morbi auctor.
					</p>
<?php
		if($postType==='quote')
		{
?>
					<!-- Blockquote -->
					<div class="template-component-blockquote template-margin-top-3 template-margin-bottom-5">
						<p>
							Curabitur tempor ante adipiscing accumsan bibendum nullam cursus pellenta elit ut vehicil pellentesque in justo iaculis nulla porta accumsan. Aliquam antel elit an et elementum veli consectetur vel tellus. In enim eros ullamcorpai vel odio at odes adipiscing hendrerit urna.
						</p>
						<span>- John Doe</span>
					</div>				
<?php
		}
?>
					<h5 class="template-margin-top-3">Novum not est blandit</h5>
					<p class="template-padding-reset">
						Risus magna, accumsan a nunc ac, blandit aliquet neque. Cras sodales nisi id sapien laoreet, non porta tellus elementum. 
						Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris quis eleifend felis. Nunc rutrum luctus sapien vel rutrum. 
						Nulla lobortis tempus erat sed tristique.
					</p>
					
					<h6 class="template-margin-top-3">Pulvinar modest</h6>
					<p class="template-padding-reset">
						Turpis magna, lacinia vitae vehicula eu, blandit vel dolor. Sed volutpat lacus nulla odio, vitae blandit nunc vestibulum. 
						Morbi a lobortis est quis metus efficitur commodo. Malesuada auctor tincidunt. 
						Suspendisse potenti eleifend aliquet tortor, non congue quam presto consectetur. 
						Nullam modest aliquam massa.
					</p>
					
					<div class="template-component-list template-component-list-style-1 template-margin-top-3">
						<ul>
							<li>Comprehensive reporting on individual achievement</li>
							<li>Educational field trips and school presentations</li>
							<li>Individual attention in a small-class setting</li>
						</ul>
					</div>
				</div>
			</div>

			<!-- "Leave A Reply" button -->
			<div class="template-post-section-button">
				<a href="#" class="template-component-button template-component-button-style-1" title="Leave A Reply">
					Leave A Reply<i></i>
				</a>
			</div>

			<!-- Post navigation -->
			<div class="template-post-section-navigation">
				<div class="template-post-navigation">
					<a href="" class="template-post-navigation-prev">
						Learning Time With Katie
					</a>
					<a href="" class="template-post-navigation-next">
						Fall Parents Meeting Day
					</a>
				</div>
			</div>
			
			<!-- Comments -->
			<div class="template-post-section-comment-list">
				
				<!-- Header -->
				<h5>All Comments (11)</h5>
				
				<!-- Comments list -->
				<div class="template-post-comment-list">
					
					<ul class="template-reset-list template-clear-fix">
						
						<!-- Comment -->
						<li class="template-clear-fix">
							
							<!-- Container -->
							<div class="template-comment-inner">
								
								<!-- Avatar -->
								<div class="template-comment-avatar">
									<img src="media/image/_sample/avatar/1.png" alt=""/>
								</div>
								
								<!-- Author + Date -->
								<div class="template-comment-meta template-clear-fix">
									<h6 class="template-comment-meta-author">Anna D. McAllister</h6>
									<div class="template-comment-meta-date template-icon-blog template-icon-blog-date">October 14, 2014 at 8:42 am</div>
								</div>
								
								<!-- Content + Reply button -->
								<div class="template-comment-content template-clear-fix">
									<p>In in arcu commodo massa hendrerit pellentesque sit amet vel mi. Nullam porta tortor malesuada justo maximus eget hendrerit ligula pretium.</p>
									<a class="template-comment-reply" href="#">Reply</a>
								</div>
								
							</div>
							
							<ul class="template-post-comment-list-children">
								
								<!-- Comment -->
								<li class="template-clear-fix">
									<div class="template-comment-inner">
										<div class="template-comment-avatar">
											<img src="media/image/_sample/avatar/2.png" alt=""/>
										</div>
										<div class="template-comment-meta template-clear-fix">
											<h6 class="template-comment-meta-author">Heather R. Depriest</h6>
											<h6 class="template-comment-meta-reply">
												<a href="#">@Anna D. McAllister</a>
											</h6>
											<div class="template-comment-meta-date template-icon-blog template-icon-blog-date">October 14, 2014 at 8:43 am</div>
										</div>
										<div class="template-comment-content template-clear-fix">
											<p>Quisque aliquam laoreet lorem et tempor risus egestas sed. Fusce biben aliquam turpis eu finibus quam tempus ac.</p>
											<a class="template-comment-reply" href="#">Reply</a>
										</div>
									</div>
								</li>
								
								<!-- Comment -->
								<li class="template-clear-fix">
									<div class="template-comment-inner">
										<div class="template-comment-avatar">
											<img src="media/image/_sample/avatar/3.png" alt=""/>
										</div>
										<div class="template-comment-meta template-clear-fix">
											<h6 class="template-comment-meta-author">Linda K. Gibson</h6>
											<h6 class="template-comment-meta-reply">
												<a href="#">@Anna D. McAllister</a>
											</h6>
											<div class="template-comment-meta-date template-icon-blog template-icon-blog-date">October 14, 2014 at 8:44 am</div>
										</div>
										<div class="template-comment-content template-clear-fix">
											<p>Aliquam tincidunt dictum aliquet. Vestibulum sed elit accumsan interera a pretium mauris proin nec cursus neque.</p>
											<a class="template-comment-reply" href="#">Reply</a>
										</div>
									</div>
								</li>
								
							</ul>
							
						</li>
						
						<!-- Comment -->
						<li class="template-clear-fix">
							<div class="template-comment-inner">
								<div class="template-comment-avatar">
									<img src="media/image/_sample/avatar/4.png" alt=""/>
								</div>
								<div class="template-comment-meta template-clear-fix">
									<h6 class="template-comment-meta-author">Lian L. Brawner</h6>
									<div class="template-comment-meta-date template-icon-blog template-icon-blog-date">October 14, 2014 at 8:44 am</div>
								</div>
								<div class="template-comment-content template-clear-fix">
									<p>Phasellus ornare auctor metus a convallis. Etiam non sapien faucibus sodales exacalen pellentesque ex orci vel semper dignissim.</p>
									<a class="template-comment-reply" href="#">Reply</a>
								</div>
							</div>
						</li>
						
						<!-- Comment -->
						<li class="template-clear-fix">
							<div class="template-comment-inner">
								<div class="template-comment-avatar">
									<img src="media/image/_sample/avatar/5.png" alt=""/>
								</div>
								<div class="template-comment-meta template-clear-fix">
									<h6 class="template-comment-meta-author">Erin D. Schmitt</h6>
									<div class="template-comment-meta-date template-icon-blog template-icon-blog-date">October 14, 2014 at 8:45 am</div>
								</div>
								<div class="template-comment-content template-clear-fix">
									<p>Donec ac commodo mi etiam at est ligula maecenas justo nulla gravida a tortor sit amet porta porttitor dolornulla accumsan.</p>
									<a class="template-comment-reply" href="#">Reply</a>
								</div>
							</div>
						</li>
						
						<!-- Comment -->
						<li class="template-clear-fix">
							<div class="template-comment-inner">
								<div class="template-comment-avatar">
									<img src="media/image/_sample/avatar/6.png" alt=""/>
								</div>
								<div class="template-comment-meta template-clear-fix">
									<h6 class="template-comment-meta-author">Katie A. Hoyle</h6>
									<div class="template-comment-meta-date template-icon-blog template-icon-blog-date">October 14, 2014 at 8:45 am</div>
								</div>
								<div class="template-comment-content template-clear-fix">
									<p>Vestibulum pellentesque sapien et nulla placerat blandit. Suspendisse venenatis seme sed est facilisis et hendrerit tellus eleifend.</p>
									<a class="template-comment-reply" href="#">Reply</a>
								</div>
							</div>
						</li>
						
						<!-- Comment -->
						<li class="template-clear-fix">
							<div class="template-comment-inner">
								<div class="template-comment-avatar">
									<img src="media/image/_sample/avatar/7.png" alt=""/>
								</div>
								<div class="template-comment-meta template-clear-fix">
									<h6 class="template-comment-meta-author">Alex I. Ortiz</h6>
									<div class="template-comment-meta-date template-icon-blog template-icon-blog-date">October 14, 2014 at 8:46 am</div>
								</div>
								<div class="template-comment-content template-clear-fix">
									<p>Aliquam ultrices luctus justo eget alan venenatisi integer non condimentum dolor eget ultricies tellus aliquam sit amet faucibus leo.</p>
									<a class="template-comment-reply" href="#">Reply</a>
								</div>
							</div>
						</li>
						
					</ul>
					
				</div>
				
				<!-- Pagination -->
				<div class="template-pagination template-pagination-style-2 template-clear-fix">
					<ul class="template-clear-fix">
						<li><a href="#" class="template-pagination-selected">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">Next</a></li>
					</ul>
				</div>

			</div>
			
			<!-- Reply form -->
			<div class="template-post-section-reply-form">
			
				<div class="template-post-reply-form">
					
					<!-- Header -->
					<h5>Leave Your Reply</h5>
					
					<!-- Info -->
					<p>Your email address will not be published. Required fields are marked *</p>
					
					<div class="template-component-reply-form">
						
						<form>
							
							<!-- Comment -->
							<div class="template-form-line template-state-block">
								<label for="reply-form-comment">Comment *</label>
								<textarea rows="1" cols="1" name="reply-form-comment" id="reply-form-comment"></textarea>
							</div>
							
							<!-- Name -->
							<div class="template-form-line template-state-block">
								<label for="reply-form-name">Name *</label>
								<input type="text" name="reply-form-name" id="reply-form-name" />
							</div>
							
							<!-- E-mail -->
							<div class="template-form-line template-state-block">
								<label for="reply-form-email">E-mail *</label>
								<input type="text" name="reply-form-email" id="reply-form-email" />
							</div>
							
							<!-- Website -->
							<div class="template-form-line template-state-block">
								<label for="reply-form-website">Website</label>
								<input type="text" name="reply-form-website" id="reply-form-website" />
							</div>
							
							<!-- Button -->
							<div class="template-form-line template-form-line-submit template-align-center">
								<div class=" template-state-block">
									<input class="template-component-button template-component-button-style-1" type="submit" value="Post comment" name="reply-form-submit" id="reply-form-submit"/>
								</div>
							</div>
							
						</form>
						
					</div>
					
				</div>
				
			</div>
			
		</div>