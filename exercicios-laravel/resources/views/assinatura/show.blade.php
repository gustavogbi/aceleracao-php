<p>Quantidade de assinaturas: {{ $assinatura->qnt_assinaturas }} </p>
<p>Assinatura Padrão: {{ $assinatura->assinatura_padrao }} </p>
<p>Nº de vezes usada: {{ $assinatura->vezes_usada }} </p>
<form action="{{route('assinaturas.destroy', $assinatura->id)}}" method="POST">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button>APAGAR</button>
</form>
<hr>
<a href="{{route('assinatura.index')}}"><button><< VOLTAR</button></a>
