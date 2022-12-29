<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <br>
    <h1>New Contact</h1>
    <br>
    <div>
        <form action="/create" method="post">
            @csrf
            <label for="">First Name</label>
            <input type="text" name="first_name" id="first_name"><br><br>
            <label for="">Middle Name</label>
            <input type="text" name="middle_name" id="middle_name"> <br><br>
            <label for="">Last Name</label>
            <input type="text" name="last_name" id="last_name"><br><br>
            <button>Submit</button>
        </form>
    </div>
</x-app-layout>