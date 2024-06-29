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

    <div class="w-full bg-white p-2 rounded-md mt-8">
        <div class="flex items-center gap-4">
            <img class="h-24 w-24 rounded-full" src="/img/userProfile.jpg" alt="image description">
            <div class="font-medium dark:text-white">
                <span class="text-sm text-gray-400 uppercase">{{ $partner->type_partner }}</span>
                <p class="text-xl font-bold text-gray-900 dark:text-white">{{ $partner->company_name }}</p>
                {{-- <p class="text-sm font-semibold text-gray-900 dark:text-white">Joined in August 2014</p> --}}
            </div>
            <div class="ml-auto mr-10">
                {{-- <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Edit Profile
                    <svg class="flex-shrink-0 w-3.5 h-3.5 ms-2" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                        fill="currentColor" viewBox="0 0 512 512">
                        <path
                            d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" />
                    </svg>
                </button> --}}
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
            <div class="grid grid-cols-4 gap-4">
                <div>
                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">ID Partner</h3>
                    <p class="text-sm font-semibold leading-6 text-gray-500">{{ $partner->partner_unique }}</p>
                </div>
                <div>
                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Name Partner</h3>
                    <p class="text-sm font-semibold leading-6 text-gray-500">{{ $partner->company_name }}</p>
                </div>
                <div>
                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Email</h3>
                    <p class="text-sm font-semibold leading-6 text-gray-500">{{ $partner->email }}</p>
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
            <div class="grid grid-cols-4 gap-4">
                <div>
                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Address</h3>
                    <p class="text-sm font-semibold leading-6 text-gray-500">{{ $partner->address }}</p>
                </div>
                <div>
                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Packages</h3>
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
            <div class="grid grid-cols-4 gap-4">
                <div>
                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Instagram</h3>
                    @if ($partner->link_instagram != null)
                        <a href="">{{ $partner->link_instagram }}</a>
                    @else
                        -
                    @endif
                    <p class="text-sm font-semibold leading-6 text-gray-500">{{ $partner->link_instagram }}</p>
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
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile"
                        type="button" role="tab" aria-controls="profile" aria-selected="false">Invoice</button>
                </li>
                <li class="me-2" role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                        aria-controls="dashboard" aria-selected="false">Invoice History</button>
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
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel"
                aria-labelledby="profile-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                        class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>.
                    Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                    classes to control the content visibility and styling.</p>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel"
                aria-labelledby="dashboard-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                        class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>.
                    Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                    classes to control the content visibility and styling.</p>
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
