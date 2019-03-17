<?php

use Illuminate\Http\Request;
use App\Record;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/check', function(){
    return "ok";
});

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');

Route::group(['middleware' => 'auth:api'], function(){
Route::post('list_records', 'RecordController@listRecords');
Route::post('list_albums_under_record', 'RecordController@listAlbumsUnderRecord');
Route::post('list_albums', 'AlbumController@listAlbums');
Route::post('list_artists','ArtistController@listArtists');
Route::post('list_artists_under_album','AlbumController@listArtistsUnderAlbum');
Route::post('list_artists_under_record', 'RecordController@listArtistsUnderRecord');
Route::post('list_albums_under_artist','ArtistController@listAlbumsUnderArtist');
});

