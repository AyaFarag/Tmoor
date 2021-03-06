<?php




//===============================================================
//
// AUTHENTICATION
//
//===============================================================

Route::redirect("/", "/admin/login", 301);
Route::get("/login", "LoginController@showLoginForm") -> name("admin.login");
Route::post("/login", "LoginController@login");




Route::group([
    "middleware" => "auth:admin",
    "as"         => "admin."
], function () {

    //===============================================================
    //
    // DASHBOARD
    //
    //===============================================================

    Route::get("/dashboard", "DashboardController@index") -> name("dashboard");



    //===============================================================
    //
    // MODERATORS
    //
    //===============================================================

    Route::resource("/moderator", "ModeratorController");



    //===============================================================
    //
    // USERS
    //
    //===============================================================

    Route::resource("/user", "UserController");



    //===============================================================
    //
    // PROFILE
    //
    //===============================================================

    Route::get("/profile", "AdminController@showProfile") -> name("profile");
    Route::put("/profile", "AdminController@updateProfile");



    //===============================================================
    //
    // SETTING
    //
    //===============================================================

    Route::get("/setting", "SettingController@edit") -> name("setting.edit");
    Route::put("/setting", "SettingController@update");



    //===============================================================
    //
    // LOGOUT
    //
    //===============================================================

    Route::get("/logout", "LoginController@logout") -> name("logout");

});