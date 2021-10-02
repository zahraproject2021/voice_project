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
                    <h2 class="mb-8" >Teams and Candidates</h2>
                        <div class="flex">
                            @foreach($user->teams as $team)
                                <div class="flex-1 border border-solid rounded-sm border-gray-300 mr-4 mb-4" >
                                    <div class="bg-gray-200 p-3" >{{$team->name}}</div>
                                    <div class="p-4" >
                                        @foreach($team->candidates as $candidate)
                                            <p class="mb-4" ><a href="/candidate/{{$candidate->id}}" class="text-blue-600" >{{$candidate->name}}</a></p>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
