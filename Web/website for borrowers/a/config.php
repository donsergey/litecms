<?php
$ShowErr=1; 
define('MC_ROOT', dirname(__FILE__));						// Получение пути к базовому каталогу веб-сервера
define('PHIX_CORE', dirname(__FILE__) . '/coreold');		// Путь к ядру фреймворка phix

$h=''; if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS']!='off') $h='s';	$hn ='http'.$h.'://'.$_SERVER['HTTP_HOST'];

$dr = $_SERVER['DOCUMENT_ROOT']; $drr = str_replace('/','\\',$dr); $nr='
';

# if (!isset($access['superadmin'][$user['id']]) && !isset($access['cash'][$user['id']]))
$fh=[$hn,'http://lorato.ru','https://money.com.mm'];			# Фотохосты 0,1,2 
$crmd='http://109.120.138.197/';

$rolem=['admin','cashier','super'];

// Учетные данные для соединения с базой данных MySQL
$db_test1 = [
    'username'  => 'u0033406_loc',
    'password'  => 'kuropatka2276',
    'host'      => 'localhost',
    'base'      => 'u0033406_mm',
	/*'domens'     => ['u0033406.isp.regruhosting.ru'=>'u0033406_mm'],
	'bases'  => ['u0033406_mm'=>['n'=>'Old Myanmar'],
					'u0033406_fil'=>['n'=>'Philippines'],
					'u0033406_tha'=>['n'=>'Thailand'],
					'u0033406_bir'=>['n'=>'Myanmar'],
					'u0033406_ind'=>['n'=>'Indonesia'],
					'u0033406_shr'=>['n'=>'Sri lanka'],
					],*/
];
$db_test2 = [
    'username'  => 'root',
    'sbd'=>'mm',
	'password'  => '',
    'host'      => 'localhost',
    'base'      => 'crm2',
	/*'domens'     => ['crm'=>'crm','crm_fil'=>'crm_fil','crm_tha'=>'crm_tha','crm_bir'=>'crm_bir','crm_ind'=>'crm_ind','crm_shr'=>'crm_shr'],
	'bases'  => ['crm'=>['n'=>'Old Myanmar'],
					'crm_fil'=>['n'=>'Philippines'],
					'crm_tha'=>['n'=>'Thailand'],
					'crm_bir'=>['n'=>'Myanmar'],
					'crm_ind'=>['n'=>'Indonesia'],
					'crm_sri'=>['n'=>'Sri lanka'],
					],*/
]; // salomilo_ext mti258909otm salomilo_mcm  evuges80
$db_mm = [
    'username'  => 'salomilo_mcm',  # 	['salomilo_u1','salomilo_u2','salomilo_u3','salomilo_mcm']
    'password'  => 'evuges80',		# 	['u10mti258','u20mti258','u3mti258','evuges80']
    'host'      => 'localhost',
    'base'      => 'salomilo_mcm',
	/*'domens'     => ['money.com.mm'=>'salomilo_mcm','micromoney.online'=>'salomilo_fil'],
	'bases'  => ['salomilo_mcm'=>['n'=>'Old Myanmar'],
					'salomilo_fil'=>['n'=>'Philippines'],
					'salomilo_tha'=>['n'=>'Thailand'],
					'salomilo_bir'=>['n'=>'Myanmar'],
					'salomilo_ind'=>['n'=>'Indonesia'],
					'salomilo_shr'=>['n'=>'Sri lanka'],
					],*/
];

$cooktime=31536000; $jsver=201707180933;

