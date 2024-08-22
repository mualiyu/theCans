<?php

use Livewire\Volt\Component;
use \App\Models\News;

new class extends Component {

    public $search = '';
    public $results = [];

    public function dataSearchBlogs()
    {
        if (strlen($this->search) > 2) {
            $this->results = News::where('title', 'like', '%' . $this->search . '%')
                ->orWhere('description', 'like', '%' . $this->search . '%')
                ->get();
            // $this->results = [];
        } else {
            $this->results = [];
        }
    }
}; ?>

<div>
    <div class="position-relative mb-4 mb-lg-5">
        <i class="ai-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
        <input class="form-control ps-5" type="search" placeholder="Enter keyword" wire:model="search" wire:keydown="dataSearchBlogs">

        @if(!empty($search) && !empty($results))
            <div class="dropdown-menu show w-100 mt-1">
                @if(!count($results)>0)
                       <p class="dropdown-item text text-primary flex-wrap">
                          Not Found
                        </p>
                @endif
                @foreach($results as $news)
                    <a class="dropdown-item" style="white-space: pre-line; border: solid 1px white;" href="{{route('main.single_blog', ['title'=>$news->title])}}">
                       <p class="text text-primary flex-wrap">
                           {{ $news->title }}
                        </p>
                    </a>
                    <hr class="mt-0">
                @endforeach
            </div>
        @endif
    </div>
</div>
