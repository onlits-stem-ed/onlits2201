<x-layout>
    <x-slot:title>
        New Lead
        </x-slot>
        <div class="container">
            <form action="/store-leads" method="post">
                @csrf
                <div class="mb-3 mt-3">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="middle_name" class="form-label">Middle Name</label>
                    <input type="text" name="middle_name" id="middle_name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="contact_no" class="form-label">Contact Number</label>
                    <input type="text" name="contact_no" id="contact_no" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <br>
</x-layout>