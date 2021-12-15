<h1>Cadastrar novo documento</h1>
<hr>
@if($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <p style="color: red"> {{$error}} </p>
        @endforeach
    </div>
@endif
<form action="{{route('inseredoc')}}" method="post">
    <input value="{{csrf_token()}}" type="hidden" name="_token">
    <label for="titulo">Título</label>
    <input type="text" name="titulo" value="{{ old('titulo') }}" placeholder="Digite o titulo do documento"><br>
    <label for="titulo">Tamanho</label>
    <input type="number" name="tamanho" value="{{ old('tamanho') }}"><br>
    <label for="titulo">Assinaturas</label>
    <input type="number" name="assinaturas" value="{{ old('assinaturas') }}"><br>
    <label for="titulo">Assinatura do Responsável</label>
    <input type="text" name="assinatura_do_responsavel" value="{{ old('assinatura_do_responsavel') }}"><br>
    <label for="qtd_paginas">Quantidade de páginas</label>
    <select name="qtd_paginas">
        <option value="1">1</option>
        <option value="10">10</option>
    </select><br>
    <button type="submit"> Enviar </button>
</form>