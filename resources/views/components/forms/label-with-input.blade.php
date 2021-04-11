<div class="{{$attributes->get('class')}}">
	<!-- Component for forms custom -->
	<label for="{{$name}}" class="block text-sm font-medium text-gray-700">{{$label}}
		@if($attributes->get('required',false)) <span class="text-red-300">*</span> @endif
	</label>
	<input @if($attributes->get('required',false)) required="required" @endif name="{{$name}}"
		   type="{{$attributes->get('type','text')}}" id="{{$name}}" autocomplete="given-name"
		   class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
		   value="{{old($name)}}">
	@error($name)
	<p class="mt-2 text-sm text-red-600">{{ $message }}</p>
	@enderror
</div>