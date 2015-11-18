<div class='tab-pane' id='technique'>
    <table class="table">
      	<tr>
            <th>Technique Name</th>
            <th>Description</th>
            <th>SSBwiki</th>
            <th>Approve</th>
            <th>Deny</th>
      	</tr>
        @foreach ($data as $row)
            <tr class="submission" data-id="{{ $row->id }}">
              <td>
                {{ $row->name }}
              </td>
              <td>
                {{ $row->description }}
              </td>
              <td>
                {{ $row->ssbwiki }}

              </td>
              
              <td><a class="approve-link" href="#"><i class="fa fa-check-circle fa-3x"></i></a></td>
              <td><a class="delete-link" href="#"><i class="fa fa-times-circle fa-3x"></i></a></td>
            </tr>
        @endforeach
  	</table>

  	
</div>