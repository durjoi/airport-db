<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <h2 style="display:inline-block">Runwa</h2>
            <a href="{{ route('runway.create') }}" style="display: inline-block; float: right">Create New</a>

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
                            <th scope="col">Option</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if(!empty($items))
                                @foreach ($items as $item)
                                    <tr>
                                        <td scope="row">{{ $item->id }}</td>
                                        <td scope="row">{{ $item->airport->airport_name }}</td>
                                        <td scope="row">{{ $item->runway_no }}</td>
                                        <td scope="row">{{ $item->runway_length }}</td>
                                        <td scope="row">{{ $item->runway_width }}</td>
                                        <td>
                                            <a href="{{ route('runway.show', $item->id) }}"><i class="fas fa-eye"></i></a>
                                            <a href="{{ route('runway.edit', $item->id) }}"><i class="far fa-edit"></i></a>
                                            <form action="{{ route('runway.destroy', $item->id) }}" method="POST" style="display:inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" style="display:inline-block"><i class="fa fa-trash"></i></button>										
                                                
                                            </form>
                                        </td>
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
