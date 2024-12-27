<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;


class Posts extends Component
{    
    public $title,$body ;
    public $posts;
    public $edit_mode=false;
    public $post_id;




    public function store(){
        $validated_data=$this->validate([
            'title'=>'required',
            'body'=>'required'
        ]);



        Post::create($validated_data);

        session()->flash('message','Post craeted succesfully');
          $this->resetInputFields();
    }

     public function edit($id){
        $this->edit_mode=true;
        $post = post::find($id);
        $this->title=$post->title;
        $this->body=$post->body;
        $this->post_id=$id;
     }

     
     public function update(){
        $validated_data=$this->validate([
            'title'=>'required',
            'body'=>'required'
        ]);

       $post= Post::find($this->post_id);
       $post->update( $validated_data);


       session()->flash('message','Post updated succesfully');
       $this->resetInputFields();
       $this->edit_mode=false;
     }
     public function cancelUpdate(){
        $this->edit_mode = false;
        $this->resetInputFields();
    }

    public function delete($id){
        $post = Post::find($id);
        $post->delete();
    }


     private function resetInputFields(){
        $this->title='';
        $this->body='';

     }





    public function render()
    {   
        $this->posts = Post::all();
        return view('livewire.posts');
    }
}
