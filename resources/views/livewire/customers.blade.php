<div>
    <button wire:navigate href="/" class="btn btn-success btn-sm">Create</button>
    <table class=" table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nmae</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                {{-- <th scope="col">Image</th> --}}
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->phone }}</td>
                {{-- <td>
                    <img src=" {{ asset('storage/' . $customer->image) }}" alt="">

                </td> --}}
                <td>
                    <button class="btn btn-primary btn-sm">View</button>
                    <button class="btn btn-secondary btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
