<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
use Libraries\Router\Router;


require realpath(dirname(__DIR__, 1) . "/vendor/autoload.php");

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__, 1));
$dotenv->load();


session_start();

$router = new Router(config('app.url'));

/**
 * DEFAULT ROUTES
 */

$router->namespace('App\Controllers')->group(null);

$router->get('/getimage', 'BaseController:getimage', 'web.getimage');
$router->get('/', 'LandingController:landing', 'web.landing');
$router->get('/simple/auth', 'LandingController:simple_auth', 'web.simple_auth');


$router->get('/recuperar-conta', 'PagesController:recover', 'web.recover');
$router->get('/lobby', 'PagesController:lobby', 'web.lobby');
$router->get('/teste', 'PagesController:teste', 'web.teste');
$router->get('/recarga', 'PagesController:recharge', 'web.recharge');
$router->get('/jogar', 'PagesController:playgame', 'web.playgame');
$router->get('/sair', 'PagesController:logout', 'web.logout');
$router->get('/config', 'RequestController:config', 'web.config');
// $router->get('/test', 'PagesController:TesteDelete', 'web.TesteDelete');

$router->get('/minha-conta/configuracoes', 'PagesController:account_settings', 'web.account.settings');
$router->get('/minha-conta/compras/historico', 'PagesController:purchases_history', 'web.account.purchases.history');

$router->get('/payment/notifications', 'InvoiceController:notifications', 'web.invoice.notifications');
$router->post('/payment/notifications', 'InvoiceController:notifications', 'web.invoice.notifications');
$router->get('/fatura/{pid}', 'InvoiceController:create', 'web.invoice.create');
$router->get('/fatura/detalhes/{id}', 'InvoiceController:detail', 'web.invoice.detail');
$router->get('/health/state', 'BaseController:state_check', 'web.check.state');


/**
 * ADMIN ROUTES
 */
$router->namespace('App\Controllers')->group('admin');
$router->get('/usuario/lista', 'AdminController:user_list', 'admin.user.list');
$router->get('/item/enviar', 'AdminController:send_item', 'admin.send.item');
$router->post('/usuario/banir', 'AdminController:user_ban_in_game', 'admin.user.ban');
$router->post('/usuario/desbanir', 'AdminController:user_unban_in_game', 'admin.user.unban');
$router->post('/item/data', 'AdminController:item_data', 'admin.item.data');
$router->post('/item/user/enviar', 'AdminController:sendItemToPlayer', 'admin.item.send.byuser' );



/**
 * SOCIAL LOGIN
 */
$router->namespace('App\Controllers')->group('auth');

$router->get('/discord', 'LoginSocialController:discord', 'auth.social.discord');


/*
    API ROUTES
*/
$router->namespace('App\Controllers')->group('api');

$router->post('/auth/signin', "RequestController:signin_client");
$router->post('/user/data', "RequestController:udetail");

$router->post('/account/simple/signin', "RequestController:simple_signin", 'api.account.simple.signin');
$router->post('/account/simple/signup', "RequestController:simple_signup", 'api.account.simple.signup');

$router->post('/account/signin', 'RequestController:signin', 'api.account.signin');
$router->post('/account/signup', 'RequestController:signup', 'api.account.signup');
$router->post('/account/playgame', 'RequestController:playgame', 'api.account.playgame');
$router->post('/chat/data', 'RequestController:getChatData', 'api.chat.data');
$router->post('/chat/send', 'RequestController:sendChatUser', 'api.chat.send');

$router->post('/account/setting/change/nickname', 'AccountController:change_nickname', 'api.account.settings.change.nickname');
$router->post('/account/setting/change/avatar', 'AccountController:change_avatar', 'api.account.settings.change.avatar');
$router->post('/account/setting/change/name', 'AccountController:change_name', 'api.account.settings.change.name');
$router->post('/account/setting/change/mail', 'AccountController:change_mail', 'api.account.settings.change.mail');
$router->post('/account/setting/change/passwd', 'AccountController:change_pass', 'api.account.settings.change.pass');

$router->dispatch();
