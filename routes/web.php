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
    return view('welcome');
});

//artists
Route::get('/artists', 'ArtistController@view');
Route::post('/artists/create', 'ArtistController@create');
Route::get('/artists/{id}/edit', 'ArtistController@edit');
Route::patch('/artists/{id}/edit', 'ArtistController@save');
Route::delete('/artists/{id}/delete', 'ArtistController@delete');

//albums
Route::get('/albums', 'AlbumController@view');

//songs
Route::get('/songs', 'SongController@view');