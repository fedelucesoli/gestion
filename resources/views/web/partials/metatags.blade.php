
<meta property="og:title" content="{{$item->title}}"/>
<meta property="og:type" content="article"/>
<meta property="og:article:modified_time " content="{{$item->updated_at}}"/>
<meta property="og:article:section " content="{{$item->categoria}}"/>

<meta property="og:url" content="{{url()->current()}}"/>

<meta property="og:image" content="{{$item->images->first()}}"/>

<meta property="og:site_name" content="Obras en Lobos"/>

<meta property="fb:admins" content="USER_ID"/>
<meta property="og:description" content="{{$item->descripcion}}"/>
