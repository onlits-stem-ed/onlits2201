<x-layout>
    <br>
    <div class="container">
        <h2>Enrollments</h2>
        <button type="button" class="btn btn-primary" name="new_enrollment" id="new_enrollment">New Enrollment</button>
        <table class="table">
            <tr>
                <th>Enrollment #</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Class</th>
                <th colspan="2">Operations</th>
            </tr>
            @foreach($enrollments as $enrollment)
            <tr>
                <td> {{ $enrollment->enrollment_no }}</td>
                <td>{{ $enrollment->first_name }}</td>
                <td>{{ $enrollment->middle_name }}</td>
                <td>{{ $enrollment->last_name }}</td>
                <td>{{ $enrollment->email }}</td>
                <td>{{ $enrollment->class }}</td>
                <td><button type="button" class="btn btn-warning" onclick="editEnrollment(this.id)" name="edit-enrollment" id="/edit-enrollment/{{ $enrollment->enrollment_no }}">Edit</button></td>
                <td><button type="button" class="btn btn-danger" onclick="deleteEnrollment(this.id)" name="delete-enrollment" id="/delete-enrollment/{{ $enrollment->enrollment_no }}">Delete</button></td>
            </tr>
            @endforeach
        </table>
    </div>
    <script>
        const new_enrollment = document.getElementById('new_enrollment');
        new_enrollment.onclick = function() {
            window.location.href = '/new-enrollment';
        }

        function editEnrollment(uri) {
            window.location.href = uri;
        }

        function deleteEnrollment(uri) {
            window.location.href = uri;
        }
    </script>
</x-layout>