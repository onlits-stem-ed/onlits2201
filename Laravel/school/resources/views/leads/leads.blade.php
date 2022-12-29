<x-layout>
    <br>
    <div class="container">
        <h2>Leads</h2>
        <button type="button" class="btn btn-primary" name="new_lead" id="new_lead">New Lead</button>
        <table class="table">
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Contact Number</th>
                <th>Email</th>
                <th colspan="2">Operations</th>
            </tr>
            @foreach($leads as $lead)
            <tr>
                <td name="lead_id">{{ $lead->id }}</td>
                <td>{{ $lead->first_name }}</td>
                <td>{{ $lead->middle_name }}</td>
                <td>{{ $lead->last_name }}</td>
                <td>{{ $lead->contact_no }}</td>
                <td>{{ $lead->email }}</td>
                <td><button type="button" class="btn btn-warning" name="edit_lead" id="/edit-lead/{{ $lead->id }}" onclick="editLead(this.id)">Edit</button></td>
                <td><button type="button" class="btn btn-danger" name="delete_lead" id="/delete-lead/{{ $lead->id }}" onclick="deleteLead(this.id)">Delete</button></td>
            </tr>
            @endforeach
        </table>
    </div>

    <script>

        const newLead = document.getElementById('new_lead');
        newLead.onclick = function() {
            window.location.href = '/new-lead';
        }

        function editLead(uri) {
            window.location.href = uri;
        }

        function deleteLead(uri) {
            window.alert(uri);
            window.location.href = uri;
        }
        
    </script>
</x-layout>