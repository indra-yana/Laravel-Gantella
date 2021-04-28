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

Route::get('/', function () {
    return view('template/dashboard.index');
});

// Gantella templating master
Route::prefix('gantella-example')->group(function () {
    // Dashboard
    Route::get('dashboard', function () {
		return view('template/dashboard.index');
	})->name('gantella-dashboard.index');

    // General forms
	Route::get('general-form', function () {
		return view('template/form.general-form');
	})->name('form.general-form');

	// Advanced forms
	Route::get('advanced-components', function () {
		return view('template/form.advanced-components');
	})->name('form.advanced-components');

	// forms validation
	Route::get('form-validation', function () {
		return view('template/form.form-validation');
	})->name('form.form-validation');

	// forms wizard
	Route::get('form-wizard', function () {
		return view('template/form.form-wizard');
	})->name('form.form-wizard');

	// forms upload
	Route::get('form-upload', function () {
		return view('template/form.form-upload');
	})->name('form.form-upload');

	// forms buttons
	Route::get('form-button', function () {
		return view('template/form.form-button');
	})->name('form.form-button');

	// UI Elements / General elements
	Route::get('general-element', function () {
		return view('template/ui-element.general-elements');
	})->name('ui-element.general-elements');

	// UI Elements / Media galery
	Route::get('media-galery', function () {
		return view('template/ui-element.media-galery');
	})->name('ui-element.media-galery');

	// UI Elements / Typography
	Route::get('typography', function () {
		return view('template/ui-element.typography');
	})->name('ui-element.typography');

	// UI Elements / Icons
	Route::get('icons', function () {
		return view('template/ui-element.icons');
	})->name('ui-element.icons');

	// UI Elements / Glyphicons
	Route::get('glyphicons', function () {
		return view('template/ui-element.glyphicons');
	})->name('ui-element.glyphicons');

	// UI Elements / Widgets
	Route::get('widgets', function () {
		return view('template/ui-element.widgets');
	})->name('ui-element.widgets');

	// UI Elements / Invoice
	Route::get('invoice', function () {
		return view('template/ui-element.invoice');
	})->name('ui-element.invoice');

	// UI Elements / Inbox
	Route::get('inbox', function () {
		return view('template/ui-element.inbox');
	})->name('ui-element.inbox');

	// UI Elements / Calendar
	Route::get('calendar', function () {
		return view('template/ui-element.calendar');
	})->name('ui-element.calendar');

	// Table / table
	Route::get('table', function () {
		return view('template/table.table');
	})->name('table.table');

	// Table / Table dynamic
	Route::get('table-dynamic', function () {
		return view('template/table.table-dynamic');
	})->name('table.table-dynamic');

	// Data presentation / Chart JS
	Route::get('chart-js', function () {
		return view('template/data-presentation.chart-js');
	})->name('data-presentation.chart-js');

	// Data presentation / Chart JS 2
	Route::get('chart-js2', function () {
		return view('template/data-presentation.chart-js2');
	})->name('data-presentation.chart-js2');

	// Data presentation / Moris JS
	Route::get('moris-js', function () {
		return view('template/data-presentation.moris-js');
	})->name('data-presentation.moris-js');

	// Data presentation / EChart JS
	Route::get('e-chart', function () {
		return view('template/data-presentation.e-chart');
	})->name('data-presentation.e-chart');

	// Data presentation / Other chart
	Route::get('other-chart', function () {
		return view('template/data-presentation.other-chart');
	})->name('data-presentation.other-chart');

	// Layout / Fixed sidebar
	Route::get('fixed-sidebar', function () {
		return view('template/layout.fixed-sidebar');
	})->name('layout.fixed-sidebar');

	// Layout / Fixed sidebar
	Route::get('fixed-footer', function () {
		return view('template/layout.fixed-footer');
	})->name('layout.fixed-footer');

	// Additional page / E-Commmerce
	Route::get('e-commerce', function () {
		return view('template/additional-page.e-commerce');
	})->name('additional-page.e-commerce');

	// Additional page / Project
	Route::get('project', function () {
		return view('template/additional-page.project');
	})->name('additional-page.project');

	// Additional page / Project detail
	Route::get('project-detail', function () {
		return view('template/additional-page.project-detail');
	})->name('additional-page.project-detail');

	// Additional page / Contact
	Route::get('contact', function () {
		return view('template/additional-page.contact');
	})->name('additional-page.contact');

	// Additional page / Profile
	Route::get('profile', function () {
		return view('template/additional-page.profile');
	})->name('additional-page.profile');

	// Extras / 403 error
	Route::get('403-error', function () {
		return view('template/extras.403-error');
	})->name('extras.403-error');

	// Extras / 404 error
	Route::get('404-error', function () {
		return view('template/extras.404-error');
	})->name('extras.404-error');

	// Extras / 500 error
	Route::get('500-error', function () {
		return view('template/extras.500-error');
	})->name('extras.500-error');

	// Extras / Plain page
	Route::get('plain-page', function () {
		return view('template/extras.plain-page');
	})->name('extras.plain-page');

	// Extras / Login page
	Route::get('login-page', function () {
		return view('template/extras.login-page');
	})->name('extras.login-page');

	// Extras / Pricing table
	Route::get('pricing-table', function () {
		return view('template/extras.pricing-table');
	})->name('extras.pricing-table');
});
