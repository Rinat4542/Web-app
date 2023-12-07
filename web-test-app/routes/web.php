<?php

use App\Http\Controllers\AllProjectController;
use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\ProjectController;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main');
});

Route::controller(ProjectController::class)->group(function () {
    Route::get('/projects/create', [ProjectController::class, 'createProjectForm'])->name('projects.create');
    Route::get('/allprojects', [ProjectController::class, 'showAllProjects'])->name('allprojects');
    Route::get('/allprojects/{project}', [ProjectController::class, 'showProject'])->name('project');
    Route::get('/allprojects/{project}/edit', [ProjectController::class, 'updateProject'])->name('project.edit');
    Route::post('/allprojects/{project}/update', [ProjectController::class, 'update'])->name('project.update');
    Route::post('/allprojects/{project}/delete', [ProjectController::class, 'delete'])->name('project.delete');
    Route::get('/allprojects/{project}/houses', [ProjectController::class, 'showAllHouses'])->name('show.houses');
});

Route::get('/allprojects/{slug}', [ProjectController::class, 'slug']);

Route::controller(HouseController::class)->group(function () {
    Route::get('/houses/create', [HouseController::class, 'createHouseForm'])->name('house.create');
    Route::post('/houses/create', [HouseController::class, 'create'])->name('house.create');
    Route::get('/allprojects/{project}/houses/{house}', [HouseController::class, 'showHouse'])->name('house');
    Route::get('/allprojects/{project}/houses/{house}/edit', [HouseController::class, 'updateHouse'])->name('house.edit');
    Route::post('/allprojects/{project}/houses/{house}/update', [HouseController::class, 'update'])->name('house.update');
    Route::post('/allprojects/{project}/houses/{house}/delete', [HouseController::class, 'delete'])->name('house.delete');
});

Route::controller(ApartmentController::class)->group(function () {
    Route::get('/apartments/create', [ApartmentController::class, 'createApartmentForm'])->name('apartment.create');
    Route::post('/apartments/create', [ApartmentController::class, 'create'])->name('apartment.create');
    Route::get('/apartments', [ApartmentController::class, 'showAllApartments'])->name('show.apartments');
    Route::get('/apartments/avg', [ApartmentController::class, 'apartmentsAvg'])->name('avg.apartments');
    Route::get('/apartments/{apartment}', [ApartmentController::class, 'showApartment'])->name('apartment');
    Route::get('/apartments/{apartment}/edit', [ApartmentController::class, 'updateApartment'])->name('apartment.edit');
    Route::post('/apartments/{apartment}/update', [ApartmentController::class, 'update'])->name('apartment.update');
    Route::post('/apartments/{apartment}/delete', [ApartmentController::class, 'delete'])->name('apartment.delete');
});



Route::controller(AllProjectController::class)->group(function () {
    Route::post('/projects/create', [AllProjectController::class, 'create'])->name('projects.create');
});
