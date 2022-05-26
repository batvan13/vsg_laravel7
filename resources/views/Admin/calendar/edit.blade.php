<!doctype html>
<html lang="en">
<head>
    <style>
        .ui-datepicker td.ui-state-disabled>span {
            background: #ff6633;
        }
        .ui-datepicker td.ui-state-disabled {
            opacity: 100;
        }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <title>Calendars set</title>
</head>
<body>
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
<div class="container" >
    <div class="row">
        <div class="col-md-8 ">
            <div id="datepicker" style="margin-top: 10px;">
                <a href="{{ route('calendars.index')}}" class="btn btn-info btn-sm" >Admin panel</a>
                <table class="table"style="margin-top: 10px;" >
                    <form method="POST" action="{{route('calendars.update',[$apart->id])}}">
                        {{method_field('PATCH')}}
                        @csrf
                    <tbody>
                    <tr>
                        <td>
                            <label for="title" class="form-label">Name</label>
                            <input type="text" class="form-control" id="title"
                                   name="title" placeholder="name">
                        </td>
                        <td>
                            <label for="start" class="form-label" >Start</label>
                            <input type="date" class="form-control" id="start" name="start" >
                        </td>
                        <td>
                            <label for="end" class="form-label" >End</label>
                            <input type="date" class="form-control" id="end" name="end">
                        </td>
                        <td>
                            <label for="add" class="form-label" >Add new reservation</label>
                            <button class="btn btn-primary btn-sm" type="submit">Save&nbsp;Settings</button>
                        </td>
                    </tr>
                    </tbody>
                    </form>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 ">
            <div id="calendar-range" >
                <p>calendar-range</p>
            </div>
        </div>
    </div><hr>
    <div class="row">
        <div class="col-md-8 ">
            <div class="table-responsive">
                <table class="table  table-dark table-striped">
                    <thead>
                    <tr>
                        <th>Name Reservation</th>
                        <th>Start date</th>
                        <th>End date</th>
                        <th>delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($events as $event)
                    <tr>
                        <td>{{$event->title}}</td>
                        <th>{{$event->start}}</th>
                        <th>{{$event->end}}</th>
                        <td class="text-center">
                            <form action="{{ route('calendars.destroy', $event->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm " type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    var events = {!! json_encode($events) !!};

    events.forEach(function(part, index) {
        part.start = new Date(part.start.replace(/-/g, ',')) ;
        part.end = new Date(part.end.replace(/-/g, ',')) ;
    });
    var ranges  = events;

    $(function () {
        $("#calendar-range").datepicker({
            numberOfMonths: 3,
            beforeShowDay: function (date) {
                for (var i = 0; i < ranges.length; i++) {
                    if (date >= ranges[i].start && date <= ranges[i].end) return [false, ''];
                }
                return [true, ''];
            },
        });
    });
</script>
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>