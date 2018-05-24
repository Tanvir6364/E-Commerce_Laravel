<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
    //return ("User");
////    $data=[
////      '0'=>[
////          'Name'=>'Tanvir'
////      ],
////        '1'=>[
////            'country'=>'Bangladesh'
////        ]
////    ];
////    return $data;
//    //return view('welcome');
//    return view('demo');
//});

Route::get('/','WelcomeController@index');
Route::get('/category-view/{id}','WelcomeController@category');
Route::get('/contact','WelcomeController@contact');
Route::get('/product-details/{id}','WelcomeController@productDetails');


//*****Cart*****
Route::post('/addToCart','CartController@index');
Route::get('/showCart','CartController@cartView');
Route::post('/updateCart','CartController@updateCart');
Route::get('/removeCartProduct/{id}','CartController@removeCartProduct');


//*****checkout***
Route::get('/checkout','CheckoutController@index');
Route::post('/newCustomer','CheckoutController@newCustomer');
Route::get('/shippingInfo','CheckoutController@shippingInfo');
Route::post('/newShipping','CheckoutController@newShipping');
Route::get('/paymentInfo','CheckoutController@paymentInfo');
Route::post('/newOrder','CheckoutController@saveOrderInfo');
Route::get('/customerHome','CheckoutController@customerHome');
Route::post('/userLogin','CheckoutController@userLogin');
Route::get('/userLogout','CheckoutController@userLogout');



Auth::routes();
Route::get('/dashboard', 'HomeController@index');





Route::group(['middleware'=>'AuthenticateMiddleware'],function (){
    //Category Info////
    Route::get('/category/add', 'CategoryController@createCategory');
    Route::post('/category/save', 'CategoryController@storeCategory');
    Route::get('/category/manage', 'CategoryController@manageCategory');
    Route::get('/category/edit/{id}', 'CategoryController@editCategory');
    Route::post('/category/update', 'CategoryController@updateCategory');
    Route::get('/category/delete/{id}', 'CategoryController@deleteCategory');


//Manufacture Info////
    Route::get('/manufacture/add', 'ManufactureController@createManufacture');
    Route::post('/manufacture/save', 'ManufactureController@storeManufacture');
    Route::get('/manufacture/manage', 'ManufactureController@manageManufacture');
    Route::get('/manufacture/edit/{id}', 'ManufactureController@editManufacture');
    Route::post('/manufacture/update', 'ManufactureController@updateManufacture');
    Route::get('/manufacture/delete/{id}', 'ManufactureController@deleteManufacture');


//Product Info
    Route::get('/product/add', 'ProductController@createProduct');
    Route::post('/product/save', 'ProductController@storeProduct');
    Route::get('/product/manage', 'ProductController@manageProduct');
    Route::get('/product/view/{id}', 'ProductController@viewProduct');
    Route::get('/product/edit/{id}', 'ProductController@editProduct');
    Route::post('/product/update', 'ProductController@updateProduct');
    Route::get('/product/delete/{id}', 'ProductController@deleteProduct');

//Manage Order
    Route::get('/manageOrder', 'OrderController@index');



    //User Info
    Route::get('/user/manage', 'UserController@manageUser');
    Route::get('/mail/sendMail', 'UserController@sendMail');
    Route::get('/sendMail', 'UserController@newMailSend');


});