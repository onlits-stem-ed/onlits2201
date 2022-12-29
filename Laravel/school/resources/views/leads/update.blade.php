<x-layout>
    <x-slot:title>
        Edit Lead
        </x-slot>
        <div class="container">
            <h2>Edit Lead</h2>
            <form action="/update-lead" method="post">
                @csrf
                <div class="mb-3 mt-3">
                    <label for="id" class="form-label">ID</label>
                    <input type="text" name="id" id="id" class="form-control" value="{{ $lead->id }}">
                </div>
                <div class="mb-3 mt-3">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control" value="{{ $lead->first_name }}">
                </div>
                <div class="mb-3">
                    <label for="middle_name" class="form-label">Middle Name</label>
                    <input type="text" name="middle_name" id="middle_name" class="form-control" value="{{ $lead->middle_name }}">
                </div>
                <div class="mb-3">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" value="{{ $lead->last_name }}">
                </div>
                <div class="mb-3">
                    <label for="contact_no" class="form-label">Contact Number</label>
                    <input type="text" name="contact_no" id="contact_no" class="form-control" value="{{ $lead->contact_no }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" id="email" class="form-control" value="{{ $lead->email }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <br>
</x-layout>