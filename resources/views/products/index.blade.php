<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Produk') }}
        </h2>
    </x-slot>

    <div class="py-2" style="background-color: white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="mb-10">
                <a href="{{ route('.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2 rounded">
                    + Buat Produk
                </a>
            </div> --}}
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto">
                    <div class="py-2 align-middle inline-block min-w-full">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr class="text-gray-500">
                                        <th scope="col" class="px-6 py-3 text-left font-bold">No</th>
                                        <th scope="col" class="px-6 py-3 text-center font-bold">Gambar</th>
                                        <th scope="col" class="px-6 py-3 text-left font-bold">Nama Produk</th>
                                        <th scope="col" class="px-6 py-3 text-left font-bold">Berat (KG)</th>
                                        <th scope="col" class="px-6 py-3 text-left font-bold">Stok</th>
                                        <th scope="col" class="px-6 py-3 text-left font-bold">Harga</th>
                                        <th scope="col" class="px-6 py-3 text-left font-bold">Deskripsi</th>

                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @php
                                        $num = 1;
                                    @endphp
                                    @forelse ($products as $item)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-left">
                                                {{ $num++ }}</td>
                                            <td class="py-4">
                                                <div class="flex">
                                                    <img class="mx-auto h-16 w-16 rounded-full"
                                                        src="{{ Storage::url($item->image) }}" alt="produk">
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $item->name }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $item->weight }} Kg
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-500">{{ $item->stock }}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $item->price }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $item->description }}</td>

                                        </tr>

                                    @empty
                                        <tr>
                                            <td colspan="6" class="border text-center p-5">
                                                Data Tidak Ditemukan
                                            </td>
                                        </tr>
                                    @endforelse

                                    <!-- More people... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
