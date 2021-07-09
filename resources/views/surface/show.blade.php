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
                    <form action="{{ route('runway.update', $item->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Airport</label>
                            <select class="form-control" name="airport_id" id="" disabled>
                                    <option >{{ $item->airport->airport_name }}</option>
                            </select>
                          </div>

                        <div class="form-group">
                          <label for="">Runway No</label>
                          <input type="text" name="runway_no" class="form-control" value="{{ $item->runway_no }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="">Runway Length</label>
                            <input type="number" name="runway_length" class="form-control" value="{{ $item->runway_length }}" readonly>
                          </div>

                        <div class="form-group">
                            <label for="">Runway Width</label>
                            <input type="number" name="runway_width" class="form-control" value="{{ $item->runway_width }}" readonly>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
