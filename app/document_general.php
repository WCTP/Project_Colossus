<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class document_general extends Model
{
    protected $guarded = [];

    public static function get_category()
    {
      /* get current url */
      $category = url()->current();

      /* find the last / and take the substring end of the url */
      $last_slash = strripos($category, '/');
      $category = substr($category, $last_slash + 1);

      /* replace all space (%20) with an actual space */
      $category = str_replace('%20', ' ', $category);

      return $category;
    }
}
