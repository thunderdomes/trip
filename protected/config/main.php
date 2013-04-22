<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		 
		'application.modules.user.models.*',
      'application.modules.user.components.*',
		 
		'application.modules.image.components.*',
      'application.modules.image.models.Image',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'admin',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		 
		 'user'=>array(
            # encrypting method (php hash function)
            'hash' => 'md5',

            # send activation email
            'sendActivationMail' => true,

            # allow access for non-activated users
            'loginNotActiv' => false,

            # activate user on registration (only sendActivationMail = false)
            'activeAfterRegister' => false,

            # automatically login from registration
            'autoLogin' => true,

            # registration path
            'registrationUrl' => array('/user/registration'),

            # recovery password path
            'recoveryUrl' => array('/user/recovery'),

            # login form path
            'loginUrl' => array('/user/login'),

            # page after login
            'returnUrl' => array('/user/profile'),

            # page after logout
            'returnLogoutUrl' => array('/user/login'),
        ),
		 
		  'image'=>array(
                'createOnDemand'=>true, // requires apache mod_rewrite enabled
                'install'=>true, // allows you to run the installer
        ),
		
	),

	// application components
	'components'=>array(
		'db'=>require(dirname(__FILE__).'/db.php'), 
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		 'image'=>array(
                'class'=>'ImgManager',
                'versions'=>array(
                    'small'=>array('width'=>120,'height'=>120),
                    'medium'=>array('width'=>320,'height'=>320),
                    'large'=>array('width'=>640,'height'=>640),
						  'smallprofile'=>array('width'=>256,'height'=>256),
						  'commentprofile'=>array('width'=>50,'height'=>50),
                ),
        ),
		'facebook'=>require(dirname(__FILE__).'/fb.php'),
		'user'=>array(
            // enable cookie-based authentication
            'class' => 'WebUser',
			   'allowAutoLogin'=>true,
            'loginUrl' => array('/user/login'),
				'facebookId' => 'facebook'
       ),
		'db'=>require(dirname(__FILE__).'/db.php'),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
			/*	array(
					'class'=>'CWebLogRoute',
				),*/
			
			),
		),
		 
		'clientScript' => array(
			'scriptMap' => array(
				 'jquery.js'=>false,  //disable default implementation of jquery
				 'jquery.min.js'=>false,  //desable any others default implementation
				 'jquery-ui.js'=>false,  //desable any others default implementation
				 'jquery-ui.min.js'=>false,  //desable any others default implementation
				 'core.css'=>false, //disable
				 'styles.css'=>false,  //disable
				 'pager.css'=>false,   //disable
				 'default.css'=>false,  //disable
				 'jquery-ui.css'=>false,
				 'jquery.ba-bbq.js'=>false,
			),
		),
		
		 
		
	),
	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);