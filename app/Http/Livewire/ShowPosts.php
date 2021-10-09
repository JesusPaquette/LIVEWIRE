<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Posts;
class ShowPosts extends Component
{
    public Post $post;
 
    public function render()
    {
     
        return view('livewire.show-posts' , ['posts' => Posts::all()]);
    }
}
