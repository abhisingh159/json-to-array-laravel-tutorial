<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DemoController extends Controller
{
    public function json_decode_mehod() {

        $json_data = '{
            "userId": 1,
            "id": 1,
            "title": "sunt aut facere repellat provident occaecati excepturi optio reprehenderit",
            "body": "quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto"
        }';

        $data = json_decode($json_data, true);
        echo "<pre>";
        print_r($data);
    }

    public function json_method() {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts/1');
         echo "<pre>";
        print_r($response->json());
    }
}
