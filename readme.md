## Laravel Sucuri Admin - Bouncer version

__Update October 2020__: this project was created in 2020 as Laravel 5.8 version, and now we upgraded it to Laravel 6 version, also changed the design theme 

- - - - -



## Usage

This is not a package - it's a full Laravel project that you should use as a starter boilerplate, and then add your own custom functionality.

- Clone the repository with `git clone`
- Copy `.env.example` file to `.env` and edit database credentials there
- Run `composer install`
- Run `php artisan key:generate`
- Run `php artisan migrate --seed` (it has some seeded data - see below)
- That's it: launch the main URL and login with default credentials `admin@admin.com` - `password`

This boilerplate has one role (`administrator`), one ability (`users_manage`) and one administrator user.

With that user you can create more roles/abilities/users, and then use them in your code, by using functionality like `Gate` or `@can`, as in default Laravel, or with help of Bouncer's package methods.

## License

The [MIT license](http://opensource.org/licenses/MIT).

## Notice

<<<<<<< HEAD
We are not responsible for any functionality or bugs in **AdminLTE**, **Bouncer** or **Datatables** packages or their future versions, if you find bugs there - please contact vendors directly.# sucuri
=======
We are not responsible for any functionality or bugs in **CoreUI**, **Bouncer** or **Datatables** packages or their future versions, if you find bugs there - please contact vendors directly.

---

## More from our LaravelDaily Team

- Check out our adminpanel generator [QuickAdminPanel](https://quickadminpanel.com)
- Read our [Blog with Laravel Tutorials](https://laraveldaily.com)
- FREE E-book: [50 Laravel Quick Tips (and counting)](https://laraveldaily.com/free-e-book-40-laravel-quick-tips-and-counting/)
- Subscribe to our [YouTube channel Laravel Business](https://www.youtube.com/channel/UCTuplgOBi6tJIlesIboymGA)
- Enroll in our [Laravel Online Courses](https://laraveldaily.teachable.com/)
>>>>>>> 061f75d059d6fe4cf0d970f67a1a7d82b93cf9c0
