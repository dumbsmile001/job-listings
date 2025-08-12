<x-layout>
    <x-page-heading>Results</x-page-heading>
    <div class="mt-3 space-y-6">
        @foreach ($jobs as $job)
            <x-job-card-expanded :$job />
        @endforeach
    </div>
</x-layout>