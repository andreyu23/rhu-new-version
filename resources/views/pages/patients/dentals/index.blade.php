<x-app-layout>

<form action="{{route('dental.save')}}" method="POST">
    @csrf
    @include('pages.dentals.sub.dental')
</form>
@include('pages.dentals.records.dentalList')


</x-app-layout>
