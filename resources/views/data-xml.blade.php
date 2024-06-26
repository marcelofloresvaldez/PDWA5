<?xml version="1.0" encoding="UTF-8"?>
<data>
@foreach($registros as $item)
    <item>
        <titulo>{{ $item->titulo  }}</titulo>
        <diretor>{{ $item->diretor  }}</diretor>
        <dataReleased>{{ $item->dataReleased  }}</dataReleased>
        <duracaoMinutos>{{$item->duracaoMinutos  }}</duracaoMinutos>
        <estreia>{{ $item->estreia  }}</estreia>
    </item>
@endforeach
</data>