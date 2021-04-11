<div class="{{$attributes->get('class')}}">
    <!-- Component for forms custom -->
    <label for="{{$name}}" class="block text-sm font-medium text-gray-700">{{$label}}
        @if($attributes->get('required',false)) <span class="text-red-300">*</span> @endif
    </label>
    <select  @if($attributes->get('required',false)) required="required" @endif name="{{$name}}" id="{{$name}}" autocomplete="given-name"
           class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        <option value=''>@lang('labels.none_value')</option>
        @foreach($collect as $item)
            <option value='{{ $item->id }}' @if (old($name)==$item->id) selected @endif>
                {{ $item->description }}
            </option>
        @endforeach
    </select>

    @error($name)
    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>