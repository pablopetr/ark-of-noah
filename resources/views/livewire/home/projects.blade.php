@section('title', 'Projects | Pablo Eliézer')
@section('description', 'Projects using Laravel, Livewire, PHP, NodeJS, VueJS, Python and more. You can find more on my GitHub.')

<div>
    <x-dashboard.header.description
        title="Projects"
        description="Here are some of the projects I have worked on. You can find more on my GitHub."
    />
    <ul role="list" class="grid grid-cols-1 gap-x-12 gap-y-16 sm:grid-cols-2 lg:grid-cols-3">
        @foreach($projects as $project)
            <x-dashboard.projects.card :project="$project" />
        @endforeach
    </ul>
</div>
