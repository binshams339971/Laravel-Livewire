<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Continent;
use App\Models\Country;
use Livewire\WithPagination;


class Countries extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $continent, $country, $capital;

    protected $rules = [
        'continent' => 'required',
        'country' => 'required|min:3',
        'capital' => 'required|min:3',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit(){
        sleep(1);
        $this->validate([
            'continent' => 'required',
            'country' => 'required|min:3',
            'capital' => 'required|min:3',
        ]);
        $country = Country::create([
            'continent_id'=>$this->continent,
            'country'=>$this->country,
            'capital'=>$this->capital
        ]);
        $this->continent = "";
        $this->country = "";
        $this->capital = "";
    }

    public $search="";
 
    protected $queryString = [
        'search',
        'search' => ['except' => '']
    ];

    public function render()
    {
        return view('livewire.countries',[
            'continents'=> Continent::all(),
            'countries'=> Country::orderBy('id', 'DESC')->paginate(5),
            'searches' => Country::where('country', 'like', '%'.$this->search.'%')
                                ->orWhere('capital', 'like', '%'.$this->search.'%')->orderBy('id', 'DESC')->paginate(5),
        ]);
    }
}
