<x-app-layout>

    <form action="{{ route('info.save') }}" method="POST">
        @csrf
        @include('pages.patients.labresults.sub.labresult')
    </form>
    @include('pages.patients.labresults.sub.labresultlist')

    
</x-app-layout>
