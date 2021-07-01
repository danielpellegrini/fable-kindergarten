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
		if((is_null($page))) $page='home';
		
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
					<a href="'.self::getPageURL('home',false).'">
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
						'.self::createMenuItem('home','Exit One Page','stroller').'
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
								'.self::createMenuItem('home','Exit One Page').'
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
					<div id="banner-12345">
						Our website is made possible by displaying online advertisements to our visitors.<br>
						Please consider supporting us by disabling your ad blocker on our website.
					</div>
					<nav class="template-component-menu-default">

						<ul class="sf-menu template-clear-fix">

							<li class="sf-mega-enable-0">
								'.self::createMenuItem('home','Home','home',false).'
							</li>
							<li class="sf-mega-enable-0">
								'.self::createMenuItem('#','About','document',false). '
									<ul>
										' . self::createMenuItem('about-us-2', 'About Us') . '
										'.self::createMenuItem('our-service-1','Our Services'). '
										' . self::createMenuItem('pricing-plan-1', 'Pricing Plans') . '
									</ul>
							</li>
							<li class="sf-mega-enable-0">
								'.self::createMenuItem('gallery-left-sidebar','Gallery','video',false).'
							</li>
							<li class="sf-mega-enable-0">
								'.self::createMenuItem('#','Blog','printer',false).'
									<ul>
										'.self::createMenuItem('post-image','Post Image').'
										'.self::createMenuItem('post-audio','Post Audio').'
										'.self::createMenuItem('post-video-2','Post Video').'
										'.self::createMenuItem('post-slider','Post Slider').'
										'.self::createMenuItem('post-quote','Post Quote').'
									</ul>												
							</li>
								<li class="sf-mega-enable-0">
								'.self::createMenuItem('#','Classes','lab',false). '
									<ul>
										' . self::createMenuItem('our-class', 'Our Classes') . '
										' . self::createMenuItem('single-class', 'Single Class') . '
										' . self::createMenuItem('our-staff-2', 'Our Staff') . '
										' . self::createMenuItem('single-teacher', 'Single Teacher') . '
									</ul>
								</li>
							<li class="sf-mega-enable-0">
								'.self::createMenuItem('#','Contact','envelope',false). '
										<ul>
											' . self::createMenuItem('contact-us', 'Contact Us') . '
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
										'.self::createMenuItem('#','About',true,false). ' 				
										<ul>
											<li>
												' . self::createMenuItem('about-us-2', 'About Us') . '
												'.self::createMenuItem('our-service-1','Our Services'). '
												' . self::createMenuItem('pricing-plan-1', 'Pricing Plans') . '											
											</li>
										</ul>
									</li>
									<li>
										' . self::createMenuItem('gallery-left-sidebar', 'Gallery') . '												
									</li>
									<li>
										'.self::createMenuItem('#','Blog',true,false).'
										<ul>
											<li>
												' . self::createMenuItem('post-image', 'Post Image') . '
												' . self::createMenuItem('post-audio', 'Post Audio') . '
												' . self::createMenuItem('post-video-2', 'Post Video') . '
												' . self::createMenuItem('post-slider', 'Post Slider') . '
												' . self::createMenuItem('post-quote', 'Post Quote') . '												
											</li>
										</ul>
									</li>
									<li>
										' . self::createMenuItem('#', 'Classes', 'lab', false) . '
										<ul>
											' . self::createMenuItem('our-class', 'Our Classes') . '
											' . self::createMenuItem('single-class', 'Single Class') . '
											' . self::createMenuItem('our-staff-2', 'Our Staff') . '
											' . self::createMenuItem('single-teacher', 'Single Teacher') . '
										</ul>
									</li>
									<li>
										'.self::createMenuItem('#','Contact',true,false). '
										<ul>
											' . self::createMenuItem('contact-us', 'Contact Us') . '
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