<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->get('/order/create', [


    'uses' => 'OrdersController@create',
    'as' => 'order.create'

]);

$router->post('/order/store', [


    'uses' => 'OrdersController@store',
    'as' => 'order.store'

]);
$router->get('/orders', [


    'uses' => 'OrdersController@index',
    'as' => 'orders'

]);

$router->get('/orders/edit/{id}', [


    'uses' => 'OrdersController@edit',
    'as' => 'orders.edit'

]);
$router->post('/orders/update/{id}', [
    'uses' => 'OrdersController@updateOrder',
    'as' => 'orders.update'

]);
$router->get('/orders/delete/{id}', [


    'uses' => 'OrdersController@deleteOrder',
    'as' => 'orders.delete'

]);
/*
 * =====================
 * Products
 * ======================
 * */

$router->get('/product/create', [


    'uses' => 'ProductsController@create',
    'as' => 'product.create'

]);

$router->post('/product/store', [


    'uses' => 'ProductsController@store',
    'as' => 'product.store'

]);
$router->get('/products', [


    'uses' => 'ProductsController@index',
    'as' => 'products'

]);

$router->get('/products/edit/{id}', [


    'uses' => 'ProductsController@edit',
    'as' => 'products.edit'

]);
$router->post('/products/update/{id}', [
    'uses' => 'ProductsController@updateProduct',
    'as' => 'products.update'

]);
$router->get('/products/delete/{id}', [


    'uses' => 'ProductsController@deleteProduct',
    'as' => 'products.delete'

]);

/*
 * =====================
 * Suppliers
 * ======================
 * */


$router->get('/supplier/create', [


    'uses' => 'SuppliersController@create',
    'as' => 'supplier.create'

]);

$router->post('/supplier/store', [


    'uses' => 'SuppliersController@store',
    'as' => 'supplier.store'

]);
$router->get('/suppliers', [


    'uses' => 'SuppliersController@index',
    'as' => 'suppliers'

]);

$router->get('/suppliers/edit/{id}', [


    'uses' => 'SuppliersController@edit',
    'as' => 'suppliers.edit'

]);
$router->post('/suppliers/update/{id}', [
    'uses' => 'SuppliersController@updateSupplier',
    'as' => 'suppliers.update'

]);
$router->get('/suppliers/delete/{id}', [


    'uses' => 'SuppliersController@deleteSupplier',
    'as' => 'suppliers.delete'

]);



$router->group(['prefix' => 'api/v1','namespace' => 'App\Http\Controllers'], function($router)
{
    // ORDERS

    $router->post('order','OrdersController@createOrders');

    $router->put('order/{id}','OrdersController@updateOrders');

    $router->delete('order/{id}','OrdersController@deleteOrders');



    // PRODUCTS
    $router->post('product','ProductsController@createProducts');

    $router->put('product/{id}','ProductsController@updateProducts');

    $router->delete('product/{id}','ProductsController@deleteProducts');


    
    // SUPPLIERS

    $router->post('supplier','SuppliersController@createSuppliers');

    $router->put('supplier/{id}','SuppliersController@updateSuppliers');

    $router->delete('supplier/{id}','SuppliersController@deleteSuppliers');


    
});
