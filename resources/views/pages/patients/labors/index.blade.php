<x-app-layout>
<form action="{{route('labor.save')}}" method="POST">
    @csrf
    @include('pages.labors.sub.labor')

</form>

@include('pages.labors.records.laborlist')
</x-app-layout>
