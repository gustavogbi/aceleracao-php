<h1>Cadastrar nova assinatura</h1>
<hr>
@if($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <p style="color: red"> {{$error}} </p>
        @endforeach
    </div>
@endif
<form action="{{route('assinaturas.store')}}" method="post">
    <input value="{{csrf_token()}}" type="hidden" name="_token">
    <label for="qtd_assinaturas">Qtd Assinaturas</label>
    <input type="number" name="qnt_assinaturas" value="{{ old('qnt_assinaturas') }}"><br>
    <label for="assinatura_padrao">Assinatura Padrão</label>
    <input type="text" name="assinatura_padrao" value="{{ old('assinatura_padrao') }}"><br>
    <label for="vezes_usada">Vezes usada</label>
    <input type="number" name="vezes_usada" value="{{ old('vezes_usada') }}"><br>
    <button type="submit"> Enviar </button>
</form>