@extends('layouts.dashboard')

@section('container')
    <nav class="flex px-2" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <a href="#"
                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                    <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                    </svg>
                    Partner
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <a href="#"
                        class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">{{ $partner->company_name }}</a>
                </div>
            </li>
        </ol>
    </nav>

    @if (session()->has('success'))
        <div id="alert-3" class="flex p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
            role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                {{ session('success') }}
            </div>
            <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    @endif

    @if (session()->has('error'))
        <div id="alert-2" class="flex p-4 my-5 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
            role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                {{ session('error') }}
            </div>
            <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-2" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    @endif

    @if ($errors->any())
    <div id="alert-2" class="flex p-4 my-5 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Info</span>
        <div class="ml-3 text-sm font-medium">
            {{ $errors }}
        </div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        </div>
    @endif

    <div class="w-full bg-white p-2 rounded-md mt-8">
        <div class="flex items-center gap-4">
            <img class="h-24 w-24 rounded-full" src="/img/userProfile.jpg" alt="image description">
            <div class="font-medium dark:text-white">
                <span class="text-sm text-gray-400 uppercase">{{ $partner->type_partner }}</span>
                <p class="text-xl font-bold text-gray-900 dark:text-white">{{ $partner->company_name }}</p>
            </div>
            <div class="ml-auto mr-10">
                <button type="button" data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Edit Profile
                    <svg class="flex-shrink-0 w-3.5 h-3.5 ms-2" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                        fill="currentColor" viewBox="0 0 512 512">
                        <path
                            d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    @include('admin.partners.edit-modal')

    <div class="bg-white mt-8 p-4 rounded-lg shadow-sm">
        <div class="rounded-lg border-solid border-2 border-gray-500 p-4 mb-9">
            <h6 class="text-lg font-bold dark:text-white">Partner Information</h6>
            <div class="border-b border-solid mb-2 mt-2"></div>
            <div class="grid md:grid-cols-4 gap-4">
                <div>
                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">ID Partner</h3>
                    <p class="text-sm font-semibold leading-6 text-gray-500">{{ $partner->partner_uniques }}</p>
                </div>
                <div>
                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Name Partner</h3>
                    <p class="text-sm font-semibold leading-6 text-gray-500">{{ $partner->company_name }}</p>
                </div>
                <div>
                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Email</h3>
                    <p class="text-sm font-semibold leading-6 text-gray-500">{{ $partner->employer->email }}</p>
                </div>
                <div>
                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Phone Number</h3>
                    <p class="text-sm font-semibold leading-6 text-gray-500">{{ $partner->phone_number }}</p>
                </div>
            </div>
        </div>
        <div class="rounded-lg border-solid border-2 border-gray-500 p-4 mb-9">
            <h6 class="text-lg font-bold dark:text-white">Partner Detail</h6>
            <div class="border-b border-solid mb-2 mt-2"></div>
            <div class="grid md:grid-cols-4 gap-4">
                <div>
                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Address</h3>
                    <p class="text-sm font-semibold leading-6 text-gray-500">{{ $partner->address }}</p>
                </div>
                <div>
                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Packages</h3>
                    <div class="flex items-center gap gap-2">
                        @if ($partner->package->name_package == 'Basic')
                            <span
                                class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{ $partner->package->name_package }}</span>
                        @elseif ($partner->package->name_package == 'Standard')
                            <span
                                class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">{{ $partner->package->name_package }}</span>
                        @elseif ($partner->package->name_package == 'Premium')
                            <span
                                class="bg-yellow-100 text-yellow-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">$partner->package->name_package</span>
                        @endif
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor">
                            <path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/>
                        </svg>
                    </div>
                </div>
                <div>
                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Type Partner</h3>
                    <p class="text-sm font-semibold leading-6 text-gray-500 uppercase">{{ $partner->type_partner }}</p>
                </div>
                <div>
                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Status Partner</h3>
                    <p class="text-sm font-semibold leading-6 text-gray-500">
                        @if ($partner->status == 'active')
                            <span
                                class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">Active</span>
                        @elseif ($partner->status == 'suspend')
                            <span
                                class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-yellow-900 dark:text-yellow-300">Suspend</span>
                        @else
                            <span
                                class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">Termin</span>
                        @endif
                </div>
            </div>
        </div>
        <div class="rounded-lg border-solid border-2 border-gray-500 p-4">
            <h6 class="text-lg font-bold dark:text-white">Partner Link</h6>
            <div class="border-b border-solid mb-2 mt-2"></div>
            <div class="grid md:grid-cols-4 gap-4">
                <div>
                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Instagram</h3>
                    @if ($partner->link_instagram != null)
                    <div class="flex items-center gap gap-2">
                        <p class="font-serif text-sm">{{ $partner->link_instagram }}</p>
                        <a href="{{ $partner->link_instagram }}" class="text-blue-700">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" fill="currentColor">
                                <path d="M579.8 267.7c56.5-56.5 56.5-148 0-204.5c-50-50-128.8-56.5-186.3-15.4l-1.6 1.1c-14.4 10.3-17.7 30.3-7.4 44.6s30.3 17.7 44.6 7.4l1.6-1.1c32.1-22.9 76-19.3 103.8 8.6c31.5 31.5 31.5 82.5 0 114L422.3 334.8c-31.5 31.5-82.5 31.5-114 0c-27.9-27.9-31.5-71.8-8.6-103.8l1.1-1.6c10.3-14.4 6.9-34.4-7.4-44.6s-34.4-6.9-44.6 7.4l-1.1 1.6C206.5 251.2 213 330 263 380c56.5 56.5 148 56.5 204.5 0L579.8 267.7zM60.2 244.3c-56.5 56.5-56.5 148 0 204.5c50 50 128.8 56.5 186.3 15.4l1.6-1.1c14.4-10.3 17.7-30.3 7.4-44.6s-30.3-17.7-44.6-7.4l-1.6 1.1c-32.1 22.9-76 19.3-103.8-8.6C74 372 74 321 105.5 289.5L217.7 177.2c31.5-31.5 82.5-31.5 114 0c27.9 27.9 31.5 71.8 8.6 103.9l-1.1 1.6c-10.3 14.4-6.9 34.4 7.4 44.6s34.4 6.9 44.6-7.4l1.1-1.6C433.5 260.8 427 182 377 132c-56.5-56.5-148-56.5-204.5 0L60.2 244.3z"/>
                            </svg>
                        </a>
                    </div>
                    @else
                        -
                    @endif
                </div>
                <div>
                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Facebook</h3>
                    @if ($partner->link_facebook != null)
                        <a href="">{{ $partner->link_facebook }}</a>
                    @else
                        -
                    @endif
                </div>
                <div>
                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Linkedin</h3>
                    @if ($partner->link_linkedin != null)
                        <a href="">{{ $partner->link_linkedin }}</a>
                    @else
                        -
                    @endif
                </div>
                <div>
                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Web</h3>
                    @if ($partner->link_web != null)
                        <a href="">{{ $partner->link_web }}</a>
                    @else
                        -
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white p-4 rounded-lg mt-8">
        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
                data-tabs-toggle="#default-tab-content" role="tablist">
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="invoice-tab" data-tabs-target="#invoice"
                        type="button" role="tab" aria-controls="invoice" aria-selected="false">Invoice</button>
                </li>
                <li class="me-2" role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="histories-tab" data-tabs-target="#histories" type="button" role="tab"
                        aria-controls="histories" aria-selected="false">Invoice History</button>
                </li>
                {{-- <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Loker</button>
                </li>
                <li role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Contacts</button>
                </li> --}}
            </ul>
        </div>
        <div id="default-tab-content">
            <div class="hidden p-4 rounded-lg " id="invoice" role="tabpanel"
                aria-labelledby="invoice-tab">
                @include('admin.partners.invoices')
            </div>
            <div class="hidden p-4 rounded-lg" id="histories" role="tabpanel"
                aria-labelledby="histories-tab">
                @include('admin.partners.invoice-histories')
            </div>
            {{-- <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
            </div> --}}
        </div>
    </div>
@endsection
