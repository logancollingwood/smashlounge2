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
  	</table>
    @foreach ($data as $row)
            <tr class="submission" data-id="{{ $row->id }}">
              <td>
                {{ $row->name }}
              </td>
              <td>
                {{ $row->fb }}
              </td>
              <td>
                {{ $row->lat }}, {{ $row->long }}
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
</div>