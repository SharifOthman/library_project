<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DCategoriesController;
use App\Http\Controllers\DauthorsController;
use App\Http\Controllers\DproductsController;
use App\Http\Controllers\DownersController;
use App\Http\Controllers\DarticlesController;
use App\Http\Controllers\DfooterController;
use App\Http\Controllers\DsliderController;
use App\Http\Controllers\DaboutController;
use App\Http\Controllers\CartController;

use Illuminate\Http\Request;



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








   //     WebController.Api


        Route::get("", [PagesController::class, "index"]);
        Route::get("index", [PagesController::class, "index"]);
        Route::get("authors", [PagesController::class, "authors"]);
        Route::get("articles", [PagesController::class, "articles"]);
        Route::get("aboutus", [PagesController::class, "aboutus"]);
        Route::get("login_user", [PagesController::class, "login_user"]);
        Route::get("register_user", [PagesController::class, "register_user"]);
        Route::get("dashboard", [PagesController::class, "dashboard"]);



        Route::get("art_photography", [PagesController::class, "art_photography"]);
        Route::get("biography", [PagesController::class, "biography"]);
        Route::get("children", [PagesController::class, "children"]);
        Route::get("fantasy_horror", [PagesController::class, "fantasy_horror"]);
        Route::get("food_drink", [PagesController::class, "food_drink"]);
        Route::get("anime", [PagesController::class, "anime"]);
        Route::get("craft_hobbies", [PagesController::class, "craft_hobbies"]);
        Route::get("fiction", [PagesController::class, "fiction"]);
        Route::get("science_fiction", [PagesController::class, "science_fiction"]);
        Route::get("crime_thriller", [PagesController::class, "crime_thriller"]);



        Route::get("product_show/{id}", [PagesController::class, "product_show"]);
        Route::get("author/{id}", [PagesController::class, "show_authors"]);
        Route::get("/master", [PagesController::class, "master"]);
        Route::get("owner/{id}", [PagesController::class, "show_admin"])->name('owner.read');


        Route::get("ourstory", [PagesController::class, "ourstory"]);
        Route::get("termofuse", [PagesController::class, "termofuse"]);
        Route::get("termofsale", [PagesController::class, "termofsale"]);


        Route::get("order_name/{id}", [PagesController::class, "order_name"]);
        Route::get("order_price/{id}", [PagesController::class, "order_price"]);

      
        Route::get("search", [PagesController::class, "SearchByProduct"]);
       


        // FavoriteController.web

     
