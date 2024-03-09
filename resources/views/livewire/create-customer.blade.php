<div class="card offset-3 col-6">
    <div class="card-header">
        Create Customer Account
    </div>
    <div class="card-body">
        <form wire:submit.prevent="store" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input wire:model="name" type="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                <div>
                    @error('name')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail">Email</label>
                <input wire:model="email" type="text" name="email" class="form-control" id="exampleInputEmail">
                <div>
                    @error('email')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputPhone">Phone</label>
                <input wire:model="phone" type="text" name="phone" class="form-control" id="exampleInputPhone">
                <div>
                    @error('phone')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>
            {{-- <div class="form-group">
                <label for="exampleInputPhone">Image</label>
                <input wire:model="image" wire:change="store" type="file" name="image" class="form-control"
                    id="exampleInputImage">
                <div>
                    @error('image')
                        <span class="text-danger"> {{ $message }} </span>
            @enderror
    </div>
</div> --}}
<button wire:navigate href="customers" class="btn btn-primary">Back</button>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
