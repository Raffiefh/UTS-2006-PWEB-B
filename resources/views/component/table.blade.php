<div class="flex justify-center mt-[14vh]">
    <table class="border border-blue-500 bg-white text-left w-full max-w-4xl">
        <thead class="bg-blue-500 text-white">
            <tr>
                <th class="border border-blue-500 px-4 py-2">No.</th>
                <th class="border border-blue-500 px-4 py-2">Mahasiswa</th>
                <th class="border border-blue-500 px-4 py-2">Phone</th>
                <th class="border border-blue-500 px-4 py-2">Email</th>
                <th class="border border-blue-500 px-4 py-2">Karyawan</th>
                <th class="border border-blue-500 px-4 py-2">Phone</th>
                <th class="border border-blue-500 px-4 py-2">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td class="border border-blue-500 px-4 py-2">{{ $loop->iteration }}</td>
                    <td class="border border-blue-500 px-4 py-2">{{ $contact["name"] }}</td>
                    <td class="border border-blue-500 px-4 py-2">{{ $contact["phone"] }}</td>
                    <td class="border border-blue-500 px-4 py-2">{{ $contact["email"] }}</td>
                    <td class="border border-blue-500 px-4 py-2">{{ $contact["name"] }}</td>
                    <td class="border border-blue-500 px-4 py-2">{{ $contact["phone"] }}</td>
                    <td class="border border-blue-500 px-4 py-2">{{ $contact["email"] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


