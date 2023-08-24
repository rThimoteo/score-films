<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function destroy($id)
{
    $item = Item::findOrFail($id);
    $item->delete();

    return redirect()->route('home')->with('success', 'Item excluído com sucesso.');
}

}
