<x-app-layout>
	<x-slot name="header">
		<div class="flex justify-between px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
			<h2 class="text-3xl font-bold leading-tight text-gray-900">
				@lang('labels.users')
			</h2>
			<a
				href="{{ route('users.index') }}"
				class="px-4 py-2 text-sm text-white bg-red-800 rounded-md">
				@lang('labels.return')
			</a>
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
						<form action="{{route('users.store')}}" method="POST">
							@csrf
							<div class="shadow overflow-hidden sm:rounded-md">
								<div class="px-4 py-5 bg-white sm:p-6">

									<div class="grid grid-cols-6 gap-6">
										<x-forms.label-with-input :required="true" class="col-span-6 sm:col-span-3"
																  name="name" :label="__('labels.name')"/>
										<x-forms.label-with-input :required="true" class="col-span-6 sm:col-span-3"
																  name="email" type="email" :label="__('labels.email')"/>
										<x-forms.label-with-input :required="true" class="col-span-6 sm:col-span-3"
																  name="nui" :label="__('labels.nui')"/>
										<x-forms.label-with-input :required="false" class="col-span-6 sm:col-span-3"
																  name="phone" :label="__('labels.phone')"/>
										<x-forms.label-with-input :required="true" class="col-span-6 sm:col-span-3"
																  type="date" name="birthdate"
																  :label="__('labels.birthdate')"/>
										<x-forms.label-with-input :required="true" class="col-span-6 sm:col-span-3"
																  type="password" name="password"
																  :label="__('labels.password')"/>
										<x-forms.label-with-input :required="true" class="col-span-6 sm:col-span-3"
																  type="password" name="password_confirmation"
																  :label="__('labels.password_confirmation')"/>
										<x-forms.label-with-select :required="false" class="col-span-6 sm:col-span-3"
																   :collect="\App\Models\Locations\Country::all()"
																   name="country_id" :label="__('labels.country_id')"/>
										<x-forms.label-with-select :required="false" class="col-span-6 sm:col-span-3"
																   name="state_id" :label="__('labels.state_id')"
																   :collect="\App\Models\Locations\State::where('country_id',old('country_id'))->get()"/>
										<x-forms.label-with-select :required="true" class="col-span-6 sm:col-span-3"
																   name="city_id" :label="__('labels.city_id')"
																   :collect="\App\Models\Locations\City::where('state_id',old('state_id'))->get()"/>
									</div>
								</div>
								<div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
									<button type="submit"
											class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
										@lang('labels.save')
									</button>
								</div>
							</div>
						</form>
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