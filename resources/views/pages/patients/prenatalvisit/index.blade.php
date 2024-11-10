<x-app-layout>

<form action="{{ route('info.save')}} " method="POST">
    @csrf
    @include('pages.patients.prenatalvisit.sub.prenatalform')
</form>
<hr>
@include('pages.patients.prenatalvisit.sub.prenataltable')

</x-app-layout>

