<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        
        if ($item) {

            DB::table('user_item')->where('item_id', $id)->delete();

            DB::table('item_genre')->where('item_id', $id)->delete();

            $item->delete();

            return redirect()->route('home');
        }
    }
}
