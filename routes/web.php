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



          Route::get('viewAllDownloadFile', 'DownloadController@downfunc');

          Route::get('/uploadfile','UploadController@index')->name('upload');
          Route::post('/uploadfile','UploadController@showUploadFile')->name('upload');

          Route::get('/upload','FileController@showUploadForm')->name('upload.file');
          Route::post('/upload','FileController@storeFile')->name('upload.file');




          Route::get('/', 'ProductController@indexx')->name('indexx');
          Route::get('/create', 'ProductController@create')->name('create');
          Route::get('/contact', 'ProductController@contact')->name('contact');
          Route::get('/products', 'ProductController@products')->name('products');
          Route::get('/product/create1', 'ProductController@product_create1')->name('product.create1');
          Route::post('/create1', 'ProductController@product_store')->name('store');

          Route::get('/seller', 'ProductController@seller')->name('seller');
          Route::get('/products', 'ProductController@product')->name('product');
          Route::get('/search', 'ProductController@search')->name('search');
          Route::get('/admin', 'ProductController@admin')->name('admin');

          Route::get('/about', 'ProductController@about');

          Route::get('messages', 'MessageController@fetch');
          Route::post('messages', 'MessageController@sentMessage');


          Route::get('/about', 'ProductController@about')->name('about');

          Route::get('/dashboard','Frontend\UsersController@dashboard')->name('dashboard');

          //Carts Controller........

          Route::get('/value','CartsController@cart_index')->name('carts');
          Route::post('/store','CartsController@store')->name('carts.store');
          Route::post('/delete/{id}','CartsController@destroy')->name('carts.delete');


          //checkout RouteS
           Route::get('/checkouts','CheckoutsController@checkout_index')->name('checkouts');
           Route::get('/info','CheckoutsController@store')->name('checkouts.store');


          //last Page routes
          Route::get('/last','CheckoutsController@last_index')->name('last');


          

          //njnkjgnksbhjbseiegskhiskbgiesuisuesk
          Route::get('/adproduct', 'ProductImageController@adProduct');
          Route::post('/saveproduct', 'ProductImageController@saveProduct');


          Auth::routes();

          Route::get('/home', 'HomeController@index')->name('home');
