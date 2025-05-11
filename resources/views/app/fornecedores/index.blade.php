<h3>Fornecedores</h3>

{{-- {{ 'texto de teste' }}
<?= //'Texto de teste' ?> --}}

{{-- Comentário que será descartado pelo interpretador do blade na página --}}

@php
    // Comentario em linha
    /*
        Comentario em bloco
    */

    //echo 'texto de teste';
@endphp

{{-- @dd($fornecedores) --}}

{{-- @if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif (count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif --}}

@isset ($fornecedores)
    <h2>Com For</h2>
    @for ($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Sexo: {{ $fornecedores[$i]['sexo'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Dado não foi preenchido'}}
        <br>
        Telefone: ({{ $fornecedores[$i]['ddd'] ?? ''}}) {{ $fornecedores[$i]['telefone'] ?? '' }}
        @switch($fornecedores[$i]['ddd'])
            @case('11')
                São Paulo - SP
                @break
            @case('85')
                Fortaleza - CE
                @break
            @case('32')
                Juíz de Fora - MG
                @break
            @case('88')
                Quixeramobim - CE
                @break
            @default
                Estado não identificado
        @endswitch
        <hr>
    @endfor

    <h2>Com ForEach/ForElse</h2>

    @forelse ($fornecedores as $index => $fornecedor)
        Iteração atual: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Sexo: {{ $fornecedor['sexo'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido'}}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? ''}}) {{ $fornecedor['telefone'] ?? '' }}
        @switch($fornecedor['ddd'])
            @case('11')
                São Paulo - SP
                @break
            @case('85')
                Fortaleza - CE
                @break
            @case('32')
                Juíz de Fora - MG
                @break
            @case('88')
                Quixeramobim - CE
                @break
            @default
                Estado não identificado
        @endswitch
        <br>

        @if ($loop->first)
            primeira iteração do loop

            <br>
            Total de registros: {{ $loop->count }}
        @endif

        @if ($loop->last)
            última iteração do loop            
        @endif
        <hr>

        @empty
            Não existem fornecedores cadastrados!
    @endforelse

{{-- <br>
    @isset($fornecedores[1]['cnpj'])
        CNPJ: {{ $fornecedores[1]['cnpj'] }}       
    @endisset

    @empty($fornecedores[1]['cnpj'])
        CNPJ - Vazio
    @endempty
<br>
@endisset

@unless ($fornecedores[1]['status'] == 'S')
    Fornecedor inativo {{-- @unless executa se o retorno é falso --}}
{{-- @endunless --}}
@endisset
