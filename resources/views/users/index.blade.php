<x-app-layout>
	<x-slot name="header">
		<div class="flex justify-between px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
			<h2 class="text-3xl font-bold leading-tight text-gray-900">
				@lang('labels.users')
			</h2>
			<a
				href="{{ route('users.create') }}"
				class="px-4 py-2 text-sm text-white bg-indigo-800 rounded-md">
				@lang('labels.create_user')
			</a>
		</div>
	</x-slot>

	<div class="mx-auto max-w-8xl sm:px-6 lg:px-8">
		<div class="px-4 py-8 sm:px-0">
			<!-- This example requires Tailwind CSS v2.0+ -->
			<div class="flex flex-col">
				<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
					<div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
						<div class="w-full">
							<div>
								<form action="">
									<div class="p-5 mb-2 rounded-md shadow-md my-6 bg-indigo-50">
										<div class="grid grid-cols-2">
											<div>
												<label for="">@lang('labels.search_legend')</label>
												<input type="text" name="filter"
													   class='block w-full p-3 transition duration-150 ease-in-out form-input sm:text-sm sm:leading-5'
													   value="{{request('filter')}}"/>
											</div>
										</div>

										<div class="flex mt-4 space-x-2">
											<a
												href="{{ route('users.index') }}"
												class="px-4 py-2 text-red-500 rounded-md">
												@lang('labels.clean')
											</a>
											<button
												type="submit"
												class="px-4 py-2 text-white bg-indigo-800 rounded-md">
												@lang('labels.search')
											</button>
										</div>
									</div>
								</form>
							</div>


							<div class="bg-white shadow-md rounded my-6">
								<table class="w-full table-auto">
									<thead>
									<tr class="bg-gray-200 text-gray-600 uppercase" style="font-size: 12px">
											<x-forms.href-order-by :key="'id'" :link="route('users.index')" :label="__('labels.id')"/>
											<x-forms.href-order-by :key="'name'" :link="route('users.index')" :label="__('labels.name')"/>
											<x-forms.href-order-by :key="'email'" :link="route('users.index')" :label="__('labels.email')"/>
											<x-forms.href-order-by :key="'nui'" :link="route('users.index')" :label="__('labels.nui')"/>
											<x-forms.href-order-by :key="'phone'" :link="route('users.index')" :label="__('labels.phone')"/>
											<x-forms.href-order-by :key="'birthdate'" :link="route('users.index')" :label="__('labels.birthdate')"/>
											<x-forms.href-order-by :key="'country_id'" :link="route('users.index')" :label="__('labels.country_id')"/>
											<x-forms.href-order-by :key="'state_id'" :link="route('users.index')" :label="__('labels.state_id')"/>
											<x-forms.href-order-by :key="'city_id'" :link="route('users.index')" :label="__('labels.city_id')"/>
										<th class="p-2 text-left">&nbsp;</th>
									</tr>
									</thead>
									<tbody class="text-gray-600 text-sm font-light">
									@forelse($users as $item=> $user)
										<tr style="font-size: 12px" id="tr_{{$user->id}}" class="border-b border-gray-200 @if($item%2==0) bg-gray-50 @endif hover:bg-gray-100">
											<td class="p-2 text-left">
												{{$user->id}}
											</td>
											<td class="p-2 text-left">
												{{$user->name}}
											</td>
											<td class="p-2 text-left">
												{{$user->email}}
											</td>
											<td class="p-2 text-left">
												{{$user->nui}}
											</td>
											<td class="p-2 text-left">
												{{$user->phone}}
											</td>
											<td class="p-2 text-left">
												<span>{{$user->birthdate->format('Y-m-d')}}</span>
												<span><br/>
												<b>Age:</b> {{$user->age}}</span>
											</td>
											<td class="p-2 text-left">
												{{optional(optional(optional($user->city)->state)->country)->description}}
											</td>
											<td class="p-2 text-left">
												{{optional(optional($user->city)->state)->description}}
											</td>
											<td class="p-2 text-left">
												{{optional($user->city)->description}}
											</td>
											<td class="p-2 text-center">
												<div class="flex item-center justify-center">
													<div
														class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer">
														<button  style="display: none"  id="btEditUpdate_{{$user->id}}" class="font-bold font-medium" type="button" onclick="transformSendUpdate('{{$user->id}}')">
															✅
														</button>
														<button style="display: none" id="btEditCancel_{{$user->id}}" class="font-bold font-medium" type="button" onclick="transformCancelEdit('{{$user->id}}')">
															❌
														</button>
														<button  id="btEditTransform_{{$user->id}}" class="font-bold font-medium" type="button" onclick="transformEdit('{{$user->id}}')">
															🖊
														</button>

													</div>
													<div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
														<form action="{{ route('users.destroy', $user) }}" method="POST" onsubmit="return confirm('{{__('labels.delete_legend')}}')">
															@method('DELETE')
															@csrf
															<button class="font-bold font-medium text-red-600 hover:text-red-900" type="submit">
																🗑️
															</button>

														</form>
													</div>
												</div>
											</td>
										</tr>
									@empty
										<tr>
											<td colspan="10" class="text-md text-center text-red-700">
												@lang('labels.not_registers')
											</td>
										</tr>
									@endforelse
									</tbody>
								</table>

							</div>
							{!! $users->appends(request()->except(['page','_token']))->render()!!}
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</x-app-layout>