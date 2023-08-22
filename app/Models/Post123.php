<?php
namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
class Post123
{
    public $title;
    public $slug;
    public $excerpt;
    public $date;
    public $body;

    public function __construct($title,$slug, $excerpt, $date, $body)
    {
        $this->title = $title;
        $this->slug = $slug;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
    }

    public static function all(){
        return cache()->rememberForever('post.all', function () {
            return collect(File::allFiles(resource_path('posts/')))
        ->map(fn($file) => YamlFrontMatter::parseFile($file))
        ->map(fn($document) =>

        new Post(
          $document->title,
          $document->slug,
          $document->excerpt,
          $document->date,
          $document->body()
      ))->sortByDesc('date');
        });

    }
    public static function find($slug)
    {
        return Static::all()->firstWhere('slug',$slug);

    }

    public static function findOrFail($slug){
        $post = Static::all()->firstWhere('slug',$slug);
        if(! $post){
         throw new ModelNotFoundException();
        }
        return $post;
    }
}
