@props(['job'])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo />
    </div>
    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-600">{{ $job->employer->name }}</a>

        <h3 class="font-bold text-lg group-hover:text-blue-600 text-xl font-bold transition-colors duration-500">{{ $job->title }}</h3>
        <p class="text-sm text-gray-600 mt-auto">Salary per Year: {{ $job->salary }}</p>
    </div>
    <div>
        @foreach ($job->tags as $tag)
            <x-tag :$tag size="small"/>
        @endforeach
    </div>
</x-panel>