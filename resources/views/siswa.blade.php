
<x-layouts.app :title="__('Data Siswa')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 p-4 bg-white dark:bg-neutral-800">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Daftar Siswa</h2>
            
            <table class="w-full border-collapse border border-neutral-300 dark:border-neutral-600">
                <thead class="bg-neutral-200 dark:bg-neutral-700">
                    <tr>
                        <th class="border border-neutral-300 dark:border-neutral-600 px-4 py-2">Nama Siswa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswa as $siswa)
                        <tr class="odd:bg-neutral-100 dark:odd:bg-neutral-700">
                            <td class="border border-neutral-300 dark:border-neutral-600 px-4 py-2">{{ $siswa->nama }}</td>
                          
                             
                            </td>
                            <!-- <td class="border border-neutral-300 dark:border-neutral-600 px-4 py-2">
                                @if ($siswa->status_pkl == 0)
                                    <span class="px-2 py-1 bg-yellow-500 text-white rounded">Pending</span>
                                @else
                                    <span class="px-2 py-1 bg-green-500 text-white rounded">PKL</span>
                                @endif
                            </td> -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>