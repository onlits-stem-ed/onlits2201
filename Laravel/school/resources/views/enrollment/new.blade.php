<x-layout>
    <div class="container">
        <br>
        <h2>New Enrollment</h2>
        <form action="/new-enrollment" method="post">
            @csrf
            <div class="mb-3 mt-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control">
            </div>
            <div class="mb-3 mt-3">
                <label for="middle_name" class="form-label">Middle Name</label>
                <input type="text" name="middle_name" id="middle_name" class="form-control">
            </div>
            <div class="mb-3 mt-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control">
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="mb-3 mt-3">
                <label for="class" class="form-label">Class</label>
                <select name="class" id="class" class="form-control">
                    <option value="NUR">NUR</option>
                    <option value="JKG">JKG</option>
                    <option value="SKG">SKG</option>
                    <option value="I">I</option>
                    <option value="II">II</option>
                    <option value="III">III</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br>
    </div>
</x-layout>