Route::get("favorite_products/{id}", [PagesController::class, "store_favorite"]);
Route::get("favorite_products", [PagesController::class, "favorite"]);


     





            Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
                return $request->user();
            });

                        // UsersController.Api

                    Route::post("register", [UsersController::class, "register"]);
                    Route::post("login", [UsersController::class, "login"]);

                   Route::group(["middleware"=> ["auth:api"]],function(){

                    Route::get("profile", [UsersController::class, "profile"]);
                    Route::post("logout", [UsersController::class, "logout"]);

                });



      // DCategoriesController.Api
        Route::get("create_category", [DCategoriesController::class, "create"]);
        Route::post("store_category", [DCategoriesController::class, "store"]);
        Route::post("update_category/{id}/update", [DCategoriesController::class, "update"]);
        Route::get("edit_category/{id}/edit", [DCategoriesController::class, "edit"]);
        Route::get("delete_category/{id}", [DCategoriesController::class, "destroy"]);
        Route::get("categories", [DCategoriesController::class, "index"]);
        Route::get("single_category/{id}", [DCategoriesController::class, "show"]);



        // DauthorsController.Api
        Route::get("create_author", [DauthorsController::class, "create"]);
        Route::post("store_author", [DauthorsController::class, "store"]);
        Route::post("update_author/{id}/update", [DauthorsController::class, "update"]);
        Route::get("edit_author/{id}/edit", [DauthorsController::class, "edit"]);
        Route::get("delete_author/{id}", [DauthorsController::class, "destroy"]);
        Route::get("list_authors", [DauthorsController::class, "index"]);
        Route::get("single_auther/{id}", [DauthorsController::class, "show"]);
        Route::get("search_authers", [DauthorsController::class, "SearchByAuthers"]);



              // DproductsController.Api
        Route::get("create_product", [DproductsController::class, "create"]);
        Route::post("store_product", [DproductsController::class, "store"]);
        Route::post("update_product/{id}/update", [DproductsController::class, "update"]);
        Route::get("edit_product/{id}/edit", [DproductsController::class, "edit"]);
        Route::get("delete_product/{id}", [DproductsController::class, "destroy"]);
        Route::get("list_products", [DproductsController::class, "index"]);
        Route::get("single_product/{id}", [DproductsController::class, "show"]);
        Route::get("search_products", [DproductsController::class, "SearchByProduct"]);






            // DownersController.Api
        Route::get("create_owner", [DownersController::class, "create"]);
        Route::post("store_owner", [DownersController::class, "store"]);
        Route::post("update_owner/{id}/update", [DownersController::class, "update"]);
        Route::get("edit_owner/{id}/edit", [DownersController::class, "edit"]);
        Route::get("delete_owner/{id}", [DownersController::class, "destroy"]);
        Route::get("list_owners", [DownersController::class, "index"]);
        Route::get("single_owner/{id}", [DownersController::class, "show"]);



            // DarticlesController.Api
        Route::get("create_article", [DarticlesController::class, "create"]);
        Route::post("store_article", [DarticlesController::class, "store"]);
        Route::post("update_article/{id}/update", [DarticlesController::class, "update"]);
        Route::get("edit_article/{id}/edit", [DarticlesController::class, "edit"]);
        Route::get("delete_article/{id}", [DarticlesController::class, "destroy"]);
        Route::get("list_articles", [DarticlesController::class, "index"]);
        Route::get("single_article/{id}", [DarticlesController::class, "show"]);
        Route::get("search_articles", [DarticlesController::class, "SearchByArticles"]);


         // DfooterController.Api
        Route::get("create_footer", [DfooterController::class, "create"]);
        Route::get("edit_footer/{id}/edit", [DfooterController::class, "edit"]);
        Route::post("store_footer", [DfooterController::class, "store"]);
        Route::post("update_footer/{id}/update", [DfooterController::class, "update"]);
        Route::get ("delete_footer/{id}", [DfooterController::class, "destroy"]);
        Route::get("list_footers", [DfooterController::class, "index"]);
        Route::get("single_footer/{id}", [DfooterController::class, "show"]);

           // DsliderController.Api
        Route::get("create_slider", [DsliderController::class, "create"]);
        Route::get("edit_slider/{id}/edit", [DsliderController::class, "edit"]);
        Route::post("store_slider", [DsliderController::class, "store"]);
        Route::post("update_slider/{id}/update", [DsliderController::class, "update"]);
        Route::get("delete_slider/{id}", [DsliderController::class, "destroy"]);
        Route::get("list_sliders", [DsliderController::class, "index"]);
        Route::get("single_slider/{id}", [DsliderController::class, "show"]);



   // DaboutController.Api
        Route::get("create_aboutus", [DaboutController::class, "create"]);
        Route::post("store_aboutus", [DaboutController::class, "store"]);
        Route::post("update_aboutus/{id}/update", [DaboutController::class, "update"]);
        Route::get("edit_aboutus/{id}/edit", [DaboutController::class, "edit"]);
        Route::get("delete_aboutus/{id}", [DaboutController::class, "destroy"]);
        Route::get("list_aboutuss", [DaboutController::class, "index"]);
        Route::get("single_aboutus/{id}", [DaboutController::class, "show"]);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::group(["middleware"=> ["auth:api"]],function(){

       Route::get("list_cart_item", [CartController::class, "index"]);
       Route::get("store_to_cart/{id}", [CartController::class, "store"]);
        Route::post("delete_from_cart/{id}", [CartController::class, "destroy"]);
  });







