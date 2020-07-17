@extends('layouts.app')
@section('header')
<script
src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous">

</script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
crossorigin="anonymous"></script>

<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">

<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>

@endsection
@section('content')

<div class="container">
<table class="table table-bordered  " id="ficheTable">
    <thead class="table-header">
    <tr>
        <th>Code</th>
        <th>N° Dossier Patient </th>
        <th>Medicaments </th>
        <th>Effets</th>
        <th>Apparition de l'effet</th>
        <th width="100px">Action</th>
    </tr>
    </thead>
    <tbody>

    </tbody>
</table>
</div>

@endsection
@section('footer_script')
<script src="">
    var table = $('#ficheTable').DataTable({

"processing": true,
"serverSide": true,

"ajax": "{{route('patient.index')}}",

columns: [
    // {data: 'DT_RowIndex', name: 'DT_RowIndex'},
    {data: 'numero', name: 'numero'},
    {data: 'numero_dossier', name: 'numero_dossier'},
    {data: 'medicament', name: 'medicament'},
    {data: 'effet', name: 'effet'},
    {data: 'action', name: 'action', orderable: false, searchable: false},
]
});
</script>
@endsection
