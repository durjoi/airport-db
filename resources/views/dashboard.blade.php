<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Airport Name</th>
                            <th scope="col">Runway No</th>
                            <th scope="col">Runway Length</th>
                            <th scope="col">Runway Width</th>
                            <th scope="col">Surface Type</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if(!empty($items))
                                @foreach ($items as $item)
                                    <tr>
                                        <td scope="row">{{ $item->id }}</td>
                                        <td scope="row">{{ $item->runway->airport->airport_name }}</td>
                                        <td scope="row">{{ $item->runway->runway_no }}</td>
                                        <td scope="row">{{ $item->runway->runway_length }}</td>
                                        <td scope="row">{{ $item->runway->runway_width }}</td>
                                        <td scope="row">{{ $item->surface_type }}</td>
                                    </tr>
                                @endforeach
                            @endif
                          
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
