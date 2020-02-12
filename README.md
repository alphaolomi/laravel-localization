
Caching routes
php artisan route:trans:cache



Common Issues
POST is not working
This may happen if you do not localize your action route that is inside your Routes::group. This may cause a redirect, which then changes the post request into a get request. To prevent that, simply use the localize helper.

For example, if you use Auth::routes() and put them into your Route::group Then


<form action="{{  \LaravelLocalization::localizeURL('/logout') }} " method="POST">
<button>Logout</button>
</form>

