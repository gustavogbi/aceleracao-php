<a href="{{route('assinatura.novo')}}"><button>Criar nova assinatura</button></a>
<hr>
@if (session('mensagem'))
     <p style="color:green;">{{ session('mensagem') }}</p>
@endif
@foreach ($assinaturas as $assinatura)
<p>Quantidade de assinaturas: {{ $assinatura->qnt_assinaturas }} </p>
<p>Assinatura Padrão: {{ $assinatura->assinatura_padrao }} </p>
<p>Nº de vezes usada: {{ $assinatura->vezes_usada }} </p>
<a href="{{route('assinatura.show', $assinatura->id)}}"><button>Detalhes</button></a>
<hr>
@endforeach