<template>
  <div>
    @extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="page-title">Students</h1>
        </div>

        <div class="col-lg-12">
            <form action="{{ route('student.store') }}" method="post" enctype="multipart/fora">
               
        <div class="col-lg-8">
            <div class="form-group">

            <input class="form-control" name="name" type="text" 
             placeholder="Enter Name">
            
            </div>
        </div>

        <div class="col-lg-8">
            <div class="form-group">

            <input class="form-control" name="age" type="text" 
             placeholder="Enter Age">
            
            </div>
        </div>

        <div class="col-lg-8">
            <div class="form-group">

            <input class="form-control" name="image" type="img" 
             placeholder="Uploard Image">
            
            </div>
        </div>

        <div class="col-lg-4">
            <button type= submit class = "btn btn-success">SUBMIT</button>

        </div>
            
        </div>
</form>
</div>

    <div class = "col-lg-12">
        <div>
        <table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Image</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    @foreach($students as $key=> $student)
    <tr>
      <th scope="row">{{ ++$key }}</th>
      <td>{{ student->name }}</td>
      <td>{{ student->age }}</td>
      <td>{{ student->image }}</td>
      <td>{{ student->status }}</td>
      
    </tr>
    
    
    
  </tbody>
</table>
</div>
    </div>


    </div>
</div>



<style>
    .page-title{
        
        padding-top: 6vh;
        font-size: 5rem;
        color: #b10974
    }
</style>


    <ul>
      <li v-for="student in students" :key="student.id">
        {{ student.name }} - {{ student.age }} - {{ student.status }}
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  props: ['student'],
};
</script>
