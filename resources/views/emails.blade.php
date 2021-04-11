<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('labels.emails') }}
		</h2>
	</x-slot>

	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="mt-10 sm:mt-0">
				<div class="md:grid md:grid-cols-3 md:gap-6">
					<div class="md:col-span-1">
						<form action="{{route('emails.send')}}" method="POST">
							@csrf
							<div class="shadow overflow-hidden sm:rounded-md">
								<div class="px-4 py-5 bg-white sm:p-6">

									<div class="grid grid-cols-6 gap-3">
										<x-forms.label-with-input :required="true" class="col-span-12"
																  name="subject" :label="__('labels.subject')"/>
										<x-forms.label-with-input :required="true" class="col-span-12"
																  name="email" type="email" :label="__('labels.email')"/>

										<div class="col-span-12">
											<!-- Component for forms custom -->
											<label for="content" class="block text-sm font-medium text-gray-700">{{__('labels.content')}}
												<span class="text-red-300">*</span>
											</label>
											<textarea required="required" name="body"
												  id="body" autocomplete="given-name"
												   class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
													  value="{{old('body')}}"></textarea>
											@error('body')
											<p class="mt-2 text-sm text-red-600">{{ $message }}</p>
											@enderror
										</div>

									</div>
								</div>
								<div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
									<button type="submit"
											class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
										@lang('labels.send')
									</button>
								</div>
							</div>
						</form>
					</div>
					<div class="mt-5 md:mt-0 md:col-span-2">
							<div class="shadow overflow-hidden sm:rounded-md">
									<table class="w-full table-auto">
										<thead>
										<tr class="bg-gray-200 text-gray-600 uppercase" style="font-size: 12px">
											<th class="py-3 px-4 text-left">
												ID
											</th>
											<th class="py-3 px-4 text-left">
												@lang('labels.subject')
											</th>
											<th class="py-3 px-4 text-left">
												@lang('labels.email')
											</th>
											<th class="py-3 px-4 text-left">
												@lang('labels.content')
											</th>
											<th class="py-3 px-4 text-left">
												@lang('labels.mail_created')
											</th>
											<th class="py-3 px-4 text-left">
												@lang('labels.status')
											</th>
										</tr>
										</thead>
										<tbody class="text-gray-600 text-sm font-light">
										@forelse($emails as $item=> $mail)
											<tr class="border-b border-gray-200 @if($item%2==0) bg-gray-50 @endif hover:bg-gray-100">
												<td class="p-2 text-left">
													{{$mail->id}}
												</td>
												<td class="p-2 text-left">
													{{$mail->subject}}
												</td>
												<td class="p-2 text-left">
													{{$mail->email}}
												</td>
												<td class="p-2 text-left">
													<small>{{$mail->body}}</small>
												</td>
												<td class="p-2 text-left">
													{{$mail->created_at->format('d/m/Y H:i')}}
												</td>
												<td class="p-2 text-left">
													@if($mail->send_at==null)
														<span class="rounded bg-red-200 text-red-800 p-2">@lang('labels.pendent')</span>
													@else
														@if($mail->is_error!=0)
															<span class="rounded bg-red-200 text-red-800 p-2">@lang('labels.error')</span>
														@else
															{{$mail->send_at}}
														@endif
													@endif
												</td>
											</tr>
										@empty
											<tr>
												<td colspan="6" class="text-md text-center text-red-700">
													@lang('labels.not_registers')
												</td>
											</tr>
										@endforelse
										</tbody>
									</table>
								</div>
								{!! $emails->render()!!}

					</div>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>