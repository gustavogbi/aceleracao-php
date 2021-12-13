<p>Titulo: {{ $documento->titulo }} </p>
<p>Tamanho: {{ $documento->tamanho }} </p>
<p>Número de assinaturas do documento: {{ $documento->assinaturas }} </p>
<p>Assinatura do responsável: {{ $documento->assinatura_do_responsavel }} </p>
<p>Qtd de páginas: {{ $documento->qtd_paginas }} </p>
<hr>
<a href="{{route('documentos')}}"><button><< VOLTAR</button></a>