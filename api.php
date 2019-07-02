<?php

include_once 'Request.php';
include_once 'Router.php';

$router = new Router(new Request);

// How GET requests will be defined
$router->get('/test-dev/api/carros', function($request)
{
    
    // The $request argument of the callback 
    // will contain information about the request
    
    return "Blah!";
    
});


// How POST requests will be defined
$router->post('/test-dev/api/carros', function($request)
{
    
    // How to get data from request body
    //$body = $request->getBody();
    return json_encode($request->getBody());
    
});


// How GET requests will be defined
$router->get('/test-dev/api/carros/{id}', function($request)
{
    
    // The $request argument of the callback 
    // will contain information about the request
    return "Bleh!";
    
});


// How PUT requests will be defined
$router->put('/test-dev/api/carros/{id}', function($request)
{
    
    // The $request argument of the callback 
    // will contain information about the request
    return "Blih!";
    
});


// How DELETE requests will be defined
$router->delete('/test-dev/api/carros/{id}', function($request)
{
    
    // The $request argument of the callback 
    // will contain information about the request
    return "Bloh!";
    
});