$db=$db_mm;
$countrym=[
'mmk'=>[
	'f'=>0,
	'timesql'=>"SET TIME_ZONE='+6:30'",
	'idf'=>'/images/docs/id.jpg',
	'phone_pr'=>"09",'phone_def'=>"09774567890",
	'ds'=>'Kyat 300,000','dnrs'=>'12/ThaKaKa(N)000000',
	'l'=>['en', 'mm', 'bm'],
	't'=>'Myanmar','cur'=>'MMK','al'=>79000,'cp'=>1,
	'la'=>[30000, 50000, 80000, 100000, 130000, 150000, 200000, 300000],
	'bmr'=>[
		250100=>30000,
		500100=>50000,
		750100=>80000,
		1000100=>100000,
		1250100=>130000,
		1500100=>150000,
		1750100=>200000,
		2000100=>300000
		],
	],
'php'=>[
	'f'=>1,
	'timesql'=>"SET TIME_ZONE='+6:30'",
	'phone_pr'=>"05",'phone_def'=>"05774567890",
	'idf'=>'/images/docs/id.jpg',
	'ds'=>'PHP 30,000','dnrs'=>'12/Php(N)000000',
	'l'=>['en'],
	't'=>'Philippines','cur'=>'PHP','al'=>2000,'cp'=>1,
	'la'=>[1000,  1750,  3000, 3750,    5000,   5750,  7750 ,  10000],
	'bmr'=>[
		250100=>1000,
		500100=>1750,
		750100=>3000,
		1000100=>3750,
		1250100=>5000,
		1500100=>5750,
		1750100=>7750,
		2000100=>10000
		],
	],
'idr'=>[ 
	'f'=>2,
	'timesql'=>"SET TIME_ZONE='+6:30'",
	'phone_pr'=>"06",'phone_def'=>"06774567890",
	'idf'=>'/images/docs/id.jpg',
	'l'=>['en', 'ind'],
	'ds'=>'IDR 300,000','dnrs'=>'12/IDR(N)000000',
	't'=>'Indonesia','cur'=>'IDR','al'=>500000,'cp'=>1,
	'la'=>[200000, 400000, 800000,   1000000, 1350000, 1500000,  2000000 ,  3000000],
	'bmr'=>[
		250100=>200000,
		500100=>400000,
		750100=>800000,
		1000100=>1000000,
		1250100=>1350000,
		1500100=>1500000,
		1750100=>2000000,
		2000100=>3000000
		],
	],
'lkr'=>[
	'f'=>3,
	'timesql'=>"SET TIME_ZONE='+6:30'",
	'phone_pr'=>"07",'phone_def'=>"07774567890",
	'idf'=>'/images/docs/id.jpg',
	'l'=>['en' , 'sin'],
	'ds'=>'LKR 90,000','dnrs'=>'12/LKR(N)000000',
	't'=>'Sri Lankan','cur'=>'LKR','al'=>7000,'cp'=>1,
	'la'=>[3000, 5000, 8000,   10000, 13000, 15000,  20000 ,  30000],
	'bmr'=>[
		250100=>3000,
		500100=>5000,
		750100=>8000,
		1000100=>10000,
		1250100=>13000,
		1500100=>15000,
		1750100=>20000,
		2000100=>30000
		],
	],	
'thb'=>[
	'f'=>4,
	'timesql'=>"SET TIME_ZONE='+6:30'",
	'phone_pr'=>"08",'phone_def'=>"08774567890",
	'idf'=>'/images/docs/id_thb.jpg',
	'l'=>[ 'mm', 'bm','en'],
	'ds'=>'THB 15,000','dnrs'=>'12/ThaKaKa(N)000000',
	't'=>'Thailand','cur'=>'THB','al'=>2500,'cp'=>1,
	'la'=>[800, 1500, 2100,   2700, 3500, 4000,  6000 ,  8000],
	'bmr'=>[
		250100=>800,
		500100=>1500,
		750100=>2100,
		1000100=>2700,
		1250100=>3500,
		1500100=>4000,
		1750100=>6000,
		2000100=>8000
		],
	],		
];
$countryid=[]; foreach ($countrym as $k=>$v) $countryid[$v['f']]=$v;

