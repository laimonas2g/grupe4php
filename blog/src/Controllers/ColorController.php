<?php

namespace Bebro\Blogas\Controllers;

use Bebro\Blogas\App;
use Bebro\Blogas\Models\Box;
use Bebro\Blogas\Services\Auth;

class ColorController
{
    public function index()
    {
        $colorName = $_SESSION['colorName'] ?? '';
        $colorHex = $_SESSION['colorHex'] ?? '';
        unset($_SESSION['colorName']);
        unset($_SESSION['colorHex']);

        return App::view('color/index', [
            'colorName' => $colorName,
            'colorHex' => $colorHex,
            'title' => 'Color API'
        ]);
    }

    public function getName()
    {
        $colorHex = $_POST['color_hex'] ?? '';

        $_SESSION['colorHex'] = $colorHex;

        // GET https://www.thecolorapi.com/id?hex=0047AB

        $apiUrl = "https://www.thecolorapi.com/id?hex=" . ltrim($colorHex, '#');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch); // svarbu - čia vyksta kreipimasis į API, tada laukiamas atsakymas ir tik tada gauname duomenis
        // laukiame...
        // laukiame...
        curl_close($ch);

        $data = json_decode($response, true);

        if (isset($data['name']['value'])) {
            $_SESSION['colorName'] = $data['name']['value'];
        } else {
            $_SESSION['colorName'] = 'Unknown';
        }

        return App::redirect('color');

    }

}