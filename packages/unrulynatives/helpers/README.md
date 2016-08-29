# laravel-helper
A set of code snippets and functions to use across all projects.



## Features

- Gravatar for your User model


## Installation

1. Add `"unrulynatives/helpers": "0.0.7"`` to your composer.json file.

2. Add this to your `config/app.php` file in packages section

3. Register the package in your User model and wherever you see it is necessary - see features section.

In your `User` model:
`use Unrulynatives\Helpers\UserExtensions;


class User extends Authenticatable
{

use UserExtensions;`

### Done!
 Now you can check if the package works. Point your browser to `unrulyhelpers`. You should see a clock - an example developed along Laraveldaily tutorial http://laraveldaily.com/how-to-create-a-laravel-5-package-in-10-easy-steps/



## To do (Future features)

1. Include Migrations for the Starter Kit package
2. Include Models for the Starter Kit package


## Example usage

1. To get Gravatar assigned to authenticated user's e-mail use
`<img src="{{Auth::user()->gravatar}}">`