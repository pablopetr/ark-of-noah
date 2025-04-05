@section('title', 'Pablo Eliézer | Personal Website')
@section('description', 'Personal website of Pablo Eliézer. Software engineer with a passion for building web applications. I love to learn new technologies and share my knowledge with others.')

<div>
    <x-dashboard.header.description
        title="Pablo Eliezer"
        description="I am a software engineer with a passion for building web applications. I love to learn new technologies and share my knowledge with others."
        links="true"
        photo="true"
    />

    <livewire:home.articles />
</div>
