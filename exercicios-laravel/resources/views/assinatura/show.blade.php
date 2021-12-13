<p>Quantidade de assinaturas: {{ $assinatura->qnt_assinaturas }} </p>
<p>Assinatura Padrão: {{ $assinatura->assinatura_padrao }} </p>
<p>Nº de vezes usada: {{ $assinatura->vezes_usada }} </p>
<hr>
<a href="{{route('assinatura.index')}}"><button><< VOLTAR</button></a>
