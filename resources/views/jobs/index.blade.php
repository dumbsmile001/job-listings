<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's Find You a J*b</h1>
            <form action="#" class="mt-6">
                <input type="text" placeholder="I'm looking for..." class="rounded-xl bg-white/15 border border-white/10 px-5 py-4 w-full max-w-xl">
            </form>
        </section>
        <section class="pt-10">
            <x-section-heading class="mb-6">Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8">
                @foreach ($featuredJobs as $job)
                    <x-job-card :$job />
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                @foreach ($job->tags as $tag)
                    <x-tag :$tag/>
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-expanded :$job />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>