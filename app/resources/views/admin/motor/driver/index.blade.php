<div class="row">
	<div class="col-12 py-3">
		<button class="btn btn-primary motor-control" data-url="{{route('motordrivers.create')}}">
			Добавить новый тип привода
		</button>
	</div>
</div>

@if(isset($drivers) && $drivers->count())

<table class="table">
	<thead class="thead-dark">
		<tr>
			<th></th>
			<th>Название</th>
			<th>Абривиатура</th>
		</tr>
	</thead>
	@foreach($drivers as $itemDriver)
	<tr>
		<td style="width: 110px;">
			
			<button 
				data-url="{{route('motordrivers.edit',$itemDriver)}}" 
				class="btn btn-primary fa fa-pencil-square-o motor-control">
			</button>

			<button type="button" class="btn btn-danger fa fa-close"></button>
		</td>
		<td>{{$itemDriver->full_name}}</td>
		<td>{{$itemDriver->small_name}}</td>
	</tr>
	@endforeach

</table>
@endif