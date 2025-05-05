<?php

namespace App\Livewire\Admin;

use App\Models\Tag as ModelsTag;
use Livewire\Component;
use Illuminate\Support\Str;

class Tag extends Component
{
    public $name;
    public $tags;
    
    public function mount(){
        $this->tags = ModelsTag::all();
    }
    public function submitTag(){

        $this->validate([
            'name' => 'required|string|max:255|unique:tags,name', // fixed 'require' and added field name to 'unique'
        ]);
        
        ModelsTag::updateOrCreate(
            ['name' => $this->name],
            ['slug' => Str::slug($this->name)]
        );

        $this->reset();
        session()->flash('message', 'Tag posted successfully!');
        redirect('admin/tags');
    }
    public function render()
    {
        return view('livewire.admin.tag');
    }
}
