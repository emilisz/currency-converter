<div class="flex h-screen bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500">
    <div class="m-auto w-96 border shadow-lg rounded-lg bg-white bg-opacity-50">
        <h1
            class="text-center text-lg font-bold uppercase bg-gradient-to-b from-gray-500 to-gray-800 p-3 leading-8  rounded-t-lg">
            <p
                class="bg-clip-text text-transparent bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500 tracking-widest select-none">
                converter</p>
        </h1>
        <div class="p-3">
            <div class="p-2 flex flex-row">
                <p class="flex flex-wrap content-center flex-none text-sm select-none">Current:</p>
                <select wire:model.lazy="base" name="current" id="current" class="border ml-2 rounded w-16 flex-grow">
                    <option value="EUR">EUR</option>
                    <option value="USD">USD</option>
                    <option value="AUD">AUD</option>
                    <option value="CAD">CAD</option>
                    <option value="PLN">PLN</option>
                    <option value="MXN">MXN</option>
                </select>
                <p class="flex flex-wrap content-center flex-none text-sm px-2 select-none">Amount:</p>
                <input type="number" wire:model.lazy="amount" value="1" class="flex-grow w-12 border ml-2 px-2">
            </div>
            <div class="text-center select-none">Date: {{ $response['date']}}</div>
            <div class="overflow-y-auto h-96">

                <table class="border-separate border border-gray-800 w-full text-center select-none">
                    <thead>
                        <tr>
                            <th class="border border-gray-600 ...">Currency</th>
                            <th class="border border-gray-600 ...">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($response['rates'] as $key => $currency)
                        <tr>
                            <td class="border border-gray-600 ...">{{$key}}</td>
                            <td class="border border-gray-600 ...">{{round($currency * $amount, 4)}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>