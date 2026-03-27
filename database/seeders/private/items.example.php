<?php

use App\Models\Status;

return [
    [
        'name' => 'Example Item',
        'description' => 'Optional description',
        'type_handler' => 'movie',
        'score' => 10,
        'date' => '2000-01-01',
        'status' => Status::where('handler', 'done')->first()->id,
        'img_url' => 'https://example.com/image.jpg',
    ],
];
