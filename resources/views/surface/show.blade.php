<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Airports') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('surface.update', $item->id) }}" method="POST">
                        <div class="form-group">
                            <label for="">Airport - Runway No</label>
                            <select class="form-control" name="runway_id" id="" disabled>
                                    <option value="">{{ $item->runway->airport->airport_name }} - {{ $item->runway->runway_no }}</option>
                            </select>
                          </div>

                        <div class="form-group">
                          <label for="">surface_type</label>
                          <input type="text" name="surface_type" class="form-control" value="{{ $item->surface_type }}" readonly>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
