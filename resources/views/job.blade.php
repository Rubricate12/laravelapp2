<x-layout>
    <x-slot:heading>
        Jobs Listing
    </x-slot:heading>
    <h2>{{ $job['title'] }}</h2>
    <p>
        this job pays {{ $job['salary'] }} per year
    </p>
    
</x-layout>