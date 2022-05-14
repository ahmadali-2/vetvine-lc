<?php

// use App\Http\Controllers\;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SocialController;
use App\Http\Controllers\Auth\UserTypeController;

// Admin And Super Admin Routes;
use App\Http\Controllers\Admins\AdminDashboardController;
use App\Http\Controllers\Admins\AdsCampaign\CampaignController;
use App\Http\Controllers\Admins\AdsCampaign\ManageAdController;
use App\Http\Controllers\Admins\Advertisment\AdCampaignController;
use App\Http\Controllers\Admins\Announcement\AnnouncementController;
use App\Http\Controllers\Admins\Forum\CommentController;

use App\Http\Controllers\Admins\Forum\ForumCategoryController;
use App\Http\Controllers\Admins\Forum\ForumController;
use App\Http\Controllers\Admins\Forum\ForumPostController;
use App\Http\Controllers\Admins\Generalsettings\AdminProfileController;
use App\Http\Controllers\Admins\Generalsettings\ManageUserController;
use App\Http\Controllers\Admins\Memberships\MemberShipPlanCategoryController;
use App\Http\Controllers\Admins\Memberships\MemberShipPlansController;
use App\Http\Controllers\Admins\Webinar\EventCategoryController;
use App\Http\Controllers\Admins\Webinar\EventController;
use App\Http\Controllers\Auth\SuperAdminRegistrationController;
use App\Http\Controllers\Admins\Memberships\BuyMemberShipPlanController;
use App\Http\Controllers\Admins\News\NewsController;
// Vetvine Users Routes;
use App\Http\Controllers\VetvineUsers\DashboardController as VetvineUserDashboardController;

// Vetvine Without Auth Routes;
use App\Http\Controllers\Frontend\ContactUsController;

// Vetvine Frontend Routes;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Auth\UsersRegistrationController;
use App\Http\Controllers\VetvineUsers\MemberShips\StripePaymentController;
use App\Http\Controllers\VetvineUsers\MyProfile\EditPhotoController;
// User profile Skills And Expertise Controller
use App\Http\Controllers\VetvineUsers\MyProfile\SkillsAndExpertiseController;
use App\Http\Controllers\VetvineUsers\MyProfile\PersonelInfoController;
use App\Http\Controllers\VetvineUsers\MyProfile\EducationController;
use App\Http\Controllers\VetvineUsers\MyProfile\EmploymentInfoController;
//update profile route
use App\Http\Controllers\VetvineUsers\MyProfile\ProfileController;
//user Setting Routes
use App\Http\Controllers\VetvineUsers\Settings\GeneralSettingController;
use App\Http\Controllers\VetvineUsers\Settings\PrivacySettingController;
// user side post controller
use App\Http\Controllers\VetvineUsers\PostManagement\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
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
Route::get('/clear', function () {
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return 'clear done';
});
Route::get('/cache', function () {
    Artisan::call('config:cache');
});

Route::get('/migrate',function(){
    Artisan::call('migrate');
    return 'migrated successfully';
});




/**
 * Social Registeration and  Login  Routes
 */
Route::get('social/{belong}/{user_type}/{network_type}', [SocialController::class, 'redirect']);
Route::get('login/{belong}/callback','App\Http\Controllers\Auth\SocialController@handleProviderCallback');
Route::get('check-user-type', [UserTypeController::class, 'checkType'])->name('checkusertype');
Route::post('loginroute', [UsersRegistrationController::class, 'userLogin'])->name('loginroute');
Route::get('login', function(){
    return view('frontend.home');
})->name('login');

        //  --------------------- Fahad commented this line jus to check -------------------

/**
 * Admin Routes
 */
