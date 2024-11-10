<x-app-layout>
<form action="{{route('family.save')}}" method="POST">
@csrf

    @include('pages.familyplans.sub.familyplan')
</form>

@include('pages.familyplans.records.familyplanlist')

</x-app-layout>
