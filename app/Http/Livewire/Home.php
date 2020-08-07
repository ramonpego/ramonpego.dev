<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Home extends Component
{
    public $search;

//    protected $updatesQueryString = ['search'];
    public function mount(){
            $this->search = request()->query('search', $this->search);
//        $this->posts = Post::query()->where('title','like','%'.$this->search.'%')->get();
    }
//    public function render()
//    {
//        return view('livewire.home',['posts'=>$this->posts]);
//    }

    public function render()
    {
        return view('livewire.posts', [
            'posts' => Post::query()->where('title', 'like', '%'.$this->search.'%')->get(),
        ]);
    }

    public function remove($post_id){
        $post = Post::query()->findOrFail($post_id);
        $post->delete();
    }


}
