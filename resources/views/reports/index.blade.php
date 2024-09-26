@extends('layouts.app')
@section('content')
@if(count($reports)>0)
<table class="table table-striped" border=5> 

    <thead>
        <th>Report Title</th>
        <th>Report Description</th>
        <th>Report Priority</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach($reports as $report)
        <tr>
            <td>{{$report->title}}</td>
            <td>{{$report->description}}</td>
            <td>{{$report->priority}}</td>
            <td><a href="/reports/{{$report->id}}" class="btn btn-success">DETAIL</td>
            <td><a href="/reports/{{$report->id}}/edit" class="btn btn-primary">EDIT</td>
            <td><form action="/reports/{{$report->id}}" method ="POST">
                @csrf
                @method('DELETE')<input type="submit" value="DELETE" class="btn btn-danger" onclick="return confirm('Are You Sure want to DELETE?')">
            
            </form></td>


        </tr>
        
        </tr>
        @endforeach
    </tbody>
</table>
@else
No Data
@endif
@endsection