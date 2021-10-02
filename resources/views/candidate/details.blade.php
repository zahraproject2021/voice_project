<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $candidate->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="mb-8" >Activities</h2>

                    <div class="flex flex-col">
                        @foreach($candidate->activities as $activity)
                            <div class="w-2/4 mx-auto border border-solid rounded-sm border-gray-300 mb-4" >
                                <div class="bg-blue-200 p-3" >
                                    <span class="font-bold" >{{$activity->song_name}}</span>
                                    <span class="float-right" >on {{$activity->performance_date}}</span>
                                </div>
                                <div class="p-4" >
                                    @foreach($activity->scores as $score)
                                        <p class="mb-4" >{{$score->mentor->name}} : {{$score->score}}</p>
                                    @endforeach
                                </div>
                                <div>
                                    <hr>
                                    <p class="p-4 align-bottom" >Average Score : {{$activity->average_score}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
