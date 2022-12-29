<x-layout>
    <div class="container">
        <br>
        <h2>Edit Enrollment</h2>
        <form action="/update-enrollment" method="post">
            @csrf
            <div class="mb-3 mt-3">
                <label for="enrollment_no" class="form-label">Enrollment Number</label>
                <input type="text" name="enrollment_no" id="enrollment_no" class="form-control" value="{{ $enrollment->enrollment_no }}">
            </div>
            <div class="mb-3 mt-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control" value="{{ $enrollment->first_name }}">
            </div>
            <div class="mb-3 mt-3">
                <label for="middle_name" class="form-label">Middle Name</label>
                <input type="text" name="middle_name" id="middle_name" class="form-control" value="{{ $enrollment->middle_name }}">
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $enrollment->email }}">
            </div>
            <div class="mb-3 mt-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control" value="{{ $enrollment->last_name }}">
            </div>
            <div class="mb-3 mt-3">
                <label for="class" class="form-label">Class</label>
                <select name="class" id="class" class="form-control">
                    <option value="NUR" @if ($enrollment->class == "NUR") selected @endif>NUR</option>
                    <option value="JKG" @if ($enrollment->class == "JKG") selected @endif>JKG</option>
                    <option value="SKG" @if ($enrollment->class == "SKG") selected @endif>SKG</option>
                    <option value="I" @if ($enrollment->class == "I") selected @endif>I</option>
                    <option value="II" @if ($enrollment->class == "II") selected @endif>II</option>
                    <option value="III" @if ($enrollment->class == "III") selected @endif>III</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br>
    </div>
</x-layout>