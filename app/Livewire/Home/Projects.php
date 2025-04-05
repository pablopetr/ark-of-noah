<?php

namespace App\Livewire\Home;

use App\Models\Project;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Projects extends Component
{
    public function render(): View
    {
        $projects = Project::query()->paginate(12);

        return view('livewire.home.projects', [
            'projects' => $projects,
        ]);
    }
}
