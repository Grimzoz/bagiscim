
<?php

use App\Models\City;
$city = City::all();

?>
<x-app-layout>
    <x-slot name="header">Anasayfa</x-slot>
    <div class="row">
        <div class="col-md-12">
            <div class="list-group">
                @foreach ($donate as $donat)

                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{$donat->title}}</h5>
                    <small>{{$donat->created_at ? $donat->created_at->diffForHumans() : null}}</small>
                  </div>
                  <p class="mb-1">{{Str::limit($donat->description,100)}}</p>
                  <small>{{$donat->blood_type}}</small>
                  <small>{{$donat->city_name}}</small>
                </a> 
                @endforeach
              </div>
        </div>
    </div>
   <div class="mt-3">
    {{$donate->links()}}

   </div>

</x-app-layout>



<!--
<x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
    </x-jet-nav-link>
-->
