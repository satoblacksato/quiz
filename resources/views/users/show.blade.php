<x-app-layout>
	<x-slot name="header">
		<div class="flex justify-between px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
			<h2 class="text-3xl font-bold leading-tight text-gray-900">
				@lang('labels.users')
			</h2>
		</div>
	</x-slot>

	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="mt-10 sm:mt-0">
				<div class="md:grid md:grid-cols-3 md:gap-6">
					<div class="md:col-span-1">
						<div class="px-4 sm:px-0">
							<h3 class="text-lg font-medium leading-6 text-gray-900">@lang('labels.users')</h3>
							<p class="mt-1 text-sm text-gray-600">
								@lang('labels.users_legend')
							</p>
						</div>
					</div>
					<div class="mt-5 md:mt-0 md:col-span-2">
							<div class="shadow overflow-hidden sm:rounded-md">
								<div class="px-4 py-5 bg-white sm:p-6">

									<div class="grid grid-cols-6 gap-6">

										<div class="col-span-6 sm:col-span-3">
											<label class="font-bold block text-sm font-medium text-gray-700">{{__('labels.name')}}
											</label>
											<span class="mt-1 focus:ring-indigo-500">{{$user->name}}</span>
										</div>
										<div class="col-span-6 sm:col-span-3">
											<label class="font-bold block text-sm font-medium text-gray-700">{{__('labels.email')}}
											</label>
											<span class="mt-1 focus:ring-indigo-500">{{$user->email}}</span>
										</div>
<div class="col-span-6 sm:col-span-3">
											<label class="font-bold block text-sm font-medium text-gray-700">{{__('labels.nui')}}
											</label>
											<span class="mt-1 focus:ring-indigo-500">{{$user->nui}}</span>
										</div>
<div class="col-span-6 sm:col-span-3">
											<label class="font-bold block text-sm font-medium text-gray-700">{{__('labels.phone')}}
											</label>
											<span class="mt-1 focus:ring-indigo-500">{{$user->phone}}</span>
										</div>
										<div class="col-span-6 sm:col-span-3">
											<label class="font-bold block text-sm font-medium text-gray-700">{{__('labels.birthdate')}}
											</label>
											<span class="mt-1 focus:ring-indigo-500">{{$user->birthdate}}</span>
										</div>
										<div class="col-span-6 sm:col-span-3">
											<label class="font-bold block text-sm font-medium text-gray-700">{{__('labels.country_id')}}
											</label>
											<span class="mt-1 focus:ring-indigo-500">{{optional(optional(optional($user->city)->state)->country)->description}}</span>
										</div>
										<div class="col-span-6 sm:col-span-3">
											<label class="font-bold block text-sm font-medium text-gray-700">{{__('labels.country_id')}}
											</label>
											<span class="mt-1 focus:ring-indigo-500">{{optional(optional(optional($user->city)->state)->country)->description}}</span>
										</div>
										<div class="col-span-6 sm:col-span-3">
											<label class="font-bold block text-sm font-medium text-gray-700">{{__('labels.state_id')}}
											</label>
											<span class="mt-1 focus:ring-indigo-500">{{optional(optional($user->city)->state)->description}}</span>
										</div>

									<div class="col-span-6 sm:col-span-3">
											<label class="font-bold block text-sm font-medium text-gray-700">{{__('labels.city_id')}}
											</label>
											<span class="mt-1 focus:ring-indigo-500">{{optional($user->city)->description}}</span>
										</div>


									</div>
								</div>

							</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	@push('scripts')
		<script>
            document.getElementById("country_id").addEventListener('change', function () {
                resolveDependenciesSelect('/dependencies/states/' + this.value,'state_id')
                document.getElementById('city_id').innerHTML = '<option>- Select one item -</option>'
            });
            document.getElementById("state_id").addEventListener('change', function () {
                resolveDependenciesSelect('/dependencies/cities/' + this.value,'city_id')
            });
		</script>
	@endpush
</x-app-layout>