{{-- <div>
    The only way to do great work is to love what you do. - Steve Jobs
</div> --}}


<div class="accordian mt-4" id="accordionExample">
	@php $i=1; @endphp
	@foreach($categories as $category)
	<div class="card">
		<div class="card-header" id="headingOne">
			<h2 class="mb-0">
				<button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne{{$i}}" aria-expanded="true" aria-controls="collapseOne{{$i}}" style="color:#990000;">
					{{$category->name}}
				</button>
			</h2>
		</div>

		<div id="collapseOne{{$i}}" class="collapse @if($loop->first) {{'show'}} @endif" aria-labelledby="headingOne" data-parent="#accordionExample">
			<div class="card-body">
				@foreach($category->subcategories as $subcategory)
				<a class="btn btn-link" style="color:rgba(237, 126, 111);" href="{{route('itemsbysubcategory',$subcategory->id)}}">{{$subcategory->name}}</a>
				@endforeach
			</div>
		</div>
		
	</div>
	@php $i++; @endphp
	@endforeach
</div>