$app = [
    'name' => 'Micromoney',
    'domain' => 'money.com.mm',
    'email' => 'info@money.com.mm',
    'key' => '06yu560yu560y560hy65',
    /* Время жизни токена в минутах (с момента генерации, т.е. вывода формы),
       не рекомендуется более 60, т.к. будет тормозить процедуру валидации токена */
    'token_lifetime' => 5,
    /* Режим работы приложения (индикация ошибок, активация сервисных функций и пр.): 'debug' или 'production' */
    'mode' => 'debug',
    /* Локализация */
    'current_language' => '',
	'default_country' => 'mmk', 		
	'current_country' => '',
	'langn' => ['en'=>'English', 'mm'=>'Zawgyi', 'bm'=>'Unicode', 'ind'=>'Indonesia', 'sin'=>'Sinhalese'],
    'languages' => ['en', 'mm', 'bm', 'ind', 'sin'],
];

if ($sas) { $PlainText=true; $skip_frontend_config=true; }	# ajax работа
if ($PlainText || isset($_GET['headerset'])) { # text/plain вывод
	header("Content-type: text/plain; charset=utf-8"); header("Cache-Control: no-store, no-cache, must-revalidate");header("Cache-Control: post-check=0, pre-check=0", false); 	
}

if ($ShowErr) { # Вывод ошибок
	ini_set('error_reporting', E_ALL);ini_set('display_errors', 1);ini_set('display_startup_errors', 1);
}

if (!isset($skip_frontend_config)) { 
	# Дефолтные настройки страницы
    if (isset($backend_environment) &&  $backend_environment==TRUE) {
        // BACKEND
        
		$page = [
            /* Шаблон страницы по-умолчанию */
            'template'  => 'sections/backend/layout.php',
            /* CSS - стили по-умолчанию */
            'css'  => [
                '/crm/css/bootstrap.min.css',
				'/crm/css/bootstrap-theme.min.css',
                '/crm/css/font-awesome.min.css',
                'http'.$h.'://fonts.googleapis.com/css?family=Open+Sans',
            ],
            /* JS - скрипты по-умолчанию */
            'js'  => [  
                '/crm/js/jquery.min.js',
				'/crm/js/jquery.validate.min.js',
				'/crm/js/bootstrap.min.js',
            ],
            'js_raw' => '', /* в этой переменной хранится "сырой" js, не подключаемый из файла, а генерируемый "на лету" */
        ];
    } else {
        // FRONTEND
        $page = [
            /* Шаблон страницы по-умолчанию */
            'template' => 'sections/frontend/layout.php',

            /* CSS - стили по-умолчанию */
            'css' => [
                '/crm/css/bootstrap.min.css',
                #'/font-awesome/css/font-awesome.min.css',
                '/front/css/site.css?ver='.$jsver,				
                '/front/css/application-4.css?ver='.$jsver, 		
                '/front/css/custom-style.css?ver='.$jsver,		
                '/crm/css/font-awesome.min.css',
                'http'.$h.'://fonts.googleapis.com/css?family=Open+Sans',
            ],

            /* JS - скрипты по-умолчанию */
            'js' => [
                '/crm/js/jquery.min.js',
				'/front/js/custom.js',									# Эта херь в купе с нижним скриптом стартует кредитный калькулятор 
                '/front/js/application-5_130117.js?ver='.$jsver,		#https://money.com.mm   /assets
            ],
            'js_raw' => '', /* в этой переменной хранится "сырой" js, не подключаемый из файла, а генерируемый "на лету" */
        ];
    }
}
// Фиксация и фильтрация входных данных // Подключение к БД и основных функций для работы с ней // Установка локали
require_once(PHIX_CORE . '/request.php');

// Функции для работы с текстовым контентом
require_once(PHIX_CORE . '/f_content.php');
// Функции защиты и шифрования
require_once(PHIX_CORE . '/f_secure.php');
// Короткие алиасы функций
require_once(PHIX_CORE . '/aliases.php');
// Регистрация, логин и сессии авторизации на сайте
require_once(PHIX_CORE . '/f_sessions.php');
// Хелперы
require_once(PHIX_CORE . '/f_helpers.php');