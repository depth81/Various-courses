<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->post('/verifyLogin', 'Home::verifyLogin');
$routes->get('/register', 'registerController::index');
$routes->post('/addUser', 'registerController::addUser');
$routes->get('/ownerAddApt', 'ownerAddAptController::index');
$routes->get('/ownerListApt', 'ownerListAptController::index');
$routes->get('/deleteApartment', 'ownerListAptController::deleteApartment');
$routes->post('/addApartment', 'ownerAddAptController::addApartment');
$routes->get('/userProfile', 'userProfileController::index');
$routes->post('/addProfile', 'userProfileController::addProfile');
$routes->get('/userProfileEdit', 'userProfileEditController::index');
$routes->post('/editProfile', 'userProfileEditController::editProfile');
$routes->get('/userProfileShow', 'userProfileShowController::index');
$routes->get('/ownerListApt/details/(:num)', 'ownerListAptController::detailsApt/$1');
$routes->get('/ownerListApt/editForm/(:num)', 'ownerListAptController::editForm/$1');
$routes->post('/saveEdition/(:num)', 'ownerListAptController::savingEdition/$1');
$routes->get('/listAllApt', 'listAllAptController::index');
$routes->get('/listAllApt/listAllAptDetails/(:num)', 'listAllAptController::listAllAptDetails/$1');
$routes->get('/logout', 'logOutController::index');
$routes->get('/listAllUsers', 'listAllUsersController::index');
$routes->get('/listAllUsers/listUserDetails', 'listUserDetailsController::index');



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
