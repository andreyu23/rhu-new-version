<x-app-layout>

    <form action="{{route('covid.save')}}" method="POST">

        @csrf
        @include('pages.covidvax.sub.covid')
    </form>

    @include('pages.covidvax.records.covidlist')

</x-app-layout>
