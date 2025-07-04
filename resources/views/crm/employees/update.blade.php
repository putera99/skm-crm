<!DOCTYPE html>
<html lang="pl">
@include('layouts.head', ['title' => 'Update employee'])
<body class="bg-gray-100">

<div class="flex h-screen" x-data="{ sidebarOpen: false }">
    @include('layouts.sidebar')

    <div class="flex-1 flex flex-col">
        @include('layouts.header')

        <main class="flex-1 p-6 overflow-y-auto">
            <div>
                @include('layouts.flash-messages')
            </div>

            <div class="w-full bg-white shadow-md rounded-lg mb-3">
                <div class="p-6 flex justify-between items-center">
                    <p class="text-xl">Update employee</p>
                    <a href="{{ url()->previous() }}">
                        <button class="bg-gray-500 text-white font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none ease-linear transition-all duration-150" type="button">
                            Back
                        </button>
                    </a>
                </div>
            </div>

            <div class="w-full bg-white shadow-md rounded-lg">
                <div class="p-6">
                    <form action="{{ route('employees.update', $employee) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-2 gap-6">
                            <div>
                                @include('layouts.components.forms.input', [
                                    'name' => 'Full name',
                                    'inputId' => 'full_name',
                                    'inputName' => 'full_name',
                                    'inputType' => 'text',
                                    'inputValue' => $employee->full_name,
                                    'inputRequired' => true
                                ])

                                @include('layouts.components.forms.input', [
                                    'name' => 'Phone',
                                    'inputId' => 'phone',
                                    'inputName' => 'phone',
                                    'inputType' => 'text',
                                    'inputValue' => $employee->phone,
                                    'inputRequired' => true
                                ])

                                @include('layouts.components.forms.input', [
                                    'name' => 'Email',
                                    'inputId' => 'email',
                                    'inputName' => 'email',
                                    'inputType' => 'email',
                                    'inputValue' => $employee->email,
                                    'inputRequired' => true
                                ])

                                @include('layouts.components.forms.input', [
                                    'name' => 'Job',
                                    'inputId' => 'job',
                                    'inputName' => 'job',
                                    'inputType' => 'text',
                                    'inputValue' => $employee->job,
                                    'inputRequired' => true
                                ])

                            </div>

                            <div>
                                @include('layouts.components.forms.textarea', [
                                    'name' => 'Note',
                                    'inputId' => 'note',
                                    'inputName' => 'note',
                                    'inputValue' => $employee->note,
                                    'inputRequired' => false
                                ])
                            </div>
                        </div>

                        <div class="flex justify-end border-t border-gray-200">
                            <button type="submit" class="bg-blue-500 mt-3 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Update employee</button>
                        </div>
                    </form>
                </div>
            </div>

        </main>

        @include('layouts.footer')
    </div>
</div>

</body>
</html>
