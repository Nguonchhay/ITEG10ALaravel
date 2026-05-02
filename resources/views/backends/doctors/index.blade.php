@extends('layouts.frontend')

@section('content')

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">Doctors</h1>
              <a class="btn btn-primary" href="{{ route('backends.doctors.create') }}">Create Doctor</a>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Doctors</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Doctors Section -->
    <section id="doctors" class="doctors section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          @foreach($doctors as $doctor)
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Full Name</th>
                  <th scope="col">Specialist</th>
                  <th scope="col">Year of Experience</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">{{ $doctor->id }}</th>
                  <td>{{ $doctor->fullname }}</td>
                  <td>{{ $doctor->specialist }}</td>
                  <td>{{ $doctor->experience_year }}</td>
                  <td>Edit | Delete</td>
                </tr>
              </tbody>
            </table>
          @endforeach
        </div>

      </div>

    </section><!-- /Doctors Section -->

@endsection
