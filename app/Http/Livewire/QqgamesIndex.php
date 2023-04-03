<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;

class QqgamesIndex extends Component
{
    public $search;
    protected $queryString = ['search'];

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }
    public function render()
    {

        return view('livewire.qqgames-index', [
            'news' => News::latest()->get(),
            'allnews' => $this->search === null ? News::latest()->paginate(6) : News::where('title', 'like', '%' . $this->search . '%')->paginate(6),
        ]);
    }
}
