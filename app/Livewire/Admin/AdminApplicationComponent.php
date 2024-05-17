<?php

namespace App\Livewire\Admin;

use App\Models\Application;
use Livewire\Component;
use Livewire\WithPagination;

class AdminApplicationComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $applications = Application::paginate(12);
        return view('livewire.admin.admin-application-component',['applications'=> $applications]);
    }
}