Route::group(['prefix' => 'superadmin', 'middleware' => ['auth:sanctum','adminRole']], function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('admindashboard');
    Route::get('sample-form', [AdminDashboardController::class, 'sampleForm'])->name('sampleform');
    Route::get('sample-table', [AdminDashboardController::class, 'sampleTable'])->name('sampletable');
    Route::get('general-setting', [AdminProfileController::class, 'generalsetting'])->name('generalsetting');
    Route::post('store-setting', [AdminProfileController::class, 'storegeneralsetting'])->name('storegeneralsetting');
    Route::resource('generalsettings', AdminProfileController::class);
    Route::resource('ads-campaign', CampaignController::class);
    Route::resource('ads-manage', ManageAdController::class);
    Route::resource('membership', MemberShipPlansController::class);
    Route::resource('membership-category', MemberShipPlanCategoryController::class);
    Route::get('network', [AdminDashboardController::class, 'network'])->name('network');
    Route::get('unapproved-users', [ManageUserController::class, 'unapprovedUsers'])->name('unapproved');
    Route::post('approved-user', [ManageUserController::class, 'approvedUsers'])->name('approveuser');
    Route::delete('delete-users/{id}', [ManageUserController::class, 'deleteUser']);

    Route::resource('forums-category', ForumCategoryController::class);
    Route::resource('forums', ForumController::class);
    Route::resource('announcements',AnnouncementController::class);
    Route::resource('manageuser',ManageUserController::class);
    Route::resource('subscribed-users',BuyMemberShipPlanController::class);
    Route::get('user-history/{id}', [BuyMemberShipPlanController::class, 'userHistory'])->name('userhistory');
    Route::resource('news',NewsController::class);
    Route::get('naveed-testing', [AdminDashboardController::class, 'testing'])->name('testing');
    Route::resource('webinars-category', EventCategoryController::class);
    Route::resource('webinars', EventController::class);
});

/**
 * Vetvine Users Routes
 */
Route::group(['prefix' => 'user'], function () {
Route::group(['prefix' => 'user', 'middleware' => ['auth:sanctum','verified']], function () {
    Route::get('dashboard', [VetvineUserDashboardController::class, 'dashboard'])->name('users_dashboard');

});
});


/**
 * Vetvine Common Users Routes
 */
Route::post('contact-us',[ContactUsController::class,'submitContactForm'])->name('contactus.submit');
Route::get('term',function(){
 return view('frontend.pages.term_conditions');

});


/**
 * Vetvine Home Frontend Routes
 */


    Route::get('/',function(){
        return view('frontend.home');
    });
Route::get('why-vetvine',[HomeController::class,'whyVetvine'])->name('why_vetvine');
// Route::get('contact',[HomeController::class,'contactUs'])->name('contact_us');
Route::get('grow',[HomeController::class,'grow'])->name('grow');
Route::get('thrive',[HomeController::class,'thrive'])->name('thrive');
Route::get('heal',[HomeController::class,'heal'])->name('heal');
Route::get('terms-of-service',[HomeController::class,'termsOfService'])->name('termsofservice');
// upcoming webinars
Route::get('upcoming-webinars',[HomeController::class,'upcomingWebinars'])->name('upcoming_webinars');
Route::get('publications',[HomeController::class,'publications'])->name('upcoming_publications');
Route::get('educations',[HomeController::class,'searceducations'])->name('search_educations');

Route::get('faqs',[HomeController::class,'faqs'])->name('faqs');
Route::get('frontend-forums',[ForumController::class,'frontendIndex'])->name('forumsfrontend');
Route::get('create-forumpost/{id}',[ForumPostController::class,'createPost'])->name('createforumpost');
Route::get('forumpostlist/{id}',[ForumPostController::class,'forumPostList'])->name('forumpostlist');
Route::resource('forums-posts',ForumPostController::class);
//Forum-posts Comments Routes
Route::post('/comment/store', [CommentController::class,'store'])->name('comment.add');
Route::delete('comment-destroy/{id}', [CommentController::class,'destroy'])->name('comment.destroy');
Route::post('/reply/store', [CommentController::class,'replyStore'])->name('reply.add');
Route::get('frontend-news',[NewsController::class,'frontIndex'])->name('newsfrontend');

Route::group(['prefix'=>'vetvine-member', 'middleware' => ['auth:sanctum', 'vetvineUserRole']], function(){
    Route::get('dashboard',[HomeController::class,'userdashboard'])->name('userdashboard');
    Route::resource('updateprofile',ProfileController::class);
    Route::resource('skillsexpertise',SkillsAndExpertiseController::class);
    Route::resource('personelinfo',PersonelInfoController::class);
    Route::resource('education',EducationController::class);
    Route::resource('editPhoto',EditPhotoController::class);
    Route::resource('employmentInfo',EmploymentInfoController::class);
    Route::resource('usermemberships',StripePaymentController::class);
    //User setting routes
    Route::resource('general',GeneralSettingController::class);
    Route::resource('privacy',PrivacySettingController::class);
    // User Post management routes
    Route::resource('post', PostController::class);


});
