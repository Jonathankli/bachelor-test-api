<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class BlogController extends Controller
{
    public function getArticle(Request $request, $id)
    {
        sleep(2);
        return Article::findOrFail($id);
    }
}
