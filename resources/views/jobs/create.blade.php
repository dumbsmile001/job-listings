<x-layout>
    <x-page-heading>Create a Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs/create">
        <x-forms.input label="Title: " name="title" placeholder="..."/>
        <x-forms.input label="Salary: " name="salary" placeholder="..."/>
        <x-forms.input label="Location: " name="location" placeholder="..."/>

        <x-forms.select label="Schedule:" name="schedule">
            <option value="">Part-time</option>
            <option value="">Full-time</option>
        </x-forms.select>

        <x-forms.input label="URL: " name="url" placeholder="..."/>
        <x-forms.check-box label="Feature(Costs extra)" name="featured"/>

        <x-forms.divider />

        <x-forms.input label="Tags: " name="tags" placeholder="..."/>

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>