<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Http\Requests\StoreShopRequest;
use App\Http\Requests\UpdateShopRequest;
use Inertia\Inertia;
use Intervention\Image\Encoders\WebpEncoder;
use Intervention\Image\Laravel\Facades\Image;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Shop::all();

        return Inertia::render('Shop/List', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Shop/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreShopRequest $request)
    {
        sleep(2); //simuliuojame vėlavimą
        
        
        //ar yra failas
        if ($request->hasFile('image')) {
            //gauti failą
            $file = $request->file('image');
            //sukurti unikalų failo pavadinimą
            $fileName = time() . '_' . $file->getClientOriginalName();
            //nustatyti kelią kur saugosim
            $filePath = 'uploads/' . $fileName;
            //perkelti failą į nurodytą vietą (storage/app/public/uploads)
            $file->storeAs('public/uploads', $fileName);

            //sukonvertuoti į webp
            $image = Image::read(storage_path('app/public/uploads/' . $fileName));
            $image->encode(new WebpEncoder(), 90);
            $image->save(storage_path('app/public/uploads/' . pathinfo($fileName, PATHINFO_FILENAME) . '.webp'));
            //ištrinti originalų failą
            // unlink(storage_path('app/public/uploads/' . $fileName));
            //atnaujinti failo kelią į webp
            $filePath = 'uploads/' . pathinfo($fileName, PATHINFO_FILENAME) . '.webp';

        } else {
            $filePath = null; // jei nėra failo, nustatome kintamąjį kaip null
        }
        $product = Shop::create([
            ...$request->validated(),
            'image_path' => $filePath, // išsaugome failo kelią duomenų bazėje
        ]);

        return response()->json([
            'success' => true,
            'id' => $product->id,
            'message' => 'Product created successfully!'
        ], 201);
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Shop $shop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shop $shop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateShopRequest $request, Shop $shop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shop $shop)
    {
        
        sleep(2); //simuliuojame vėlavimą
        
        //DElete image from storage
        if ($shop->image_path) {
            $imagePath = storage_path('app/public/' . $shop->image_path);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // dd($shop);
                
        $shop->delete();

        return response()->json([
            'success' => true,
            'message' => 'Product deleted successfully!'
        ]);
    }
}