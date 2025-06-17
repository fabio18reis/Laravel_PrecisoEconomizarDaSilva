{{-- Setup data for datatables --}}
@php
$heads = [
    'ID',
    ['label' => 'Descrição', 'width' => 50],
    ['label' => 'Valor', 'width' => 15],
    ['label' => 'Data', 'width' => 15],
    ['label' => 'Actions', 'no-export' => true, 'width' => 510],
];

$btnEdit = '<button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                <i class="fa fa-lg fa-fw fa-pen"></i>
            </button>';
$btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                  <i class="fa fa-lg fa-fw fa-trash"></i>
              </button>';
$btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                   <i class="fa fa-lg fa-fw fa-eye"></i>
               </button>';


@endphp

{{-- Minimal example / fill data using the component slot --}}
<x-adminlte-datatable id="table2" :heads="$heads">
    @foreach($gastos as $gasto)
        <tr>
        <td> {{$gasto->id}} </td>
        <td> {{$gasto->descricao}} </td>
        <td>R${{$gasto->valor}} </td>
        <td> {{ \Carbon\Carbon::parse($gasto->data)->format('d/m/Y') }}</td>
        <Td>{!!$btnEdit!!}{!!$btnDelete!!}{!!$btnDetails!!}</Td>
        </tr>
    @endforeach
</x-adminlte-datatable>

