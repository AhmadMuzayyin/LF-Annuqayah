<?php

use App\Http\Controllers\Quiz\{GradeController, QuizController};
use App\Http\Controllers\Course\{CategoryController,
    CourseController,
    MaterialsController,
    PaymentHistoryController,
    SpeakerController,
    TimeTableController,
    UserCourseController};
use App\Http\Controllers\Subscription\{LayananController};
use Illuminate\Support\Facades\Route;

Route::controller(LayananController::class)->as('subscription.')->group(function (){
    Route::get('/layanan', 'index')->name('index');
    Route::post('/layanan/edit/{id}', 'edit')->name('edit');
});
Route::prefix('course/')->group(function (){
    Route::controller(CategoryController::class)->as('course_categories.')->group(function (){
        Route::get('category', 'index')->name('index');
    });
    Route::controller(CourseController::class)->as('courses.')->group(function (){
        Route::get('', 'index')->name('index');
    });
    Route::controller(MaterialsController::class)->as('course_materials.')->group(function (){
        Route::get('materials', 'index')->name('index');
    });
    Route::controller(SpeakerController::class)->as('speakers.')->group(function (){
        Route::get('speakers', 'index')->name('index');
    });
    Route::controller(TimeTableController::class)->as('course_timetables.')->group(function (){
        Route::get('timetables', 'index')->name('index');
    });
    Route::controller(UserCourseController::class)->as('user_courses.')->group(function (){
        Route::get('users', 'index')->name('index');
    });
    Route::controller(PaymentHistoryController::class)->as('course_payment_history.')->group(function (){
        Route::get('payment_history', 'index')->name('index');
    });
});
Route::prefix('quiz/')->group(function (){
    Route::controller(QuizController::class)->as('quiz.')->group(function (){
        Route::get('', 'index')->name('index');
    });
    Route::controller(GradeController::class)->as('grading.')->group(function (){
        Route::get('grading', 'index')->name('index');
    });
});
Route::prefix('subscription/')->group(function (){
    Route::controller(QuizController::class)->as('service.')->group(function (){
        Route::get('services', 'index')->name('index');
    });
    Route::controller(GradeController::class)->as('user_subscription.')->group(function (){
        Route::get('user_subscription', 'index')->name('index');
    });
    Route::controller(GradeController::class)->as('subscription_payment_history.')->group(function (){
        Route::get('payment_history', 'index')->name('index');
    });
});
Route::prefix('utilities/')->group(function (){
    Route::controller(QuizController::class)->as('users.')->group(function (){
        Route::get('users', 'index')->name('index');
    });
    Route::controller(GradeController::class)->as('roles.')->group(function (){
        Route::get('roles', 'index')->name('index');
    });
    Route::controller(GradeController::class)->as('permission.')->group(function (){
        Route::get('permission', 'index')->name('index');
    });
});
Route::prefix('settings/')->group(function (){
    Route::controller(QuizController::class)->as('website.')->group(function (){
        Route::get('website', 'index')->name('index');
    });
});
