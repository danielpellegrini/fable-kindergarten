<?php

/******************************************************************************/
/******************************************************************************/

class Template
{
	/**************************************************************************/

	function __construct()
	{

	}
	
	/**************************************************************************/
	
	static function getFilePath($folder,$file)
	{
		$path=dirname(__FILE__).'/../'.$folder.'/'.basename($file).'.php';
		if((is_file($path)) && (file_exists($path))) return($path);
		return(false);
	}

	/**************************************************************************/
	
	static function getCurrentFilePath($page=null)
	{
		if((is_null($page)) && (isset($_GET['page']))) $page=$_GET['page'];
		if((is_null($page))) $page='home-2';
		
		$path=self::getFilePath('page',$page);
		
		if($path!==false) return($path);
		else return(self::getFilePath('page','404'));		
	}

	/**************************************************************************/
	
	static function includeFile($file)
	{
		$path=self::getFilePath('include',$file);
		if($path!==false) require_once($path);		
	}
	
	/**************************************************************************/

	static function includePage($page=null)
	{
		require_once(self::getCurrentFilePath($page));
	}
	
	/**************************************************************************/
	
	static function includeHeader()
	{
		self::includeFile('header');
	}
	
	/**************************************************************************/
	
	static function includeFooter()
	{
		self::includeFile('footer');
	}
	
	/**************************************************************************/
	
