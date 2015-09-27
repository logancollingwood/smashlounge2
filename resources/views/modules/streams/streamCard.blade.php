<div class='streamUnit'>
  <div class='streamTitle'>
    <a href='{{ $stream["channel"]["url"] }}' class='theme'>

      {{ $stream['channel']['status'] }}
    </a>
  </div>

  <div class='streamer'>

    <img class='streamImg' src='{{ $stream["channel"]["logo"] }}'/>

    <a class='streamerText' href='//www.twitch.tv/{{ $stream["channel"]["display_name"] }}'>
      {{ $stream["channel"]["display_name"] }}
    </a>
  </div>

  <div class='streamDetails'>
    <div class='viewers'>viewers: {{ $stream["viewers"] }} </div>
    <div class='streamGame'>
      @if (strcmp($stream['channel']['game'], "Super Smash Bros. Melee") == 0)
        melee
      @elseif (strcmp($stream['channel']['game'], "Super Smash Bros. for Wii U") == 0)
        sm4sh
      @elseif (strcmp($stream['channel']['game'], "Project M") == 0)
        pm
      @elseif (strcmp($stream['channel']['game'], "Smash Bros 64") == 0)
        64
      @elseif (strcmp($stream['channel']['game'], "Super Smash Bros. Brawl") == 0)
        brawl
      @else
        sm4sh
      @endif
    </div>
  </div>                  

  
</div>