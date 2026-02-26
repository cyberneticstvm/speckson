<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WebController extends Controller
{
    protected $open_api_key;

    public function __construct()
    {
        $this->open_api_key = config('myconfig.openai.key');
    }
    function index()
    {
        $title = "Speckson | Premium Eye Wear";
        $description = "";
        $keywords = "";
        $genderText = "male";
        $imageContents = file_get_contents('https://www.speckson.com/public/assets/images/product/2.png');
        if (!$imageContents) {
            return response()->json(['error' => 'Unable to download image'], 400);
        }
        $tempPath = storage_path('app/temp_specs.png');
        file_put_contents($tempPath, $imageContents);
        /*$imageBase64 = base64_encode(file_get_contents('https://www.speckson.com/public/assets/images/product/2.png'));*/
        $genderText = 'male'
            ? "a realistic handsome male model"
            : "a realistic beautiful female model";
        $prompt = "Create a photorealistic portrait of $genderText wearing the exact eyeglasses shown in the reference image. The glasses design, frame shape, color, and size must match exactly.
        Must have Studio lighting, white background, ecommerce photography style, and Front-facing pose. The eyeglasses must remain unchanged from the reference. Do not redesign or modify the frame. Keep frame proportions identical. Professional product photography, Natural skin tone, Soft shadows, and Sharp focus.";
        /*$response = Http::withToken($this->open_api_key)->attach(
            'image',
            fopen($tempPath, 'r'),
            'temp_specs.png'
        )->post('https://api.openai.com/v1/images/edits', [
            'model' => 'gpt-image-1',
            'prompt' => $prompt,
            'size' => '1024x1024'
        ]);*/
        //unlink($tempPath);
        /*if ($response->failed()) {
            return response()->json([
                'error' => $response()->json()
            ], 500);
        }
        $img = response()->json([
            'generated_image' => $response->json()['data'][0]['url']
        ]);*/
        return view('index', compact('title', 'description', 'keywords'));
    }
}
