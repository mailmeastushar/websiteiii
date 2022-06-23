<?php 

Auth::routes();


Route::get("Apply-For-CanadaPR","FrontController@getShani");
Route::post("Apply-For-CanadaPR","FrontController@getShaniPost");

Route::group(["middleware"=>["auth"]],function(){
     Route::resource('newcontacts',"NewContactController");
    
   Route::get('/home', function() {return view('admin.home');})->name('home');
    Route::get('slider/','SliderController@index');
    Route::get('slider_form/','SliderController@slider_form');
    Route::post('insertslider/','SliderController@insertslider');
    Route::get('getdataforedit/{id}/','SliderController@getdataforedit');
    Route::post('editslider/','SliderController@editslider');
    Route::get('deleteslider/{id}/{image?}/','SliderController@deleteslider');
    
    Route::get('services_form/','ServicesController@create');
    Route::post('store_services/','ServicesController@store');
    Route::get('services/','ServicesController@index');
    Route::get('getservicesforedit/{id}/','ServicesController@edit');
    Route::post('editservices/','ServicesController@update');
    Route::get('deleteservices/{id}/{image?}/','ServicesController@destroy');
    
    Route::get('topstudyvisa-form/','StudyVisaTopController@create');
    Route::post('store-topstudyvisa/','StudyVisaTopController@store');
    Route::get('topstudyvisa/','StudyVisaTopController@index');
    Route::get('gettopstudyvisaforedit/{id}/','StudyVisaTopController@edit');
    Route::post('edittopstudyvisa/','StudyVisaTopController@update');
    Route::get('deletetopstudyvisa/{id}/{image?}/','StudyVisaTopController@destroy');
    
    Route::get('mainstudyvisa-form/','StudyVisaMainController@create');
    Route::post('store-mainstudyvisa/','StudyVisaMainController@store');
    Route::get('mainstudyvisa/','StudyVisaMainController@index');
    Route::get('getmainstudyvisaforedit/{id}/','StudyVisaMainController@edit');
    Route::post('editmainstudyvisa/','StudyVisaMainController@update');
    Route::get('deletemainstudyvisa/{id}/{image?}/','StudyVisaMainController@destroy');
    
    
    Route::get('policy_form/','PolyciesController@create');
    Route::post('addpolicy/','PolyciesController@addpolicy');
    Route::get('policies/','PolyciesController@index');
    Route::get('editpolicy/{id}/','PolyciesController@edit');
    Route::post('updatepolicy/','PolyciesController@update');
    Route::get('deletepolicy/{id}/{image?}/','PolyciesController@destroy');
    
    
    Route::get('germany_form/','GermanyController@create');
    Route::post('addgermany/','GermanyController@addgermany');
    Route::get('germany/','GermanyController@index');
    Route::get('editgermany/{id}/','GermanyController@edit');
    Route::post('updategermany/','GermanyController@update');
    Route::get('deletegermany/{id}/{image?}/','GermanyController@destroy');
    
    Route::get('uk_form/','UkController@create');
    Route::post('adduk/','UkController@adduk');
    Route::get('uk/','UkController@index');
    Route::get('edituk/{id}/','UkController@edit');
    Route::post('updateuk/','UkController@update');
    Route::get('deleteuk/{id}/{image?}/','UkController@destroy');
    
    Route::get('canada/','CanadaController@index');
    Route::get('delete_canada/{id}/{image?}/','CanadaController@destroy');
    Route::get('edit_canada/{id}/','CanadaController@edit');
    Route::post('update_canada/','CanadaController@update');
    Route::get('canada_form/','CanadaController@create');
    Route::get('canada_submenu/{id}/','CanadaController@index');
    Route::post('canada_submenupost/','CanadaController@canada_submenupost');
    Route::post('storecanada/','CanadaController@store');
    
    
    
    Route::get('australia/','AustraliaController@index');
    Route::get('deleteaustralia/{id}/{image?}/','AustraliaController@destroy');
    Route::get('editaustralia/{id}/','AustraliaController@edit');
    Route::post('updateaustralia/','AustraliaController@update');
    Route::get('australia_form/','AustraliaController@create');
    Route::get('australia_submenu/{id}/','AustraliaController@index');
    Route::post('australia_submenupost/','AustraliaController@australia_submenupost');
    Route::post('storeaustralia/','AustraliaController@store');
    
    
    
    
    Route::get('latest_update/','LatestUpdateController@index');
    Route::get('latestupdate_form/','LatestUpdateController@latestupdate_form');
    Route::post('addlatestupdate/','LatestUpdateController@addlatestupdate');
    Route::get('deletelatestupdate/{id}/{image?}','LatestUpdateController@deletelatestupdate');
    Route::get('editlatestupdate/{id}/','LatestUpdateController@editlatestupdate');
    Route::post('updatelatestupdate/','LatestUpdateController@updatelatestupdate');
    Route::get('latest_update_comments/{id}','LatestUpdateController@latest_update_comments');
    Route::post('add_comment_reply/','LatestUpdateController@add_comment_reply');
    Route::get('active_inactive_comment/{id}/{status}','LatestUpdateController@active_inactive_comment');
    Route::get('delete_latest_update_comment/{id}','LatestUpdateController@delete_latest_update_comment');
    
    Route::get('newzealand/','NewzealandController@index');
    Route::get('newzealand_form/','NewzealandController@newzealand_form');
    Route::post('addnewzealand/','NewzealandController@addnewzealand');
    Route::get('deletenewzealand/{id}/{image?}','NewzealandController@deletenewzealand');
    Route::get('editnewzealand/{id}/','NewzealandController@editnewzealand');
    
    Route::post('updatenewzealand/','NewzealandController@updatenewzealand');
    Route::get('about/','AboutController@index');
    Route::get('about_form/','AboutController@about_form');
    Route::post('addabout/','AboutController@addabout');
    Route::get('deleteabout/{id}/{image?}','AboutController@deleteabout');
    Route::get('editabout/{id}/','AboutController@editabout');
    Route::post('updateabout/','AboutController@updateabout');
    
    Route::get('crs_point/','CrsPointController@index');
    Route::get('form_crs_point/','CrsPointController@crs_form');
    Route::post('add_crs_point/','CrsPointController@add_crs');
    Route::get('edit_crs_point/{id}/','CrsPointController@editcrs');
    Route::post('update_crs_point/','CrsPointController@updatecrs');
    Route::get('delete_crs_point/{id}/{image?}/','CrsPointController@deletecrs');
    
    Route::get('admin_flag/','FlagDetailsController@index');
    
    Route::get('flag_form/','FlagDetailsController@flag_form');
    Route::post('addflag/','FlagDetailsController@addflag');
    Route::get('deleteflag/{id}/{image?}/','FlagDetailsController@deleteflag');
    Route::get('editflag/{id}/','FlagDetailsController@editflag');
    Route::post('updateflage/','FlagDetailsController@updateflage');
    Route::get('testimonialform/','TestimonialController@testimonialform');
    Route::get('testimonial/','TestimonialController@index');
    Route::post('addtestimonial/','TestimonialController@addtestimonial');
    Route::get('deletetestimonial/{id}/{image?}/','TestimonialController@deletetestimonial');
    Route::get('showcheck/','CheckCategoriesController@getcheck');
    Route::get('deletecheck/{id}/{image}/','CheckCategoriesController@deletecheck');
    Route::post('addeligibility/','CheckCategoriesController@addeligibility');
    Route::get('check_form/','CheckCategoriesController@check_form');
    Route::get('editcheck/{id}/','CheckCategoriesController@editcheck');
    Route::post('updateligibility','CheckCategoriesController@updateligibility');
    
Route::get('get_contact/','FrontController@get_contact');

Route::get('showassisst/','FrontController@showassisst');
Route::get('deleteassisst/{id}','FrontController@deleteassisst');

Route::get('get_newletter/','FrontController@get_newletter');
 
});



