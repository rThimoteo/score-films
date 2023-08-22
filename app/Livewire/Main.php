<?php
 
namespace App\Livewire;
 
use Livewire\Component;
 
class Main extends Component
{ 
  public $items = [
    [
      'id' => 1,
      'name' => 'Tales of Arise',
      'img_url' => 'https://cdn.mobygames.com/covers/10469189-tales-of-arise-xbox-one-front-cover.jpg',
      'banner_url' => 'https://image.api.playstation.com/vulcan/img/rnd/202107/2619/yPeeCcgsZ1pKxs2MHadzBGkt.png'
    ],
    [
      'id' => 2,
      'name' => 'Tales of Berseria',
      'img_url' => 'https://upload.wikimedia.org/wikipedia/en/thumb/5/5a/Tales_of_Berseria_cover.jpg/220px-Tales_of_Berseria_cover.jpg',
      'banner_url' => 'https://images.greenmangaming.com/45f2778db2df44ce854b755b1b087fa0/b683a004c2f54edeaecc982d9b72d6f7.jpg'
    ]
  ];
    public function render()
    {
        return view('livewire.main');
    }
}