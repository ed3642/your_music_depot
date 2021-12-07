@php
$days = [
            'Sunday',
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Friday',
            'Saturday'
        ];
@endphp

<div class="row p-0 m-0">
    <table class="table align-center col-10">
        <tbody>
            <form method="POST" action="/users/{{$user->id}}/availability">
            @csrf
            @foreach ($days as $day) 
            <tr class="text-center">
                <td>
                    {{$day}}
                </td>
                <td>
                    <label for="{{$day}}_start"> Start Time: </label> 
                    <select id="{{$day}}_start" name="{{$day}}_start">
                        <option value="">N/A</option>
                        @for ($i = 8; $i <= 20; $i++)
                            <option value="{{$i}}:00:00" {{ $availability->hasAvailability($i:00:00, $day) ? selected : null}}>{{$i}}:00:00</option>
                        @endfor    
                    </select>    
                </td>
                
                <td>
                    <label for="{{$day}}_end"> End Time: </label> 
                    <select id="{{$day}}_end" name="{{$day}}_end">
                        <option value="">N/A</option>
                        @for ($i = 8; $i <= 20; $i++)
                            <option value="{{$i}}:00:00">{{$i}}:00:00</option>
                        @endfor  
                    </select>  
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        <button id="updateButton" type="submit" class="btn btn-primary">Update Availability</button>
    </div>
    </form>
</div>