Route::get('study-visa/{cat}/','FrontController@canada_studyvisa');

Route::get('blog/{name}','FrontController@detailblog')->name("detailblog");
Route::get('/','FrontController@index');

//Route::get('uk_fornt/{cat}/','FrontController@uk');

//Route::get('submenu_australia/{id}/','FrontController@submenu_australia');
//Route::get('submenu_data/{id}/','FrontController@submenu_data');
//Route::get('menu_data/{id}/','FrontController@menu_data');

//Route::get('front_services/{cat}/','FrontController@services');
Route::get('blog/','FrontController@latest_update');
//payments
Route::get('payform/','RazorpayController@payform')->name('payform');
Route::get('payment-razorpay', 'RazorpayController@create')->name('paywithrazorpay');
Route::post('payment', 'RazorpayController@payment')->name('payment');

Route::get('newslatter/','FrontController@newslatter');
Route::get('contact-us/','FrontController@contact')->name("harshit-rai");
Route::post('addcontact/','FrontController@addcontact');
Route::post('addblogcomment/','FrontController@addblogcomment');

Route::get('assessment/','FrontController@assessment_form')->name("assessment-form");
Route::get('crs/','FrontController@crs');
Route::get('flag/','FrontController@flag');
Route::post('addassisst/','FrontController@addassisst');
Route::get('check/{name}/','FrontController@check');
Route::post('addcheck/','FrontController@addcheck');
Route::get('success/','FrontController@success');
// Route::get('front_flag/{con}/','FrontController@flag');

Route::get('about-us/','FrontController@about')->name("about-us");

//Route::get('newzealand_front/','FrontController@newzealand');

//Route::get('germany_fornt/{cat}/','FrontController@germany');



Route::get("visa/{seo1?}/{seo2?}/{seo3?}/{seo4?}/{seo5?}","FrontController@dynamic");
Route::get('{pol}','FrontController@policy')->name("front_policy_gaurav");
