<x-layout heading="Job listings">
    
@foreach ($jobs as $job)

<ul>

<li>
    <a href="/jobs/3">
        <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
    </a>   
</li>
    @endforeach
</ul>
</x-layout>