<x-app-layout>
    <form action="{{route('healthoffice.save')}}" method="POST">
        @csrf
        @include('pages.healthoffices.sub.healthoffice')
    </form>

    @include('pages.healthoffices.records.healthofficelist')

</x-app-layout>
