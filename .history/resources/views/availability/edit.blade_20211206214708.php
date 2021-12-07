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
                        <option value="08:00:00">08:00:00</option>
                        <option value="09:00:00">09:00:00</option>
                        <option value="10:00:00">10:00:00</option>
                        <option value="11:00:00">11:00:00</option>
                        <option value="12:00:00">12:00:00</option>
                        <option value="13:00:00">13:00:00</option>
                        <option value="14:00:00">14:00:00</option>
                        <option value="15:00:00">15:00:00</option>
                        <option value="16:00:00">16:00:00</option>
                        <option value="17:00:00">17:00:00</option>
                        <option value="18:00:00">18:00:00</option>
                        <option value="19:00:00">19:00:00</option>
                        <option value="20:00:00">20:00:00</option>
                    </select>    
                </td>
                
                <td>
                    <label for="{{$day}}_end"> End Time: </label> 
                    <select id="{{$day}}_end" name="{{$day}}_end">
                        <option value="">N/A</option>
                        <option value="08:00:00">08:00:00</option>
                        <option value="09:00:00">09:00:00</option>
                        <option value="10:00:00">10:00:00</option>
                        <option value="11:00:00">11:00:00</option>
                        <option value="12:00:00">12:00:00</option>
                        <option value="13:00:00">13:00:00</option>
                        <option value="14:00:00">14:00:00</option>
                        <option value="15:00:00">15:00:00</option>
                        <option value="16:00:00">16:00:00</option>
                        <option value="17:00:00">17:00:00</option>
                        <option value="18:00:00">18:00:00</option>
                        <option value="19:00:00">19:00:00</option>
                        <option value="20:00:00">20:00:00</option>
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