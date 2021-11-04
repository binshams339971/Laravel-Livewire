<div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-bold fs-5">Add Country</h5>
            <form wire:submit.prevent="submit">
                @error('continent') <span class="error text-danger">{{ $message }}</span> @enderror
              <div class="form-floating mb-3">
                <select class="form-select" aria-label="Default select example" wire:model="continent">
                    <option>Select Continent</option>
                    @foreach($continents as $continent)
                        <option value="{{$continent->id}}">{{$continent->continent_name}}</option>
                    @endforeach
                  </select>
              </div>
              @error('country') <span class="error text-danger">{{ $message }}</span> @enderror
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInputEmail" wire:model.debounce.300ms="country">
                <label for="floatingInputEmail">Country</label>
              </div>
              @error('capital') <span class="error text-danger">{{ $message }}</span> @enderror
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInputEmail" wire:model="capital">
                <label for="floatingInputEmail">Capital</label>
              </div>
              
              <div class="d-grid mb-2">
                <button class="d-inline btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Add Country 
                  <div wire:loading.delay.shortest wire:target="submit" style="margin: 0 0 5px 60px;">
                    @livewire('loading')
                  </div>
                </button> 
              </div>
            </form>            
          </div>
          
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-bold fs-5">All Countries</h5>
            <div class="form-group mb-2">
                <input type="text" class="form-control" wire:model="search" placeholder="Sarch here with Country or Capital">
            </div>
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Continent</th>
                    <th scope="col">Country</th>
                    <th scope="col">Capital</th>
                  </tr>
                </thead>
                <tbody>
                    @if($searches)
                        @foreach($searches as $search)
                            <tr>
                                <th>{{$search->id}}</th>
                                <td>{{$search->continent->continent_name}}</td>
                                <td>{{$search->country}}</td>
                                <td>{{$search->capital}}</td>
                            </tr>
                        @endforeach
                    @else
                        @foreach($countries as $country)
                            <tr>
                                <th>{{$country->id}}</th>
                                <td>{{$country->continent->continent_name}}</td>
                                <td>{{$country->country}}</td>
                                <td>{{$country->capital}}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
              </table>
            
                <div style="margin-left: 160px;">{{$countries->links()}}</div>
              
          </div>
        </div>
      </div>
    </div>
  </div>

