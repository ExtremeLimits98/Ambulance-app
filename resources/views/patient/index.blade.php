<!-- <div> {{print_r($patients)}} </div> -->
<style>
    .this_content {
        width: 50%;
        margin: auto;
    }

    table {
        border-collapse: collapse;
        font-family: Tahoma, Geneva, sans-serif;
    }

    table th {
        padding: 15px;
    }

    table td {
        padding: 15px;
    }

    table thead th {
        background-color: grey;
        color: #ffffff;
        font-weight: bold;
        font-size: 20px;
        border: 1px solid #54585d;
    }

    table tbody td {
        color: #636363;
        border: 1px solid #dddfe1;
    }

    table tbody tr {
        background-color: #f9fafb;
    }

    .this_edit a {
        text-decoration: none;
        color: #54585d;
    }

    .this_edit a:hover {
        color: #4CAF50;
    }

    .this_delete {
        margin-top: 15px;
    }

    .this_button {
        background-color: #4CAF50;
        border: none;
        border-radius: 20px;
        padding: 15px 32px;
        text-align: center;
        display: inline-block;
        font-size: 16px;
        margin-top: 30px;
    }
    .this_button a {
        text-decoration: none;
        color: white;
    }
</style>
<div class="this_content">
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last name</th>
                <th>Location</th>
                <th>JMBG</th>
                <th>Note</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
    
        <tbody>
            @if ($patients)
            @foreach($patients as $patient)
            <tr>
                <td>{{ $patient->first_name }}</td>
                <td> {{ $patient->last_name }}</td>
                <td> {{ $patient->name }}</td>
                <td> {{ $patient->jmbg }}</td>
                <td>{{ $patient->note }}</td>
                <th class="this_edit"><a href="{{ route('patients.edit', $patient) }}">edit</a></th>
                <th class="this_delete"> 
                    <form action="{{ route('patients.destroy', $patient->id) }}" method="DELETE">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button class="this_delete">X</button>
                    </form>
                </th>
            </tr>
            @endforeach
            @endif
        </tbody>
        <tbody>
            @if ($patients)
            @foreach($patients as $patient)
            <tr>
                <td>{{ $patient->first_name }}</td>
                <td> {{ $patient->last_name }}</td>
                <td> {{ $patient->name }}</td>
                <td> {{ $patient->jmbg }}</td>
                <td>{{ $patient->note }}</td>
                <th class="this_edit"><a href="{{ route('patients.edit', $patient) }}">edit</a></th>
                <th class="this_delete"> 
                    <form action="{{ route('patients.destroy', $patient->id) }}" method="DELETE">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button class="this_delete">X</button>
                    </form>
                </th>
            </tr>
            @endforeach
            @endif
            </tbody>

            <tbody>
            @if ($patients)
            @foreach($patients as $patient)
            <tr>
                <td>{{ $patient->first_name }}</td>
                <td> {{ $patient->last_name }}</td>
                <td> {{ $patient->name }}</td>
                <td> {{ $patient->jmbg }}</td>
                <td>{{ $patient->note }}</td>
                <th class="this_edit"><a href="{{ route('patients.edit', $patient) }}">edit</a></th>
                <th class="this_delete"> 
                    <form action="{{ route('patients.destroy', $patient->id) }}" method="DELETE">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button class="this_delete">X</button>
                    </form>
                </th>
            </tr>
            @endforeach
            @endif
            </tbody>
    </table>
    <button class="this_button"><a href="{{ route('patients.create') }}">Add new</a></button>
</div>