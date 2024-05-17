<?php

use App\Livewire\AboutUsComponent;
use App\Livewire\Admin\AdminAddBlogComponent;
use App\Livewire\Admin\AdminAddProjectComponent;
use App\Livewire\Admin\AdminContactComponent;
use App\Livewire\Admin\AdminDashboard;
use App\Livewire\Admin\AdminApplicationComponent;
use App\Livewire\Admin\AdminBlogComponent;
use App\Livewire\Admin\AdminEditBlogComponent;
use App\Livewire\Admin\AdminEditProjectComponent;
use App\Livewire\Admin\AdminProjectComponent;
use App\Livewire\ApplicationComponent;
use App\Livewire\ApplicationFormComponent;
use App\Livewire\CompaniesComponent;
use App\Livewire\DisasterComponent;
use App\Livewire\FaqsComponent;
use App\Livewire\CareersComponent;
use App\Livewire\ContactUsComponent;
use App\Livewire\GetInvolvedComponent;
use App\Livewire\HomeComponent;
use App\Livewire\ImpactReportsComponent;
use App\Livewire\IndividualsComponent;
use App\Livewire\NewsComponent;
use App\Livewire\NewsLetterComponent;
use App\Livewire\NgosComponent;
use App\Livewire\OurConceptComponent;
use App\Livewire\PrivacyComponent;
use App\Livewire\ProjectsComponent;
use App\Livewire\SpacesComponent;
use App\Livewire\TalentsComponent;
use App\Livewire\User\UserDashboard;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|----------------------zz----------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeComponent::class);

Route::get('/who-we-are', AboutUsComponent::class)->name('about');
Route::get('/our-concept', OurConceptComponent::class)->name('our-concept');
Route::get('/impact-reports', ImpactReportsComponent::class)->name('impact-reports');

Route::get('/news', NewsComponent::class)->name('news');

Route::get('/spaces', SpacesComponent::class)->name('spaces');
Route::get('/projects', ProjectsComponent::class)->name('projects');

Route::get('/talents', TalentsComponent::class)->name('talents');
Route::get('/talents/application', ApplicationComponent::class)->name('application');
Route::get('/application-form', ApplicationFormComponent::class)->name('application-form');

Route::get('/disaster-relief', DisasterComponent::class)->name('disaster-relief');

Route::get('/get-involved', GetInvolvedComponent::class)->name('get-involved');
Route::get('/companies', CompaniesComponent::class)->name('companies');
Route::get('/individuals-families', IndividualsComponent::class)->name('individuals-families');
Route::get('/ngos', NgosComponent::class)->name('ngos');
Route::get('/faqs', FaqsComponent::class)->name('faqs');

Route::get('/careers', CareersComponent::class)->name('careers');
Route::get('/contact', ContactUsComponent::class)->name('contact');
Route::get('/newsletter-subscription', NewsLetterComponent::class)->name('newsletter');
Route::get('/privacy-policy', PrivacyComponent::class)->name('privacy-policy');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

//For User
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/user/dashboard',UserDashboard::class)->name('user.dashboard');
});

//For ADMIN
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'authAdmin'
])->group(function () {
    Route::get('/admin-dashboard',AdminDashboard::class)->name('admin.dashboard');
    Route::get('/admin-contacts',AdminContactComponent::class)->name('admin.contacts');
    Route::get('/admin-applications',AdminApplicationComponent::class)->name('admin.applications');
    Route::get('/admin-blogs',AdminBlogComponent::class)->name('admin.blogs');
    Route::get('/admin-projects',AdminProjectComponent::class)->name('admin.projects');
    Route::get('/admin-add-blog',AdminAddBlogComponent::class)->name('admin.addBlog');
    Route::get('/admin-add-project',AdminAddProjectComponent::class)->name('admin.addProject');
    Route::get('/admin-edit-blog/{blog_id}',AdminEditBlogComponent::class)->name('admin.editBlog');
    Route::get('/admin-edit-project/{project_id}',AdminEditProjectComponent::class)->name('admin.editProject');
});

