<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return view('menu');
    }

    public function admin_index()
    {
        $dishes = Dish::paginate(12);
        return view('admin.menu.index', compact('dishes'));
    }

    public function create()
    {
        return view('admin.menu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $dish = new Dish();
        $dish->name = $request->name;
        $dish->price = $request->price;

        if ($request->hasFile('photo')) {
            $dish->photo = $request->file('photo')->store('photos', 'public');
        }

        $dish->save();

        return redirect()->route('admin.menu')->with('success', 'Блюдо успешно добавлено!');
    }
    public function destroy(Dish $dish)
    {
        if ($dish->photo) {
            // Удаление фото с диска
            \Storage::disk('public')->delete($dish->photo);
        }

        $dish->delete();

        return redirect()->route('admin.menu')->with('success', 'Блюдо успешно удалено!');
    }

}
