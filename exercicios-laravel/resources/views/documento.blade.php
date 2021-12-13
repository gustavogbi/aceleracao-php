@if (session('mensagem'))
     <p style="color:green;">{{ session('mensagem') }}</p>
@endif
<a href="{{route('criadoc')}}"><button>Criar novo documento</button></a>
<hr>
@foreach ($documentos as $documento)
<p>Titulo: {{ $documento->titulo }} </p>
<p>Tamanho: {{ $documento->tamanho }} </p>
<p>Número de assinaturas do documento: {{ $documento->assinaturas }} </p>
<p>Assinatura do responsável: {{ $documento->assinatura_do_responsavel }} </p>
<p>Qtd de páginas: {{ $documento->qtd_paginas }} </p>
<a href="{{route('exibedoc', $documento->id)}}"><button>Detalhes</button></a>
<hr>
@endforeach