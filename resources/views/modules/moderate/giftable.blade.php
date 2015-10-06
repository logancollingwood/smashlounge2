<div class='tab-pane active' id='gif'>
	<table class="table table-default">
      	<tr>
	        <th>Gfycat URL</th>
	        <th>content</th>
	        <th>category</th>
	        <th>Original Source</th>
	        <th>Description</th>
	        <th>Approve</th>
	        <th>Deny</th>
      	</tr>
      	@foreach ($data as $row)
            <tr class="submission" data-id="{{ $row->id }}">
              <td>
                <a class="modal-link" href="http://www.gfycat.com/{{ $row->url }}">
                  {{ trim($row->url) }}
                </a>
              </td>
              <td style='width: 70%;'>
                <img class='gfyitem' data-expand=true data-id="{{ trim($row->url) }}"/>
              </td>
              <td>
                @if ($row->pageid == 0)
                     <p>Technique Gif</p>
                      {-- $row->techName --}
                @else
                    <p>Character Gif</p>
                    <p>{-- $row->charName --}</p>
                @endif

              </td>
              <td>{{ $row->source }}</td>
              <td>{{ $row->description }}</td>
              <td><a class="approve-link" href="#"><i class="fa fa-check-circle fa-3x"></i></a></td>
              <td><a class="delete-link" href="#"><i class="fa fa-times-circle fa-3x"></i></a></td>
            </tr>
        @endforeach
    </table>
</div>