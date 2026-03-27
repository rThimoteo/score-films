<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\Type;
use Database\Seeders\Concerns\LoadsOptionalSeederData;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    use LoadsOptionalSeederData;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->seedItems();
    }

    private function seedItems(): void
    {
        $items = $this->loadOptionalSeederData('items.php');

        foreach ($items as $item) {
            if (! isset($item['name'], $item['type_handler'])) {
                continue;
            }

            $typeId = Type::where('handler', $item['type_handler'])->value('id');

            if (! $typeId) {
                continue;
            }

            $createdItem = Item::firstOrCreate([
                'name' => $item['name'],
                'type_id' => $typeId,
                'img_url' => $item['img_url']
            ]);

            if ($createdItem) {
                DB::table('user_item')->insert([
                    'user_id' => 1,
                    'item_id' => $createdItem->id,
                    'score' => $item['score'],
                    'status_id' => $item['status'],
                    'date' => $item['date'],
                ]);
            }
        }
    }
}
