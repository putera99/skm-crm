<!DOCTYPE html>
<html lang="pl">
@include('layouts.head', ['title' => 'Update sale'])
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
                    <p class="text-xl">Update sale: {{ $product->name }}</p>
                    <a href="{{ url()->previous() }}">
                        <button class="bg-gray-500 text-white font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none ease-linear transition-all duration-150" type="button">
                            Back
                        </button>
                    </a>
                </div>
            </div>

            <div class="w-full bg-white shadow-md rounded-lg">
                <div class="p-6">
                    <form action="{{ route('products.update', $product) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-2 gap-6">
                            <div style="display:block;">
                                @include('layouts.components.forms.input', [
                                    'name' => 'id',
                                    'inputId' => 'id',
                                    'inputName' => 'id',
                                    'inputType' => 'text',
                                    'inputValue' => $product->id
                                ])
                            </div>
                            <div>
                               
                                @include('layouts.components.forms.input', [
                                    'name' => 'Name',
                                    'inputId' => 'name',
                                    'inputName' => 'name',
                                    'inputType' => 'text',
                                    'inputValue' => $product->name,
                                    'inputRequired' => true
                                ])

                                @include('layouts.components.forms.input', [
                                    'name' => 'Count',
                                    'inputId' => 'count',
                                    'inputName' => 'count',
                                    'inputType' => 'text',
                                    'inputValue' => $product->count,
                                    'inputRequired' => true
                                ])

                                @include('layouts.components.forms.input', [
                                    'name' => 'Category',
                                    'inputId' => 'category',
                                    'inputName' => 'category',
                                    'inputType' => 'text',
                                    'inputValue' => $product->category,
                                    'inputRequired' => true
                                ])
                            </div>

                            <div>
                                @include('layouts.components.forms.input', [
                                    'name' => 'Date of payment',
                                    'inputId' => 'date_of_payment',
                                    'inputName' => 'date_of_payment',
                                    'inputType' => 'date',
                                    'inputValue' => \Carbon\Carbon::parse($product->date_of_payment)->format('Y-m-d'),
                                    'inputRequired' => true
                                ])

                                @include('layouts.components.forms.input', [
                                    'name' => 'Price',
                                    'inputId' => 'price',
                                    'inputName' => 'price',
                                    'inputType' => 'text',
                                    'inputValue' => $product->price,
                                    'inputRequired' => true
                                ])
                            </div>
                        </div>

                        <div class="flex justify-end border-t border-gray-200">
                            <button type="submit" class="bg-blue-500 mt-3 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Update Product</button>
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
