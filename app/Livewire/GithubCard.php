<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Expr\Cast\Object_;

class GithubCard extends Component
{

    public Object $githubDatas;

    protected function getGithubUserData(String $username)
    {
        $response = Http::get("https://api.github.com/users/$username");
        if ($response->successful()) {
            $this->githubDatas = $response->object();
        }
    }

    public function render()
    {
        $this->getGithubUserData('miteshviras329');
        return view('livewire.github-card');
    }
}