	static function includeHeaderTop($menuId=1)
	{
		$html=
		'
						<div class="template-main template-clear-fix">

							<div class="template-header-top-logo">
								<a href="'.self::getPageURL('home-2',false).'">
									<img src="media/image/logo_header.png" alt="" />
								</a>
							</div>

							<div class="template-header-top-menu template-clear-fix">	
		';
		
		if($menuId==2)
		{
			$html.=
			'
								<nav class="template-component-menu-default">
									<ul class="sf-menu template-clear-fix">
										'.self::createMenuItem('#home','Home','home').'
										'.self::createMenuItem('#about','About','book').'
										'.self::createMenuItem('#classes','Classes','schoolbag').'
										'.self::createMenuItem('#teachers','Teachers','diagram').'
										'.self::createMenuItem('#blog','Blog','printer').'
										'.self::createMenuItem('#contact','Contact','envelope').'
										'.self::createMenuItem('home-2','Exit One Page','stroller').'
									</ul>
								</nav>

								<nav class="template-component-menu-responsive">
									<ul class="template-clear-fix">
										<li>
											'.self::createMenuItem('#','Menu',true,false).'
											<ul>
												'.self::createMenuItem('#home','Home').'
												'.self::createMenuItem('#about','About').'
												'.self::createMenuItem('#classes','Classes').'
												'.self::createMenuItem('#teachers','Teachers').'
												'.self::createMenuItem('#blog','Blog').'
												'.self::createMenuItem('#contact','Contact').'
												'.self::createMenuItem('home-2','Exit One Page').'
											</ul>
										</li>
									</ul>
								</nav>
					';
				}
				else
				{
					$html.=
					'
								<nav class="template-component-menu-default">

									<ul class="sf-menu template-clear-fix">

										<li class="sf-mega-enable-0">
											'.self::createMenuItem('home-2','Home','home',false).'
										</li>
										<li class="sf-mega-enable-1">
											'.self::createMenuItem('#','Pages','document',false).'
											<div class="sf-mega template-layout-25x25x25x25 template-clear-fix">
												<div class="template-layout-column-left">
													<span class="sf-mega-header">Pages I</span>
													<ul>
														'.self::createMenuItem('about-us-1','About Us I').'
														'.self::createMenuItem('about-us-2','About Us II').'
														'.self::createMenuItem('our-service-1','Our Services I').'
														'.self::createMenuItem('our-service-2','Our Services II').'
														'.self::createMenuItem('page-right-sidebar','Page Right Sidebar').'
														'.self::createMenuItem('page-left-sidebar','Page Left Sidebar').'
													</ul>
												</div>
												<div class="template-layout-column-center-left">
													<span class="sf-mega-header">Pages II</span>
													<ul>
														'.self::createMenuItem('our-class','Our Classes').'
														'.self::createMenuItem('single-class','Single Class').'
														'.self::createMenuItem('our-staff-1','Our Staff I').'
														'.self::createMenuItem('our-staff-2','Our Staff II').'
														'.self::createMenuItem('single-teacher','Single Teacher').'
														'.self::createMenuItem('sitemap','Sitemap').'
													</ul>												
												</div>
												<div class="template-layout-column-center-right">
													<span class="sf-mega-header">Pages III</span>
													<ul>
														'.self::createMenuItem('gallery-2-column','II Columns Gallery ').'
														'.self::createMenuItem('gallery-3-column','III Columns Gallery').'
														'.self::createMenuItem('gallery-4-column','IV Columns Gallery').'
														'.self::createMenuItem('gallery-tabbed','Tabbed Gallery').'
														'.self::createMenuItem('gallery-right-sidebar','Gallery Right Sidebar').'
														'.self::createMenuItem('gallery-left-sidebar','Gallery Left Sidebar').'
													</ul>												
												</div>
												<div class="template-layout-column-right">
													<span class="sf-mega-header">Pages IV</span>
													<ul>
														'.self::createMenuItem('contact-us-1','Contact Us I').'
														'.self::createMenuItem('contact-us-2','Contact Us II').'
														'.self::createMenuItem('pricing-plan-1','Pricing Plans I').'
														'.self::createMenuItem('pricing-plan-2','Pricing Plans II').'
														'.self::createMenuItem('404','Page Not Found').'
														'.self::createMenuItem('maintenance-mode','Maintenance Mode').'
													</ul>
												</div>
											</div>
										</li>
										<li class="sf-mega-enable-1">
											'.self::createMenuItem('#','Blog','printer',false).'
											<div class="sf-mega template-layout-33x33x33 template-clear-fix">
												<div class="template-layout-column-left">
													<span class="sf-mega-header">Layouts</span>
													<ul>
														'.self::createMenuItem('blog-full-width','Blog Full Width').'
														'.self::createMenuItem('blog-right-sidebar','Blog Right Sidebar').'
														'.self::createMenuItem('blog-left-sidebar','Blog Left Sidebar').'
														'.self::createMenuItem('post-full-width','Post Full Width').'
														'.self::createMenuItem('post-right-sidebar','Post Right Sidebar').'
														'.self::createMenuItem('post-left-sidebar','Post Left Sidebar').'
													</ul>
												</div>
												<div class="template-layout-column-center">
													<span class="sf-mega-header">Post Types</span>
													<ul>
														'.self::createMenuItem('post-image','Post Image').'
														'.self::createMenuItem('post-audio','Post Audio').'
														'.self::createMenuItem('post-video-1','Post Video I').'
														'.self::createMenuItem('post-video-2','Post Video II').'
														'.self::createMenuItem('post-slider','Post Slider').'
														'.self::createMenuItem('post-quote','Post Quote').'
													</ul>												
												</div>
												<div class="template-layout-column-right">
													<span class="sf-mega-header">Other Pages</span>
													<ul>
														'.self::createMenuItem('blog-page-tag','Tag Page').'
														'.self::createMenuItem('blog-page-archive','Archive Page').'
														'.self::createMenuItem('blog-page-category','Category Page').'
														'.self::createMenuItem('blog-page-search','Search Result Page').'
														'.self::createMenuItem('blog-page-author','Author Page').'
													</ul>												
												</div>
											</div>
										</li>
										 <li class="sf-mega-enable-1">
											'.self::createMenuItem('#','Shortcode','lab',false).'
											
										</li>
										<li class="sf-mega-enable-0">
											'.self::createMenuItem('#','Contact','envelope',false).'
											<ul>
												'.self::createMenuItem('contact-us-1','Contact Style I').'
												'.self::createMenuItem('contact-us-2','Contact Style II').'
											</ul>
										</li>

									</ul>

								</nav>

								<nav class="template-component-menu-responsive">

									<ul class="template-clear-fix">

										<li>
											'.self::createMenuItem('#','Menu',true,false).'
											<ul>
												<li>
													'.self::createMenuItem('home-2','Home',true,false).'
												</li>
												<li>
													'.self::createMenuItem('#','Pages',true,false).'
													<ul>
														<li>
															'.self::createMenuItem('#','Pages I',true,false).'
															<ul>
																'.self::createMenuItem('about-us-1','About Us I').'
																'.self::createMenuItem('about-us-2','About Us II').'
																'.self::createMenuItem('our-service-1','Our Services I').'
																'.self::createMenuItem('our-service-2','Our Services II').'
																'.self::createMenuItem('page-right-sidebar','Page Right Sidebar').'
																'.self::createMenuItem('page-left-sidebar','Page Left Sidebar').'
															</ul>
														</li>
														<li>
															'.self::createMenuItem('#','Pages II',true,false).'
															<ul>
																'.self::createMenuItem('our-class','Our Classes').'
																'.self::createMenuItem('single-class','Single Class').'
																'.self::createMenuItem('our-staff-1','Our Staff I').'
																'.self::createMenuItem('our-staff-2','Our Staff II').'
																'.self::createMenuItem('single-teacher','Single Teacher').'
																'.self::createMenuItem('sitemap','Sitemap').'
															</ul>												
														</li>
														<li>
															'.self::createMenuItem('#','Pages III',true,false).'
															<ul>
																'.self::createMenuItem('gallery-2-column','II Columns Gallery ').'
																'.self::createMenuItem('gallery-3-column','III Columns Gallery').'
																'.self::createMenuItem('gallery-4-column','IV Columns Gallery').'
																'.self::createMenuItem('gallery-tabbed','Tabbed Gallery').'
																'.self::createMenuItem('gallery-right-sidebar','Gallery Right Sidebar').'
																'.self::createMenuItem('gallery-left-sidebar','Gallery Left Sidebar').'
															</ul>												
														</li>
														<li>
															'.self::createMenuItem('#','Pages IV',true,false).'
															<ul>
																'.self::createMenuItem('contact-us-1','Contact Us I').'
																'.self::createMenuItem('contact-us-2','Contact Us II').'
																'.self::createMenuItem('pricing-plan-1','Pricing Plans I').'
																'.self::createMenuItem('pricing-plan-2','Pricing Plans II').'
																'.self::createMenuItem('404','Page Not Found').'
																'.self::createMenuItem('maintenance-mode','Maintenance Mode').'
															</ul>
														</li>
													</ul>
												</li>
												<li>
													'.self::createMenuItem('#','Blog',true,false).'
													<ul>
														<li>
															'.self::createMenuItem('#','Layouts',true,false).'
															<ul>
																'.self::createMenuItem('blog-full-width','Blog Full Width').'
																'.self::createMenuItem('blog-right-sidebar','Blog Right Sidebar').'
																'.self::createMenuItem('blog-left-sidebar','Blog Left Sidebar').'
																'.self::createMenuItem('post-full-width','Post Full Width').'
																'.self::createMenuItem('post-right-sidebar','Post Right Sidebar').'
																'.self::createMenuItem('post-left-sidebar','Post Left Sidebar').'
															</ul>
														</li>
														<li>
															'.self::createMenuItem('#','Post Types',true,false).'
															<ul>
																'.self::createMenuItem('post-image','Post Image').'
																'.self::createMenuItem('post-audio','Post Audio').'
																'.self::createMenuItem('post-video-1','Post Video I').'
																'.self::createMenuItem('post-video-2','Post Video II').'
																'.self::createMenuItem('post-slider','Post Slider').'
																'.self::createMenuItem('post-quote','Post Quote').'
															</ul>												
														</li>
														<li>
															'.self::createMenuItem('#','Other Pages',true,false).'
															<ul>
																'.self::createMenuItem('blog-page-tag','Tag Page').'
																'.self::createMenuItem('blog-page-archive','Archive Page').'
																'.self::createMenuItem('blog-page-category','Category Page').'
																'.self::createMenuItem('blog-page-search','Search Result Page').'
																'.self::createMenuItem('blog-page-author','Author Page').'
															</ul>												
														</li>
													</ul>
												</li>
												<li>
													'.self::createMenuItem('#','Shortcode',true,false).'
													<ul>
														<li>
															'.self::createMenuItem('#','Shortcodes I',true,false).'
															<ul>
																'.self::createMenuItem('shortcode-accordion','Accordion').'
																'.self::createMenuItem('shortcode-audio','Audio').'
																'.self::createMenuItem('shortcode-background-video','Background Video').'
																'.self::createMenuItem('shortcode-blockquote','Blockquote').'
																'.self::createMenuItem('shortcode-button','Button').'
																'.self::createMenuItem('shortcode-call-to-action','Call To Action').'
																'.self::createMenuItem('shortcode-class','Class').'
																'.self::createMenuItem('shortcode-contact-form','Contact Form').'
																'.self::createMenuItem('shortcode-counter-box','Counter Box').'
																'.self::createMenuItem('shortcode-counter-list','Counter List').'
															</ul>
														</li>
														<li>
															'.self::createMenuItem('#','Shortcodes II',true,false).'
															<ul>
																'.self::createMenuItem('shortcode-divider','Divider').'
																'.self::createMenuItem('shortcode-dropcap','Dropcap').'
																'.self::createMenuItem('shortcode-feature','Feature').'
																'.self::createMenuItem('shortcode-flexslider','FlexSlider').'
																'.self::createMenuItem('shortcode-gallery','Gallery').'
																'.self::createMenuItem('shortcode-google-map','Google Map').'
																'.self::createMenuItem('shortcode-header','Header').'
																'.self::createMenuItem('shortcode-header-subheader','Header &amp; Subheader').'
																'.self::createMenuItem('shortcode-iframe','Iframe').'
																'.self::createMenuItem('shortcode-layout','Layout').'
															</ul>												
														</li>
														<li>
															'.self::createMenuItem('#','Shortcodes III',true,false).'
															<ul>
																'.self::createMenuItem('shortcode-list','List').'
																'.self::createMenuItem('shortcode-nivo-slider','Nivo Slider').'
																'.self::createMenuItem('shortcode-notice','Notice').'
																'.self::createMenuItem('shortcode-preformatted-text','Preformatted Text').'
																'.self::createMenuItem('shortcode-pricing-plan','Pricing Plan').'
																'.self::createMenuItem('shortcode-recent-post','Recent Post').'
																'.self::createMenuItem('shortcode-sitemap','Sitemap').'
																'.self::createMenuItem('shortcode-social-icon','Social Icon').'
																'.self::createMenuItem('shortcode-supersized','Supersized').'
																'.self::createMenuItem('shortcode-tab','Tab').'
															</ul>												
														</li>
														<li>
															'.self::createMenuItem('#','Shortcodes IV',true,false).'
															<ul>
																'.self::createMenuItem('shortcode-team','Team').'
																'.self::createMenuItem('shortcode-twitter-user-timeline','Twitter User Timeline').'
																'.self::createMenuItem('shortcode-testimonial','Testimonial').'
																'.self::createMenuItem('shortcode-vertical-grid','Vertical Grid').'
																'.self::createMenuItem('shortcode-zaccordion','zAccordion').'
																'.self::createMenuItem('shortcode-list-of-icon','List Of Icons').'
																'.self::createMenuItem('shortcode-list-of-widget','List Of Widgets').'
															</ul>												
														</li>
													</ul>
												</li>
												<li>
													'.self::createMenuItem('#','Contact',true,false).'
													<ul>
														'.self::createMenuItem('contact-us-1','Contact Style I').'
														'.self::createMenuItem('contact-us-2','Contact Style II').'
													</ul>
												</li>

											</ul>

										<li>

									</ul>

								</nav>
				';
		}
		
		$html.=
		'
							</div>

						</div>
		';
		
		echo $html;
	}
	
