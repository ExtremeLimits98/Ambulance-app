<!-- <div> {{print_r($doctors)}} </div> -->

<table border="1px solid black">
<tr>
    <th class="classes">First Name</th>
    <th>Last name</th>
    <th class="classes">Specialisation Type</th>
    <!-- <th>Location</th>
    <th>JMBG</th>
    <th>Note</th> -->
    <th>Update</th>
    <th>Delete</th>
</tr>
@if ($doctors)
   @foreach($doctors as $doctor)
    <tr>
        <td>{{ $doctor->first_name }}</td>
        <td> {{ $doctor->last_name }}</td>
        <td>{{ $doctor->name }}</td>
        <!-- <td> {{ $doctor->name }}</td>
        <td> {{ $doctor->jmbg }}</td>
        <td>{{ $doctor->note }}</td> -->
        <th><a href="{{ route('doctors.edit', $doctor) }}">edit</a></th>
        <th><form action="{{ route('doctors.destroy', $doctor->id) }}" method="DELETE">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button>X</button>
            </form>
        </th>
    </tr>
   @endforeach
@endif
</table>




<!-- <table border="1px solid black">
<tr>
    <th class="classes">First Name</th>
    <th>Last name</th>
    <th>Location</th>
    <th>JMBG</th>
    <th>Note</th>
</tr>
</table> -->

<!-- @php
            var_dump($doctors);
        @endphp -->
