<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ServiceController extends Controller
{
    public function getByCategory($category_id)
    {
        if ($category_id) {
            $result = array();
            $category = Category::find($category_id);
            foreach ($category->subategories()->get() as $sc) {
                $result[] = [
                    'subcategory' => $sc,
                    'services' => $sc->services()->get()
                ];
            }
            return json_encode($result);
        }
        return []; 
    }
}