	/**************************************************************************/
	
	static function includeHeaderBottom($header=null,$subheader=null,$backgroundImageId=-1,$backgroundStyleId=-1)
	{
		$class=array('template-header-bottom-background');
		
		if($backgroundImageId!=-1)
			array_push($class,'template-header-bottom-background-img-'.$backgroundImageId);
		if($backgroundStyleId!=-1)
			array_push($class,'template-header-bottom-background-style-'.$backgroundStyleId);		
		
		$html=
		'
						<div class="'.join(' ',$class).'">
							<div class="template-main">
								<h1>'.htmlspecialchars($header).'</h1>
								<h6>'.htmlspecialchars($subheader).'</h6>
							</div>
						</div>
';
		
		echo $html;
	}
	
	/**************************************************************************/
	
	static function getBodyTagCSSClass()
	{
		$class=array('template-page-'.basename(self::getCurrentFilePath(),'.php'));
		return(join(' ',$class));
	}
	
	/**************************************************************************/
	
	static function getHTMLTagCSSClass()
	{
		$class=array('template-page-'.basename(self::getCurrentFilePath(),'.php'));
		return(join(' ',$class));
	}
	
	/**************************************************************************/
	
	static function getPageURL($page,$echo=true)
	{
		$url=substr($page,0,1)==='#' ? $page : '?page='.$page;
		
		if($echo) echo $url;
		else return($url);
	}
	
	/**************************************************************************/
	
	static function isPage($page)
	{
		if(!is_array($page)) $page=array($page);
		
		foreach($page as $pageName)
		{
			if(basename(self::getCurrentFilePath(),'.php')===$pageName)
				return(true);
		}

		return(false);
	}
	
	/**************************************************************************/
	
	static function createMenuItem($page,$label,$icon=null,$listItem=true)
	{	
		if(!is_null($icon))
		{
			if($icon===true) $label=$label.'<span></span>';
			else $label='<span class="template-icon-menu template-icon-menu-'.$icon.'"></span>'.$label;
		}
		
		$html='<a href="'.self::getPageURL($page,false).'"'.(self::isPage($page) ? ' class="template-state-selected"' : null).'>'.$label.'</a>';
		if($listItem) $html='<li>'.$html.'</li>';
		return($html);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/