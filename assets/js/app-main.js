var dirTema = document.querySelector("meta[name='theme_path']").getAttribute('content');

require.config({
	baseUrl: '/',
    urlArgs: "v=001",
	waitSeconds: 60,
	shim: {
		'bootstrap' : {
			deps : ['jquery']
		},
		'cart' : {
			deps : ['jquery'],
		},
		'jq_ui' : {
			deps : ['jquery'],
		},
		"noty" : {
			deps : ['jquery'],
		},
		"navgoco" : {
			deps : ['jquery'],
		},
		"owlcarousel" : {
			deps : ['jquery'],
		},
		"cslider" : {
			deps : ['jquery'],
		},
		"fancybox" : {
			deps : ['jquery']
		}
	},

	paths: {
		// LIBRARY
		jquery 			: ['//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min', dirTema+'/assets/js/lib/jquery.min'],
		bootstrap		: ['//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min', dirTema+'/assets/js/lib/bootstrap.min'],
		cart			: 'js/shop_cart',
		jq_ui			: 'js/jquery-ui',
		noty			: 'js/jquery.noty',
		cslider			: dirTema+'/assets/js/lib/jquery.cslider',
		fancybox		: dirTema+'/assets/js/lib/jquery.fancybox.pack',
		flexslider		: dirTema+'/assets/js/lib/jquery.flexslider',
		navgoco			: dirTema+'/assets/js/lib/jquery.navgoco.min',
		owlcarousel		: dirTema+'/assets/js/lib/owl.carousel.min',
		modernizr		: dirTema+'/assets/js/lib/modernizr.custom.28468',
		
		// ROUTE
		router          : 'js/router',

		// CONTROLLER
		main	        : dirTema+'/assets/js/controller/default',
	}
});
require([
	'jquery',
	'router',
	'cart',
	'main'
], function($,router,cart,main){
	router.run();
	main.run();
	cart.run();
});