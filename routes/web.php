<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogDetailController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\IctManagementController;
use App\Http\Controllers\SolutionsController;
use App\Http\Controllers\KnowledgeTransferController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/services/ict-management', [IctManagementController::class, 'index'])->name('ictmgmt');
Route::get('/services/solutions', [SolutionsController::class, 'index'])->name('solutions');
Route::get('/services/knowledge-transfer', [KnowledgeTransferController::class, 'index'])->name('knowledge');

Route::get('/contact-us', [ContactController::class, 'index'])->name('contact');
Route::post('/contact-us', [ContactController::class, 'send'])->name('contact.send');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{blog}', [BlogDetailController::class, 'show'])->name('blog.show');

Route::get('/project', [ProjectController::class, 'index'])->name('project');

Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');

