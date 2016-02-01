<div class='tab-pane' id='group'>
    <table class="table">
      	<tr>
            <th>Group Name</th>
            <th>Facebook</th>
            <th>Lat, Long</th>
            <th>Region</th>
            <th>Game</th>
            <th>Approve</th>
            <th>Deny</th>
      	</tr>
        @foreach ($data as $row)
         
        <tr class="submission" data-id="{{ $row->id }}">
          <td>
            {{ $row->name }}
          </td>
          <td>
            <a href="{{ $row->facebook }}"> facebook </a>
          </td>
          <td>
            <img src="http://maps.googleapis.com/maps/api/staticmap?center={{$row->latitude}},{{$row->longitude}}&zoom=1&size=100x100&markers=color:blue%7Clabel:S%7C{{$row->latitude}},{{$row->longitude}}">
            {{ $row->latitude }}, {{ $row->longitude }}
          </td>
          <td>
            {{ $row->region }}
          </td>
          <td>
            {{ $row->game }}
          </td>
          
          <td><a class="approve-link" href="#"><i class="fa fa-check-circle fa-3x"></i></a></td>
          <td><a class="delete-link" href="#"><i class="fa fa-times-circle fa-3x"></i></a></td>
        </tr>
    @endforeach
  	</table>
</div>