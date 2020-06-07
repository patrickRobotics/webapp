# Bookkeeping

## PHP Artisan Commands

To run php artisan commands, you need to be in the Alpine PHP container bash: `docker-compose run php sh`

## Controllers

To use artisan to create controllers-> `php artisan make:controller PostController`

## Models and Data

PHP Artisan to create and manage Models and Migrations. -m argument tells artisan to create a migration file for the Model

### Genereate:

`php artisan make:model Post -m`
or `php artisan make:migration create_posts_table`

### Configure/Write - when adding additional fields or relations to the table:

```
Schema::create('table_name', function (Blueprint $table) {
    $table->bigIncrements('id');
    $table->timestamps();
    $table->string('name'); // name field
});
```

### Run:

`php artisan migrate`

### Roll Back/Refresh:

```
php artisan migrate:rollback //latest migration
php artisan migrate:reset //all migrations
php artisan migrate:refresh //rollback all & re-run
```

### Saving Data (INSERT):

// create model instance

```
$post = new Post();
$post->title = 'The title';
$post->save();
```

### Fetching Data (SELECT):

```
// fetch models where 'title' equals 'Title'
$posts = Post::where('title', '=', 'Title')->get();
// only get first matching entry
$post = Post::where('title', '=', 'Title')->first();
// get all models
$posts = Post::all();
// specific model - Get by ID shortcut
$post = Post::find(10);
// Many to Many relationship - Fetch data
$tags = Post::find(10)->tags;
$tags = Post::find(10)->tags()->orderBy( ...)->get();
// Many to Many relationship - Insert data
$post = Post::find(10);
$tagId = 1;
$post->tags()->attach($tagId);
// Many to Many relationship - Delete data
$post->tags()->detach($tagId);
```

### Laravel Collections

`$posts = Post::all();`, `$posts = Post::where()->get();` -> collection of models
[Collections](https://laravel.com/docs/5.8/collections) methods: `filter();`, `sort();`, `each();`, `...();`

### [Seeding](https://laravel.com/docs/5.8/seeding) the database

`php artisan make:seed PostTableSeeder`
regenerate Composer's autoloader using:`composer dump-autoload`
then seed db by running:
`php artisan db:seed`
`php artisan migrate --seed` if you want to run both migrations and seeding at the same time. This command is useful for completely re-building your database:
or run individual seed class using: `php artisan db:seed --class=UsersTableSeeder`

### Updating databse migrations

`php artisan migrate:refresh` this will rollback old migrations and update with the new changes.
`php artisan migrate:refresh --seed` will in addition to refreshing migrations seed the db as well
